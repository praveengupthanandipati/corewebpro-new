<?php
/**
 * Web Development page data — all repeated sections in one file.
 * Loaded once with require_once; shared across six foreach loops.
 *
 * $dev_frontend_cards  — Frontend layer service cards (6)   — no per-item AOS
 * $dev_backend_cards   — Backend layer service cards (6)    — no per-item AOS
 * $dev_build_types     — What We Build cards (6)            — AOS ($i%3)*60
 * $dev_process         — Development process steps (6)      — AOS ($i%3)*80
 * $dev_techstack       — Tech stack groups (4 groups)       — single AOS on wrapper
 * $dev_faqs            — FAQs (6)                           — single AOS on wrapper
 *
 * svg keys = inner SVG content; outer <svg> tag is in the template.
 * faq 'a' values are trusted HTML strings — output raw (not htmlspecialchars).
 */

/* ── Frontend Service Cards ──────────────────────────────────────── */
$dev_frontend_cards = [
    [
        'svg'   => '<polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>',
        'title' => 'HTML5 / CSS3 / JavaScript',
        'desc'  => 'Handcrafted semantic HTML, modern CSS (custom properties, grid, flexbox, animations) and clean vanilla JavaScript — the solid foundation every frontend is built on.',
    ],
    [
        'svg'   => '<circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/>',
        'title' => 'React & Vue.js SPAs',
        'desc'  => 'Component-driven single-page applications built with React or Vue.js — state management, routing, API integration and optimised rendering for fast, dynamic interfaces.',
    ],
    [
        'svg'   => '<rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/>',
        'title' => 'Responsive & Mobile-First',
        'desc'  => 'Every layout is built to work flawlessly on all screen sizes — from small phones to wide desktops. We test across browsers and devices throughout development.',
    ],
    [
        'svg'   => '<path d="M13 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V9z"/><polyline points="13 2 13 9 20 9"/>',
        'title' => 'Design-to-Code from Figma',
        'desc'  => 'We convert Figma or XD design files into production-ready code with precision — matching spacing, typography, colours and interactions exactly as designed.',
    ],
    [
        'svg'   => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'title' => 'Performance & Core Web Vitals',
        'desc'  => 'Image optimisation, lazy loading, code splitting, critical CSS and asset minification — we build for speed from day one, targeting 90+ Lighthouse scores.',
    ],
    [
        'svg'   => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>',
        'title' => 'Accessibility (WCAG)',
        'desc'  => 'Proper semantic elements, ARIA labels, keyboard navigation, sufficient colour contrast and screen-reader compatibility — accessible by default, not as an afterthought.',
    ],
];

/* ── Backend Service Cards ───────────────────────────────────────── */
$dev_backend_cards = [
    [
        'svg'   => '<ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>',
        'title' => 'PHP & Laravel',
        'desc'  => 'Laravel is our primary backend framework — clean MVC architecture, Eloquent ORM, queues, events, scheduling and Artisan tooling. Secure, scalable and a joy to maintain.',
    ],
    [
        'svg'   => '<rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>',
        'title' => 'Node.js & Express',
        'desc'  => 'Non-blocking, event-driven backend logic for real-time applications, chat systems and high-throughput APIs — built with Express.js and structured for production.',
    ],
    [
        'svg'   => '<path d="M18 20V10M12 20V4M6 20v-6"/>',
        'title' => 'REST API Design',
        'desc'  => 'Well-structured RESTful APIs with proper authentication (JWT, Sanctum), versioning, rate limiting, validation and consistent JSON response formats — built for longevity.',
    ],
    [
        'svg'   => '<path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/>',
        'title' => 'Database Design & Optimisation',
        'desc'  => 'Relational database schema design, normalisation, indexing strategies, query optimisation and migrations — ensuring your data layer is efficient and never a bottleneck.',
    ],
    [
        'svg'   => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'title' => 'Authentication & Security',
        'desc'  => 'Secure login systems, role-based access control, session management, input sanitisation, CSRF protection and OWASP best practices — security built in, not bolted on.',
    ],
    [
        'svg'   => '<path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>',
        'title' => 'CMS Integration',
        'desc'  => 'WordPress, custom Laravel admin panels and headless CMS solutions — giving non-technical clients full control over their content without touching the code.',
    ],
];

