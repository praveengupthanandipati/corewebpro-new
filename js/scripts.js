/**
 * BENSALEM NEW - INTERACTIVE SCROLL ANIMATIONS SYSTEM
 * Lightweight, high-performance scroll reveal using IntersectionObserver.
 * Features:
 *   - IntersectionObserver triggers
 *   - Staggered animations using 'data-reveal-delay'
 *   - Repeat animations up/down using 'data-reveal-repeat="true"'
 */

/* -----------------------------------------------
   PAGE PRELOADER
----------------------------------------------- */
window.addEventListener("load", function () {
    var preloader = document.getElementById("pagePreloader");
    if (preloader) {
        preloader.classList.add("is-hidden");
        preloader.addEventListener("transitionend", function () {
            preloader.remove();
        }, { once: true });
    }
});

/* -----------------------------------------------
   AOS — ANIMATE ON SCROLL INIT
----------------------------------------------- */
AOS.init({
    duration:  800,
    easing:    'ease-out-quart',
    once:      true,
    offset:    60,
    delay:     0,
});

/* -----------------------------------------------
   MAIN NAVBAR — TRANSPARENT ↔ SOLID ON SCROLL
----------------------------------------------- */
(function () {
    var nav = document.getElementById('mainNav');
    if (!nav) return;
    function tick() {
        var past = window.scrollY > 80;
        nav.classList.toggle('scrolled', past);
        nav.classList.toggle('nav-transparent', !past);
    }
    window.addEventListener('scroll', tick, { passive: true });
    tick();
}());

/* -----------------------------------------------
   HEADER TOP BAR — HIDE ON SCROLL
----------------------------------------------- */
(function () {
    var header    = document.querySelector('header');
    var headerTop = document.querySelector('.header-top');
    if (!header || !headerTop) return;

    var topHeight = 0;

    function measureTop() {
        topHeight = headerTop.offsetHeight;
    }

    function onScroll() {
        if (window.scrollY > 60) {
            header.style.transform = 'translateY(-' + topHeight + 'px)';
        } else {
            header.style.transform = '';
        }
    }

    measureTop();
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', measureTop, { passive: true });
}());

document.addEventListener("DOMContentLoaded", () => {
    // Select all elements designed to reveal on scroll
    const revealElements = document.querySelectorAll(".reveal");

    if (revealElements.length === 0) {
        return;
    }

    // Observer Callback Function
    const revealCallback = (entries, observer) => {
        entries.forEach(entry => {
            const el = entry.target;
            const delay = parseInt(el.getAttribute("data-reveal-delay"), 10) || 0;
            const repeat = el.getAttribute("data-reveal-repeat") === "true";

            if (entry.isIntersecting) {
                // Element entered viewport: add active state (trigger transition)
                if (delay > 0) {
                    setTimeout(() => {
                        el.classList.add("active");
                    }, delay);
                } else {
                    el.classList.add("active");
                }

                // If repeat is false (default), stop observing once shown to save resources
                if (!repeat) {
                    observer.unobserve(el);
                }
            } else {
                // Element exited viewport: if repeat is enabled, reset to initial state
                if (repeat) {
                    el.classList.remove("active");
                }
            }
        });
    };

    // Observer Configuration Options
    const observerOptions = {
        root: null, // Default is viewport
        // bottom margin offset: triggers animation when element is slightly inside the viewport
        rootMargin: "0px 0px -8% 0px", 
        threshold: 0.10 // 10% visibility threshold
    };

    // Initialize IntersectionObserver
    const observer = new IntersectionObserver(revealCallback, observerOptions);

    // Register all elements to observer
    revealElements.forEach(el => {
        observer.observe(el);
    });

    // --- Mobile Offcanvas Menu Polish ---
    const offcanvasEl = document.getElementById("mobileMenuOffcanvas");
    if (offcanvasEl) {
        // Auto-close offcanvas when clicking any anchor link inside it
        const offcanvasLinks = offcanvasEl.querySelectorAll('a[href^="#"]');
        offcanvasLinks.forEach(link => {
            link.addEventListener("click", () => {
                const offcanvasInstance = bootstrap.Offcanvas.getInstance(offcanvasEl);
                if (offcanvasInstance) {
                    offcanvasInstance.hide();
                }
            });
        });

    }
});


