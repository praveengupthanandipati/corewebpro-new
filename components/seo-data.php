<?php
/**
 * SEO & Digital Marketing page data — all repeated sections in one file.
 * Loaded once; shared across seven foreach loops.
 *
 * $seo_services    — SEO service cards (6)          AOS: ($i%3)*80
 * $dm_services     — Digital Marketing rows (5)     AOS: $i*60
 * $seo_stats       — Why-it-matters stats (4)       AOS: $i*80
 * $seo_whyus       — Why Choose Us cards (6)        AOS: $i*80
 * $seo_process     — Process steps (6)              AOS: ($i%3)*80
 * $seo_tools       — Tools (10)                     single AOS on wrapper
 * $seo_faqs        — FAQs (6)                       single AOS on wrapper
 *
 * svg keys = inner SVG path/shape markup; outer <svg> tag is in the template.
 * tool 'svg' = full trusted <svg> element (custom text icons, not devicon).
 * faq 'a' = trusted HTML string — output raw (not htmlspecialchars).
 */

/* ── SEO Service Cards ───────────────────────────────────────────── */
$seo_services = [
    [
        'svg'   => '<path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/>',
        'title' => 'On-Page SEO',
        'desc'  => 'Optimising every element on your pages so search engines understand your content and rank it for the right queries — without sacrificing readability for real users.',
        'list'  => [
            'Keyword research and mapping per page',
            'Title tags, meta descriptions and H-tag optimisation',
            'Content optimisation and internal linking',
            'Image alt text, URL structure and schema markup',
        ],
    ],
    [
        'svg'   => '<path d="M10 13a5 5 0 007.54.54l3-3a5 5 0 00-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 00-7.54-.54l-3 3a5 5 0 007.07 7.07l1.71-1.71"/>',
        'title' => 'Off-Page SEO & Link Building',
        'desc'  => "Building your site's authority through high-quality backlinks from relevant, trustworthy sources — signals that tell Google your site deserves to rank higher.",
        'list'  => [
            'White-hat link acquisition outreach',
            'Guest posting on niche-relevant websites',
            'Business directory and citation building',
            'Competitor backlink gap analysis',
        ],
    ],
    [
        'svg'   => '<circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 010 14.14M4.93 4.93a10 10 0 000 14.14"/><path d="M22 12a10 10 0 01-10 10A10 10 0 012 12a10 10 0 0110-10 10 10 0 0110 10z"/>',
        'title' => 'Technical SEO',
        'desc'  => 'Fixing the under-the-hood issues that prevent search engines from properly crawling, indexing and ranking your website — foundational work that unlocks everything else.',
        'list'  => [
            'Site speed optimisation and Core Web Vitals',
            'XML sitemap and robots.txt configuration',
            'Crawl error fixes and redirect management',
            'Mobile-friendliness and HTTPS validation',
        ],
    ],
    [
        'svg'   => '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/>',
        'title' => 'Local SEO',
        'desc'  => 'Dominate local search results for your city or region — critical for businesses that serve customers in a specific geographic area like Hyderabad or Telangana.',
        'list'  => [
            'Google Business Profile optimisation',
            'Local keyword targeting and landing pages',
            'NAP consistency across directories',
            'Local citation building and review management',
        ],
    ],
    [
        'svg'   => '<path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/>',
        'title' => 'E-Commerce SEO',
        'desc'  => 'Ranking product and category pages for high-intent buying keywords — making your online store visible exactly when shoppers are ready to purchase.',
        'list'  => [
            'Product page and category optimisation',
            'Structured data for rich product snippets',
            'Faceted navigation and duplicate content fixes',
            'Shopping feed and Google Merchant setup',
        ],
    ],
    [
        'svg'   => '<circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/>',
        'title' => 'SEO Audit',
        'desc'  => "A comprehensive analysis of your website's current SEO health — identifying every issue holding your rankings back and delivering a prioritised action plan to fix them.",
        'list'  => [
            'Full technical crawl and issue report',
            'On-page and content gap analysis',
            'Backlink profile review',
            'Competitor ranking comparison',
        ],
    ],
];

