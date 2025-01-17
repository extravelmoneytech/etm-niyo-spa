console.log('heyy')




const contactBtn = document.querySelector('#mobileContactBtn');
const contactSection = document.getElementById('mobileContactSection');

contactBtn.addEventListener('click', () => {
    console.log('hey')
    // Toggle the visibility of the contact section
    contactSection.classList.toggle('hideContactMob');
    mobileContactBtn.classList.toggle('activeContactBtn')
});