/* ── What We Build ───────────────────────────────────────────────── */
$dev_build_types = [
    [
        'title' => 'Business & Corporate Websites',
        'desc'  => 'Multi-page websites for companies, agencies and service providers — fast-loading, SEO-friendly, CMS-backed and easy for clients to update themselves.',
    ],
    [
        'title' => 'E-Commerce Stores',
        'desc'  => 'Custom WooCommerce stores and Laravel-based shops with product management, payment gateways (Razorpay, Stripe), order tracking and admin dashboards.',
    ],
    [
        'title' => 'Web Applications & Portals',
        'desc'  => 'Multi-role web apps — user dashboards, admin panels, booking systems, CRMs and internal tools built with Laravel or React + Node.js backends.',
    ],
    [
        'title' => 'Landing Pages & Lead Funnels',
        'desc'  => 'High-performance landing pages built for speed and conversion — 100/100 PageSpeed scores, form integrations and pixel-perfect implementation from any design.',
    ],
    [
        'title' => 'REST APIs & Integrations',
        'desc'  => 'Standalone REST APIs, third-party service integrations (payment, SMS, maps, social login) and API wrappers that connect your web app to the tools you already use.',
    ],
    [
        'title' => 'WordPress Development',
        'desc'  => 'Custom WordPress themes from scratch, plugin development, Gutenberg block creation, WooCommerce customisation and performance optimisation for existing WordPress sites.',
    ],
];

/* ── Development Process ─────────────────────────────────────────── */
$dev_process = [
    [
        'title' => 'Scoping & Requirements',
        'desc'  => 'We start with a detailed scoping session — mapping out every feature, user role, integration and edge case. A clear scope document prevents surprises during build and keeps the project on budget.',
    ],
    [
        'title' => 'Architecture & Tech Planning',
        'desc'  => 'We choose the right tech stack for your project — not the trendiest one. Database schema, API structure, folder layout and third-party dependencies are planned before a line of code is written.',
    ],
    [
        'title' => 'Frontend Build',
        'desc'  => 'HTML/CSS structure, component development, responsive layout, animations and interactivity are built first — giving you something real and visual to review early in the process.',
    ],
    [
        'title' => 'Backend & API Build',
        'desc'  => 'Business logic, database models, controllers, API endpoints, authentication and integrations are built, unit-tested and connected to the frontend — one feature at a time.',
    ],
    [
        'title' => 'Testing & QA',
        'desc'  => 'Cross-browser and cross-device testing, form validation, edge-case handling, performance audits and security checks. You get a staging link to test everything before we go live.',
    ],
    [
        'title' => 'Deployment & Handoff',
        'desc'  => 'We deploy to your server or hosting provider, configure DNS, set up SSL, run final checks and hand over all source code, credentials and documentation. Post-launch support is included.',
    ],
];

