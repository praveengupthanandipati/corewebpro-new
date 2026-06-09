<?php
/**
 * Team page data — team members and "Why Join" reasons.
 * Both datasets live here so team.php stays loop-only.
 *
 * $team_members keys:
 *   exp    — experience badge label
 *   name   — full name (plain text)
 *   role   — job title (plain text, & not &amp;)
 *   bio    — paragraph bio (plain text)
 *   skills — array of skill tag strings
 *   social — array of ['label', 'href', 'svg'] (svg = full <svg> element, trusted)
 *
 * $join_reasons keys:
 *   svg   — inner SVG path/shape markup (outer <svg> is in the template)
 *   title — card heading (plain text, & not &amp;)
 *   desc  — card description (plain text)
 */

/* ── Shared SVG snippets ──────────────────────────────────────────── */
$_svg_linkedin = '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>';
$_svg_email    = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 01-2.06 0L2 7"/></svg>';

/* ── Team Members ─────────────────────────────────────────────────── */
$team_members = [
    [
        'exp'    => '8+ Yrs Experience',
        'name'   => 'Praveen Guptha',
        'role'   => 'Founder & UI Fullstack Designer & Developer',
        'bio'    => 'With over 8 years in the industry, Praveen leads Core Web Pro\'s creative and technical direction. He bridges design and engineering — crafting pixel-perfect UI/UX while building robust fullstack applications end-to-end. From wireframes and brand identities to scalable frontend architectures and backend systems, he ensures every product is both visually compelling and technically solid.',
        'skills' => ['UI/UX Design', 'Figma', 'React', 'Vue.js', 'Laravel', 'WordPress', 'Node.js', 'MySQL'],
        'social' => [
            ['label' => 'LinkedIn', 'href' => '#',                              'svg' => $_svg_linkedin],
            ['label' => 'Twitter',  'href' => '#',                              'svg' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"/></svg>'],
            ['label' => 'Email',    'href' => 'mailto:praveen@corewebpro.com',  'svg' => $_svg_email],
        ],
    ],
    [
        'exp'    => '6+ Yrs Experience',
        'name'   => 'Venkat',
        'role'   => 'PHP Developer & Backend Engineer',
        'bio'    => 'Venkat is a seasoned PHP developer who brings reliability and depth to every backend system he builds. He is proficient across a wide range of PHP frameworks and libraries — from Laravel and CodeIgniter to custom MVC architectures — and takes pride in writing clean, well-structured server-side code. His expertise covers REST API design, database optimisation and third-party integrations that keep client platforms running at peak performance.',
        'skills' => ['PHP', 'Laravel', 'CodeIgniter', 'MySQL', 'REST APIs', 'jQuery', 'Git'],
        'social' => [
            ['label' => 'LinkedIn', 'href' => '#',  'svg' => $_svg_linkedin],
            ['label' => 'GitHub',   'href' => '#',  'svg' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"/></svg>'],
            ['label' => 'Email',    'href' => 'mailto:venkat@corewebpro.com',  'svg' => $_svg_email],
        ],
    ],
    [
        'exp'    => '7+ Yrs Experience',
        'name'   => 'Satish',
        'role'   => 'Senior .NET Fullstack Developer',
        'bio'    => 'Satish is a highly experienced .NET fullstack developer who architects and delivers enterprise-grade web applications with precision. His expertise spans the full Microsoft stack — from ASP.NET Core and C# on the backend to responsive, interactive frontends — while maintaining clean code standards and high performance. He excels in designing scalable solutions, handling complex business logic and integrating SQL Server databases for data-intensive platforms.',
        'skills' => ['C#', 'ASP.NET Core', '.NET MVC', 'SQL Server', 'Azure', 'Blazor', 'Entity Framework', 'REST APIs'],
        'social' => [
            ['label' => 'LinkedIn', 'href' => '#',  'svg' => $_svg_linkedin],
            ['label' => 'GitHub',   'href' => '#',  'svg' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"/></svg>'],
            ['label' => 'Email',    'href' => 'mailto:satish@corewebpro.com',  'svg' => $_svg_email],
        ],
    ],
];

/* ── Why Join Reasons ─────────────────────────────────────────────── */
$join_reasons = [
    [
        'svg'   => '<rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-4 0v2M8 7V5a2 2 0 014 0"/><line x1="12" y1="12" x2="12" y2="16"/><line x1="10" y1="14" x2="14" y2="14"/>',
        'title' => 'Flexible Remote Work',
        'desc'  => 'Work from wherever you are most productive. We\'re a remote-first team — no rigid 9-to-5, no unnecessary commutes. Results and quality are what matter here.',
    ],
    [
        'svg'   => '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>',
        'title' => 'Real, Impactful Projects',
        'desc'  => 'Work on live websites and apps for real clients across various industries — from startups and local businesses to growing brands. No dummy projects or busywork.',
    ],
    [
        'svg'   => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>',
        'title' => 'Collaborative Culture',
        'desc'  => 'No corporate politics or hierarchies. Every team member has a voice, ideas are welcomed openly and your contribution is always visible and appreciated.',
    ],
    [
        'svg'   => '<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>',
        'title' => 'Skill Growth & Learning',
        'desc'  => 'We stay on top of the latest tools, frameworks and design trends. You\'ll be constantly learning — and we actively support courses, workshops and self-improvement time.',
    ],
    [
        'svg'   => '<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>',
        'title' => 'Competitive Pay',
        'desc'  => 'We offer fair, competitive compensation matched to your experience and skills. Performance bonuses, project-based incentives and timely payments are standard practice.',
    ],
    [
        'svg'   => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/>',
        'title' => 'Portfolio-Worthy Work',
        'desc'  => 'Every project you touch is something you\'ll be proud to showcase. We encourage team members to add their best work to their portfolios — your career growth matters to us.',
    ],
];
