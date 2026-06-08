<?php
/**
 * Process section step data — used on the home page.
 * Add, remove or reorder steps here; badge numbers and AOS delays
 * are computed automatically in the loop in index.php.
 *
 * Keys:
 *   icon  — data-icon value matching the ICONS map in scripts.js
 *   title — step heading (plain text)
 *   desc  — step description (plain text)
 */
$process_steps = [
    [
        'icon'  => 'procPlanning',
        'title' => 'Planning',
        'desc'  => 'We gather your requirements, define goals and scope, then build a clear roadmap and timeline as the strong foundation for success.',
    ],
    [
        'icon'  => 'procDesign',
        'title' => 'Design',
        'desc'  => 'Our designers craft stunning wireframes, visual mockups and interactive prototypes that perfectly reflect your brand and delight every user.',
    ],
    [
        'icon'  => 'svcWebDev',
        'title' => 'Development',
        'desc'  => 'We build your website using modern, scalable technologies — delivering clean code, fast performance and a seamless, engaging user experience.',
    ],
    [
        'icon'  => 'procTesting',
        'title' => 'Testing',
        'desc'  => 'Every feature is rigorously tested across devices, browsers and performance metrics to ensure a polished, bug-free, high-quality final product.',
    ],
    [
        'icon'  => 'procDeploy',
        'title' => 'Deployment',
        'desc'  => 'We launch your project to production with precision and zero downtime, ensuring a smooth go-live with optimal performance and server configuration.',
    ],
    [
        'icon'  => 'procSupport',
        'title' => 'Support',
        'desc'  => 'Post-launch, we provide ongoing maintenance, security updates and dedicated technical support to keep your website fast, secure and always available.',
    ],
];
