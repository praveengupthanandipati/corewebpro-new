<?php
/**
 * Team page data — team members and "Why Join" reasons.
 * Both datasets live here so team.php stays loop-only.
 *
 * $team_members keys:
 *   photo  — image src URL
 *   alt    — img alt text (plain text)
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
        'photo'  => 'https://picsum.photos/seed/praveen2025/400/420',
        'alt'    => 'Praveen Kumar – Founder & Lead Designer',
        'exp'    => '8+ Yrs Experience',
        'name'   => 'Praveen Kumar',
        'role'   => 'Founder & Lead Designer',
        'bio'    => 'With over 8 years in the industry, Praveen leads Core Web Pro\'s creative direction. He specialises in building conversion-driven websites and brand identities that help businesses grow. His deep knowledge of design systems, UX strategy and frontend engineering ensures every project is both beautiful and functional.',
        'skills' => ['UI/UX Design', 'Web Development', 'Brand Identity', 'WordPress', 'Laravel'],
        'social' => [
            ['label' => 'LinkedIn', 'href' => '#',                              'svg' => $_svg_linkedin],
            ['label' => 'Twitter',  'href' => '#',                              'svg' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"/></svg>'],
            ['label' => 'Email',    'href' => 'mailto:praveen@corewebpro.com',  'svg' => $_svg_email],
        ],
    ],
    [
        'photo'  => 'https://picsum.photos/seed/ananya2025/400/420',
        'alt'    => 'Ananya Reddy – Senior UI/UX Designer',
        'exp'    => '5+ Yrs Experience',
        'name'   => 'Ananya Reddy',
        'role'   => 'Senior UI/UX Designer',
        'bio'    => 'Ananya brings creativity and user empathy to every interface she designs. She is passionate about crafting experiences that feel intuitive and look stunning — from initial wireframes and prototypes to polished, production-ready design systems. Her Figma skills and attention to detail set the visual standard for every project.',
        'skills' => ['Figma', 'Prototyping', 'Design Systems', 'Adobe XD', 'Illustration'],
        'social' => [
            ['label' => 'LinkedIn', 'href' => '#',                             'svg' => $_svg_linkedin],
            ['label' => 'Behance',  'href' => '#',                             'svg' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M7.803 5.731c.589 0 1.119.051 1.605.155.483.103.895.273 1.243.508.343.235.611.547.804.939.187.387.28.855.28 1.39 0 .596-.135 1.091-.406 1.482-.271.393-.675.718-1.209.979.73.209 1.274.573 1.634 1.089.357.519.538 1.141.538 1.862 0 .607-.116 1.128-.35 1.563-.232.435-.551.79-.951 1.055-.401.267-.865.462-1.39.585-.523.123-1.06.184-1.608.184H2V5.731h5.803zm-.351 4.972c.47 0 .856-.109 1.151-.332.295-.22.443-.569.443-1.034 0-.265-.046-.485-.138-.661-.09-.175-.217-.317-.38-.42-.16-.103-.35-.178-.568-.219-.219-.04-.455-.062-.707-.062H4.965v2.728h2.487zm.157 5.239c.277 0 .537-.026.777-.08.241-.053.449-.14.625-.261.177-.12.315-.283.414-.49.101-.208.15-.475.15-.798 0-.634-.178-1.084-.533-1.351-.356-.265-.831-.4-1.422-.4H4.965v3.38h2.644zM16.612 6.16h4.836v1.263h-4.836V6.16zm.764 10.202c.382.372.93.558 1.644.558.511 0 .952-.129 1.321-.384.369-.255.595-.527.678-.814h2.176c-.349 1.094-.886 1.877-1.615 2.353-.726.476-1.607.714-2.641.714-.717 0-1.363-.116-1.936-.35-.573-.232-1.059-.562-1.455-.987-.397-.427-.703-.934-.917-1.523-.215-.588-.321-1.232-.321-1.933 0-.679.109-1.31.325-1.891.216-.58.525-1.081.927-1.504.401-.421.882-.751 1.444-.987.562-.235 1.183-.352 1.864-.352.762 0 1.433.147 2.01.441.578.293 1.056.693 1.432 1.197.375.503.645 1.082.806 1.736.163.654.219 1.346.169 2.076h-6.497c.033.815.266 1.437.586 1.649zm2.887-4.487c-.302-.332-.786-.498-1.45-.498-.413 0-.757.07-1.032.208-.273.14-.493.311-.661.513-.168.204-.286.42-.353.649-.069.229-.107.444-.117.641h4.133c-.084-.718-.317-1.18-.52-1.513z"/></svg>'],
            ['label' => 'Email',    'href' => 'mailto:ananya@corewebpro.com',  'svg' => $_svg_email],
        ],
    ],
    [
        'photo'  => 'https://picsum.photos/seed/ravi2025/400/420',
        'alt'    => 'Ravi Shankar – Frontend Developer',
        'exp'    => '4+ Yrs Experience',
        'name'   => 'Ravi Shankar',
        'role'   => 'Frontend Developer',
        'bio'    => 'Ravi transforms design concepts into fast, responsive and accessible web experiences. He specialises in React, Vue and vanilla JavaScript, with a strong grasp of performance optimisation and SEO-friendly markup. His code is clean, documented and built to last — every animation, interaction and component is crafted with precision.',
        'skills' => ['React', 'Vue.js', 'JavaScript', 'Tailwind CSS', 'Git'],
        'social' => [
            ['label' => 'LinkedIn', 'href' => '#',                           'svg' => $_svg_linkedin],
            ['label' => 'GitHub',   'href' => '#',                           'svg' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"/></svg>'],
            ['label' => 'Email',    'href' => 'mailto:ravi@corewebpro.com',  'svg' => $_svg_email],
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
