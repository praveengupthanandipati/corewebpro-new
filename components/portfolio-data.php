<?php
/**
 * Portfolio page data — all project cards.
 * Used by portfolio.php foreach loop.
 *
 * Keys:
 *   cat       — filter key: "graphic" | "webdesign" | "webdev"
 *   badge     — badge label text
 *   seed      — picsum seed for the thumbnail (600×380)
 *   alt       — thumbnail img alt text
 *   logo_name — ui-avatars name param (first word used as initials source)
 *   logo_bg   — ui-avatars background hex (no #)
 *   href      — live site URL (used for both overlay and footer link)
 *   url_label — short display URL shown in the card footer
 *   type      — industry / project type label
 *   name      — project name
 *   desc      — project description (plain text)
 */
$portfolio_items = [
    [
        'cat'       => 'graphic',
        'badge'     => 'Graphic Designing',
        'seed'      => 'brandmint25',
        'alt'       => 'BrandMint Co. – Brand Identity',
        'logo_name' => 'BrandMint',
        'logo_bg'   => 'FF6B35',
        'href'      => 'https://brandmint.co',
        'url_label' => 'brandmint.co',
        'type'      => 'Marketing Agency',
        'name'      => 'BrandMint Co.',
        'desc'      => 'Complete brand identity including logo suite, colour palette, typography system and brand guidelines for a growing digital marketing agency.',
    ],
    [
        'cat'       => 'graphic',
        'badge'     => 'Graphic Designing',
        'seed'      => 'freshbite25',
        'alt'       => 'FreshBite Kitchen – Restaurant Branding',
        'logo_name' => 'FreshBite',
        'logo_bg'   => '22C55E',
        'href'      => 'https://freshbite.in',
        'url_label' => 'freshbite.in',
        'type'      => 'Restaurant & Food',
        'name'      => 'FreshBite Kitchen',
        'desc'      => 'Vibrant restaurant branding featuring logo design, menu layouts, packaging mockups and social media templates for a cloud kitchen startup.',
    ],
    [
        'cat'       => 'webdesign',
        'badge'     => 'Web Designing',
        'seed'      => 'technova25',
        'alt'       => 'TechNova Solutions – Corporate Website',
        'logo_name' => 'TechNova',
        'logo_bg'   => '002b86',
        'href'      => 'https://technova.in',
        'url_label' => 'technova.in',
        'type'      => 'IT Services',
        'name'      => 'TechNova Solutions',
        'desc'      => 'Modern multi-page corporate website design with full UI/UX wireframing, responsive layouts and animated sections for an IT solutions company.',
    ],
    [
        'cat'       => 'webdesign',
        'badge'     => 'Web Designing',
        'seed'      => 'bloomcare25',
        'alt'       => 'BloomCare Hospital – Healthcare Website',
        'logo_name' => 'BloomCare',
        'logo_bg'   => '06B6D4',
        'href'      => 'https://bloomcare.in',
        'url_label' => 'bloomcare.in',
        'type'      => 'Healthcare',
        'name'      => 'BloomCare Hospital',
        'desc'      => 'Clean, trust-building website design for a multi-specialty hospital — doctor profiles, department pages, appointment request forms and a patient-friendly navigation structure.',
    ],
    [
        'cat'       => 'webdesign',
        'badge'     => 'Web Designing',
        'seed'      => 'eduspark25',
        'alt'       => 'EduSpark Academy – Education Website',
        'logo_name' => 'EduSpark',
        'logo_bg'   => '8B5CF6',
        'href'      => 'https://eduspark.in',
        'url_label' => 'eduspark.in',
        'type'      => 'Education',
        'name'      => 'EduSpark Academy',
        'desc'      => 'Energetic, conversion-optimised website design for an ed-tech coaching institute — course catalogue, batch schedules, testimonials and inquiry landing pages.',
    ],
    [
        'cat'       => 'webdev',
        'badge'     => 'Web Development',
        'seed'      => 'shopzone25',
        'alt'       => 'ShopZone India – E-Commerce Store',
        'logo_name' => 'ShopZone',
        'logo_bg'   => 'F59E0B',
        'href'      => 'https://shopzone.in',
        'url_label' => 'shopzone.in',
        'type'      => 'E-Commerce',
        'name'      => 'ShopZone India',
        'desc'      => 'Full-stack e-commerce platform built with Laravel and Vue.js — product catalogue, cart, Razorpay payment integration, order tracking and admin dashboard.',
    ],
    [
        'cat'       => 'webdev',
        'badge'     => 'Web Development',
        'seed'      => 'homesphere25',
        'alt'       => 'HomeSphere Realty – Property Portal',
        'logo_name' => 'HomeSphere',
        'logo_bg'   => '0EA5E9',
        'href'      => 'https://homesphere.in',
        'url_label' => 'homesphere.in',
        'type'      => 'Real Estate',
        'name'      => 'HomeSphere Realty',
        'desc'      => 'Property listing portal with advanced search filters, Google Maps integration, agent profiles, lead capture forms and a dynamic CMS for managing listings.',
    ],
    [
        'cat'       => 'webdesign',
        'badge'     => 'Web Designing',
        'seed'      => 'greenworld25',
        'alt'       => 'GreenWorld NGO – Non-Profit Website',
        'logo_name' => 'GreenWorld',
        'logo_bg'   => '16A34A',
        'href'      => 'https://greenworldngo.org',
        'url_label' => 'greenworldngo.org',
        'type'      => 'NGO / Non-Profit',
        'name'      => 'GreenWorld NGO',
        'desc'      => 'Impact-driven website for an environmental non-profit — campaign pages, volunteer signup, donation flow design, events calendar and media gallery.',
    ],
    [
        'cat'       => 'webdev',
        'badge'     => 'Web Development',
        'seed'      => 'quickserve25',
        'alt'       => 'QuickServe App – Service Booking Platform',
        'logo_name' => 'QuickServe',
        'logo_bg'   => 'EF4444',
        'href'      => 'https://quickserve.app',
        'url_label' => 'quickserve.app',
        'type'      => 'On-Demand Services',
        'name'      => 'QuickServe App',
        'desc'      => 'On-demand home services booking web app — real-time slot booking, service provider profiles, review system and React-based SPA with Node.js backend.',
    ],
    [
        'cat'       => 'webdev',
        'badge'     => 'Web Development',
        'seed'      => 'fintrack25',
        'alt'       => 'FinTrack Pro – Finance Dashboard',
        'logo_name' => 'FinTrack',
        'logo_bg'   => '6366F1',
        'href'      => 'https://fintrackpro.in',
        'url_label' => 'fintrackpro.in',
        'type'      => 'Fintech / Finance',
        'name'      => 'FinTrack Pro',
        'desc'      => 'Personal finance dashboard web application with expense tracking, budget planning, chart visualisations and a secure authentication system built on React and Laravel.',
    ],
];
