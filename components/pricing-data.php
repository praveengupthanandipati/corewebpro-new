<?php
/**
 * Pricing page data — all repeated sections.
 * Loaded once with require_once; shared across three foreach loops.
 *
 * $pricing_packages — Pricing cards (4)    AOS: $i * 100
 * $pricing_addons   — Add-on cards (8)     AOS: $i * 40
 * $pricing_faqs     — FAQs (5)             single AOS on wrapper
 *
 * package 'card_mod'      = extra CSS class on .pricing-card (empty = none).
 * package 'popular_badge' = badge text if present (empty = no badge rendered).
 * package 'is_custom'     = true renders the --custom price markup.
 * package 'features'      = array of ['class' => 'yes'|'no', 'text' => '...'].
 * addon   'suffix'        = span text after price ('/page', '/mo', '') — empty = no span.
 * faq     'a'             = trusted HTML string — output raw (not htmlspecialchars).
 */

/* ── Pricing Packages ────────────────────────────────────────────── */
$pricing_packages = [
    [
        'card_mod'     => '',
        'popular_badge'=> '',
        'name'         => 'Single Page',
        'tagline'      => 'A polished one-page website — ideal for startups, freelancers and local businesses.',
        'is_custom'    => false,
        'amount'       => '6,999',
        'price_note'   => 'one-time',
        'timeline'     => '2–4 working days',
        'features'     => [
            ['class' => 'yes', 'text' => 'Single page design & development'],
            ['class' => 'yes', 'text' => 'Mobile responsive'],
            ['class' => 'yes', 'text' => 'Basic logo design'],
            ['class' => 'yes', 'text' => 'Domain registration (1 year)'],
            ['class' => 'yes', 'text' => 'Hosting setup (1 year)'],
            ['class' => 'yes', 'text' => 'Contact form'],
            ['class' => 'yes', 'text' => 'WhatsApp & call integration'],
            ['class' => 'yes', 'text' => '1 revision round'],
            ['class' => 'yes', 'text' => 'Support for 1 year'],
            ['class' => 'no',  'text' => 'Payment gateway'],
        ],
        'btn_href'  => 'enquiry.php?plan=single-page',
        'btn_class' => 'pricing-card__btn--outline',
        'btn_text'  => 'Get Started',
    ],
    [
        'card_mod'     => '',
        'popular_badge'=> '',
        'name'         => 'Multi-Page Website',
        'tagline'      => 'A complete multi-page website for businesses that need a strong online presence.',
        'is_custom'    => false,
        'amount'       => '12,999',
        'price_note'   => 'one-time',
        'timeline'     => '4–5 working days',
        'features'     => [
            ['class' => 'yes', 'text' => 'Up to 15 pages design & development'],
            ['class' => 'yes', 'text' => 'Mobile responsive & cross-browser'],
            ['class' => 'yes', 'text' => 'Basic logo design'],
            ['class' => 'yes', 'text' => 'Domain registration (1 year)'],
            ['class' => 'yes', 'text' => 'Hosting setup (1 year)'],
            ['class' => 'yes', 'text' => 'Contact form & enquiry forms'],
            ['class' => 'yes', 'text' => 'WhatsApp & call integration'],
            ['class' => 'yes', 'text' => 'On-page SEO + meta setup'],
            ['class' => 'yes', 'text' => '2 revision rounds'],
            ['class' => 'yes', 'text' => 'Support for 1 year'],
        ],
        'btn_href'  => 'enquiry.php?plan=multi-page',
        'btn_class' => 'pricing-card__btn--outline',
        'btn_text'  => 'Get Started',
    ],
    [
        'card_mod'     => 'pricing-card--popular',
        'popular_badge'=> 'Most Popular',
        'name'         => 'E-Commerce',
        'tagline'      => 'A fully featured online store ready to accept orders and grow your sales.',
        'is_custom'    => false,
        'amount'       => '49,999',
        'price_note'   => 'one-time',
        'timeline'     => '20–25 working days',
        'features'     => [
            ['class' => 'yes', 'text' => 'Full store design & development'],
            ['class' => 'yes', 'text' => 'Mobile responsive & cross-browser'],
            ['class' => 'yes', 'text' => 'Basic logo design'],
            ['class' => 'yes', 'text' => 'Domain registration (1 year)'],
            ['class' => 'yes', 'text' => 'Hosting setup (1 year)'],
            ['class' => 'yes', 'text' => 'Product catalogue & cart checkout'],
            ['class' => 'yes', 'text' => 'Razorpay / payment gateway'],
            ['class' => 'yes', 'text' => 'WhatsApp & call integration'],
            ['class' => 'yes', 'text' => 'Admin dashboard & order management'],
            ['class' => 'yes', 'text' => '3 revision rounds'],
            ['class' => 'yes', 'text' => 'Support for 1 year'],
        ],
        'btn_href'  => 'enquiry.php?plan=ecommerce',
        'btn_class' => 'pricing-card__btn--solid',
        'btn_text'  => 'Get Started',
    ],
    [
        'card_mod'     => '',
        'popular_badge'=> '',
        'name'         => 'Web App / Portal',
        'tagline'      => 'Custom web portals, dashboards and complex web applications built to your spec.',
        'is_custom'    => true,
        'amount'       => 'Custom',
        'price_note'   => 'quote on request',
        'timeline'     => '4–12 weeks',
        'features'     => [
            ['class' => 'yes', 'text' => 'Custom portal / web app development'],
            ['class' => 'yes', 'text' => 'Mobile responsive & cross-browser'],
            ['class' => 'yes', 'text' => 'Basic logo design'],
            ['class' => 'yes', 'text' => 'Domain & hosting setup (1 year)'],
            ['class' => 'yes', 'text' => 'Custom backend & REST API'],
            ['class' => 'yes', 'text' => 'Multi-role user dashboards'],
            ['class' => 'yes', 'text' => 'Third-party API integrations'],
            ['class' => 'yes', 'text' => 'Payment gateway integration'],
            ['class' => 'yes', 'text' => 'WhatsApp & call integration'],
            ['class' => 'yes', 'text' => 'Unlimited revision rounds'],
            ['class' => 'yes', 'text' => 'Support for 1 year'],
        ],
        'btn_href'  => 'enquiry.php?plan=webapp',
        'btn_class' => 'pricing-card__btn--outline',
        'btn_text'  => 'Request a Quote',
    ],
];

