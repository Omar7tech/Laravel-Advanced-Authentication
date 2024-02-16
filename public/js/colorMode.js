document.addEventListener('DOMContentLoaded', function() {
    const modeToggleBtn = document.getElementById('mode-toggle-btn');
    const navbarCollapse = document.getElementById('navbarNavDropdown');

    // Check for stored theme preference on page load
    const storedTheme = localStorage.getItem('theme');
    if (storedTheme) {
        document.documentElement.setAttribute('data-bs-theme', storedTheme);
        updateButtonStyle(storedTheme); // Update button style based on stored theme
    } else {
        localStorage.setItem('theme', 'light'); // Set initial theme preference if not set
    }

    // Function to update button style based on theme
    function updateButtonStyle(theme) {
        if (theme === 'dark') {
            modeToggleBtn.classList.remove('btn-outline-dark');
            modeToggleBtn.classList.add('btn-outline-light');
            modeToggleBtn.textContent = 'Light Mode';
        } else {
            modeToggleBtn.classList.remove('btn-outline-light');
            modeToggleBtn.classList.add('btn-outline-dark');
            modeToggleBtn.textContent = 'Dark Mode';
        }
    }

    // Event listener for mode toggle button
    modeToggleBtn.addEventListener('click', function() {
        const currentTheme = document.documentElement.getAttribute('data-bs-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        document.documentElement.setAttribute('data-bs-theme', newTheme);
        updateButtonStyle(newTheme); // Update button style based on the new theme
        localStorage.setItem('theme', newTheme); // Save theme preference to localStorage
    });

    // Event listener for collapse events
    navbarCollapse.addEventListener('shown.bs.collapse', function () {
        modeToggleBtn.classList.add('mt-3');
    });

    navbarCollapse.addEventListener('hidden.bs.collapse', function () {
        modeToggleBtn.classList.remove('mt-3');
    });
});
