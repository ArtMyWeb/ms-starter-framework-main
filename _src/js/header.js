

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

    // Fade header-inner on scroll
    const headerInner = document.querySelector('#header');
    function updateHeaderFade() {
        if (!headerInner) return;
        const sc = window.scrollY || document.documentElement.scrollTop;
        if (sc > 130) {
            headerInner.classList.add('is-faded');
        } else {
            headerInner.classList.remove('is-faded');
        }
    }

    updateHeaderFade();
    window.addEventListener('scroll', updateHeaderFade, { passive: true });
});



document.addEventListener('DOMContentLoaded', function () {
    const menuItems = document.querySelectorAll('.menu > .menu-item');
    const primaryMenu = document.querySelector('.menu');
    let timeoutId;

    function isMobile() {
        return window.innerWidth <= 768;
    }

    function isTablet() {
        return window.innerWidth > 768 && window.innerWidth <= 1024;
    }

    function isDesktop() {
        return window.innerWidth > 1024;
    }

    menuItems.forEach(function (menuItem) {
        const subMenu = menuItem.querySelector('.sub-menu');
        if (subMenu) {
            if (!isMobile()) {
                gsap.set(subMenu, {
                    opacity: 0,
                    pointerEvents: 'none',

                    y: -30,
                });
            } else {
                subMenu.style.display = 'none';


            }
        }
    });

    function removeActiveClassFromAll() {
        menuItems.forEach(function (menuItem) {
            menuItem.classList.remove('hover-active', 'active');
            const subMenu = menuItem.querySelector('.sub-menu');
            if (subMenu) {
                if (isMobile()) {
                    subMenu.style.display = 'none';
                } else {
                    gsap.to(subMenu, {
                        opacity: 0,
                        pointerEvents: 'none',
                        y: -30,
                        duration: 0.5,
                        ease: 'power2.inOut',
                    });
                }
            }
        });
        primaryMenu.classList.remove('hover-active');
    }

    function showSubMenu(menuItem) {
        const subMenu = menuItem.querySelector('.sub-menu');
        if (subMenu) {
            if (isMobile()) {
                subMenu.style.display = 'block';
            } else {
                gsap.to(subMenu, {
                    opacity: 1,
                    pointerEvents: 'auto',
                    y: 0,
                    stagger: -0.05,
                    duration: 0.5,
                    ease: 'power2.inOut',
                });
            }
        }
    }

    function hideSubMenu(menuItem) {
        const subMenu = menuItem.querySelector('.sub-menu');
        if (subMenu) {
            if (isMobile()) {
                subMenu.style.display = 'none';
            } else {
                gsap.to(subMenu, {
                    opacity: 0,
                    pointerEvents: 'none',
                    y: -30,
                    duration: 0.5,
                    ease: 'power2.inOut',
                });
            }
        }
    }

    function addActiveClass() {
        if (isDesktop()) {
            clearTimeout(timeoutId);
            removeActiveClassFromAll();
            this.classList.add('hover-active');
            primaryMenu.classList.add('hover-active');
            showSubMenu(this);
        }
    }

    function removeActiveClassWithDelay() {
        if (isDesktop()) {
            const menuItem = this;
            timeoutId = setTimeout(function () {
                menuItem.classList.remove('hover-active');
                hideSubMenu(menuItem);

                if (!primaryMenu.querySelector('li.hover-active')) {
                    primaryMenu.classList.remove('hover-active');
                }
            }, 400);
        }
    }

    function toggleActiveOnClick(e) {
        const hasChildren = this.classList.contains('menu-item-has-children');
        if (!hasChildren) return;

        const isActive = this.classList.contains('active') || this.classList.contains('hover-active');

        if (isMobile()) {
            if (!isActive) {
                e.preventDefault();
                removeActiveClassFromAll();
                this.classList.add('active');
                showSubMenu(this);
            }
            // Якщо вже активне - дозволяємо перехід за посиланням
        } else if (isTablet()) {
            if (!isActive) {
                e.preventDefault();
                removeActiveClassFromAll();
                this.classList.add('hover-active');
                primaryMenu.classList.add('hover-active');
                showSubMenu(this);
            }
            // Якщо вже активне - дозволяємо перехід за посиланням
        }
    }



    const ARROW_FALLBACK_W = 36;
    const ARROW_PADDING_R = 16;

    function clickedOnAfterArea(anchor, event) {
        const rect = anchor.getBoundingClientRect();
        const x = event.clientX - rect.left;
        const y = event.clientY - rect.top;

        const afterStyle = window.getComputedStyle(anchor, '::after');
        const w = parseFloat(afterStyle.width) || ARROW_FALLBACK_W;
        const h = parseFloat(afterStyle.height) || rect.height;

        const rightProp = afterStyle.right;
        const right = (rightProp && rightProp !== 'auto') ? parseFloat(rightProp) : ARROW_PADDING_R;

        const afterLeft = rect.width - w - right;
        const afterRight = rect.width - right;
        const afterTop = (rect.height - h) / 2;
        const afterBottom = afterTop + h;

        return x >= afterLeft && x <= afterRight && y >= afterTop && y <= afterBottom;
    }
    document.querySelectorAll('.menu-item-has-children > a').forEach((anchor) => {
        anchor.addEventListener('click', function (e) {
            if (!isMobile()) return;

            const li = this.closest('.menu-item');

            if (clickedOnAfterArea(this, e)) {
                e.preventDefault();
                e.stopPropagation();

                const parentUl = li.parentElement;
                const isActive = li.classList.contains('active');

                if (isActive) {
                    li.classList.remove('active');
                    hideSubMenu(li);
                } else {
                    parentUl.querySelectorAll(':scope > .menu-item.active').forEach((item) => {
                        item.classList.remove('active');
                        hideSubMenu(item);
                    });

                    li.classList.add('active');
                    showSubMenu(li);
                }
            }
        });
    });



    menuItems.forEach(function (menuItem) {
        menuItem.addEventListener('mouseenter', addActiveClass);
        menuItem.addEventListener('mouseleave', removeActiveClassWithDelay);
        menuItem.addEventListener('click', toggleActiveOnClick);
    });

    window.addEventListener('resize', function () {
        removeActiveClassFromAll();
    });
});