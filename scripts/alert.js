// Function to check if an element is visible in viewport
function isElementInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Function to create and insert an alert below a target element
function insertAlertBelowElement(targetElement, alertContent) {
    // Check if an alert already exists below the target element
    const existingAlert = targetElement.nextElementSibling;
    if (existingAlert && existingAlert.classList.contains('custom-alert')) {
        existingAlert.textContent = alertContent; // Update existing alert text
        if (!isElementInViewport(existingAlert)) {
            scrollToElement(existingAlert);
        }
        return;
    }

    // Create a span element for the alert
    const alertSpan = document.createElement('span');

    // Set the classes and styles for the alert based on your template
    alertSpan.classList.add('text-[#fc4a32]', 'text-sm', 'font-medium', 'leading-normal');

    // Add a custom class to identify the alert for future removal
    alertSpan.classList.add('custom-alert');

    // Set the alert message
    alertSpan.textContent = alertContent;

    // Insert the alert element directly below the target element
    targetElement.insertAdjacentElement('afterend', alertSpan);

    // Always scroll to the new alert
    scrollToElement(alertSpan);
}

function scrollToElement(element) {
    // Get the element's position relative to the viewport
    const rect = element.getBoundingClientRect();
    
    // Calculate the absolute position including scroll
    const absoluteTop = rect.top + window.pageYOffset;
    
    // Calculate offset (considering fixed headers or other elements)
    const offset = 100; // Adjust this value based on your header height or desired offset
    
    // Calculate final scroll position
    const scrollPosition = absoluteTop - offset;
    
    // Perform the scroll with smooth behavior
    window.scrollTo({
        top: scrollPosition,
        behavior: 'smooth'
    });

    // Add a brief highlight animation to draw attention
    element.style.transition = 'background-color 0.3s ease';
    element.style.backgroundColor = 'rgba(252, 74, 50, 0.1)';
    
    // Remove the highlight after animation
    setTimeout(() => {
        element.style.backgroundColor = 'transparent';
    }, 1000);
}

// Function to remove the alert below a target element
function removeAlertBelowElement(targetElement) {
    // Find the alert element next to the target element
    const alertElement = targetElement.nextElementSibling;

    // Check if the next sibling is indeed an alert element
    if (alertElement && alertElement.classList.contains('custom-alert')) {
        alertElement.remove();
    }
}

// Function to capitalize the first letter of a string
function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1).toLowerCase();
}