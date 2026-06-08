/**
 * BENSALEM NEW - INTERACTIVE SCROLL ANIMATIONS SYSTEM
 * Lightweight, high-performance scroll reveal using IntersectionObserver.
 * Features:
 *   - IntersectionObserver triggers
 *   - Staggered animations using 'data-reveal-delay'
 *   - Repeat animations up/down using 'data-reveal-repeat="true"'
 */

/* -----------------------------------------------
   NAV LOGO SVG — injected into #navLogoBrand
----------------------------------------------- */
var NAV_LOGO_SVG = '<svg class="nav-logo-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 429.2 296.6" role="img" aria-label="Core Web Pro">'
    + '<path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FBAA19;" d="M304.6,117.6L304.6,117.6c0-6.3,1.5-12.7,4.2-17.9c6.4-12.4,19.3-21,34.2-21V43.8c-34.4,0-63.4,23.8-71.3,55.9c-1.4,5.6-2.1,11.9-2.1,17.9h0v72.9c11.9,0,22.5-6,28.8-15.1c3.9-5.6,6.2-12.4,6.2-19.8V117.6z"/>'
    + '<path class="logo-w" style="fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;" d="M414.3,99.7c-3.2-13.2-10.1-25-19.4-34.4c-11.9-11.9-27.9-19.8-45.7-21.3v35.2c8.2,1.3,15.5,5.2,21.1,10.8c2.8,2.8,5.2,6.1,7.1,9.7h-61.4c-0.6,0.9-1.1,1.8-1.6,2.8c-2.3,4.5-3.5,9.8-3.5,15.1v6.1h0v10.9h66.5h37c1.4-5.6,2.1-11,2.1-17C416.4,111.5,415.6,105.3,414.3,99.7"/>'
    + '<path class="logo-w" style="fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;" d="M343,155.5c-13.6,0-25.5-7-32.3-17.6v17.6c0,8.6-2.7,16.7-7.3,23.3c11.4,7.4,25,11.6,39.6,11.6c20.2,0,38.6-8.2,51.8-21.5l-24.7-24.7C363.2,151.2,353.6,155.5,343,155.5"/>'
    + '<path class="logo-w" style="fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;" d="M246.2,65.9c-14.5-14.3-31.9-21.5-52.2-21.5c-20.3,0-37.6,7.2-52.1,21.5c-0.9,0.9-1.8,1.8-2.6,2.8C128,81,121.7,95.4,120.6,111.9c-0.1,1.9-0.2,3.8-0.2,5.7c0,1.9,0.1,3.8,0.2,5.7c-1.1,7.7-4.5,14.5-10.3,20.4c-7.1,7.3-15.7,10.9-25.8,10.9c-10.1,0-18.6-3.6-25.7-10.9c-7-7.3-10.6-16-10.6-26c0-10.2,3.5-18.9,10.5-26.3c7.1-7.3,15.7-11,25.8-11h13.2c8.7,0,16.2-3.1,22.3-9.3c3.5-3.5,6-7.8,7.5-12.9c-12.5-9.1-26.9-13.7-43.1-13.7c-2.5,0-5,0.1-7.5,0.3c-2.1,0.2-4.2,0.5-6.3,0.8c-14.5,2.6-27.2,9.3-38.3,20.3C18,80.2,10.8,97.4,10.8,117.6c0,20.2,7.2,37.4,21.7,51.6c11.1,10.9,23.8,17.6,38.3,20.1c2.1,0.4,4.2,0.6,6.3,0.8c2.4,0.2,4.9,0.3,7.5,0.3c16.2,0,30.6-4.6,43.1-13.6c3.1-2.3,6.2-4.8,9.1-7.7c0.9-0.9,1.8-1.8,2.7-2.7c11.4-12.3,17.7-26.7,18.9-43.1c0.1-1.9,0.2-3.8,0.2-5.7c0-1.9-0.1-3.9-0.2-5.8c1.1-7.8,4.4-14.6,10.1-20.5c7-7.3,15.6-11,25.8-11c10.1,0,18.7,3.7,25.8,11c7.1,7.3,10.7,16.1,10.7,26.3c0,10.1-3.6,18.8-10.7,26c-7.1,7.3-15.7,10.9-25.8,10.9c-10.1,0-18.6-3.6-25.7-10.9c-3.2-3.3-5.6-6.9-7.4-10.8c-0.1,1.3-0.3,2.5-0.3,3.8c-3,12.9-9.1,23.9-18.1,33.1c14.3,13.8,31.5,20.8,51.5,20.8c20.3,0,37.7-7.1,52.2-21.3c14.5-14.2,21.7-31.4,21.7-51.6C268,97.4,260.7,80.2,246.2,65.9"/>'
    + '<rect style="fill-rule:evenodd;clip-rule:evenodd;fill:#FBAA19;" x="114.1" y="229.8" width="35.8" height="11.9"/>'
    + '<path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FBAA19;" d="M360.6,229.8c0-13.3,6.6-19.9,19.9-19.9h15.9c13.3,0,19.9,6.6,19.9,19.9v15.9c0,13.3-6.6,19.9-19.9,19.9h-15.9c-13.3,0-19.9-6.6-19.9-19.9V229.8z M380.5,221.9c-5.3,0-8,2.7-8,8v15.9c0,5.3,2.7,8,8,8h15.9c5.3,0,8-2.6,8-8v-15.9c0-5.3-2.7-8-8-8H380.5z"/>'
    + '<path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FBAA19;" d="M307,221.9v43.8h-11.9v-55.8h35.8c13.3,0,19.9,6.6,19.9,19.9c0,11.1-4.6,17.5-13.9,19.4l13.9,16.5h-15.6l-13.3-15.9H315v-11.9h15.9c5.3,0,8-2.6,8-8c0-5.3-2.7-8-8-8H307z"/>'
    + '<path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FBAA19;" d="M241.5,221.9v43.8h-11.9v-55.8h35.8c13.3,0,19.9,6.6,19.9,19.9c0,13.3-6.6,19.9-19.9,19.9h-15.9v-11.9h15.9c5.3,0,8-2.6,8-8c0-5.3-2.7-8-8-8H241.5z"/>'
    + '<path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FBAA19;" d="M162.3,265.7v-55.8h35.8c13.3,0,19.9,5.3,19.9,15.9c0,4.3-1.1,7.7-3.3,10.3c2.2,2.9,3.3,6.7,3.3,11.6c0,11.9-6.6,17.9-19.9,17.9H162.3z M174.3,221.9v31.9h23.9c5.3,0,8-2,8-6c0-4-2.7-6-8-6h-15.9v-11.9h15.9c5.3,0,8-1.3,8-4c0-2.7-2.7-4-8-4H174.3z"/>'
    + '<path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FBAA19;" d="M114.1,209.9h35.8v11.9h-35.8c-5.3,0-8,2.7-8,8v15.9c0,5.3,2.7,8,8,8H138h11.9l0,11.9h-35.8c-13.3,0-19.9-6.6-19.9-19.9v-15.9C94.2,216.6,100.8,209.9,114.1,209.9"/>'
    + '<polygon style="fill-rule:evenodd;clip-rule:evenodd;fill:#FBAA19;" points="50.3,221 56.8,209.9 69.9,209.9 56.8,232.1 60.3,239.8 76.8,209.9 89.8,209.9 60.3,265.6 50.3,243.2 40.4,265.6 10.8,209.9 23.9,209.9 40.4,239.8 43.8,232.1 30.7,209.9 43.8,209.9"/>'
    + '</svg>';

