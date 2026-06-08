<?php
$page_meta = '
    <title>Mobile App Development in Hyderabad | Core Web Pro</title>
    <meta name="description" content="Professional mobile app development services in Hyderabad — React Native, Flutter, Android and iOS apps. Cross-platform and native mobile applications for startups and businesses.">
    <meta name="keywords" content="mobile app development Hyderabad, React Native developer Hyderabad, Flutter developer Hyderabad, Android app development Hyderabad, iOS app development Hyderabad, cross-platform app development, mobile app agency Hyderabad, PWA development Hyderabad">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.corewebpro.com/mobile-development.php">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Mobile App Development in Hyderabad | Core Web Pro">
    <meta property="og:description" content="Custom mobile app development for Android and iOS — React Native, Flutter and PWA from Core Web Pro, Hyderabad.">
    <meta property="og:url" content="https://www.corewebpro.com/mobile-development.php">
    <meta property="og:image" content="https://www.corewebpro.com/img/og-image.jpg">
';
include 'components/header.php';
?>

    <section class="page-hero">
        <div class="page-hero__overlay"></div>
        <div class="container-90">
            <div class="page-hero__inner">
                <h1 class="page-hero__title">Mobile App Development</h1>
                <nav class="page-hero__breadcrumb" aria-label="breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="page-hero__sep">/</span>
                    <span>Services</span>
                    <span class="page-hero__sep">/</span>
                    <span>Mobile Development</span>
                </nav>
            </div>
        </div>
    </section>

    <main>

        <!-- INTRO -->
        <section class="inner-section">
            <div class="container-90">
                <div class="svc-intro-wrap">

                    <div class="svc-intro__text" data-aos="fade-right" data-aos-duration="700">
                        <span class="inner-eyebrow">Apps That Work</span>
                        <h2 class="inner-title">Mobile-First Products <span>Built for Real Users</span></h2>
                        <p class="svc-intro__lead">Your customers are on their phones. A well-built mobile app puts your business in their pocket — available 24/7, faster than a website and far more engaging.</p>
                        <p>We build cross-platform and native mobile applications using React Native and Flutter for single-codebase apps on both Android and iOS, and Progressive Web Apps (PWAs) for lightweight browser-based mobile experiences. Every app we deliver is responsive, performant and built with real users in mind.</p>
                        <p>From concept and UI design through to app store submission and post-launch support — we handle the complete mobile development lifecycle so you don't have to manage multiple vendors.</p>
                        <div class="svc-intro__actions">
                            <a href="contact.php" class="btn btn-primary rounded-pill px-4 py-2">Discuss Your App Idea</a>
                            <a href="portfolio.php" class="svc-intro__link">
                                View Our Work
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <div class="svc-intro__visual" data-aos="fade-left" data-aos-duration="700" data-aos-delay="100">
                        <div class="svc-intro__img-card">
                            <img src="https://picsum.photos/seed/mobiledev25/600/480" alt="Mobile App Development" loading="lazy">
                            <div class="svc-intro__stat-pill svc-intro__stat-pill--1">
                                <span class="svc-intro__stat-num">2<span>+</span></span>
                                <span class="svc-intro__stat-label">Platforms Covered</span>
                            </div>
                            <div class="svc-intro__stat-pill svc-intro__stat-pill--2">
                                <span class="svc-intro__stat-num">25<span>+</span></span>
                                <span class="svc-intro__stat-label">Apps Delivered</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- WHAT WE BUILD -->
        <section class="inner-section inner-section--alt">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">App Types</span>
                    <h2 class="inner-title">What Kind of App <span>Can We Build?</span></h2>
                    <p class="inner-subtitle">Whether you need a consumer app, a business tool or an internal enterprise solution — we have built across a wide range of categories.</p>
                </div>

                <?php require_once 'components/mobile-data.php'; ?>
                <div class="devbuild-grid">

                    <?php foreach ($mob_build_types as $i => $build): $d = ($i % 3) * 60; ?>
                    <div class="devbuild-card" data-aos="fade-up" data-aos-delay="<?= $d ?>" data-aos-duration="650">
                        <span class="devbuild-card__num"><?= sprintf('%02d', $i + 1) ?></span>
                        <h4 class="devbuild-card__title"><?= htmlspecialchars($build['title']) ?></h4>
                        <p class="devbuild-card__desc"><?= htmlspecialchars($build['desc']) ?></p>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>

        <!-- PLATFORMS & TECH -->
        <section class="inner-section">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">Platforms &amp; Frameworks</span>
                    <h2 class="inner-title">Our Mobile <span>Tech Stack</span></h2>
                    <p class="inner-subtitle">We choose the right framework based on your budget, timeline and performance needs — not just what's currently trending.</p>
                </div>

                <div class="mob-platform-grid" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">

                    <?php foreach ($mob_platforms as $platform): ?>
                    <div class="mob-platform-card <?= $platform['card_mod'] ?>">
                        <div class="mob-platform-card__top">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/<?= htmlspecialchars($platform['icon']) ?>.svg" alt="<?= htmlspecialchars($platform['alt']) ?>" width="48" height="48">
                            <div>
                                <h3><?= htmlspecialchars($platform['name']) ?></h3>
                                <span class="mob-platform-card__tag <?= $platform['tag_mod'] ?>"><?= htmlspecialchars($platform['tag']) ?></span>
                            </div>
                        </div>
                        <p><?= htmlspecialchars($platform['desc']) ?></p>
                        <ul class="dsvc-card__list">
                            <?php foreach ($platform['list'] as $li): ?>
                            <li><?= htmlspecialchars($li) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>

                </div>

                <div class="techstack-sections" style="margin-top: 48px;" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">
                    <?php foreach ($mob_techstack as $group): ?>
                    <div class="techstack-group">
                        <div class="techstack-group__label"><span class="dev-layer__badge <?= htmlspecialchars($group['badge']) ?>"><?= htmlspecialchars($group['label']) ?></span></div>
                        <div class="techstack-row">
                            <?php foreach ($group['items'] as $tech): ?>
                            <div class="dtool-item">
                                <div class="dtool-item__icon"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/<?= htmlspecialchars($tech['icon']) ?>.svg" alt="<?= htmlspecialchars($tech['name']) ?>" width="44" height="44"></div>
                                <span class="dtool-item__name"><?= htmlspecialchars($tech['name']) ?></span>
                                <span class="dtool-item__role"><?= htmlspecialchars($tech['role']) ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>

        <!-- PROCESS -->
        <section class="inner-section inner-section--alt">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">How We Work</span>
                    <h2 class="inner-title">App Development <span>Process</span></h2>
                    <p class="inner-subtitle">From idea to app store — a structured process that keeps your project on track and on budget at every stage.</p>
                </div>

                <div class="dproc-grid">

                    <?php foreach ($mob_process as $i => $step): $d = ($i % 3) * 80; ?>
                    <div class="dproc-step" data-aos="fade-up" data-aos-delay="<?= $d ?>" data-aos-duration="650">
                        <div class="dproc-step__num"><?= sprintf('%02d', $i + 1) ?></div>
                        <div class="dproc-step__body">
                            <h4 class="dproc-step__title"><?= htmlspecialchars($step['title']) ?></h4>
                            <p class="dproc-step__desc"><?= htmlspecialchars($step['desc']) ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>

        <!-- WHY US -->
        <section class="inner-section">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">Why Choose Us</span>
                    <h2 class="inner-title">What Sets Our <span>Apps Apart</span></h2>
                </div>

                <div class="dwhy-grid">

                    <?php foreach ($mob_whyus as $i => $why): $d = $i * 80; ?>
                    <div class="dwhy-card" data-aos="fade-up" data-aos-delay="<?= $d ?>" data-aos-duration="650">
                        <div class="dwhy-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $why['svg'] ?></svg>
                        </div>
                        <h4 class="dwhy-card__title"><?= htmlspecialchars($why['title']) ?></h4>
                        <p class="dwhy-card__desc"><?= htmlspecialchars($why['desc']) ?></p>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section class="inner-section inner-section--alt">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">Common Questions</span>
                    <h2 class="inner-title">Mobile Development <span>FAQs</span></h2>
                </div>

                <div class="dsvc-faq" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">

                    <?php foreach ($mob_faqs as $faq): ?>
                    <div class="faq-item">
                        <button class="faq-q" aria-expanded="false">
                            <?= htmlspecialchars($faq['q']) ?>
                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <div class="faq-a">
                            <?= $faq['a'] ?>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="inner-cta-strip" data-aos="fade-up" data-aos-duration="700">
            <div class="container-90">
                <div class="inner-cta-strip__inner">
                    <div class="inner-cta-strip__text">
                        <h3>Got an App Idea? Let's Build It.</h3>
                        <p>Tell us what your app does, who it's for and what you need. We'll scope it, quote it and build it properly.</p>
                    </div>
                    <div class="inner-cta-strip__actions">
                        <a href="contact.php" class="btn-cta-primary">Discuss Your App</a>
                        <a href="https://wa.me/917799971112?text=Hello%2C%20I%27m%20interested%20in%20mobile%20app%20development!" class="btn-cta-outline" target="_blank" rel="noopener noreferrer">WhatsApp Us</a>
                    </div>
                </div>
            </div>
        </section>

    </main>


<?php include 'components/footer.php'; ?>