/* ── Digital Marketing Service Rows ─────────────────────────────── */
$dm_services = [
    [
        'svg'   => '<circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>',
        'title' => 'Google Ads & PPC',
        'tag'   => 'Paid Search',
        'desc'  => 'Targeted Google Search, Display and Shopping campaigns managed for maximum ROI — the right keywords, compelling ad copy, optimised landing pages and constant bid management. We run ads that pay for themselves.',
        'tags'  => ['Search Campaigns', 'Display Ads', 'Shopping Ads', 'Remarketing', 'Keyword Research', 'A/B Ad Testing', 'Conversion Tracking'],
    ],
    [
        'svg'   => '<path d="M17 2h-3a5 5 0 00-5 5v3H6v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>',
        'title' => 'Social Media Marketing',
        'tag'   => 'Brand Awareness',
        'desc'  => 'Building and managing your brand presence across the social platforms where your audience spends time — from content calendars and creative posts to paid social campaigns that grow your following and generate leads.',
        'tags'  => ['Instagram Marketing', 'Facebook Ads', 'LinkedIn Marketing', 'YouTube Shorts', 'Content Calendar', 'Community Management', 'Influencer Outreach'],
    ],
    [
        'svg'   => '<path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/>',
        'title' => 'Content Marketing',
        'tag'   => 'Organic Growth',
        'desc'  => 'Strategic content that attracts, educates and converts — blog articles optimised for search, landing page copy that sells and web content that builds authority in your niche. Every piece is written with a purpose, not just to fill space.',
        'tags'  => ['SEO Blog Writing', 'Landing Page Copy', 'Service Page Content', 'Case Studies', 'Content Strategy', 'Topic Cluster Planning', 'Content Refresh'],
    ],
    [
        'svg'   => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 01-2.06 0L2 7"/>',
        'title' => 'Email Marketing',
        'tag'   => 'Retention & Nurture',
        'desc'  => 'Automated email sequences and targeted campaigns that keep your brand top-of-mind, nurture leads through your funnel and re-engage past customers. Email remains the highest-ROI digital marketing channel — when done right.',
        'tags'  => ['Welcome Sequences', 'Drip Campaigns', 'Newsletter Design', 'Promotional Campaigns', 'List Segmentation', 'A/B Testing', 'Performance Reporting'],
    ],
    [
        'svg'   => '<line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/>',
        'title' => 'Analytics & Monthly Reporting',
        'tag'   => 'Data & Insights',
        'desc'  => "You always know exactly what you're getting. Every month we deliver a clear report showing keyword rankings, organic traffic, ad performance, conversion data and what we plan to do next. No surprises — just transparent, accountable work.",
        'tags'  => ['GA4 Setup & Tracking', 'Search Console Monitoring', 'Rank Tracking', 'Monthly PDF Reports', 'Conversion Funnel Analysis', 'Goal & Event Setup', 'Custom Dashboards'],
    ],
];

/* ── SEO Stats ───────────────────────────────────────────────────── */
$seo_stats = [
    [ 'num' => '68',   'suffix' => '%', 'fact' => 'of all online experiences begin with a search engine' ],
    [ 'num' => '75',   'suffix' => '%', 'fact' => 'of users never scroll past the first page of search results' ],
    [ 'num' => '14.6', 'suffix' => '%', 'fact' => 'average close rate for SEO leads vs 1.7% for outbound marketing' ],
    [ 'num' => '53',   'suffix' => '%', 'fact' => 'of website traffic across all industries comes from organic search' ],
];

/* ── Why Choose Us ───────────────────────────────────────────────── */
$seo_whyus = [
    [
        'svg'   => '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>',
        'title' => 'White-Hat Only',
        'desc'  => "We never use spammy links, keyword stuffing or cloaking. Every technique we apply follows Google's guidelines — protecting your site from penalties while building lasting rankings.",
    ],
    [
        'svg'   => '<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>',
        'title' => 'Data-Driven Decisions',
        'desc'  => "Every strategy we recommend is backed by data — keyword search volume, competitor analysis, traffic trends and conversion data. We don't guess; we track and adjust.",
    ],
    [
        'svg'   => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
        'title' => 'Long-Term Results',
        'desc'  => 'Unlike paid ads that stop the moment you pause spending, SEO builds compounding value over time. Rankings earned through good SEO keep delivering traffic for months and years.',
    ],
    [
        'svg'   => '<rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>',
        'title' => 'Full Transparency',
        'desc'  => "Monthly reports cover every metric that matters — rankings, traffic, leads and ad spend. You own all accounts and data. We don't hide behind vague dashboards or proprietary portals.",
    ],
    [
        'svg'   => '<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>',
        'title' => 'Cost-Effective Growth',
        'desc'  => 'Organic SEO has one of the lowest costs-per-acquisition of any marketing channel. Once rankings are established, traffic is effectively free — making every rupee invested work harder over time.',
    ],
    [
        'svg'   => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>',
        'title' => 'Dedicated Account Manager',
        'desc'  => 'You have one point of contact who knows your business, your goals and your campaign history. No call centres, no ticket queues — direct communication with the person doing the work.',
    ],
];

