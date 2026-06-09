<?php
/**
 * Portfolio page data — all project cards.
 * Used by portfolio.php foreach loop.
 *
 * Keys:
 *   cat       — filter key: "webdesign" | "webdev" | "seo" | "mobileapp"
 *   badge     — badge label text
 *   logo      — path to logo image (relative to site root, inside img/logos-clients/)
 *   logo_alt  — alt text for the logo
 *   href      — live site URL (used for both overlay and footer link)
 *   url_label — short display URL shown in the card footer
 *   type      — industry / project type label
 *   name      — project name
 *   desc      — project description (plain text)
 */
$portfolio_items = [
    [
        'cat'       => 'webdesign',
        'badge'     => 'Web Designing',
        'logo'      => 'img/logos-clients/lexatlabs.png',
        'logo_alt'  => 'Lexat Labs',
        'href'      => 'https://lexatlabs.com/',
        'url_label' => 'www.lexatlabs.com',
        'type'      => 'Translation and Localization',
        'name'      => 'Lexat Labs',
        'desc'      => 'Modern multi-page corporate website design with full UI/UX wireframing, responsive layouts and animated sections for an Translation and Localization company.',
    ],
    [
        'cat'       => 'webdesign',
        'badge'     => 'Web Designing',
        'logo'      => 'img/logos-clients/newgenbio.png',
        'logo_alt'  => 'Newgen Bio Science',
        'href'      => 'http://newgenbiosciences.com/',
        'url_label' => 'www.newgenbiosciences.com',
        'type'      => 'Synthetic Chemicals',
        'name'      => 'New Gen Biosciences',
        'desc'      => 'Clean, trust-building website design for a Bio Science Products Online profiles.',
    ],
    [
        'cat'       => 'webdesign',
        'badge'     => 'Web Designing',
        'logo'      => 'img/logos-clients/newhorizon.png',
        'logo_alt'  => 'New Horizon Botanicals',
        'href'      => 'https://newhorizonbotanicals.com/',
        'url_label' => 'www.newhorizonbotanicals.com',
        'type'      => 'Bio Science Products',
        'name'      => 'New Horizon Botanicals',
        'desc'      => 'High-energy, conversion-focused website design tailored for New Horizon Botanicals & Chemicals Products — featuring a complete product catalogue, real-time batch availability, verified client testimonials, and dedicated inquiry landing pages to drive B2B/B2C leads.',
    ],
    [
        'cat'       => 'webdesign',
        'badge'     => 'Web Designing',
        'logo'      => 'img/logos-clients/greenindia.png',
        'logo_alt'  => 'GreenWorld NGO',
        'href'      => 'https://greenindiapools.com/',
        'url_label' => 'www.greenindiapools.com',
        'type'      => 'Swimnubg Pools Constructing',
        'name'      => 'Green India Aquascapes',
        'desc'      => 'Impact-driven website for Aqua Scape Solutions — project showcases, service inquiry forms, client success galleries, consultation booking, and media gallery.',
    ],
    [
        'cat'       => 'webdev',
        'badge'     => 'Web Development',
        'logo'      => 'img/logos-clients/countryoven.png',
        'logo_alt'  => 'Country Oven',
        'href'      => 'http://countryoven.com/',
        'url_label' => 'www.countryoven.com',
        'type'      => 'E-Commerce',
        'name'      => 'Country Oven',
        'desc'      => 'Full-stack e-commerce platform built with .Net and Angular — product catalogue, cart, Razorpay payment integration, order tracking and admin dashboard.',
    ],
    [
        'cat'       => 'webdesign',
        'badge'     => 'Web Designing',
        'logo'      => 'img/logos-clients/sribhuvi.png',
        'logo_alt'  => 'Srii Bhuvi Developers',
        'href'      => 'http://sriibhuvidevelopers.com/',
        'url_label' => 'www.sriibhuvidevelopers.com',
        'type'      => 'Real Estate',
        'name'      => 'Srii Bhuvi Developers',
        'desc'      => 'Impact-driven website for Srii Bhuvi Developers — ongoing and upcoming project gallery, Google Maps integration for project locations, sales consultant profiles, inquiry capture forms, and a dynamic CMS to manage construction project updates. Tailored for a B2C construction and real estate brand',
    ],
    [
        'cat'       => 'webdesign',
        'badge'     => 'Web Designing',
        'logo'      => 'img/logos-clients/b1online.png',
        'logo_alt'  => 'b1 Online Training',
        'href'      => 'https://b1onlinetrainings.com/',
        'url_label' => 'www.b1onlinetrainings.com',
        'type'      => 'Online Trainings',
        'name'      => 'b1 Online Trainings',
        'desc'      => 'On-demand online training booking web app — real-time slot booking for different technologies, trainer profiles, review system, and a React-based SPA with Node.js backend.',
    ],
    [
        'cat'       => 'seo',
        'badge'     => 'SEO & Digital Marketing',
        'logo'      => 'img/logos-clients/bensalemsmiles.png',
        'logo_alt'  => 'Bensalem Smiles 4u',
        'href'      => 'https://bensalemsmiles.com/',
        'url_label' => 'www.bensalemsmiles.com',
        'type'      => 'Bensalem Smiles 4u',
        'name'      => 'Bensalem Smiles 4u',
        'desc'      => 'End-to-end digital marketing including technical SEO audit, content strategy, Meta Ads and Google Ads management that doubled new patient inquiries in 4 months.',
    ],
    [
        'cat'       => 'mobileapp',
        'badge'     => 'Mobile APP Development',
        'logo'      => 'img/logos-clients/elite.png',
        'logo_alt'  => 'Elite Mart',
        'href'      => 'https://elitemart.co.in/',
        'url_label' => 'www.elitemart.co.in',
        'type'      => 'online Grocery Store',
        'name'      => 'Elite Mart',
        'desc'      => 'Cross-platform React Native online grocery store app — real-time delivery tracking, in-app payments, push notifications for order updates and offers, plus a powerful admin panel to manage products, inventory, pricing, and customer orders.',
    ],
    [
        'cat'       => 'webdesign',
        'badge'     => 'Web Designing',
        'logo'      => 'img/logos-clients/hanvesh.png',
        'logo_alt'  => 'Hanvesh Media Solutions',
        'href'      => 'https://hanveshmediasolutions.com/',
        'url_label' => 'www.hanveshmediasolutions.com',
        'type'      => 'SEO & Digital Marketing',
        'name'      => 'SEO & Digital Marketing',
        'desc'      => 'WordPress-powered SEO & Digital Marketing website — custom SEO strategies, performance analytics, goal tracking dashboards, and client success metrics — fully responsive and conversion-optimized',
    ],
];
