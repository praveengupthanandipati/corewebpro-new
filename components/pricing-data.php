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
 * package 'is_custom'     = true renders the --custom price markup (Enterprise).
 * package 'features'      = array of ['class' => 'yes'|'no', 'text' => '...'].
 * addon   'suffix'        = span text after price ('/page', '/mo', '') — empty = no span.
 * faq     'a'             = trusted HTML string — output raw (not htmlspecialchars).
 */

/* ── Pricing Packages ────────────────────────────────────────────── */
$pricing_packages = [
    [
        'card_mod'     => '',
        'popular_badge'=> '',
        'name'         => 'Starter',
        'tagline'      => 'Perfect for individuals & small businesses getting online for the first time.',
        'is_custom'    => false,
        'amount'       => '8,999',
        'price_note'   => 'one-time',
        'timeline'     => '5–7 working days',
        'features'     => [
            ['class' => 'yes', 'text' => 'Up to 5 pages designed'],
            ['class' => 'yes', 'text' => 'Mobile responsive design'],
            ['class' => 'yes', 'text' => 'Figma design file included'],
            ['class' => 'yes', 'text' => 'Contact form'],
            ['class' => 'yes', 'text' => 'Basic on-page SEO setup'],
            ['class' => 'yes', 'text' => '1 revision round'],
            ['class' => 'yes', 'text' => 'WhatsApp & call support'],
            ['class' => 'no',  'text' => 'CMS / WordPress integration'],
            ['class' => 'no',  'text' => 'Blog or portfolio section'],
            ['class' => 'no',  'text' => 'Payment gateway'],
            ['class' => 'no',  'text' => 'Custom backend development'],
        ],
        'btn_href'  => 'contact.php?plan=starter',
        'btn_class' => 'pricing-card__btn--outline',
        'btn_text'  => 'Get Started',
    ],
    [
        'card_mod'     => '',
        'popular_badge'=> '',
        'name'         => 'Business',
        'tagline'      => 'For growing businesses that need a complete, professional web presence.',
        'is_custom'    => false,
        'amount'       => '24,999',
        'price_note'   => 'one-time',
        'timeline'     => '10–14 working days',
        'features'     => [
            ['class' => 'yes', 'text' => 'Up to 10 pages (design + development)'],
            ['class' => 'yes', 'text' => 'Mobile responsive & cross-browser'],
            ['class' => 'yes', 'text' => 'WordPress CMS integration'],
            ['class' => 'yes', 'text' => 'Blog or news section'],
            ['class' => 'yes', 'text' => 'Enquiry & contact forms'],
            ['class' => 'yes', 'text' => 'On-page SEO + meta setup'],
            ['class' => 'yes', 'text' => 'Google Analytics integration'],
            ['class' => 'yes', 'text' => '2 revision rounds'],
            ['class' => 'yes', 'text' => '30 days post-launch support'],
            ['class' => 'no',  'text' => 'Payment gateway'],
            ['class' => 'no',  'text' => 'Custom backend / web app'],
        ],
        'btn_href'  => 'contact.php?plan=business',
        'btn_class' => 'pricing-card__btn--outline',
        'btn_text'  => 'Get Started',
    ],
    [
        'card_mod'     => 'pricing-card--popular',
        'popular_badge'=> 'Most Popular',
        'name'         => 'Professional',
        'tagline'      => 'For businesses ready to scale with a fully custom, feature-rich website.',
        'is_custom'    => false,
        'amount'       => '49,999',
        'price_note'   => 'one-time',
        'timeline'     => '20–25 working days',
        'features'     => [
            ['class' => 'yes', 'text' => 'Up to 15 pages (custom design + dev)'],
            ['class' => 'yes', 'text' => 'Mobile responsive & cross-browser'],
            ['class' => 'yes', 'text' => 'WordPress or Laravel CMS'],
            ['class' => 'yes', 'text' => 'Blog, portfolio & gallery sections'],
            ['class' => 'yes', 'text' => 'Payment gateway integration'],
            ['class' => 'yes', 'text' => 'Advanced SEO + schema markup'],
            ['class' => 'yes', 'text' => 'Google Analytics + Search Console'],
            ['class' => 'yes', 'text' => 'Speed optimisation (90+ Lighthouse)'],
            ['class' => 'yes', 'text' => '3 revision rounds'],
            ['class' => 'yes', 'text' => '60 days post-launch support'],
            ['class' => 'yes', 'text' => 'Free domain & hosting guidance'],
        ],
        'btn_href'  => 'contact.php?plan=professional',
        'btn_class' => 'pricing-card__btn--solid',
        'btn_text'  => 'Get Started',
    ],
    [
        'card_mod'     => '',
        'popular_badge'=> '',
        'name'         => 'Enterprise',
        'tagline'      => 'Custom web applications, e-commerce platforms and complex digital products.',
        'is_custom'    => true,
        'amount'       => 'Custom',
        'price_note'   => 'quote on request',
        'timeline'     => '4–12 weeks',
        'features'     => [
            ['class' => 'yes', 'text' => 'Unlimited pages & custom scope'],
            ['class' => 'yes', 'text' => 'Full-stack web application'],
            ['class' => 'yes', 'text' => 'Custom backend & REST API'],
            ['class' => 'yes', 'text' => 'Multi-role user dashboards'],
            ['class' => 'yes', 'text' => 'E-commerce / booking systems'],
            ['class' => 'yes', 'text' => 'Third-party API integrations'],
            ['class' => 'yes', 'text' => 'Advanced SEO & performance'],
            ['class' => 'yes', 'text' => 'Server setup & deployment'],
            ['class' => 'yes', 'text' => 'Unlimited revision rounds'],
            ['class' => 'yes', 'text' => '90 days post-launch support'],
            ['class' => 'yes', 'text' => 'Dedicated project manager'],
        ],
        'btn_href'  => 'contact.php?plan=enterprise',
        'btn_class' => 'pricing-card__btn--outline',
        'btn_text'  => 'Request a Quote',
    ],
];

/* ── Add-On Cards ────────────────────────────────────────────────── */
$pricing_addons = [
    [
        'title'  => 'Extra Page Design',
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
        'a' => '<p>We work on a 50/50 payment structure — 50% advance to begin the project and 50% upon final delivery before the files or live site are handed over. For Enterprise projects above ₹1,00,000 we can arrange milestone-based payments. We accept bank transfer, UPI and Razorpay.</p>',
    ],
    [
        'q' => 'What if I need something between two packages?',
        'a' => '<p>The packages are a guide, not a rigid constraint. We regularly build custom proposals — for example, a Business package with payment gateway added, or a Professional package with an SEO retainer included at a bundled rate. Just describe what you need and we\'ll quote accordingly.</p>',
    ],
    [
        'q' => 'Do the prices include hosting and domain?',
        'a' => '<p>No — hosting and domain are not included in any package. You purchase these directly (we recommend providers and guide you through the setup). This keeps costs transparent and means you own and control your hosting independently — no markup, no dependency on us for renewals.</p>',
    ],
    [
        'q' => 'Is GST charged on top of these prices?',
        'a' => '<p>Yes — all prices shown are exclusive of GST (18%). GST will be added to the final invoice as applicable under Indian tax regulations. A proper GST invoice is issued for every project.</p>',
    ],
];
