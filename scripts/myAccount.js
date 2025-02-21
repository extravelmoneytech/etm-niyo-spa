if(!userCheck()){
    window.location.href='/login'
}

userInfoCheck=JSON.parse(userInfoCheck);
console.log(userInfoCheck,'jbb')
let mobNum = userInfoCheck.mobNum;
let countryCode = userInfoCheck.countryCode;
let userId = userInfoCheck.userId;
console.log(userId, countryCode, mobNum,'testtt');
let singleOrderPageFlag=false;
let paramsData = {
    action: 'user_profile_data',
    mobile: mobNum,
    uid: userId,
    country_code: countryCode
};
const params = new URLSearchParams(paramsData);
console.log(paramsData,'params')

// Making the POST request
loadinggg(true);
fetch(apiUrl, {
    method: 'POST',
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: params.toString(),
})
    .then(response => response.json())
    .then(data => {
        console.log(data)
        document.querySelector("#userName").textContent=data.customer_name
        document.querySelector("#avatar").querySelector('span').textContent = data.customer_name.charAt(0);
        document.querySelector("#earningCount").textContent=formatAmount(data.earnings)
        document.querySelector("#referalCount").textContent=data.ref_orders
        if (data.order_list && data.order_list.length > 0) {
            document.querySelector('#orderListTable').style.display='table'
            document.querySelector('#order_count').textContent=data.order_count
            document.querySelector('.listContainer').innerHTML = "";
            data.order_list.forEach(item => {
                createList(item);
            });
            initiateSearch()
            initiateTransactionChange()
            addViewButtonListeners();
            
        } else {
            const tbody = document.querySelector('.listContainer');
            tbody.innerHTML = '<tr><td colspan="8">No orders found</td></tr>';
        }
        loadinggg(false)
    })
    .catch(error => {
        console.error('Error:', error);
        const tbody = document.querySelector('.listContainer');
        tbody.innerHTML = '<tr><td colspan="8">Failed to load orders. Please try again later.</td></tr>';
    });

