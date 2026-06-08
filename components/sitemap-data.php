<?php
/**
 * Sitemap page data.
 * Loaded once with require_once; one foreach loop over $sitemap_groups.
 *
 * $sitemap_groups — Page groups (2)   AOS: $i * 120 per column
 *
 * group 'svg'   = SVG inner path content — outer <svg> tag is shared.
 * group 'links' = array of ['href', 'label', 'desc'] — all htmlspecialchars.
 */

$sitemap_groups = [
    [
        'eyebrow' => 'Main Navigation',
        'title'   => 'Main Pages',
        'svg'     => '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>',
        'links'   => [
            ['href' => 'index.php',     'label' => 'Home',        'desc' => 'Company overview, services and featured work'],
            ['href' => 'about.php',     'label' => 'About Us',    'desc' => 'Who we are, our mission and core values'],
            ['href' => 'team.php',      'label' => 'Our Team',    'desc' => 'Meet the designers and developers behind Core Web Pro'],
            ['href' => 'portfolio.php', 'label' => 'Portfolio',   'desc' => 'Showcasing our best web design and development work'],
            ['href' => 'pricing.php',   'label' => 'Pricing',     'desc' => 'Transparent packages with no hidden charges'],
            ['href' => 'contact.php',   'label' => 'Contact Us',  'desc' => 'Phone, email, WhatsApp or enquiry form'],
            ['href' => 'enquiry.php',   'label' => 'Get a Quote', 'desc' => 'Submit your project details for a free proposal'],
        ],
    ],
    [
        'eyebrow' => 'What We Do',
        'title'   => 'Our Services',
        'svg'     => '<rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>',
        'links'   => [
            ['href' => 'web-designing.php',        'label' => 'Web Designing',           'desc' => 'UI/UX design, wireframes and Figma-based visual design'],
            ['href' => 'web-development.php',       'label' => 'Web Development',         'desc' => 'Custom HTML, PHP, WordPress and Laravel development'],
            ['href' => 'mobile-development.php',    'label' => 'Mobile App Development',  'desc' => 'React Native, Flutter and cross-platform mobile apps'],
            ['href' => 'seo-digital-marketing.php', 'label' => 'SEO & Digital Marketing', 'desc' => 'Search engine optimisation, Google Ads and social campaigns'],
        ],
    ],
];
