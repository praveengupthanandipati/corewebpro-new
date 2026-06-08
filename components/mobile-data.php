<?php
/**
 * Mobile App Development page data — all repeated sections.
 * Loaded once with require_once; shared across six foreach loops.
 *
 * $mob_build_types  — What We Build cards (6)           AOS: ($i%3)*60
 * $mob_platforms    — Platform / tech cards (4)          single AOS on wrapper
 * $mob_techstack    — Tech stack groups (2 groups)       single AOS on wrapper
 * $mob_process      — Development process steps (6)      AOS: ($i%3)*80
 * $mob_whyus        — Why Choose Us cards (6)            AOS: $i*80
 * $mob_faqs         — FAQs (6)                           single AOS on wrapper
 *
 * svg keys = inner SVG path/shape markup; outer <svg> tag is in the template.
 * faq 'a' values are trusted HTML strings — output raw (not htmlspecialchars).
 * platform 'card_mod' = extra CSS class on .mob-platform-card (empty string = none).
 * platform 'tag_mod'  = modifier class on .mob-platform-card__tag (empty string = none).
 */

/* ── What We Build ───────────────────────────────────────────────── */
$mob_build_types = [
    [
        'title' => 'E-Commerce & Shopping Apps',
        'desc'  => 'Product browsing, cart management, Razorpay/Stripe checkout, order tracking, wishlist and push notification promotions — everything a modern shopping app needs.',
    ],
    [
        'title' => 'On-Demand Service Apps',
        'desc'  => 'Real-time booking, provider matching, live tracking, in-app payments and rating systems — for home services, delivery, healthcare appointments and more.',
    ],
    [
        'title' => 'Business & Productivity Apps',
        'desc'  => 'Internal tools, staff portals, CRM dashboards and field-force apps that streamline how your team works — available on both Android and iOS.',
    ],
    [
        'title' => 'Social & Community Apps',
        'desc'  => 'User profiles, feeds, in-app messaging, notifications and media sharing — community apps built for engagement, retention and growth.',
    ],
    [
        'title' => 'Education & E-Learning Apps',
        'desc'  => 'Video lessons, quizzes, progress tracking, certificates and offline support — built for students, trainers and ed-tech startups targeting mobile-first learners.',
    ],
    [
        'title' => 'Progressive Web Apps (PWA)',
        'desc'  => 'App-like browser experiences — installable on home screens, work offline and send push notifications. No app store required, no separate codebase to maintain.',
    ],
];

/* ── Platform / Framework Cards ──────────────────────────────────── */
$mob_platforms = [
    [
        'icon'     => 'react/react-original',
        'alt'      => 'React Native',
        'name'     => 'React Native',
        'tag'      => 'Most Used',
        'tag_mod'  => '',
        'card_mod' => 'mob-platform-card--primary',
        'desc'     => 'Write once in JavaScript/TypeScript, deploy to both Android and iOS. Near-native performance, large ecosystem, shared codebase with web React — ideal for most business apps and startups.',
        'list'     => [
            'Single codebase for Android + iOS',
            'Faster development, lower cost',
            'Access to native device APIs',
            'Large community and library support',
        ],
    ],
    [
        'icon'     => 'flutter/flutter-original',
        'alt'      => 'Flutter',
        'name'     => 'Flutter',
        'tag'      => 'High Performance',
        'tag_mod'  => 'mob-platform-card__tag--alt',
        'card_mod' => '',
        'desc'     => "Google's UI toolkit in Dart — renders its own widgets for pixel-perfect consistency. Best for apps where custom UI fidelity and smooth animations are critical requirements.",
        'list'     => [
            'Consistent UI on all platforms',
            '60/120fps smooth animations',
            'Runs on Android, iOS, web and desktop',
            'Hot reload for rapid iteration',
        ],
    ],
    [
        'icon'     => 'android/android-original',
        'alt'      => 'Android',
        'name'     => 'Native Android',
        'tag'      => 'Kotlin',
        'tag_mod'  => 'mob-platform-card__tag--green',
        'card_mod' => '',
        'desc'     => 'When maximum Android performance and deep OS integration matter, native Kotlin gives you full platform access with no cross-platform overhead or limitations.',
        'list'     => [
            'Full access to Android hardware APIs',
            'Best performance for complex features',
            'Google Play Store deployment',
            'Kotlin — modern, concise, safe',
        ],
    ],
    [
        'icon'     => 'apple/apple-original',
        'alt'      => 'iOS',
        'name'     => 'Native iOS',
        'tag'      => 'Swift',
        'tag_mod'  => 'mob-platform-card__tag--dark',
        'card_mod' => '',
        'desc'     => 'Swift-based native iOS development for apps requiring the full Apple ecosystem — deep iOS/iPadOS integration and the premium experience Apple users expect.',
        'list'     => [
            'Full access to iOS system APIs',
            'SwiftUI for declarative modern UI',
            'App Store deployment support',
            'Optimised for all Apple device sizes',
        ],
    ],
];