function createList(item) {
    const tbody = document.querySelector('.listContainer');
    const row = document.createElement('tr');

    // Determine transaction type
    const transactionType = item.txn==="oe"?"mt":item.txn.toLowerCase() || 'mt'; // Default to 'mt'

    // Add a `value` attribute to the row for filtering
    row.setAttribute('value', transactionType);

    row.innerHTML = `
        <td class="hidden">${item.type || 'Transfer'}</td>
        <td>${item.order_no || 'N/A'}</td>
        <td class="hidden">${item.product || 'N/A'}</td>
        <td class="hidden">${item.currency || 'N/A'}</td>
        <td class="hidden">${item.amount || 'N/A'}</td>
        <td class="hidden"><span>${item.date || 'N/A'}</span></td>
        <td>
            <div class="orderStatus ${item.status.toLowerCase() || 'cancelled'}">
                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none">
                    <circle cx="4.33325" cy="4" r="3" />
                </svg>
                ${item.status || 'cancelled'}
            </div>
        </td>
        <td>
            <div class="viewBtn h-9 px-4 py-2 bg-primary-10 rounded-lg justify-center items-center gap-1 inline-flex cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path d="M15.3424 7.84812C15.3212 7.79938 14.8012 6.64625 13.6399 5.485C12.5624 4.40875 10.7112 3.125 7.99991 3.125C5.28866 3.125 3.43741 4.40875 2.35991 5.485C1.19866 6.64625 0.678659 7.7975 0.657409 7.84812C0.636042 7.89613 0.625 7.94808 0.625 8.00062C0.625 8.05317 0.636042 8.10512 0.657409 8.15312C0.678659 8.20125 1.19866 9.35437 2.35991 10.5156C3.43741 11.5919 5.28866 12.875 7.99991 12.875C10.7112 12.875 12.5624 11.5919 13.6399 10.5156C14.8012 9.35437 15.3212 8.20312 15.3424 8.15312C15.3638 8.10512 15.3748 8.05317 15.3748 8.00062C15.3748 7.94808 15.3638 7.89613 15.3424 7.84812ZM7.99991 12.125C6.03866 12.125 4.32616 11.4113 2.90928 10.0044C2.31533 9.41409 1.81272 8.73854 1.41803 8C1.81261 7.26158 2.31523 6.58622 2.90928 5.99625C4.32616 4.58875 6.03866 3.875 7.99991 3.875C9.96116 3.875 11.6737 4.58875 13.0905 5.99625C13.6846 6.58622 14.1872 7.26158 14.5818 8C14.1837 8.76312 12.1874 12.125 7.99991 12.125ZM7.99991 5.125C7.43129 5.125 6.87544 5.29362 6.40264 5.60952C5.92985 5.92543 5.56136 6.37445 5.34376 6.89979C5.12615 7.42512 5.06922 8.00319 5.18015 8.56088C5.29108 9.11858 5.5649 9.63086 5.96698 10.0329C6.36905 10.435 6.88133 10.7088 7.43902 10.8198C7.99672 10.9307 8.57479 10.8738 9.10012 10.6562C9.62546 10.4386 10.0745 10.0701 10.3904 9.59726C10.7063 9.12447 10.8749 8.56862 10.8749 8C10.8739 7.23781 10.5707 6.50712 10.0317 5.96816C9.49279 5.42921 8.7621 5.12599 7.99991 5.125ZM7.99991 10.125C7.57962 10.125 7.16878 10.0004 6.81932 9.76687C6.46987 9.53338 6.1975 9.20149 6.03666 8.8132C5.87583 8.42491 5.83375 7.99764 5.91574 7.58543C5.99773 7.17322 6.20012 6.79458 6.49731 6.4974C6.79449 6.20021 7.17313 5.99782 7.58534 5.91583C7.99755 5.83384 8.42482 5.87592 8.81311 6.03676C9.2014 6.19759 9.53328 6.46996 9.76678 6.81941C10.0003 7.16887 10.1249 7.57971 10.1249 8C10.1249 8.56359 9.90102 9.10409 9.50251 9.5026C9.104 9.90112 8.56349 10.125 7.99991 10.125Z" fill="#0E51A0"/>
</svg>
                <div class="px-1 justify-center items-center flex">
                    <div class="text-primary text-sm font-semibold leading-tight">View</div>
                </div>
            </div>
        </td>
    `;

    tbody.appendChild(row);
}



function displayAffectedRows(rows, filterCallback, highlightCallback = null, orderCountElement = null) {
    let visibleCount = 0; // Count visible rows for dynamic updates
    let noOrderFoundAlert=document.querySelector('#noOrderFoundAlert')
    rows.forEach(row => {
        console.log(row)
        if (filterCallback(row)) {
            row.style.display = ''; // Show the row if it passes the filter
            visibleCount++;

            // Apply highlighting if a callback is provided
            if (highlightCallback) {
                highlightCallback(row);
            }
        } else {
            row.style.display = 'none'; // Hide the row if it doesn't pass the filter
        }
    });
    
    if (visibleCount === 0) {
        noOrderFoundAlert.style.display='block'
    }else{
        noOrderFoundAlert.style.display='none'
    }
    // Update the order count if an element is provided
    if (orderCountElement) {
        orderCountElement.textContent = visibleCount;
    }

    // Return the count of visible rows
    return visibleCount;
}