/* -----------------------------------------------
   GALLERY LIGHTBOX
----------------------------------------------- */
(function () {
    var items    = Array.from(document.querySelectorAll('.gallery-item'));
    var lightbox = document.getElementById('galleryLightbox');
    var lbImg    = document.getElementById('lightboxImg');
    var lbClose  = document.getElementById('lightboxClose');
    var lbPrev   = document.getElementById('lightboxPrev');
    var lbNext   = document.getElementById('lightboxNext');
    var lbCount  = document.getElementById('lightboxCounter');

    if (!lightbox || items.length === 0) return;

    var current = 0;

    function open(index) {
        current = index;
        show(current);
        lightbox.classList.add('is-open');
        document.body.style.overflow = 'hidden';
    }

    function close() {
        lightbox.classList.remove('is-open');
        document.body.style.overflow = '';
    }

    function show(index) {
        var src = items[index].querySelector('img').src;
        var alt = items[index].querySelector('img').alt;
        lbImg.classList.add('is-loading');
        lbImg.onload = function () { lbImg.classList.remove('is-loading'); };
        lbImg.src = src;
        lbImg.alt = alt;
        lbCount.textContent = (index + 1) + ' / ' + items.length;
    }

    function prev() { current = (current - 1 + items.length) % items.length; show(current); }
    function next() { current = (current + 1) % items.length;                show(current); }

    items.forEach(function (item, i) {
        item.addEventListener('click', function () { open(i); });
    });

    lbClose.addEventListener('click', close);
    lbPrev.addEventListener('click', prev);
    lbNext.addEventListener('click', next);

    lightbox.addEventListener('click', function (e) {
        if (e.target === lightbox) close();
    });

    document.addEventListener('keydown', function (e) {
        if (!lightbox.classList.contains('is-open')) return;
        if (e.key === 'Escape')     close();
        if (e.key === 'ArrowLeft')  prev();
        if (e.key === 'ArrowRight') next();
    });
}());

var heroSwiperEl = document.querySelector('.homeslider');
var swiper = heroSwiperEl ? new Swiper('.homeslider', {
    loop: true,
    speed: 900,
    pagination: {
        el: '.hero-pagination',
        clickable: true,
    },
    autoplay: {
        delay: 6000,
        disableOnInteraction: false,
    },
    on: {
        init: function () {
            /* Use timeout so Swiper finishes positioning slides before we animate */
            setTimeout(function () {
                var activeSlide = heroSwiperEl.querySelector('.swiper-slide-active');
                if (activeSlide) {
                    var content = activeSlide.querySelector('.slide-content');
                    if (content) content.classList.add('slide-animate');
                }
            }, 80);
        },
        slideChangeTransitionStart: function () {
            heroSwiperEl.querySelectorAll('.slide-content').forEach(function (c) {
                c.classList.remove('slide-animate');
            });
        },
        slideChangeTransitionEnd: function () {
            var activeSlide = heroSwiperEl.querySelector('.swiper-slide-active');
            if (!activeSlide) return;
            var content = activeSlide.querySelector('.slide-content');
            if (content) {
                void content.offsetWidth;
                content.classList.add('slide-animate');
            }
        }
    }
}) : null;

/* -----------------------------------------------
   TESTIMONIAL SWIPER
----------------------------------------------- */
var testiSwiper = new Swiper('.testimonial-swiper', {
    loop: true,
    speed: 700,
    slidesPerView: 1,
    spaceBetween: 24,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.testi-pagination',
        clickable: true,
    },
    navigation: {
        prevEl: '#testiPrev',
        nextEl: '#testiNext',
    },
    breakpoints: {
        768:  { slidesPerView: 2 },
        1200: { slidesPerView: 3 },
    },
    on: {
        init: function () { initTestiReadMore(); },
        resize: function () { initTestiReadMore(); },
    },
});

