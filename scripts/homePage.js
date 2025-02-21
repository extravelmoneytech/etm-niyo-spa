let nextPageUrl='/orderv3'
// Then on the previous page, use this to detect when the page is revisited
window.addEventListener('pageshow', function(event) {
    if (event.persisted) {
        // Force reload if the page is cached
        window.location.reload();
    }
});



function openChooseCityWidget() {

    // Scroll to the top of the page
    window.scrollTo(0, 0);

    // Hide the main hero section and show the city selection widget
    document.querySelector('.heroMain').classList.add('heroSectionHide');

    document.querySelector('.chooseCityWidget').style.display = 'flex';
    document.querySelector('.chooseCityOverlay').style.display = 'block';
    document.querySelector('body').classList.add('snipContainer');
}

function closeChooseCityWidget() {
    // Restore the main hero section and hide the city selection widget
    document.querySelector('.heroMain').classList.remove('heroSectionHide');

    document.querySelector('.chooseCityWidget').style.display = 'none';
    document.querySelector('.chooseCityOverlay').style.display = 'none';
    document.querySelector('body').classList.remove('snipContainer');
}

document.querySelector('#backBtnWidget').addEventListener('click',()=>{
    closeChooseCityWidget()
})







let chooseCityOverlay = document.querySelector('.chooseCityOverlay')
let chooseCityWidget = document.querySelector('.chooseCityWidget')
chooseCityOverlay.addEventListener('click', (event) => {
    if (!chooseCityWidget.contains(event.target)) {
        closeChooseCityWidget(); // Only close if the click was outside the otpWidget
    }
})







let widgetData = null;



let maximumCurrencyValue;
let maximumForexCardValue;
let maximumMtValue
let minimumMtValue;
let minimumCurrencyValue=8000;
let approxValueFx;
let approxValueMt;
let mtCurrency;
let userInfo;


userInfo = localStorage.getItem('userInfo');

if (userInfo) {
 // Parse the JSON string into an object
 userInfo = JSON.parse(userInfo);

} else {
     console.log('No userInfo found in localStorage');
 }



// Function to fetch widget data and update the global variable
async function fetchAndStoreWidgetData() {
    try {

        
        const params = new URLSearchParams({ action: 'widget_data' });

        const response = await fetch(apiUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: params.toString(),
        });

        if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);


        widgetData = await response.json();
        // Store data in sessionStorage
        sessionStorage.setItem('ibrData', JSON.stringify(widgetData.ibr));



            

        
        maximumCurrencyValue = (3000 * widgetData.ibr.USD.currency).toFixed(0)
        maximumForexCardValue = (250000 * widgetData.ibr.USD.forexCard).toFixed(0)
        maximumMtValue = (250000 * widgetData.ibr.USD.MT.AD2).toFixed(0)
        minimumMtValue=(250 * widgetData.ibr.USD.MT.AD2).toFixed(0)
        

        updateApproxValue(widgetData.ibr); // Update the UI with the fetched data
        // updateApproxValueMt(widgetData.ibr)
        // updateCurrencySymbol('mtCountryDropDown', 'mt')
        updateCurrencySymbol('widgetCurrency', 'fx')



        


    } catch (error) {
        console.error('Error fetching data:', error);
        // location.href='error.html'
    }
}




