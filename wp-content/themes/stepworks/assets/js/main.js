(function () {
  'use strict';

  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function initMegaMenu() {
    const header = document.querySelector('.site-header');
    const mega = document.querySelector('[data-mega-menu]');
    const triggers = document.querySelectorAll('[data-mega-trigger]');
    const panels = document.querySelectorAll('[data-mega-panel]');
    if (!header || !mega || !triggers.length) return;

    let openIndex = null;
    let closeTimer = null;

    const open = (index) => {
      clearTimeout(closeTimer);
      openIndex = index;
      mega.hidden = false;
      requestAnimationFrame(() => mega.classList.add('is-open'));
      triggers.forEach((item) => {
        item.classList.toggle('is-active', Number(item.dataset.megaTrigger) === index);
      });
      panels.forEach((panel) => {
        panel.classList.toggle('is-active', Number(panel.dataset.megaPanel) === index);
      });

      if (window.gsap && !prefersReduced) {
        const active = mega.querySelector('.mega-menu__panel.is-active');
        if (active) {
          gsap.fromTo(
            active.querySelectorAll('.mega-menu__media, .mega-menu__title, .mega-menu__text, .mega-menu__links li'),
            { y: 18, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.45, stagger: 0.05, ease: 'power3.out', overwrite: true }
          );
        }
      }
    };

    const close = () => {
      closeTimer = setTimeout(() => {
        mega.classList.remove('is-open');
        triggers.forEach((item) => item.classList.remove('is-active'));
        openIndex = null;
        setTimeout(() => {
          if (!mega.classList.contains('is-open')) mega.hidden = true;
        }, 280);
      }, 120);
    };

    triggers.forEach((item) => {
      const index = Number(item.dataset.megaTrigger);
      item.addEventListener('mouseenter', () => open(index));
      item.addEventListener('focusin', () => open(index));
      item.addEventListener('click', (e) => {
        e.preventDefault();
        if (openIndex === index && mega.classList.contains('is-open')) close();
        else open(index);
      });
    });

    header.addEventListener('mouseleave', close);
    mega.addEventListener('mouseenter', () => clearTimeout(closeTimer));
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') close();
    });
  }

  function initMobileMenu() {
    const menu = document.querySelector('[data-mobile-menu]');
    const backdrop = document.querySelector('[data-menu-backdrop]');
    const toggle = document.querySelector('[data-menu-toggle]');
    const closeBtn = document.querySelector('[data-menu-close]');
    if (!menu || !toggle) return;

    const panels = () => menu.querySelectorAll('[data-mobile-panel]');

    const resetPanels = () => {
      panels().forEach((panel) => {
        panel.classList.remove('is-open');
        panel.hidden = true;
      });
    };

    const open = () => {
      menu.hidden = false;
      menu.setAttribute('aria-hidden', 'false');
      if (backdrop) backdrop.hidden = false;
      document.body.classList.add('mobile-menu-open');
      requestAnimationFrame(() => {
        menu.classList.add('is-open');
        backdrop?.classList.add('is-open');
      });
      toggle.setAttribute('aria-expanded', 'true');
    };

    const close = () => {
      menu.classList.remove('is-open');
      backdrop?.classList.remove('is-open');
      toggle.setAttribute('aria-expanded', 'false');
      menu.setAttribute('aria-hidden', 'true');
      document.body.classList.remove('mobile-menu-open');
      resetPanels();
      window.setTimeout(() => {
        if (!menu.classList.contains('is-open')) {
          menu.hidden = true;
          if (backdrop) backdrop.hidden = true;
        }
      }, 320);
    };

    toggle.addEventListener('click', () => {
      if (menu.classList.contains('is-open')) close();
      else open();
    });
    closeBtn?.addEventListener('click', close);
    backdrop?.addEventListener('click', close);

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && menu.classList.contains('is-open')) close();
    });

    menu.querySelectorAll('[data-mobile-submenu]').forEach((btn) => {
      btn.addEventListener('click', () => {
        const panel = menu.querySelector(`[data-mobile-panel="${btn.dataset.mobileSubmenu}"]`);
        if (!panel) return;
        resetPanels();
        panel.hidden = false;
        requestAnimationFrame(() => {
          requestAnimationFrame(() => panel.classList.add('is-open'));
        });
      });
    });

    menu.querySelectorAll('[data-mobile-back]').forEach((btn) => {
      btn.addEventListener('click', () => {
        const panel = btn.closest('[data-mobile-panel]');
        if (!panel) return;
        panel.classList.remove('is-open');
        window.setTimeout(() => {
          panel.hidden = true;
        }, 260);
      });
    });
  }

  function initHero() {
    const root = document.querySelector('[data-hero]');
    if (!root) return;

    const slides = Array.from(root.querySelectorAll('[data-hero-slide]'));
    const dots = Array.from(root.querySelectorAll('[data-hero-dot]'));
    if (slides.length < 2) return;

    let index = 0;
    let timer;

    const show = (next) => {
      index = (next + slides.length) % slides.length;
      slides.forEach((slide, i) => slide.classList.toggle('is-active', i === index));
      dots.forEach((dot, i) => dot.classList.toggle('is-active', i === index));

      if (window.gsap && !prefersReduced) {
        const active = slides[index];
        gsap.fromTo(
          active.querySelectorAll('.hero__title, .hero__text, .hero__btn, .hero__graphic'),
          { y: 24, opacity: 0 },
          { y: 0, opacity: 1, duration: 0.7, stagger: 0.08, ease: 'power3.out', overwrite: true }
        );
        const graphic = active.querySelector('[data-hero-graphic]');
        if (graphic) {
          gsap.fromTo(graphic, { rotate: -6, scale: 0.97 }, { rotate: 0, scale: 1, duration: 1.1, ease: 'power2.out' });
        }
      }
    };

    const start = () => {
      stop();
      timer = window.setInterval(() => show(index + 1), 6000);
    };

    const stop = () => {
      if (timer) window.clearInterval(timer);
    };

    dots.forEach((dot) => {
      dot.addEventListener('click', () => {
        show(Number(dot.dataset.heroDot));
        start();
      });
    });

    root.addEventListener('mouseenter', stop);
    root.addEventListener('mouseleave', start);

    // Touch swipe (mobile)
    let touchX = null;
    root.addEventListener('touchstart', (e) => {
      touchX = e.changedTouches[0].screenX;
      stop();
    }, { passive: true });
    root.addEventListener('touchend', (e) => {
      if (touchX === null) return;
      const dx = e.changedTouches[0].screenX - touchX;
      if (Math.abs(dx) > 40) show(index + (dx < 0 ? 1 : -1));
      touchX = null;
      start();
    }, { passive: true });

    start();
  }

  function initAnimations() {
    if (!window.gsap || prefersReduced) return;

    gsap.registerPlugin(ScrollTrigger);

    const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });
    tl.from('[data-animate="header"]', { y: -24, opacity: 0, duration: 0.6 })
      .from(
        '.hero__slide.is-active .hero__title, .hero__slide.is-active .hero__text, .hero__slide.is-active .btn',
        { y: 36, opacity: 0, duration: 0.75, stagger: 0.1 },
        '-=0.2'
      )
      .from('.hero__slide.is-active .hero__graphic', { opacity: 0, scale: 0.9, rotate: -12, duration: 1 }, '-=0.55')
      .from('.hero__dot', { scaleX: 0, opacity: 0, duration: 0.4, stagger: 0.05 }, '-=0.6');

    document.querySelectorAll('[data-animate-section]').forEach((section) => {
      const cards = section.querySelectorAll('[data-animate="card"], .cta-split__inner, .site-footer__brand, .site-footer__columns, .site-footer__aside, .section-heading');
      if (!cards.length) return;
      const isFeatures = section.classList.contains('features');
      const isMobile = window.matchMedia('(max-width: 767px)').matches;
      gsap.from(cards, {
        scrollTrigger: {
          trigger: section,
          start: 'top 80%',
        },
        y: isFeatures && isMobile ? 16 : 40,
        opacity: 0,
        duration: 0.65,
        stagger: isFeatures && isMobile ? 0.06 : 0.1,
        ease: 'power3.out',
        clearProps: isFeatures ? 'transform' : '',
      });
    });

    // Subtle continuous motion on hero graphic lines
    document.querySelectorAll('[data-hero-graphic]').forEach((graphic) => {
      gsap.to(graphic, {
        rotate: 360,
        duration: 48,
        repeat: -1,
        ease: 'none',
      });
    });
  }

  document.addEventListener('DOMContentLoaded', () => {
    initMegaMenu();
    initMobileMenu();
    initHero();
    initAnimations();
  });
})();