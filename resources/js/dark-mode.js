// Dark Mode Toggle Functionality
document.addEventListener('DOMContentLoaded', function() {
    const themeController = document.querySelector('.theme-controller');
    const htmlElement = document.documentElement;

    // Check for saved theme preference or default to 'light'
    const savedTheme = localStorage.getItem('theme') || 'light';

    // Apply saved theme
    htmlElement.setAttribute('data-theme', savedTheme);

    // Set checkbox state based on saved theme
    if (themeController) {
        themeController.checked = savedTheme === 'dark';
    }

    // Listen for theme toggle
    if (themeController) {
        themeController.addEventListener('change', function() {
            const newTheme = this.checked ? 'dark' : 'light';

            // Apply theme
            htmlElement.setAttribute('data-theme', newTheme);

            // Save preference
            localStorage.setItem('theme', newTheme);

            // Optional: Add smooth transition
            htmlElement.style.transition = 'background-color 0.3s ease, color 0.3s ease';
            setTimeout(() => {
                htmlElement.style.transition = '';
            }, 300);
        });
    }
});