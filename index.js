document.addEventListener('DOMContentLoaded', () => {
    const signupButton = document.querySelector('.signup-button');
    const signupForm = document.getElementById('signupForm');
    const closeButton = document.getElementById('closeForm');
    const form = document.getElementById('form');
    const showSignupForm = () => {
        signupForm.style.display = 'flex';
    };
    const hideSignupForm = () => {
        signupForm.style.display = 'none';
    };
    signupButton.addEventListener('click', showSignupForm);
    closeButton.addEventListener('click', hideSignupForm);
    window.addEventListener('click', (event) => {
        if (event.target === signupForm) {
            hideSignupForm();
        }
    });
    form.addEventListener('submit', (event) => {
        event.preventDefault(); 
        alert('Thank you for signing up!');
        hideSignupForm();
    });
});
