
// theme toggle {
    const body = document.body;
    const toggle = document.getElementById('themeToggle');
    const icon = document.getElementById('themeIcon');

    // Load saved theme
    const savedTheme = localStorage.getItem('theme');

    if (savedTheme) {
        body.setAttribute('data-bs-theme', savedTheme);
        toggle.checked = savedTheme === 'light';
        icon.textContent = savedTheme === 'light' ? '☀️' : '🌙';
    } else {
        // Default = dark
        body.setAttribute('data-bs-theme', 'dark');
        icon.textContent = '🌙';
    }

    // Toggle theme
    toggle.addEventListener('change', () => {
        const newTheme = toggle.checked ? 'light' : 'dark';
        body.setAttribute('data-bs-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        icon.textContent = newTheme === 'light' ? '☀️' : '🌙';
    });

// } Function ends 

// carousel glow effect {
    const container = document.getElementById('buttonCarousel');
    const glowLeft = document.querySelector('.neon-fade .glow-left');
    const glowRight = document.querySelector('.neon-fade .glow-right');

    function updateGlow() {
        const maxScroll = container.scrollWidth - container.clientWidth;

        glowLeft.style.opacity = container.scrollLeft > 5 ? 1 : 0;
        glowRight.style.opacity = container.scrollLeft < maxScroll - 5 ? 1 : 0;
    }

    container.addEventListener('scroll', updateGlow);
    window.addEventListener('resize', updateGlow);

    // Initial state
    updateGlow();

// } Function ends 