/* ── Tech Stack (grouped) ────────────────────────────────────────── */
$dev_techstack = [
    [
        'label' => 'Frontend',
        'badge' => 'dev-layer__badge--fe',
        'items' => [
            [ 'icon' => 'html5/html5-original',             'name' => 'HTML5',        'role' => 'Semantic Markup' ],
            [ 'icon' => 'css3/css3-original',               'name' => 'CSS3',         'role' => 'Styles & Animations' ],
            [ 'icon' => 'javascript/javascript-original',   'name' => 'JavaScript',   'role' => 'Interactivity & Logic' ],
            [ 'icon' => 'typescript/typescript-original',   'name' => 'TypeScript',   'role' => 'Typed JavaScript' ],
            [ 'icon' => 'react/react-original',             'name' => 'React',        'role' => 'Component UI' ],
            [ 'icon' => 'vuejs/vuejs-original',             'name' => 'Vue.js',       'role' => 'Progressive Framework' ],
            [ 'icon' => 'bootstrap/bootstrap-original',     'name' => 'Bootstrap 5',  'role' => 'CSS Framework' ],
            [ 'icon' => 'tailwindcss/tailwindcss-original', 'name' => 'Tailwind CSS', 'role' => 'Utility-First CSS' ],
        ],
    ],
    [
        'label' => 'Backend',
        'badge' => 'dev-layer__badge--be',
        'items' => [
            [ 'icon' => 'php/php-original',           'name' => 'PHP 8',      'role' => 'Server Language' ],
            [ 'icon' => 'laravel/laravel-original',   'name' => 'Laravel',    'role' => 'PHP Framework' ],
            [ 'icon' => 'nodejs/nodejs-original',     'name' => 'Node.js',    'role' => 'JS Runtime' ],
            [ 'icon' => 'express/express-original',   'name' => 'Express.js', 'role' => 'Node Framework' ],
            [ 'icon' => 'wordpress/wordpress-plain',  'name' => 'WordPress',  'role' => 'CMS Platform' ],
        ],
    ],
    [
        'label' => 'Database',
        'badge' => 'dev-layer__badge--db',
        'items' => [
            [ 'icon' => 'mysql/mysql-original',           'name' => 'MySQL',      'role' => 'Relational DB' ],
            [ 'icon' => 'postgresql/postgresql-original', 'name' => 'PostgreSQL', 'role' => 'Advanced Relational' ],
            [ 'icon' => 'mongodb/mongodb-original',       'name' => 'MongoDB',    'role' => 'NoSQL Document DB' ],
            [ 'icon' => 'redis/redis-original',           'name' => 'Redis',      'role' => 'Caching & Sessions' ],
        ],
    ],
    [
        'label' => 'Tools',
        'badge' => 'dev-layer__badge--tools',
        'items' => [
            [ 'icon' => 'git/git-original',                                          'name' => 'Git',    'role' => 'Version Control' ],
            [ 'icon' => 'github/github-original',                                    'name' => 'GitHub', 'role' => 'Code Hosting' ],
            [ 'icon' => 'linux/linux-original',                                      'name' => 'Linux',  'role' => 'Server OS' ],
            [ 'icon' => 'nginx/nginx-original',                                      'name' => 'Nginx',  'role' => 'Web Server' ],
            [ 'icon' => 'amazonwebservices/amazonwebservices-plain-wordmark',         'name' => 'AWS',    'role' => 'Cloud Hosting' ],
        ],
    ],
];

/* ── FAQs ────────────────────────────────────────────────────────── */
$dev_faqs = [
    [
        'q' => 'Do you do design as well, or only development?',
        'a' => '<p>This page covers our development service. We also offer a dedicated <a href="/web-designing">Web Designing service</a> — UI/UX design, wireframing and Figma prototypes. Many clients hire us for both together and we offer bundled pricing for design + development projects.</p>',
    ],
    [
        'q' => 'What do I need to provide before development starts?',
        'a' => '<p>For design-to-code projects: your approved Figma or XD design files, brand assets (logo, fonts, icons) and final content (text, images). For full-stack projects: a detailed brief describing features, user roles and functionality. We help you define the scope if you\'re unsure — a scoping call is always included at the start.</p>',
    ],
    [
        'q' => 'Will I own the source code after the project?',
        'a' => '<p>Yes — on full payment, all source code, database schemas and project files belong to you entirely. We hand over a complete Git repository. No lock-ins, no monthly fees for code access, no licensing conditions on custom-built code.</p>',
    ],
    [
        'q' => 'How long does a typical web development project take?',
        'a' => '<p>It depends on scope. A 5-page static or CMS website typically takes 7–14 working days. A landing page is 3–5 days. A custom web application with backend logic and multiple user roles is usually 4–10 weeks depending on complexity. We provide a firm timeline in the proposal before work begins.</p>',
    ],
    [
        'q' => 'Do you provide hosting and server setup?',
        'a' => '<p>We can deploy to your existing server or hosting account (shared hosting, VPS, AWS, DigitalOcean, etc.) as part of the project. We can also advise on the right hosting choice for your needs. We do not resell hosting — you own and pay for your server directly, with no middleman markups.</p>',
    ],
    [
        'q' => 'Is support included after launch?',
        'a' => '<p>Yes — every project includes a free post-launch support window (typically 15–30 days) to address any bugs or issues that surface after going live. Ongoing maintenance, updates and feature additions can be arranged on a retainer or per-task basis after that.</p>',
    ],
];