// Function to update the approximate value using the stored widget data
function updateApproxValue(data) {
    if (!data) return;
    
    const currencyDropdown = document.querySelector('#widgetCurrency');
    const newCurrencyCode = currencyDropdown.getAttribute('dataval').toUpperCase();
    const newCurrencySymbol = currencySymbols[newCurrencyCode] || '';

    // Update the currency symbol in the #widgetAmount input field
    const amountField = document.querySelector('#widgetAmount');
    const currentAmount = amountField.value.replace(/^\D+/, ''); // Remove the existing currency symbol

    // Set the new value with the updated currency symbol
    amountField.value = `${newCurrencySymbol} ${currentAmount.trim()}`;

    // Update the displayed currency name
    document.querySelector('#currencyName').textContent = newCurrencyCode;
    
    
    

    // Get product and currency values
    const product = document.querySelector('#WidgetProduct').getAttribute('dataval');
    const currency = document.querySelector('#widgetCurrency').getAttribute('dataval')?.toUpperCase(); // Ensure currency code is uppercase

    if (!product || !currency || !data[currency] || !data[currency][product]) {
        // Exit if product, currency, or data lookup is invalid
        console.error("Invalid product or currency data");
        return;
    }
    let amountText = amountField.value.trim();

    // If amount is empty, default to 0
    if (amountText === "") {
        amountText = "0";
    }

    // Remove any extra text and keep only the numerical part
    const amount = parseFloat(amountText.replace(/[^\d.]/g, '')); // Remove non-numeric characters

    // Handle invalid parsing case
    const approxVal = document.querySelector('.approxVal');
    const approxAmnt = data[currency][product] * amount;
    if (isNaN(amount)) {
        console.error("Invalid amount entered");
        approxVal.textContent = '0';
        return;
    }

    approxValueFx = approxAmnt.toFixed(0)
    

    let productType = document.querySelector('#WidgetProduct').getAttribute('dataval') === 'forexCard' ? 'Forex Card' : 'Currency'

    let container = document.querySelector('#widgetFxInputContainer')



        if (Number(approxValueFx)<Number(minimumCurrencyValue)) {
            
                removeAlertBelowElement(container)
                insertAlertBelowElement(container, 'Please enter a minimum amount of USD 100 or its equivalent')
                activeGetRatesBtn(false,'fx')
                return
        }else {
                activeGetRatesBtn(true,'fx')
        }
    // Check if the product type is 'Currency' and the value exceeds the maximum currency note limit
    console.log(Number(maximumCurrencyValue),Number(approxValueFx),'maximumCurrencyValue','approxValueFx')
    if (productType === 'Currency' && Number(approxValueFx) > Number(maximumCurrencyValue)) {
        removeAlertBelowElement(container);
        insertAlertBelowElement(container, 'A Resident Indian can carry up to USD 3000 (or equivalent) in currency notes per trip. For more, consider using a Forex Card or ensure another traveler accompanies you.');
    } else {
        // Only remove the currency warning if no such alert is needed
        removeAlertBelowElement(container);
    }

    // Check if the value exceeds the maximum Forex Card limit (this applies regardless of product type)
    if (Number(approxValueFx) > Number(maximumForexCardValue)) {
        removeAlertBelowElement(container);
        insertAlertBelowElement(container, 'High-roller alert! Your total Forex value is greater than $250,000, which is the maximum amount a single person is allowed to carry/remit by the RBI.');
        activeGetRatesBtn(false,'fx'); // Disable the button if the Forex limit is exceeded
    } else {
        activeGetRatesBtn(true,'fx'); // Enable the button if within the Forex limit
    }
    








    // Format and update the approximate value
    approxVal.textContent ='₹ '+ formatIndianCurrency(approxAmnt.toFixed(0));
}


function activeGetRatesBtn(val,type) {
    let btn;
    if(type==='fx'){
        btn = document.querySelector('#getRatesButton');
    }
    if(type==='mt'){
        btn = document.querySelector('#getRatesButtonMt');
    }
    
    
    if (val) {
        btn.style.opacity = '1';
        btn.style.pointerEvents = 'auto'; // Re-enable click events
        
    } else {
        btn.style.opacity = '0.2';
        btn.style.pointerEvents = 'none'; // Disable click events
        
    }
}

updateCurrencyList()


// Fetch widget data immediately when the page loads
fetchAndStoreWidgetData();

// Set an interval to update the widget data every 10 minutes
setInterval(fetchAndStoreWidgetData, 10 * 60 * 1000);

// Listen for a change on any dropdown and update the value
document.querySelector('#WidgetProduct').addEventListener('dropdownChange', () => {
    updateCurrencyList()
    updateApproxValue(widgetData.ibr);
});

function updateCurrencyList() {
    let product = document.querySelector('#WidgetProduct').getAttribute('dataval');
    
    
    if (product === 'forexCard') {
        // Array of currency codes without Forex card
        const noForexCardCurrencies = ["MYR", "SAR"];
        
        // Loop through each <li> element in the dropdown and hide if it matches an item in the array
        
        
        document.querySelector('#currencyDropdown').querySelectorAll('li').forEach(li => {
            const currencyName = li.getAttribute('value');
            
            if (noForexCardCurrencies.includes(currencyName)) {
                li.style.display = 'none';
            }
        });
        
        
        let dropDownMain=document.querySelector('#widgetCurrency')
        updateFromSession(dropDownMain)
        
    } else if (product === 'currency') {
        document.querySelector('#currencyDropdown').querySelectorAll('li').forEach(li => {
            li.style.display = 'flex';
        }); // Added missing closing parenthesis here
    }
}