(function () {
    var brand = document.getElementById('navLogoBrand');
    if (brand) brand.innerHTML = NAV_LOGO_SVG;
}());

/* -----------------------------------------------
   SVG ICONS LIBRARY — injected via data-icon / data-stars attributes
----------------------------------------------- */
var ICONS = {
    /* Service section */
    svcWebDesign:  '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/></svg>',
    svcWebDev:     '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>',
    svcMobile:     '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>',
    svcSeo:        '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>',
    /* About section */
    aboutCreative: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"/><line x1="16" y1="8" x2="2" y2="22"/><line x1="17.5" y1="15" x2="9" y2="15"/></svg>',
    aboutIdeas:    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>',
    aboutDesigner: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"/></svg>',
    aboutDeveloper:'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="4 17 10 11 4 5"/><line x1="12" y1="19" x2="20" y2="19"/></svg>',
    /* Process section */
    procPlanning:  '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/><path d="M9 12h6M9 16h4"/></svg>',
    procDesign:    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>',
    procTesting:   '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>',
    procDeploy:    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 16 12 12 8 16"/><line x1="12" y1="12" x2="12" y2="21"/><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"/></svg>',
    procSupport:   '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3z"/><path d="M3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg>',
    /* Hero section */
    heroScrollRing:  '<svg viewBox="0 0 100 100" width="90" height="90"><defs><path id="scroll-circle" d="M 50,50 m -32,0 a 32,32 0 1,1 64,0 a 32,32 0 1,1 -64,0"/></defs><text font-size="9.5" fill="rgba(255,255,255,0.72)" font-family="Poppins,sans-serif" letter-spacing="2.8"><textPath href="#scroll-circle">SCROLL DOWN · SCROLL DOWN · </textPath></text></svg>',
    heroScrollArrow: '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.9)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="4" x2="12" y2="20"/><polyline points="6 14 12 20 18 14"/></svg>',
    /* General */
    arrowRight:   '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>',
    chevronLeft:  '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>',
    chevronRight: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>',
    chevronDown:  '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>',
    starFilled:   '<svg viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>',
    /* Contact icons */
    iconMapPin:   '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>',
    iconPhone:    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.44 2 2 0 0 1 3.6 1.27h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.96a16 16 0 0 0 6.13 6.13l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>',
    iconEnvelope: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>',
    iconClock:    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
    /* Social media icons */
    socialFb:     '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>',
    socialTw:     '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg>',
    socialIg:     '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>',
    socialLi:     '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>',
    socialYt:     '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.41 19.1C5.12 19.56 12 19.56 12 19.56s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.95 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.48z"/><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"/></svg>',
    socialWa:     '<svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>',
};