/* -----------------------------------------------
   TESTIMONIAL READ MORE / READ LESS
----------------------------------------------- */
function initTestiReadMore() {
    document.querySelectorAll('.testi-text').forEach(function (el) {
        /* skip if button already injected */
        if (el.nextElementSibling && el.nextElementSibling.classList.contains('testi-read-more')) return;

        var btn = document.createElement('button');
        btn.className = 'testi-read-more';
        btn.innerHTML =
            'Read more' +
            '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>';

        el.parentNode.insertBefore(btn, el.nextSibling);

        /* show button only when text actually overflows */
        if (el.scrollHeight > el.clientHeight + 2) {
            btn.classList.add('is-visible');
        }

        btn.addEventListener('click', function () {
            var expanded = el.classList.toggle('is-expanded');
            btn.classList.toggle('is-expanded', expanded);
            btn.innerHTML = expanded
                ? 'Read less <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>'
                : 'Read more <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>';
        });
    });
}

/* -----------------------------------------------
   BACK TO TOP
----------------------------------------------- */
(function () {
    var btn = document.getElementById('backToTop');
    if (!btn) return;

    window.addEventListener('scroll', function () {
        if (window.scrollY > 320) {
            btn.classList.add('is-visible');
        } else {
            btn.classList.remove('is-visible');
        }
    }, { passive: true });

    btn.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}());

