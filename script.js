// JavaScript (script.js)
let darkModeIcon = document.querySelector('#darkMode-icon');
let isDarkMode = JSON.parse(localStorage.getItem('darkMode'));

// Set initial mode
if (isDarkMode) {
    enableDarkMode();
} else {
    disableDarkMode();
}

// Toggle mode when icon is clicked
darkModeIcon.onclick = () => {
    isDarkMode = !isDarkMode;
    if (isDarkMode) {
        enableDarkMode();
    } else {
        disableDarkMode();
    }
    // Save mode to local storage
    localStorage.setItem('darkMode', JSON.stringify(isDarkMode));
};

// Function to enable dark mode
function enableDarkMode() {
    darkModeIcon.classList.add('bx-sun');
    document.body.classList.add('dark-mode');
}

// Function to disable dark mode
function disableDarkMode() {
    darkModeIcon.classList.remove('bx-sun');
    document.body.classList.remove('dark-mode');
}

ScrollReveal({
    reset: true,
    distance: '80px',
    duration: 2000,
    delay: 200,
});

ScrollReveal().reveal('.home-content, .heading', { origin: 'top'});
ScrollReveal().reveal('.home-img img, .education-container, .portfolio-box', { origin: 'bottom'});
ScrollReveal().reveal('.home-content h1, .about-image', { origin: 'left'});
ScrollReveal().reveal('.home-content h3, .home-content p, .about-content', { origin: 'right'});