<?php
$page_meta = '
    <title>Web Designing Services in Hyderabad | Core Web Pro</title>
    <meta name="description" content="Professional web designing services in Hyderabad — UI/UX design, responsive website design, landing page design, Figma prototypes and brand-aligned visual design for businesses of all sizes.">
    <meta name="keywords" content="web designing services Hyderabad, UI UX design Hyderabad, website design company Hyderabad, landing page design, responsive web design, Figma design Hyderabad, website redesign Hyderabad, professional web designer Hyderabad, freelance web designer Hyderabad, web design agency Telangana">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.corewebpro.com/web-designing.php">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Web Designing Services in Hyderabad | Core Web Pro">
    <meta property="og:description" content="Pixel-perfect web designing services from Core Web Pro — beautiful, responsive and conversion-focused website designs delivered from Hyderabad.">
    <meta property="og:url" content="https://www.corewebpro.com/web-designing.php">
    <meta property="og:image" content="https://www.corewebpro.com/img/og-image.jpg">
';
include 'components/header.php';
?>

    <!-- ===== PAGE HERO ===== -->
    <section class="page-hero">
        <div class="page-hero__overlay"></div>
        <div class="container-90">
            <div class="page-hero__inner">
                <h1 class="page-hero__title">Web Designing</h1>
                <nav class="page-hero__breadcrumb" aria-label="breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="page-hero__sep">/</span>
                    <span>Services</span>
                    <span class="page-hero__sep">/</span>
                    <span>Web Designing</span>
                </nav>
            </div>
        </div>
    </section>
    <!--/ PAGE HERO -->

    <main>

        <!-- ===== INTRO ===== -->
        <section class="inner-section">
            <div class="container-90">
                <div class="svc-intro-wrap">

                    <div class="svc-intro__text" data-aos="fade-right" data-aos-duration="700">
                        <span class="inner-eyebrow">What We Do</span>
                        <h2 class="inner-title">Beautiful Designs That <span>Convert Visitors</span></h2>
                        <p class="svc-intro__lead">A website is your most important sales tool — and how it looks and feels decides whether visitors stay or leave. We design websites that make strong first impressions and guide users effortlessly towards action.</p>
                        <p>Our web design work focuses entirely on the visual and UX layer — layout, typography, colour, spacing, imagery and interaction. We craft every screen with intent: knowing where the eye travels, what builds trust and what drives clicks.</p>
                        <p>Whether you need a fresh design for a new site, a redesign of an ageing one or just a set of high-fidelity Figma screens ready for a developer — we deliver clean, polished, pixel-perfect design that reflects your brand at its best.</p>
                        <div class="svc-intro__actions">
                            <a href="enquiry.php" class="btn btn-primary rounded-pill px-4 py-2">Get a Free Design Quote</a>
                        </div>
                    </div>

                    <div class="svc-intro__visual" data-aos="fade-left" data-aos-duration="700" data-aos-delay="100">
                        <div class="svc-intro__img-card">
                            <img src="img/webdesign01.png" alt="Web Design Work" loading="lazy">
                            <div class="svc-intro__stat-pill svc-intro__stat-pill--1">
                                <span class="svc-intro__stat-num">150<span>+</span></span>
                                <span class="svc-intro__stat-label">Designs Delivered</span>
                            </div>
                            <div class="svc-intro__stat-pill svc-intro__stat-pill--2">
                                <span class="svc-intro__stat-num">8<span>+</span></span>
                                <span class="svc-intro__stat-label">Years of Design</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--/ INTRO -->

        <!-- ===== DESIGN SERVICES ===== -->
        <section class="inner-section inner-section--alt">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">Our Design Services</span>
                    <h2 class="inner-title">Everything Design — <span>Nothing Else</span></h2>
                    <p class="inner-subtitle">We specialise exclusively in the design layer — visual layouts, UX flows and UI systems. No half-measures, no generalist shortcuts.</p>
                </div>

                <?php require_once 'components/web-designing-data.php'; ?>
                <div class="dsvc-grid">

                    <?php foreach ($design_services as $i => $svc): $d = ($i % 3) * 80; ?>
                    <div class="dsvc-card" data-aos="fade-up" data-aos-delay="<?= $d ?>" data-aos-duration="650">
                        <div class="dsvc-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $svc['svg'] ?></svg>
                        </div>
                        <h4 class="dsvc-card__title"><?= htmlspecialchars($svc['title']) ?></h4>
                        <p class="dsvc-card__desc"><?= htmlspecialchars($svc['desc']) ?></p>
                        <ul class="dsvc-card__list">
                            <?php foreach ($svc['list'] as $li): ?>
                            <li><?= htmlspecialchars($li) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>
        <!--/ DESIGN SERVICES -->

        <!-- ===== DESIGN PROCESS ===== -->
        <section class="inner-section">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">How We Work</span>
                    <h2 class="inner-title">Our Design <span>Process</span></h2>
                    <p class="inner-subtitle">A structured, transparent process that keeps you informed at every stage — from the first brief to the final design handoff.</p>
                </div>

                <div class="dproc-grid">

                    <?php foreach ($design_process as $i => $step): $d = ($i % 3) * 80; ?>
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
        <!--/ DESIGN PROCESS -->

        <!-- ===== WHY US ===== -->
        <section class="inner-section inner-section--alt">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">Why Choose Us</span>
                    <h2 class="inner-title">Design That Goes <span>Beyond Aesthetics</span></h2>
                    <p class="inner-subtitle">Good design is not just about looking great — it's about building trust, reducing friction and turning visitors into customers.</p>
                </div>

                <div class="dwhy-grid">

                    <?php foreach ($design_whyus as $i => $why): $d = $i * 80; ?>
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
        <!--/ WHY US -->

        <!-- ===== TOOLS WE USE ===== -->
        <section class="inner-section">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">Our Design Toolkit</span>
                    <h2 class="inner-title">Tools Behind <span>Every Design</span></h2>
                    <p class="inner-subtitle">We work with industry-standard design tools used by top studios worldwide — giving you outputs that integrate seamlessly with any development workflow.</p>
                </div>

                <div class="dtool-grid" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">

                    <?php foreach ($design_tools as $tool): ?>
                    <div class="dtool-item">
                        <div class="dtool-item__icon">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/<?= htmlspecialchars($tool['icon']) ?>.svg" alt="<?= htmlspecialchars($tool['name']) ?>" width="44" height="44">
                        </div>
                        <span class="dtool-item__name"><?= htmlspecialchars($tool['name']) ?></span>
                        <span class="dtool-item__role"><?= htmlspecialchars($tool['role']) ?></span>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>
        <!--/ TOOLS -->

        <!-- ===== FAQ ===== -->
        <section class="inner-section inner-section--alt">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">Common Questions</span>
                    <h2 class="inner-title">Design Service <span>FAQs</span></h2>
                </div>

                <div class="dsvc-faq" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">

                    <?php foreach ($design_faqs as $faq): ?>
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
        <!--/ FAQ -->

        <!-- ===== CTA STRIP ===== -->
        <section class="inner-cta-strip" data-aos="fade-up" data-aos-duration="700">
            <div class="container-90">
                <div class="inner-cta-strip__inner">
                    <div class="inner-cta-strip__text">
                        <h3>Ready for a Website That Stands Out?</h3>
                        <p>Tell us about your project and get a free design consultation and quote within 24 hours.</p>
                    </div>
                    <div class="inner-cta-strip__actions">
                        <a href="contact.php" class="btn-cta-primary">Get a Free Quote</a>
                        <a href="https://wa.me/917799971112?text=Hello%2C%20I%27m%20interested%20in%20web%20designing%20services!" class="btn-cta-outline" target="_blank" rel="noopener noreferrer">WhatsApp Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!--/ CTA STRIP -->

    </main>

<?php include 'components/footer.php'; ?>