/* inject [data-icon] placeholders and [data-stars] containers */
(function () {
    document.querySelectorAll('[data-icon]').forEach(function (el) {
        var name = el.getAttribute('data-icon');
        if (ICONS[name]) el.innerHTML = ICONS[name];
    });
    document.querySelectorAll('[data-stars]').forEach(function (el) {
        var n = parseInt(el.getAttribute('data-stars'), 10) || 5;
        el.innerHTML = Array(n).fill(ICONS.starFilled).join('');
    });
}());

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
        btn.innerHTML = 'Read more' + ICONS.chevronDown;

        el.parentNode.insertBefore(btn, el.nextSibling);

        /* show button only when text actually overflows */
        if (el.scrollHeight > el.clientHeight + 2) {
            btn.classList.add('is-visible');
        }

        btn.addEventListener('click', function () {
            var expanded = el.classList.toggle('is-expanded');
            btn.classList.toggle('is-expanded', expanded);
            btn.innerHTML = (expanded ? 'Read less ' : 'Read more ') + ICONS.chevronDown;
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

/* -----------------------------------------------
   FAQ ACCORDION — shared across all pages
----------------------------------------------- */
document.querySelectorAll('.faq-q').forEach(function (btn) {
    btn.addEventListener('click', function () {
        var item   = btn.closest('.faq-item');
        var isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item.open').forEach(function (o) {
            o.classList.remove('open');
            o.querySelector('.faq-q').setAttribute('aria-expanded', 'false');
        });
        if (!isOpen) {
            item.classList.add('open');
            btn.setAttribute('aria-expanded', 'true');
        }
    });
});

/* ------------------------------------------------
   MOBILE NAV ACCORDION — offcanvas menu
----------------------------------------------- */
document.querySelectorAll('.mob-nav__toggle').forEach(function (btn) {
    btn.addEventListener('click', function () {
        var group  = btn.closest('.mob-nav__item--group');
        var isOpen = group.classList.contains('is-open');
        document.querySelectorAll('.mob-nav__item--group.is-open').forEach(function (g) {
            g.classList.remove('is-open');
            g.querySelector('.mob-nav__toggle').setAttribute('aria-expanded', 'false');
        });
        if (!isOpen) {
            group.classList.add('is-open');
            btn.setAttribute('aria-expanded', 'true');
        }
    });
});