/* ── SEO Process Steps ───────────────────────────────────────────── */
$seo_process = [
    [
        'title' => 'Discovery & Goal Setting',
        'desc'  => 'We start by understanding your business, target audience, current online presence and growth objectives — defining clear, measurable KPIs that the entire campaign is built to achieve.',
    ],
    [
        'title' => 'Audit & Research',
        'desc'  => 'A full SEO audit of your site plus in-depth keyword research, competitor analysis and audience profiling. We map out exactly where opportunities exist and what\'s holding your current rankings back.',
    ],
    [
        'title' => 'Strategy & Roadmap',
        'desc'  => 'A prioritised 3–6 month action plan covering technical fixes, on-page optimisation, content strategy, link building and any paid campaigns — with timelines, ownership and expected outcomes.',
    ],
    [
        'title' => 'Implementation',
        'desc'  => 'Executing the plan — technical fixes, content creation, on-page updates, link outreach and campaign setup. We work in monthly sprints with clear deliverables so you always know what was done.',
    ],
    [
        'title' => 'Monitor & Optimise',
        'desc'  => "Rankings, traffic and conversions are tracked continuously. We analyse what's working and adjust the strategy — doubling down on wins and fixing underperformers before they drag results down.",
    ],
    [
        'title' => 'Report & Review',
        'desc'  => 'A detailed monthly report covers keyword movements, traffic changes, leads generated and campaign performance. We walk you through the numbers and align on the next month\'s priorities together.',
    ],
];

/* ── SEO Tools ───────────────────────────────────────────────────── */
$seo_tools = [
    [
        'svg'  => '<svg width="44" height="44" viewBox="0 0 44 44" fill="none"><rect width="44" height="44" rx="10" fill="#FF6B35"/><text x="22" y="29" font-size="14" font-weight="800" fill="white" text-anchor="middle" font-family="Arial">GA4</text></svg>',
        'name' => 'Google Analytics 4',
        'role' => 'Traffic & Behaviour',
    ],
    [
        'svg'  => '<svg width="44" height="44" viewBox="0 0 44 44" fill="none"><rect width="44" height="44" rx="10" fill="#4285F4"/><text x="22" y="29" font-size="11" font-weight="800" fill="white" text-anchor="middle" font-family="Arial">GSC</text></svg>',
        'name' => 'Search Console',
        'role' => 'Ranking & Indexing',
    ],
    [
        'svg'  => '<svg width="44" height="44" viewBox="0 0 44 44" fill="none"><rect width="44" height="44" rx="10" fill="#FF6D00"/><text x="22" y="29" font-size="11" font-weight="800" fill="white" text-anchor="middle" font-family="Arial">Ahrefs</text></svg>',
        'name' => 'Ahrefs',
        'role' => 'Backlinks & Keywords',
    ],
    [
        'svg'  => '<svg width="44" height="44" viewBox="0 0 44 44" fill="none"><rect width="44" height="44" rx="10" fill="#1AA260"/><text x="22" y="29" font-size="9" font-weight="800" fill="white" text-anchor="middle" font-family="Arial">SEMrush</text></svg>',
        'name' => 'SEMrush',
        'role' => 'SEO & Competitor Intel',
    ],
    [
        'svg'  => '<svg width="44" height="44" viewBox="0 0 44 44" fill="none"><rect width="44" height="44" rx="10" fill="#0077B5"/><text x="22" y="29" font-size="11" font-weight="800" fill="white" text-anchor="middle" font-family="Arial">GTM</text></svg>',
        'name' => 'Google Tag Manager',
        'role' => 'Tracking & Events',
    ],
    [
        'svg'  => '<svg width="44" height="44" viewBox="0 0 44 44" fill="none"><rect width="44" height="44" rx="10" fill="#FBBC04"/><text x="22" y="29" font-size="10" font-weight="800" fill="white" text-anchor="middle" font-family="Arial">G Ads</text></svg>',
        'name' => 'Google Ads',
        'role' => 'PPC Campaigns',
    ],
    [
        'svg'  => '<svg width="44" height="44" viewBox="0 0 44 44" fill="none"><rect width="44" height="44" rx="10" fill="#E4405F"/><text x="22" y="29" font-size="10" font-weight="800" fill="white" text-anchor="middle" font-family="Arial">Meta</text></svg>',
        'name' => 'Meta Ads',
        'role' => 'Facebook & Instagram',
    ],
    [
        'svg'  => '<svg width="44" height="44" viewBox="0 0 44 44" fill="none"><rect width="44" height="44" rx="10" fill="#6B48FF"/><text x="22" y="29" font-size="11" font-weight="800" fill="white" text-anchor="middle" font-family="Arial">Ubrsgt</text></svg>',
        'name' => 'Ubersuggest',
        'role' => 'Keyword Research',
    ],
    [
        'svg'  => '<svg width="44" height="44" viewBox="0 0 44 44" fill="none"><rect width="44" height="44" rx="10" fill="#212121"/><text x="22" y="27" font-size="10" font-weight="800" fill="white" text-anchor="middle" font-family="Arial">Page</text><text x="22" y="38" font-size="10" font-weight="800" fill="white" text-anchor="middle" font-family="Arial">Speed</text></svg>',
        'name' => 'PageSpeed Insights',
        'role' => 'Performance Audits',
    ],
    [
        'svg'  => '<svg width="44" height="44" viewBox="0 0 44 44" fill="none"><rect width="44" height="44" rx="10" fill="#00A3E0"/><text x="22" y="29" font-size="9" font-weight="800" fill="white" text-anchor="middle" font-family="Arial">Mailchimp</text></svg>',
        'name' => 'Mailchimp',
        'role' => 'Email Campaigns',
    ],
];

