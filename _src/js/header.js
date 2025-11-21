// Mobile menu script
document.addEventListener('DOMContentLoaded', function () {
    const btn = document.querySelector('[aria-controls="mobile-menu"]');
    const mobileMenu = document.getElementById('mobile-menu');
    const drilldown = document.querySelector('.drilldown-menu-box.group') || document.querySelector('.drilldown-menu-box');
    const body = document.body;
    let previousActive = null;

    if (!btn || !mobileMenu) return;

    function getFocusable(container) {
        return Array.from(
            container.querySelectorAll('a[href], button:not([disabled]), input:not([disabled]), select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])')
        ).filter(el => el.offsetParent !== null);
    }

    function openMenu() {
        previousActive = document.activeElement;
        btn.setAttribute('aria-expanded', 'true');
        drilldown && drilldown.classList.add('active');
        body.classList.add('is-menu-open');
        mobileMenu.classList.add('is-open');

        const focusables = getFocusable(mobileMenu);
        if (focusables.length) focusables[0].focus();
        document.addEventListener('keydown', handleKeydown);
    }

    function closeMenu() {
        btn.setAttribute('aria-expanded', 'false');
        drilldown && drilldown.classList.remove('active');
        body.classList.remove('is-menu-open');
        mobileMenu.classList.remove('is-open');
        document.removeEventListener('keydown', handleKeydown);
        if (previousActive && typeof previousActive.focus === 'function') previousActive.focus();
    }

    function handleKeydown(e) {
        if (e.key === 'Escape') {
            closeMenu();
            return;
        }

        if (e.key === 'Tab') {
            const focusables = getFocusable(mobileMenu);
            if (focusables.length === 0) {
                e.preventDefault();
                return;
            }
            const first = focusables[0];
            const last = focusables[focusables.length - 1];

            if (e.shiftKey && document.activeElement === first) {
                e.preventDefault();
                last.focus();
            } else if (!e.shiftKey && document.activeElement === last) {
                e.preventDefault();
                first.focus();
            }
        }
    }

    // Toggle on button click
    btn.addEventListener('click', function (e) {
        e.preventDefault();
        const expanded = btn.getAttribute('aria-expanded') === 'true';
        if (expanded) closeMenu(); else openMenu();
    });

    // Close when clicking outside the menu
    document.addEventListener('click', function (e) {
        if (!mobileMenu.contains(e.target) && !btn.contains(e.target) && body.classList.contains('is-menu-open')) {
            closeMenu();
        }
    });

    // Auto-close on resize to desktop
    window.addEventListener('resize', function () {
        if (window.innerWidth > 768 && body.classList.contains('is-menu-open')) {
            closeMenu();
        }
    });
});
