<?php
/**
 * Services section data — used on the home page.
 * Add, remove or reorder cards here; the loop in index.php handles the rest.
 *
 * Keys:
 *   icon  — data-icon value matching the ICONS map in scripts.js
 *   title — card heading (HTML-safe plain text)
 *   desc  — card description (HTML-safe plain text)
 *   href  — "Learn More" link target
 */
$services = [
    [
        'icon'  => 'svcWebDesign',
        'title' => 'Web Designing',
        'desc'  => 'Pixel-perfect, visually stunning interfaces that capture your brand identity and create unforgettable user experiences.',
        'href'  => 'web-designing.php',
    ],
    [
        'icon'  => 'svcWebDev',
        'title' => 'Web Development',
        'desc'  => 'Scalable, high-performance web applications built with modern stacks to deliver seamless digital experiences that grow your business.',
        'href'  => 'web-development.php',
    ],
    [
        'icon'  => 'svcMobile',
        'title' => 'Mobile Development',
        'desc'  => 'Native-quality iOS &amp; Android apps with intuitive UX and robust architecture, turning your vision into an experience users love.',
        'href'  => 'mobile-development.php',
    ],
    [
        'icon'  => 'svcSeo',
        'title' => 'SEO &amp; Digital Marketing',
        'desc'  => 'Data-driven SEO strategies and targeted campaigns that boost your rankings, attract quality traffic and grow revenue consistently.',
        'href'  => 'seo-digital-marketing.php',
    ],
];
