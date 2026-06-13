<?php
/**
 * Web Designing page data — all repeated sections.
 * Loaded once; used by four foreach loops in web-designing.php.
 *
 * $design_services  — dsvc-grid  (6 cards)  AOS: ($i%3)*80
 * $design_process   — dproc-grid (6 steps)  AOS: ($i%3)*80
 * $design_whyus     — dwhy-grid  (6 cards)  AOS: $i*80
 * $design_tools     — dtool-grid (8 items)  single AOS on wrapper
 * $design_faqs      — dsvc-faq   (6 items)  single AOS on wrapper
 *
 * svg keys hold inner SVG path/shape markup; outer <svg> is in the template.
 * faq 'a' values are trusted HTML strings — output raw (not htmlspecialchars).
 */

/* ── Design Services ─────────────────────────────────────────────── */
$design_services = [
    [
        'svg'   => '<rect x="3" y="3" width="18" height="18" rx="3"/><path d="M3 9h18M9 21V9"/>',
        'title' => 'Corporate Website Design',
        'desc'  => 'Professional multi-page designs for businesses, IT companies, agencies and service providers — built to establish credibility and generate enquiries.',
        'list'  => [
            'Home, About, Services, Contact pages',
            'Team and case study page layouts',
            'Consistent design system across all pages',
        ],
    ],
    [
        'svg'   => '<path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/>',
        'title' => 'E-Commerce Design',
        'desc'  => 'Conversion-focused shop designs — product pages, category layouts, cart flows and checkout screens that make buying feel easy and trustworthy.',
        'list'  => [
            'Product listing and detail page design',
            'Cart, checkout and confirmation flows',
            'Mobile-first shopping experience',
        ],
    ],
    [
        'svg'   => '<path d="M13 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V9z"/><polyline points="13 2 13 9 20 9"/>',
        'title' => 'Landing Page Design',
        'desc'  => 'High-converting single-page designs for campaigns, product launches, lead generation and paid ads — every element designed to drive one clear action.',
        'list'  => [
            'Above-the-fold hero strategy',
            'Social proof and trust signal placement',
            'CTA-optimised layout and flow',
        ],
    ],
    [
        'svg'   => '<circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>',
        'title' => 'Portfolio & Personal Brand',
        'desc'  => 'Distinctive personal website and portfolio designs for freelancers, photographers, consultants and creative professionals who want to stand out.',
        'list'  => [
            'Personal branding visual direction',
            'Work showcase and gallery layouts',
            'Bio, testimonials and contact design',
        ],
    ],
    [
        'svg'   => '<path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/>',
        'title' => 'Website Redesign',
        'desc'  => "Transform an outdated or underperforming website into a modern, user-friendly design — keeping what works, fixing what doesn't and improving everything.",
        'list'  => [
            'Design audit of existing site',
            'UX gap analysis and improvement plan',
            'Fresh modern visual direction',
        ],
    ],
    [
        'svg'   => '<rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>',
        'title' => 'UI/UX & Figma Design Systems',
        'desc'  => 'Structured design systems in Figma — reusable components, colour tokens, typography scales and interaction patterns built for design-to-dev handoff.',
        'list'  => [
            'Component library and variants',
            'Annotated developer-ready Figma files',
            'Clickable prototypes for stakeholder review',
        ],
    ],
];

/* ── Design Process ──────────────────────────────────────────────── */
$design_process = [
    [
        'title' => 'Discovery & Brief',
        'desc'  => 'We start with a detailed conversation — your business, target audience, goals, competitors and design preferences. A clear brief means we design with purpose, not guesswork.',
    ],
    [
        'title' => 'Research & Moodboard',
        'desc'  => 'We study your industry, competitors and design references. A visual moodboard is shared with you early — establishing the tone, colour direction and style before any screens are designed.',
    ],
    [
        'title' => 'Wireframes & Layout',
        'desc'  => 'Low-fidelity wireframes define the structure and content hierarchy of each page. This is where we agree on layout, sections and user flow — before committing to visual design.',
    ],
    [
        'title' => 'Visual Design',
        'desc'  => 'Full high-fidelity design in Figma — applying your brand colours, typography, imagery and UI components. We design desktop and mobile screens in parallel for a consistent experience.',
    ],
    [
        'title' => 'Review & Revisions',
        'desc'  => "Designs are shared via Figma prototype link for your review. Feedback is collected and up to two rounds of revisions are included — we iterate until you're fully satisfied.",
    ],
    [
        'title' => 'Final Handoff',
        'desc'  => 'Approved designs are packaged and handed off — organised Figma files, exported assets, style guide and developer annotations. Ready to build, with nothing left to guess.',
    ],
];