// Add event listeners to other dropdowns as needed
// Define currency symbols mapping
const currencySymbols = {
    'USD': '$',      // United States Dollar
    'GBP': '£',      // British Pound
    'EUR': '€',      // Euro
    'AUD': 'A$',     // Australian Dollar
    'CAD': 'C$',     // Canadian Dollar
    'THB': '฿',      // Thai Baht
    'SGD': 'S$',     // Singapore Dollar
    'JPY': '¥',      // Japanese Yen
    'MYR': 'RM',     // Malaysian Ringgit
    'NZD': 'NZ$',    // New Zealand Dollar
    'AED': 'AED'     // UAE Dirham (using "AED" as the symbol)
};



// Event listener for currency dropdown change
document.querySelector('#widgetCurrency').addEventListener('dropdownChange', () => {
    

    // Update the approximate value with the new currency
    updateApproxValue(widgetData.ibr);
});
let cleanedNumericPart = 1000;
document.querySelector('#widgetAmount').addEventListener('input', () => {
    const amountField = document.querySelector('#widgetAmount');
    let amountText = amountField.value.trim();

    // Extract the numeric part of the input after the currency symbol
    const spaceIndex = amountText.indexOf(' ');
    const numericPart = spaceIndex !== -1 ? amountText.substring(spaceIndex + 1).trim() : amountText;

    // Remove any non-numeric characters (keeping decimal point if present)
    cleanedNumericPart = numericPart.replace(/[^0-9.]/g, '');

    // Update the input field with the cleaned value, adding back the currency symbol
    const currencySymbol = amountText.slice(0, spaceIndex + 1); // Preserve the currency symbol
    amountField.value = `${currencySymbol}${cleanedNumericPart}`;

    // Proceed with updating the approximate value
    updateCurrencySymbol('widgetCurrency', 'fx')
    updateApproxValue(widgetData.ibr);
});

let cityBtns = document.querySelectorAll('.cityBtn')
let cityInput = document.querySelector('#citySelector')

cityBtns.forEach((item) => {
    item.addEventListener('click', () => {
        
        cityInput.value = item.getAttribute('value')
        item.setAttribute("selectStatus", "true");
        document.querySelector('.selectedCity').classList.remove('selectedCity')
        item.classList.add('selectedCity')
    })
})


let token;
let productType;
// Common function to get the token
async function getToken(paramsData) {
    try {
        const params = new URLSearchParams(paramsData);
        
        // Using await instead of .then chains
        const response = await fetch(apiUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: params.toString(),
        });
        
        const data = await response.json();
        
        sessionStorage.setItem('userValid', data.user_valid);

        sessionStorage.setItem('token', data.token);
        document.querySelector('#citySelect').style.opacity = '1';
        document.querySelector('#citySelect').removeAttribute('disabled');
        
        return true;  // This will now properly return to the calling function
        
    } catch (error) {
        console.error('Error:', error);
        return false;  // This will now properly return to the calling function
        // location.href='error.html'
    }
}

// Event listener for FX product


document.querySelector('#getRatesButton').addEventListener('click', async (e) => {
    

    document.querySelector('#getRatesButton').style.opacity='0.5'
    productType = 'fx';
    sessionStorage.setItem('productPage', 'fx');

    let product = document.querySelector('#WidgetProduct').getAttribute('dataval') === 'forexCard' ? 'Forex Card' : 'Currency'
    let amountField = document.querySelector('#widgetAmount');

    let amountText = amountField.value.trim();


    // Find the index of the first space
    const spaceIndex = amountText.indexOf(' ');
    let amount = spaceIndex !== -1 ? amountText.substring(spaceIndex + 1).trim() : amountText;
    let currency = document.querySelector('#widgetCurrency').getAttribute('dataval')

    let container = document.querySelector('#widgetFxInputContainer')
    if (!/\d/.test(amount) || amount == 0) {

        insertAlertBelowElement(container, 'Enter a valid amount')
        return
    } else {
        removeAlertBelowElement(container)
    }

    









    

    let paramsData
    if(userInfo){



        // Data for FX product
    paramsData = {
        action: 'initial_data',
        transaction: 'buy',
        product: product,
        currency: currency,
        amount: amount,
        mobile: userInfo.mobNum,
        country_code: userInfo.countryCode,
        userip: '',
        device: '',
        country: '',
        purpose: '',
        uid:userInfo.userId,
        ref_url:'easemytrip'
    };
    }
    else{
        // Data for FX product
        paramsData = {
        action: 'initial_data',
        transaction: 'buy',
        product: product,
        currency: currency,
        amount: amount,
        mobile: '0',
        country_code: '0',
        userip: '',
        device: '',
        country: '',
        purpose: '',
        ref_url:'easemytrip'
    };
    }
console.log(paramsData)


    // Call common function to get token
    const tokenVal=await getToken(paramsData);
    if(tokenVal){
         
        let cityName=e.target.getAttribute('city');
        if(cityName){
            document.querySelector('#citySelector').value=cityName;
           await handleBuyCityWidgetTransmission();
        }else{
            openChooseCityWidget()
        }
    }
    document.querySelector('#getRatesButton').style.opacity='1'

    

});


