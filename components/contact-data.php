<?php
/**
 * Contact page data — all repeated sections (form is NOT included here).
 * Loaded once with require_once; shared across four foreach loops.
 *
 * $contact_cards    — Info cards (4)             AOS: $i * 100
 * $contact_hours    — Business hours rows (3)    no per-item AOS
 * $contact_social   — Social link items (4)      no per-item AOS
 * $contact_faqs     — FAQs (6)                   single AOS on wrapper
 *
 * card  'body'       = trusted HTML (contains <br>) — output raw.
 * card  'link_ext'   = true adds target="_blank" rel="noopener noreferrer".
 * card  'badge_*'    = rendered instead of a link when link_href is empty.
 * social 'svg'       = full <svg> element (attrs vary per icon) — output raw.
 * faq   'a'          = trusted HTML <p> — output raw (may contain <a> links).
 */

/* ── Contact Info Cards ──────────────────────────────────────────── */
$contact_cards = [
    [
        'icon_mod'   => 'ctct-info-card__icon--blue',
        'svg'        => '<path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/>',
        'title'      => 'Our Location',
        'body'       => 'Hyderabad, Telangana<br>India – 500 081',
        'link_href'  => 'https://maps.google.com/?q=Hyderabad,Telangana,India',
        'link_text'  => 'Get Directions ↗',
        'link_ext'   => true,
        'badge_class'=> '',
        'badge_text' => '',
    ],
    [
        'icon_mod'   => 'ctct-info-card__icon--green',
        'svg'        => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.16 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92Z"/>',
        'title'      => 'Call / WhatsApp',
        'body'       => '+91 77999 71112<br>&nbsp;',
        'link_href'  => 'tel:+917799971112',
        'link_text'  => 'Call Now ↗',
        'link_ext'   => false,
        'badge_class'=> '',
        'badge_text' => '',
    ],
    [
        'icon_mod'   => 'ctct-info-card__icon--orange',
        'svg'        => '<rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>',
        'title'      => 'Email Us',
        'body'       => 'info@corewebpro.in<br>&nbsp;',
        'link_href'  => 'mailto:info@corewebpro.in',
        'link_text'  => 'Send Email',
        'link_ext'   => false,
        'badge_class'=> '',
        'badge_text' => '',
    ],
    [
        'icon_mod'   => 'ctct-info-card__icon--purple',
        'svg'        => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
        'title'      => 'Business Hours',
        'body'       => 'Mon – Sat: 9 AM – 6 PM<br>Sunday: Closed',
        'link_href'  => '',
        'link_text'  => '',
        'link_ext'   => false,
        'badge_class'=> 'ctct-info-card__badge--open',
        'badge_text' => 'Open Today',
    ],
];

/* ── Business Hours Rows ─────────────────────────────────────────── */
$contact_hours = [
    [ 'day' => 'Monday – Friday', 'time' => '9:00 AM – 6:00 PM', 'item_mod' => '' ],
    [ 'day' => 'Saturday',        'time' => '10:00 AM – 4:00 PM', 'item_mod' => '' ],
    [ 'day' => 'Sunday',          'time' => 'Closed',             'item_mod' => 'ctct-hours-list__item--closed' ],
];

/* ── Social Links ────────────────────────────────────────────────── */
$contact_social = [
    [
        'href'      => '#',
        'item_mod'  => 'ctct-social-item--fb',
        'aria'      => 'Facebook',
        'label'     => 'Facebook',
        'svg'       => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>',
    ],
    [
        'href'      => '#',
        'item_mod'  => 'ctct-social-item--ig',
        'aria'      => 'Instagram',
        'label'     => 'Instagram',
        'svg'       => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>',
    ],
    [
        'href'      => '#',
        'item_mod'  => 'ctct-social-item--li',
        'aria'      => 'LinkedIn',
        'label'     => 'LinkedIn',
        'svg'       => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>',
    ],
    [
        'href'      => '#',
        'item_mod'  => 'ctct-social-item--tw',
        'aria'      => 'Twitter / X',
        'label'     => 'Twitter',
        'svg'       => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>',
    ],
];

/* ── FAQs ────────────────────────────────────────────────────────── */
$contact_faqs = [
    [
        'q' => 'How quickly do you respond to enquiries?',
        'a' => '<p>We respond to all enquiries within 24 business hours. For urgent matters, WhatsApp is the fastest way to reach us — we typically reply within 2–4 hours during business hours.</p>',
    ],
    [
        'q' => 'Do you work with clients outside Hyderabad?',
        'a' => '<p>Yes — we work with clients across India and internationally. Most of our communication and project management is done digitally, so location is never a barrier. We use Zoom, Google Meet and WhatsApp for all collaboration.</p>',
    ],
    [
        'q' => 'What information should I include in my message?',
        'a' => '<p>The more detail, the better — but don\'t worry if you only have an idea. Include your website goals, target audience, any existing website URLs you like, your timeline and rough budget. Even a rough brief is enough to get started.</p>',
    ],
    [
        'q' => 'Is the initial consultation free?',
        'a' => '<p>Absolutely. Our initial discovery call and project quote are completely free and carry no obligation. We\'ll understand your requirements and recommend the best approach before any payment is discussed.</p>',
    ],
    [
        'q' => 'How do I get a project quote?',
        'a' => '<p>Fill in the enquiry form above, or WhatsApp us directly. Share your requirements and we\'ll send you a detailed quote within 24 hours. You can also check our <a href="/pricing">Pricing page</a> for indicative package rates.</p>',
    ],
    [
        'q' => 'Do you offer post-launch support?',
        'a' => '<p>Yes — every project includes a free support window after launch. Beyond that, we offer affordable monthly maintenance packages covering updates, backups, performance monitoring and minor content changes.</p>',
    ],
];