/* ── Why Us ──────────────────────────────────────────────────────── */
$design_whyus = [
    [
        'svg'   => '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>',
        'title' => 'Pixel-Perfect Precision',
        'desc'  => 'Every element is placed with intention. Spacing, alignment and proportion are never approximate — we obsess over the details so your design looks flawless at every size.',
    ],
    [
        'svg'   => '<rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/>',
        'title' => 'Mobile-First Always',
        'desc'  => 'We design for mobile screens first, then scale up — ensuring the experience works beautifully on phones, tablets and desktops without compromise or patching.',
    ],
    [
        'svg'   => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>',
        'title' => 'User-Centred Thinking',
        'desc'  => 'We design for your visitors, not just your approval. Every layout decision is grounded in how real users read, scroll and interact — reducing drop-off and improving engagement.',
    ],
    [
        'svg'   => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
        'title' => 'Fast Turnaround',
        'desc'  => 'Most website designs are delivered within 5–10 working days. We work efficiently without cutting corners — because your time to launch matters as much as the quality of the outcome.',
    ],
    [
        'svg'   => '<path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/>',
        'title' => 'Brand-Aligned Design',
        'desc'  => "Your design will look unmistakably yours. We follow your brand guidelines strictly — or help develop a visual identity from scratch if you don't have one yet.",
    ],
    [
        'svg'   => '<path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/>',
        'title' => 'Developer-Ready Deliverables',
        'desc'  => 'Designs are handed off in well-organised Figma files with clear layer naming, component groups, exported assets and notes — so any developer can build from them without back-and-forth.',
    ],
];

/* ── Design Tools ────────────────────────────────────────────────── */
$design_tools = [
    [ 'icon' => 'figma/figma-original',           'name' => 'Figma',       'role' => 'UI/UX Design & Prototyping' ],
    [ 'icon' => 'css3/css3-original',              'name' => 'CSS3',        'role' => 'Styles & Animations' ],
    [ 'icon' => 'html5/html5-original',            'name' => 'HTML5',       'role' => 'Semantic Markup Structure' ],
    [ 'icon' => 'bootstrap/bootstrap-original',    'name' => 'Bootstrap 5', 'role' => 'Responsive Grid & Components' ],
    [ 'icon' => 'canva/canva-original',            'name' => 'Canva',       'role' => 'Social & Marketing Assets' ],
];

/* ── FAQs ────────────────────────────────────────────────────────── */
$design_faqs = [
    [
        'q' => 'Do you build the website too, or only design it?',
        'a' => '<p>This page covers our design service only — creating the visual layouts and UX in Figma. If you also need the site built (HTML/CSS, WordPress, Laravel, React, etc.), that falls under our <a href="/web-development">Web Development service</a>. Many clients commission both together, and we offer bundled pricing for design + development projects.</p>',
    ],
    [
        'q' => 'What do I receive at the end of a design project?',
        'a' => '<p>You receive: an organised Figma source file (you own it fully), exported PNG/SVG assets for all graphics, a clickable prototype link, a basic style guide (colours, fonts, spacing) and any design notes needed for development handoff.</p>',
    ],
    [
        'q' => 'How many pages are included in a standard design project?',
        'a' => '<p>It depends on your package. Typical website design projects cover 5–8 unique pages (Home, About, Services, Contact + inner pages). Each additional page beyond the agreed scope is quoted separately. We also design mobile and tablet versions of every page.</p>',
    ],
    [
        'q' => 'How long does a website design take?',
        'a' => '<p>A standard 5-page website design typically takes 5–10 working days. Landing pages can be completed in 2–4 days. Larger projects with custom design systems or many pages may take 2–3 weeks. We\'ll give you a firm timeline in our proposal.</p>',
    ],
    [
        'q' => 'How many revision rounds are included?',
        'a' => '<p>All design projects include two rounds of revisions at no extra charge. A "revision" means comprehensive feedback applied across all pages. Additional revision rounds can be accommodated at an agreed rate. In practice, most projects are signed off within the two included rounds.</p>',
    ],
    [
        'q' => 'Do I need to provide my own content and images?',
        'a' => '<p>Ideally yes — your content and real images produce a significantly better, more accurate design. If you don\'t have final content yet, we use placeholder text and free stock imagery during the design phase and swap in your real content before handoff.</p>',
    ],
];