function initiateSearch() {
    const searchBar = document.querySelector('#orderSearchBar');
    const orderCountElement = document.querySelector('#order_count'); // Reference to the order count element
    const transactionTypeDropdown = document.querySelector('#transactionType'); // Reference to transaction filter

    searchBar.addEventListener('input', () => {
        const searchValue = searchBar.value.trim();
        const selectedType = transactionTypeDropdown.value.toLowerCase(); // Get selected transaction type
        const rows = document.querySelectorAll('.listContainer tr'); // Get all rows

        // Filter rows by both transaction type (if not "all") and search value
        displayAffectedRows(
            rows,
            row => {
                const rowType = row.getAttribute('value');
                const orderNoCell = row.querySelector('td:nth-child(2)');
                if (!orderNoCell) return false;

                const orderNoText = orderNoCell.textContent.trim();

                // If "all" is selected, only filter by the search value
                return (
                    (selectedType === 'all' || rowType === selectedType) &&
                    (searchValue === "" || orderNoText.includes(searchValue))
                );
            },
            row => {
                // Apply highlighting based on the current search value
                const orderNoCell = row.querySelector('td:nth-child(2)');
                if (orderNoCell) {
                    const orderNoText = orderNoCell.textContent.trim();
                    if (searchValue) {
                        const highlightedText = orderNoText.replace(
                            new RegExp(searchValue, 'gi'),
                            match => `<span class="highlight">${match}</span>`
                        );
                        orderNoCell.innerHTML = highlightedText;
                    } else {
                        // Remove highlights if no search value is provided
                        orderNoCell.innerHTML = orderNoText;
                    }
                }
            },
            orderCountElement // Update the order count dynamically
        );
    });
}





function initiateTransactionChange() {
    const transactionTypeDropdown = document.querySelector('#transactionType');
    const orderCountElement = document.querySelector('#order_count'); // Reference to the order count element
    const searchBar = document.querySelector('#orderSearchBar'); // Reference to the search bar

    transactionTypeDropdown.addEventListener('change', () => {
        const selectedType = transactionTypeDropdown.value.toLowerCase(); // Get selected transaction type
        const rows = document.querySelectorAll('.listContainer tr'); // Get all rows
        const searchValue = searchBar.value.trim(); // Consider the current search value

        // Display rows matching the selected transaction type and current search value
        displayAffectedRows(
            rows,
            row => {
                const rowType = row.getAttribute('value');
                const orderNoCell = row.querySelector('td:nth-child(2)');
                if (!orderNoCell) return false;

                const orderNoText = orderNoCell.textContent.trim();

                // If "all" is selected, skip type filtering
                return (
                    (selectedType === 'all' || rowType === selectedType) &&
                    (searchValue === "" || orderNoText.includes(searchValue))
                );
            },
            row => {
                // Apply highlighting based on the current search value
                const orderNoCell = row.querySelector('td:nth-child(2)');
                if (orderNoCell) {
                    const orderNoText = orderNoCell.textContent.trim();
                    if (searchValue) {
                        const highlightedText = orderNoText.replace(
                            new RegExp(searchValue, 'gi'),
                            match => `<span class="highlight">${match}</span>`
                        );
                        orderNoCell.innerHTML = highlightedText;
                    } else {
                        // Remove highlights if no search value is provided
                        orderNoCell.innerHTML = orderNoText;
                    }
                }
            },
            orderCountElement // Update the order count dynamically
        );
    });
}




let uid;

function addViewButtonListeners() {
    const viewButtons = document.querySelectorAll('.viewBtn'); // Select all buttons with class "viewBtn"
    viewButtons.forEach(button => {
        button.addEventListener('click', () => {
            const row = button.closest('tr'); // Find the closest parent row for the clicked button
            
            // Extract required values from the row
            uid = userInfoCheck.userId; // Assuming `uid` is globally available
            const orderNo = row.querySelector('td:nth-child(2)')?.textContent.trim(); // Order number
            const txn = row.getAttribute('value'); // Transaction type stored in the "value" attribute
            
            if (uid && orderNo && txn) {
                // Make the API call with these values
                window.location.href=`/myaccount/order/?inid=${orderNo}&type=${txn}`
                
            } else {
                console.error('Missing required values for API call:', { uid, orderNo, txn });
            }
        });
    });
}


function formatAmount(amount) {
    return `₹ ${parseFloat(amount).toLocaleString('en-IN', { maximumFractionDigits: 0 })}`;
}