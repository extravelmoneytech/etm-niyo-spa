




let userInfoCheck = localStorage.getItem('userInfo');
console.log(userInfoCheck);

window.userCheckMain = function () {
    console.log('calledddddbcc')
    const userInfoCheck = localStorage.getItem('userInfo');

    if (userInfoCheck) {
        // Parse the JSON string into an object
        const userInfo = JSON.parse(userInfoCheck);

        // Select all elements with the class '.loginBtn'
        const loginBtns = document.querySelectorAll('.loginBtn');

        // Iterate over each button and update it
        loginBtns.forEach(element => {
            element.querySelector('#loginText').textContent = "Logout";

            // Remove the href attribute
            element.removeAttribute('href');

            // Add a click event to log out the user
            element.addEventListener('click', () => {
                // Clear localStorage
                localStorage.removeItem('userInfo');

                
            });
        });

        console.log(userInfo, 'userInfo');
        return true;

    } else {
        console.log('No userInfo found in localStorage');

        const myAccountBtns = document.querySelectorAll('.myAccount');

        myAccountBtns.forEach(element => {
            element.style.display = 'none';
        });

        const myAccountLink = document.querySelector('#myAccountLink');
        if (myAccountLink) {
            myAccountLink.href = '/login';
        }

        return false;
    }
};

userCheckMain()

function userCheck() {

    let userValid = localStorage.getItem('userInfo');

    if (userValid) {
        return true
    } else {
        return false
    }

}


function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