/* ── Tech Stack (grouped) ────────────────────────────────────────── */
$mob_techstack = [
    [
        'label' => 'Backend & APIs',
        'badge' => 'dev-layer__badge--be',
        'items' => [
            [ 'icon' => 'laravel/laravel-original',   'name' => 'Laravel',   'role' => 'REST API Backend' ],
            [ 'icon' => 'nodejs/nodejs-original',     'name' => 'Node.js',   'role' => 'Realtime Backend' ],
            [ 'icon' => 'firebase/firebase-original', 'name' => 'Firebase',  'role' => 'Auth, DB & Push' ],
            [ 'icon' => 'mysql/mysql-original',       'name' => 'MySQL',     'role' => 'Relational Data' ],
            [ 'icon' => 'mongodb/mongodb-original',   'name' => 'MongoDB',   'role' => 'NoSQL Data' ],
        ],
    ],
    [
        'label' => 'Dev Tools',
        'badge' => 'dev-layer__badge--tools',
        'items' => [
            [ 'icon' => 'figma/figma-original',                 'name' => 'Figma',          'role' => 'UI/UX Design' ],
            [ 'icon' => 'git/git-original',                     'name' => 'Git',            'role' => 'Version Control' ],
            [ 'icon' => 'androidstudio/androidstudio-original', 'name' => 'Android Studio', 'role' => 'Android IDE' ],
            [ 'icon' => 'xcode/xcode-original',                 'name' => 'Xcode',          'role' => 'iOS IDE' ],
        ],
    ],
];

/* ── Development Process ─────────────────────────────────────────── */
$mob_process = [
    [
        'title' => 'Discovery & Scope',
        'desc'  => 'We document every screen, feature, user role and integration. A detailed scope prevents budget overruns and sets realistic timelines before a single line of code is written.',
    ],
    [
        'title' => 'UI/UX Design',
        'desc'  => 'Wireframes and high-fidelity Figma screens for every key flow — designed to platform conventions (Material Design / iOS HIG) with clickable prototypes for your approval.',
    ],
    [
        'title' => 'Frontend Build',
        'desc'  => 'All screens coded from approved designs — navigation, animations, state management and platform-specific interactions implemented accurately in React Native or Flutter.',
    ],
    [
        'title' => 'Backend & API Integration',
        'desc'  => 'REST APIs, authentication, database connections, push notifications and third-party integrations (payments, maps, SMS) built and connected to the mobile frontend.',
    ],
    [
        'title' => 'Testing & QA',
        'desc'  => 'Tested on real Android and iOS devices across screen sizes and OS versions. You receive a TestFlight / APK build to test on your own device before store submission.',
    ],
    [
        'title' => 'Store Submission & Launch',
        'desc'  => 'We handle Google Play and App Store submission — screenshots, descriptions, metadata and compliance checks. Post-launch support covers issues after going live.',
    ],
];

