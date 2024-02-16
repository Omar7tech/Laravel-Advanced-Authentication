document.addEventListener('DOMContentLoaded', function() {
    const modeToggleBtn = document.getElementById('mode-toggle-btn');
    const navbarCollapse = document.getElementById('navbarNavDropdown');

    // Event listener for collapse events
    navbarCollapse.addEventListener('shown.bs.collapse', function () {
        modeToggleBtn.classList.add('mt-3');
    });

    navbarCollapse.addEventListener('hidden.bs.collapse', function () {
        modeToggleBtn.classList.remove('mt-3');
    });

    // Event listener for mode toggle button
    modeToggleBtn.addEventListener('click', function() {
        const currentTheme = document.documentElement.getAttribute('data-bs-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        document.documentElement.setAttribute('data-bs-theme', newTheme);

        // Update button style based on the new theme
        if (newTheme === 'dark') {
            modeToggleBtn.classList.remove('btn-outline-dark');
            modeToggleBtn.classList.add('btn-outline-light');
            modeToggleBtn.textContent = 'Light Mode';
        } else {
            modeToggleBtn.classList.remove('btn-outline-light');
            modeToggleBtn.classList.add('btn-outline-dark');
            modeToggleBtn.textContent = 'Dark Mode';
        }
    });
});
