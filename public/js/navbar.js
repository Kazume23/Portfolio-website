let lastScrollTop = 0; // Store the last scroll position
const navbar = document.querySelector('.navbar');
const header = document.querySelector('.header');
const hideThreshold = 100; // Minimum scroll distance before navbar hides
const showThreshold = 20; // Navbar will show when scrolling back to the top
let isScrolling = false; // Flag to track if scrolling is active

window.addEventListener('scroll', function() {
    if (isScrolling) return; // Skip if a scroll is already in progress
    isScrolling = true;

    setTimeout(function() {
        const currentScroll = window.pageYOffset; // Get current scroll position

        // Hide navbar when scrolling down
        if (currentScroll > hideThreshold) {
            navbar.classList.add('hidden'); // Hide navbar
            header.classList.add('hidden-header'); // Optionally hide header background
        }
        // Show navbar when scrolling back to the top
        else if (currentScroll <= showThreshold) {
            navbar.classList.remove('hidden'); // Show navbar
            header.classList.remove('hidden-header'); // Show header background
        }

        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Update last scroll position
        isScrolling = false; // Reset the scrolling flag
    }, 100); // Delay to wait for the scroll to end
});