/* ── Why Choose Us ───────────────────────────────────────────────── */
$mob_whyus = [
    [
        'svg'   => '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>',
        'title' => 'One Codebase, Two Platforms',
        'desc'  => 'React Native and Flutter let us build for Android and iOS simultaneously — cutting development time and cost roughly in half compared to separate native apps.',
    ],
    [
        'svg'   => '<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>',
        'title' => 'Performance First',
        'desc'  => 'Fast startup times, smooth 60fps scrolling and efficient memory use — we profile on real devices and optimise before launch, not after complaints start arriving.',
    ],
    [
        'svg'   => '<rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/>',
        'title' => 'Design-to-App Fidelity',
        'desc'  => 'We implement Figma designs with precision — correct spacing, typography, colours and animations — so the shipped app matches what was approved, not a rough approximation.',
    ],
    [
        'svg'   => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'title' => 'Secure by Default',
        'desc'  => 'Token-based auth, encrypted local storage, certificate pinning, input validation and OWASP Mobile Top 10 compliance — security built in from day one.',
    ],
    [
        'svg'   => '<path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/>',
        'title' => 'API-Ready Architecture',
        'desc'  => 'Every app is built around a clean API layer — making it easy to add features, swap backends or build a companion web app without reworking core logic.',
    ],
    [
        'svg'   => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
        'title' => 'End-to-End Delivery',
        'desc'  => 'Design, development, testing and store submission — handled in one place. No coordinating multiple vendors. One team, complete accountability from brief to launch.',
    ],
];

/* ── FAQs ────────────────────────────────────────────────────────── */
$mob_faqs = [
    [
        'q' => 'Should I build a native app or use React Native / Flutter?',
        'a' => '<p>For most business apps — React Native or Flutter is the right choice. You get one codebase for both Android and iOS, faster development, lower cost and near-native performance. Native (Kotlin/Swift) makes sense only when you need deep hardware integration, platform-exclusive features or are building a performance-heavy app like a game. We recommend the best approach after understanding your requirements.</p>',
    ],
    [
        'q' => 'How much does it cost to build a mobile app?',
        'a' => '<p>Cost depends on complexity. A simple 5–8 screen app starts from ₹40,000–₹80,000. A mid-level app with login, backend, payments and 15–25 screens typically ranges from ₹1,20,000–₹3,00,000. A complex multi-role app with real-time features and third-party integrations starts at ₹3,00,000+. We provide a detailed fixed-price quote after scoping — no hidden charges.</p>',
    ],
    [
        'q' => 'How long does it take to build and launch an app?',
        'a' => '<p>A simple app takes 4–6 weeks. A mid-level app with backend takes 8–14 weeks. Complex apps with multiple roles, real-time features and many integrations can take 16–24 weeks. iOS App Store review adds 1–3 days; Google Play adds 1–7 days after submission. We give you a firm timeline in the proposal before work begins.</p>',
    ],
    [
        'q' => 'Will I own the app and source code?',
        'a' => '<p>Yes — on full payment, you own the complete source code, all assets and the app store listings. We hand over a clean Git repository. No ongoing licensing fees, no code held back, no vendor lock-in. You can take the project to any developer in the future.</p>',
    ],
    [
        'q' => 'Do I need an Apple Developer or Google Play account?',
        'a' => '<p>Yes — apps must be published under your own developer accounts. Google Play requires a one-time $25 registration fee. Apple Developer Program costs $99/year. We guide you through account setup and handle the full submission process. Publishing under your account means you retain full ownership and control of the listing.</p>',
    ],
    [
        'q' => 'Can you add features to an existing app?',
        'a' => '<p>Yes — we take on existing React Native, Flutter and native Android/iOS projects for new features, bug fixes, performance improvements and version upgrades. We do a code review first to understand the codebase and give you an honest assessment before committing to any work.</p>',
    ],
];