/* ── Add-On Cards ────────────────────────────────────────────────── */
$pricing_addons = [
    [
        'title'  => 'Extra Page',
        'desc'   => 'Additional designed & developed page beyond your package limit.',
        'price'  => '₹1,500',
        'suffix' => '/page',
    ],
    [
        'title'  => 'Logo Design',
        'desc'   => 'Custom logo with 3 concepts, 2 revision rounds and all file formats.',
        'price'  => '₹4,999',
        'suffix' => '',
    ],
    [
        'title'  => 'SEO Monthly Retainer',
        'desc'   => 'On-page SEO, link building, content & monthly ranking report.',
        'price'  => '₹8,999',
        'suffix' => '/mo',
    ],
    [
        'title'  => 'Google Ads Management',
        'desc'   => 'Campaign setup, keyword targeting, ad copy & monthly optimisation.',
        'price'  => '₹6,999',
        'suffix' => '/mo',
    ],
    [
        'title'  => 'Social Media Management',
        'desc'   => '12 posts/month, content calendar, creatives & scheduling.',
        'price'  => '₹5,999',
        'suffix' => '/mo',
    ],
    [
        'title'  => 'Website Maintenance',
        'desc'   => 'Monthly updates, backups, security patches & uptime monitoring.',
        'price'  => '₹2,999',
        'suffix' => '/mo',
    ],
    [
        'title'  => 'Mobile App (React Native)',
        'desc'   => 'Android + iOS app built alongside your website — shared backend.',
        'price'  => 'From ₹49,999',
        'suffix' => '',
    ],
    [
        'title'  => 'Speed & SEO Audit',
        'desc'   => 'Full technical SEO & performance report for your existing website.',
        'price'  => '₹2,499',
        'suffix' => '',
    ],
];

/* ── FAQs ────────────────────────────────────────────────────────── */
$pricing_faqs = [
    [
        'q' => 'Are these prices fixed or can they change?',
        'a' => '<p>Prices shown are starting points. After a free scoping call, we send a fixed-price proposal based on your exact requirements. Once agreed, the price does not change — no surprise additions, no scope creep charges without your approval in writing first.</p>',
    ],
    [
        'q' => 'What payment terms do you follow?',
        'a' => '<p>We work on a 50/50 payment structure — 50% advance to begin the project and 50% upon final delivery before the files or live site are handed over. For Web App / Portal projects above ₹1,00,000 we can arrange milestone-based payments. We accept bank transfer, UPI and Razorpay.</p>',
    ],
    [
        'q' => 'What if I need something between two packages?',
        'a' => '<p>The packages are a guide, not a rigid constraint. We regularly build custom proposals — for example, a Multi-Page Website with payment gateway added, or an E-Commerce package with an SEO retainer included at a bundled rate. Just describe what you need and we\'ll quote accordingly.</p>',
    ],
    [
        'q' => 'Do the prices include domain and hosting?',
        'a' => '<p>Yes — all packages include domain registration and hosting setup for 1 year. After the first year, renewal costs apply directly with the hosting provider. This keeps you in full control of your assets with no dependency on us for renewals.</p>',
    ],
    [
        'q' => 'Is GST charged on top of these prices?',
        'a' => '<p>Yes — all prices shown are exclusive of GST (18%). GST will be added to the final invoice as applicable under Indian tax regulations. A proper GST invoice is issued for every project.</p>',
    ],
];