/* ── FAQs ────────────────────────────────────────────────────────── */
$seo_faqs = [
    [
        'q' => 'How long does SEO take to show results?',
        'a' => '<p>SEO is a long-term investment. Most clients begin to see measurable movement in rankings and organic traffic within 3–4 months. Significant, consistent results typically materialise between months 6–12. Local SEO tends to show results faster — often within 60–90 days for Google Business Profile visibility.</p>',
    ],
    [
        'q' => "What's the difference between SEO and Google Ads?",
        'a' => '<p>Google Ads (PPC) delivers immediate visibility by paying for top placement — results start the day the campaign goes live, but traffic stops the moment you stop spending. SEO builds organic rankings over time — slower to start, but once established, traffic is free and compounds. The ideal strategy uses both: Ads for immediate results while SEO builds long-term authority.</p>',
    ],
    [
        'q' => 'Do you require long-term contracts?',
        'a' => "<p>We recommend a minimum 3-month engagement for SEO because meaningful results need time to appear — shorter engagements rarely produce enough data to judge performance fairly. However, we don't lock you into rigid annual contracts. After the initial period, we work month-to-month with 30 days notice to pause or end the engagement.</p>",
    ],
    [
        'q' => 'Can you guarantee first page rankings on Google?',
        'a' => "<p>No — and any agency that guarantees specific rankings is making a promise they cannot keep. Google's algorithm is complex and always changing. What we do guarantee is consistent, transparent effort using proven white-hat techniques, honest monthly reporting on what's moving, and a strategy that adjusts based on real data rather than assumptions.</p>",
    ],
    [
        'q' => 'What is included in the monthly SEO retainer?',
        'a' => '<p>Depending on your plan, monthly work typically includes: keyword rank tracking, on-page optimisations, technical fixes, link building outreach, 1–4 pieces of content, Google Business Profile management and a detailed monthly performance report. The exact scope is agreed and documented before the engagement begins.</p>',
    ],
    [
        'q' => "Do I need SEO if I'm already running Google Ads?",
        'a' => '<p>Yes — SEO and Google Ads serve different functions and work best together. Ads give you immediate paid visibility; SEO builds free organic visibility that reduces your long-term ad spend dependency. Businesses investing in both typically achieve better total ROI than those relying on paid ads alone, because organic rankings compound in value over time while ad costs generally increase.</p>',
    ],
];