/* -----------------------------------------------
   CHATBOT WIDGET
----------------------------------------------- */
(function () {
    var chatbot  = document.getElementById('chatbot');
    var toggle   = document.getElementById('chatbotToggle');
    var closeBtn = document.getElementById('chatbotClose');
    var messages = document.getElementById('chatbotMessages');
    var input    = document.getElementById('chatbotInput');
    var sendBtn  = document.getElementById('chatbotSend');
    var qrWrap   = document.getElementById('chatbotQuickReplies');

    if (!chatbot) return;

    var opened = false;

    var GREETING = 'Hi there! Welcome to <strong>Bensalem Smiles 4 U</strong>. How can I help you today?';

    var RESPONSES = [
        {
            keys: ['book', 'appointment', 'schedule', 'reserve', 'visit'],
            html: 'You can book an appointment online! <a href="appointment.php">Click here to Book Now &rarr;</a>'
        },
        {
            keys: ['hour', 'open', 'timing', 'when', 'close', 'closing', 'office hours'],
            html: '<strong>Our Office Hours:</strong><br>Mon &ndash; Fri: 9:00 AM &ndash; 6:00 PM<br>Saturday: 9:00 AM &ndash; 2:00 PM<br>Sunday: Closed'
        },
        {
            keys: ['location', 'address', 'where', 'find us', 'direction', 'map'],
            html: 'We are located at:<br><strong>1044 Byberry Rd, Bensalem, PA 19020</strong><br><a href="contact.php">Get Directions &rarr;</a>'
        },
        {
            keys: ['phone', 'call', 'number', 'contact', 'reach'],
            html: 'Give us a call at <strong><a href="tel:2156383350">(215) 638-3350</a></strong> &mdash; we\'re happy to help!'
        },
        {
            keys: ['service', 'offer', 'treatment', 'procedure', 'provide', 'our service'],
            html: 'We offer a wide range of services:<br>&bull; <a href="preventive-dentistry.php">Preventive Dentistry</a><br>&bull; <a href="cosmetic-dentistry.php">Cosmetic Dentistry</a><br>&bull; <a href="implant-dental.php">Dental Implants</a><br>&bull; <a href="invisalign.php">Invisalign</a><br>&bull; <a href="root-canal-treatment.php">Root Canal</a><br>&bull; <a href="tooth-whitening.php">Teeth Whitening</a><br>&bull; <a href="same-day-crowns.php">Same Day Crowns</a>'
        },
        {
            keys: ['insurance', 'cover', 'plan', 'accept'],
            html: 'We accept most major dental insurance plans. No insurance? We have affordable patient plans too! <a href="contact.php">Contact us</a> for details.'
        },
        {
            keys: ['implant', 'missing tooth', 'missing teeth'],
            html: 'We provide permanent, natural-looking dental implants. <a href="implant-dental.php">Learn more &rarr;</a>'
        },
        {
            keys: ['invisalign', 'aligner', 'brace', 'straighten', 'clear aligner'],
            html: 'Yes! We offer Invisalign clear aligners for a discreet way to straighten your teeth. <a href="invisalign.php">Learn more &rarr;</a>'
        },
        {
            keys: ['whiten', 'whitening', 'bleach', 'bright', 'stain'],
            html: 'Our professional teeth whitening brightens your smile by several shades in one visit! <a href="tooth-whitening.php">Learn more &rarr;</a>'
        },
        {
            keys: ['crown', 'cerec', 'same day crown'],
            html: 'We offer Same Day Crowns using advanced CEREC technology &mdash; no second visit needed! <a href="same-day-crowns.php">Learn more &rarr;</a>'
        },
        {
            keys: ['emergency', 'pain', 'hurt', 'urgent', 'ache', 'broken', 'crack'],
            html: 'For dental emergencies, call us immediately at <strong><a href="tel:2156383350">(215) 638-3350</a></strong>. We accommodate same-day emergency appointments.'
        },
        {
            keys: ['children', 'child', 'kid', 'kids', 'pediatric', 'baby'],
            html: 'We welcome children! Our gentle team makes dental visits fun for kids. <a href="pediatric-dentistry.php">Learn more &rarr;</a>'
        },
        {
            keys: ['cost', 'price', 'fee', 'afford', 'cheap', 'expensive', 'fair price'],
            html: 'We believe in fair, transparent pricing. <a href="fair-prices.php">View our pricing &rarr;</a>'
        },
        {
            keys: ['root canal'],
            html: 'Our painless root canal therapy saves your natural tooth and relieves discomfort quickly. <a href="root-canal-treatment.php">Learn more &rarr;</a>'
        },
        {
            keys: ['hi', 'hello', 'hey', 'howdy', 'good morning', 'good afternoon', 'good evening'],
            html: 'Hello! How can I help you today? Ask me about our services, hours, or how to book an appointment!'
        },
    ];

    var DEFAULT = 'I\'m not sure about that, but our team can help! Call <strong><a href="tel:2156383350">(215) 638-3350</a></strong> or <a href="contact.php">send us a message &rarr;</a>';

    function openChat() {
        opened = true;
        chatbot.classList.add('is-open');
        if (!messages.hasChildNodes()) {
            appendBot(GREETING);
        }
        setTimeout(function () { input.focus(); }, 350);
    }

    function closeChat() {
        opened = false;
        chatbot.classList.remove('is-open');
    }

    function appendMsg(html, type) {
        var div = document.createElement('div');
        div.className = 'chatbot__msg chatbot__msg--' + type;
        div.innerHTML = html;
        messages.appendChild(div);
        messages.scrollTop = messages.scrollHeight;
    }

    function appendBot(html) { appendMsg(html, 'bot'); }
    function appendUser(text) { appendMsg(escapeHtml(text), 'user'); }

    function escapeHtml(str) {
        return str.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;');
    }

    function showTyping() {
        var el = document.createElement('div');
        el.className = 'chatbot__typing';
        el.innerHTML = '<span></span><span></span><span></span>';
        messages.appendChild(el);
        messages.scrollTop = messages.scrollHeight;
        return el;
    }

    function getResponse(text) {
        var lower = text.toLowerCase();
        for (var i = 0; i < RESPONSES.length; i++) {
            var r = RESPONSES[i];
            for (var j = 0; j < r.keys.length; j++) {
                if (lower.indexOf(r.keys[j]) !== -1) return r.html;
            }
        }
        return DEFAULT;
    }

    function send(text) {
        text = text.trim();
        if (!text) return;
        appendUser(text);
        input.value = '';
        var typing = showTyping();
        setTimeout(function () {
            if (typing.parentNode) typing.parentNode.removeChild(typing);
            appendBot(getResponse(text));
        }, 750 + Math.random() * 350);
    }

    toggle.addEventListener('click', function () { opened ? closeChat() : openChat(); });
    closeBtn.addEventListener('click', closeChat);
    sendBtn.addEventListener('click', function () { send(input.value); });
    input.addEventListener('keydown', function (e) { if (e.key === 'Enter') send(input.value); });
    qrWrap.addEventListener('click', function (e) {
        var btn = e.target.closest('.chatbot__qr');
        if (btn) send(btn.getAttribute('data-msg'));
    });
}());
