(function () {
    'use strict';

    document.documentElement.classList.add('js');

    var header = document.getElementById('siteHeader');
    var toggle = document.getElementById('navToggle');
    var nav = document.getElementById('primaryNav');

    // Header shadow on scroll
    function onScroll() {
        if (!header) return;
        header.classList.toggle('scrolled', window.scrollY > 10);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    // Mobile menu
    function closeMenu() {
        if (!nav || !toggle) return;
        nav.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Open menu');
    }

    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            var open = nav.classList.toggle('open');
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
            toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
        });

        nav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', closeMenu);
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeMenu();
        });

        document.addEventListener('click', function (e) {
            if (!nav.contains(e.target) && !toggle.contains(e.target)) closeMenu();
        });
    }

    // Reveal on scroll (with stagger for grid items)
    var revealEls = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window) {
        var revealObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                var el = entry.target;
                var siblings = Array.prototype.filter.call(el.parentElement.children, function (c) {
                    return c.classList.contains('reveal');
                });
                var index = siblings.indexOf(el);
                el.style.transitionDelay = (index > 0 ? Math.min(index, 8) * 70 : 0) + 'ms';
                el.classList.add('is-visible');
                revealObserver.unobserve(el);
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

        revealEls.forEach(function (el) { revealObserver.observe(el); });
    } else {
        revealEls.forEach(function (el) { el.classList.add('is-visible'); });
    }

    // Active nav link based on section in view
    var links = document.querySelectorAll('.nav-link');
    var sections = [];
    links.forEach(function (link) {
        var id = link.getAttribute('href');
        if (id && id.charAt(0) === '#') {
            var section = document.querySelector(id);
            if (section) sections.push({ link: link, section: section });
        }
    });

    if ('IntersectionObserver' in window && sections.length) {
        var navObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                links.forEach(function (l) { l.classList.remove('active'); });
                sections.forEach(function (s) {
                    if (s.section === entry.target) s.link.classList.add('active');
                });
            });
        }, { rootMargin: '-45% 0px -50% 0px' });

        sections.forEach(function (s) { navObserver.observe(s.section); });
    }
})();

// Project details modal
(function () {
    'use strict';

    var modal = document.getElementById('projectModal');
    var content = document.getElementById('modalContent');
    if (!modal || !content) return;

    var lastTrigger = null;

    function openModal(id, trigger) {
        var tpl = document.getElementById('project-' + id);
        if (!tpl) return;
        content.innerHTML = '';
        content.appendChild(tpl.content.cloneNode(true));
        lastTrigger = trigger;
        modal.hidden = false;
        document.body.classList.add('modal-open');
        var dialog = modal.querySelector('.modal-dialog');
        if (dialog) dialog.scrollTop = 0;
        var closeBtn = modal.querySelector('.modal-close');
        if (closeBtn) closeBtn.focus();
    }

    function closeModal() {
        if (modal.hidden) return;
        modal.hidden = true;
        document.body.classList.remove('modal-open');
        if (lastTrigger) lastTrigger.focus();
    }

    document.querySelectorAll('[data-project]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            openModal(btn.getAttribute('data-project'), btn);
        });
    });

    modal.querySelectorAll('[data-close]').forEach(function (el) {
        el.addEventListener('click', closeModal);
    });

    document.addEventListener('keydown', function (e) {
        if (modal.hidden) return;
        if (e.key === 'Escape') {
            closeModal();
            return;
        }
        // Keep keyboard focus inside the popup
        if (e.key === 'Tab') {
            var focusable = modal.querySelectorAll('button, a[href], [tabindex]:not([tabindex="-1"])');
            if (!focusable.length) return;
            var first = focusable[0];
            var last = focusable[focusable.length - 1];
            if (e.shiftKey && document.activeElement === first) {
                e.preventDefault();
                last.focus();
            } else if (!e.shiftKey && document.activeElement === last) {
                e.preventDefault();
                first.focus();
            }
        }
    });
})();