const widgetAmount = document.querySelector('#widgetAmount');
const getRatesButton = document.querySelector('#getRatesButton');

if (widgetAmount && getRatesButton) {
    widgetAmount.addEventListener('keyup', (event) => {
        if (event.key === 'Enter') {  // Check if the "Enter" key was pressed
            getRatesButton.click();  // Trigger button click
        }
    });
}




document.querySelector('#citySelect').addEventListener('click', () => {
    

    let selectedCityName = null;
    let resultsContainer = document.querySelector('#results');

    // Ensure you're using the correct variable name
    resultsContainer.querySelectorAll('.cityBtn').forEach((btn) => {
        // Check if selectStatus exists and is truthy
        if (btn.getAttribute('selectStatus')==="true") {
            selectedCityName = btn.getAttribute('value');
        }
    });


    let citySelector = document.querySelector('#citySelector')
    let citySelectorContainer = document.querySelector('#citySelectorContainer')
    if (selectedCityName==null) {
        insertAlertBelowElement(citySelectorContainer, 'Please select a city')
        return;
    } else {
        removeAlertBelowElement(citySelectorContainer);
    }
    document.querySelector('#citySelect').style.opacity=0.5

    if (productType === 'fx') {
        handleBuyCityWidgetTransmission()
    } 

    document.querySelector('#citySelect').opacity='1'


})
async function handleBuyCityWidgetTransmission(){
    
        // Retrieve the data values from the DOM elements
        const widgetProductDataVal = document.querySelector('#WidgetProduct').getAttribute('dataval');
        const widgetCurrencyDataVal = document.querySelector('#widgetCurrency').getAttribute('dataval');
        const widgetAmount = document.querySelector('#widgetAmount').value;





        // Format the widgetProduct value
        const formattedWidgetProduct = capitalizeFirstLetter(widgetProductDataVal);



        // Create an object to store these values

        const dataObject = [{
            widgetProduct: formattedWidgetProduct,
            widgetCurrency: widgetCurrencyDataVal,
            widgetAmount: widgetAmount,
            city: cityInput.value,
            recommendationText: finalText
        }];


        // Store the object in sessionStorage as a JSON string
        sessionStorage.setItem('storedData', JSON.stringify(dataObject));
        window.location.href = nextPageUrl;


    
}



























function updateCurrencySymbol(dropdownId, type) {
    const selectedItemElement = getSelectedDropdownItemElement(dropdownId);

    if (selectedItemElement) {
        let newCurrencyCode;
        if (type === 'fx') {
            newCurrencyCode = selectedItemElement.getAttribute('value').toUpperCase();
        }

        const newCurrencySymbol = currencySymbols[newCurrencyCode] || '';

        // Determine the appropriate suffix based on the type ('mt' or 'fx')
        const suffix = type === 'mt' ? 'Mt' : '';

        // Update the currency symbol in the input field
        const amountField = document.querySelector(`#widgetAmount${suffix}`);
        const currentAmount = amountField.value.replace(/^\D+/, ''); // Remove the existing currency symbol

        // Set the new value with the updated currency symbol
        amountField.value = `${newCurrencySymbol} ${currentAmount.trim()}`;

        // Update the displayed currency name
        document.querySelector(`#currencyName${suffix}`).textContent = newCurrencyCode;
    } else {
        console.error(`No selected item found in dropdown ${dropdownId}`);
    }
}