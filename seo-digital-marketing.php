<?php
$page_meta = '
    <title>SEO & Digital Marketing Services in Hyderabad | Core Web Pro</title>
    <meta name="description" content="Result-driven SEO and digital marketing services in Hyderabad — on-page SEO, technical SEO, local SEO, Google Ads, social media marketing, content marketing and monthly performance reporting.">
    <meta name="keywords" content="SEO services Hyderabad, digital marketing Hyderabad, search engine optimisation Hyderabad, Google Ads Hyderabad, social media marketing Hyderabad, local SEO Hyderabad, content marketing Hyderabad, PPC management Hyderabad, SEO agency Telangana, website ranking Hyderabad">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.corewebpro.com/seo-digital-marketing.php">
    <meta property="og:type" content="website">
    <meta property="og:title" content="SEO & Digital Marketing Services in Hyderabad | Core Web Pro">
    <meta property="og:description" content="Drive more traffic, leads and revenue with result-focused SEO and digital marketing services from Core Web Pro, Hyderabad.">
    <meta property="og:url" content="https://www.corewebpro.com/seo-digital-marketing.php">
    <meta property="og:image" content="https://www.corewebpro.com/img/og-image.jpg">
';
include 'components/header.php';
?>

    <!-- ===== PAGE HERO ===== -->
    <section class="page-hero">
        <div class="page-hero__overlay"></div>
        <div class="container-90">
            <div class="page-hero__inner">
                <h1 class="page-hero__title">SEO &amp; Digital Marketing</h1>
                <nav class="page-hero__breadcrumb" aria-label="breadcrumb">
                    <a href="https://www.corewebpro.in">Home</a>
                    <span class="page-hero__sep">/</span>
                    <span>Services</span>
                    <span class="page-hero__sep">/</span>
                    <span>SEO &amp; Digital Marketing</span>
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
                        <span class="inner-eyebrow">Grow Online</span>
                        <h2 class="inner-title">Be Found. Be Chosen. <span>Be Remembered.</span></h2>
                        <p class="svc-intro__lead">A beautiful website is only valuable if people find it. SEO and digital marketing are what turn your online presence into a consistent source of traffic, leads and revenue.</p>
                        <p>We offer end-to-end digital marketing services — from improving your search engine rankings organically through SEO, to running targeted paid campaigns on Google and social platforms that deliver measurable ROI.</p>
                        <p>Everything we do is data-driven and transparent. No vague promises, no black-hat shortcuts — just honest strategy, consistent execution and monthly reports that show exactly what's working.</p>
                        <div class="svc-intro__actions">
                            <a href="/enquiry" class="btn btn-primary rounded-pill px-4 py-2">Get a Free SEO Audit</a>
                        </div>
                    </div>

                    <div class="svc-intro__visual" data-aos="fade-left" data-aos-duration="700" data-aos-delay="100">
                        <div class="svc-intro__img-card">
                            <img src="img/digitalmarketting.jpg" alt="SEO and Digital Marketing" loading="lazy">
                            <div class="svc-intro__stat-pill svc-intro__stat-pill--1">
                                <span class="svc-intro__stat-num">3<span>x</span></span>
                                <span class="svc-intro__stat-label">Avg. Traffic Growth</span>
                            </div>
                            <div class="svc-intro__stat-pill svc-intro__stat-pill--2">
                                <span class="svc-intro__stat-num">8<span>+</span></span>
                                <span class="svc-intro__stat-label">Years of SEO</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--/ INTRO -->

        <!-- ===== SEO SERVICES ===== -->
        <section class="inner-section inner-section--alt" id="seo-services">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">Search Engine Optimisation</span>
                    <h2 class="inner-title">SEO Services That <span>Actually Rank</span></h2>
                    <p class="inner-subtitle">Sustainable, white-hat SEO strategies that improve your visibility in Google search results — driving qualified organic traffic month after month without paying per click.</p>
                </div>

                <?php require_once 'components/seo-data.php'; ?>
                <div class="dsvc-grid" id="seo-grid">

                    <?php foreach ($seo_services as $i => $svc): $d = ($i % 3) * 80; ?>
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
        <!--/ SEO SERVICES -->

        <!-- ===== DIGITAL MARKETING SERVICES ===== -->
        <section class="inner-section" id="digital-marketing">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">Digital Marketing</span>
                    <h2 class="inner-title">Marketing That Drives <span>Real Results</span></h2>
                    <p class="inner-subtitle">Beyond SEO — paid, social and content strategies that put your brand in front of the right audience at the right moment and move them towards action.</p>
                </div>

                <div class="dm-services-wrap">

                    <?php foreach ($dm_services as $i => $dm): $d = $i * 60; ?>
                    <div class="dm-service-row" data-aos="fade-up" data-aos-delay="<?= $d ?>" data-aos-duration="650">
                        <div class="dm-service-row__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $dm['svg'] ?></svg>
                        </div>
                        <div class="dm-service-row__body">
                            <div class="dm-service-row__head">
                                <h3 class="dm-service-row__title"><?= htmlspecialchars($dm['title']) ?></h3>
                                <span class="dm-service-row__tag"><?= htmlspecialchars($dm['tag']) ?></span>
                            </div>
                            <p><?= htmlspecialchars($dm['desc']) ?></p>
                            <div class="dm-service-row__tags">
                                <?php foreach ($dm['tags'] as $tag): ?>
                                <span><?= htmlspecialchars($tag) ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>
        <!--/ DIGITAL MARKETING SERVICES -->

        <!-- ===== WHY SEO MATTERS ===== -->
        <section class="inner-section inner-section--alt">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">Why It Matters</span>
                    <h2 class="inner-title">The Case for <span>SEO &amp; Digital Marketing</span></h2>
                    <p class="inner-subtitle">Every day your competitors are investing in SEO and digital marketing. Every day you're not, the gap gets wider.</p>
                </div>

                <div class="seo-stats-grid">
                    <?php foreach ($seo_stats as $i => $stat): $d = $i * 80; ?>
                    <div class="seo-stat-card" data-aos="fade-up" data-aos-delay="<?= $d ?>" data-aos-duration="600">
                        <span class="seo-stat-card__num"><?= htmlspecialchars($stat['num']) ?><span><?= htmlspecialchars($stat['suffix']) ?></span></span>
                        <p class="seo-stat-card__fact"><?= htmlspecialchars($stat['fact']) ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="dwhy-grid" style="margin-top: 40px;">

                    <?php foreach ($seo_whyus as $i => $why): $d = $i * 80; ?>
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
        <!--/ WHY SEO MATTERS -->

        <!-- ===== OUR PROCESS ===== -->
        <section class="inner-section">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">How We Work</span>
                    <h2 class="inner-title">Our SEO &amp; Marketing <span>Process</span></h2>
                    <p class="inner-subtitle">A structured, repeatable process that delivers consistent results — no guesswork, no black boxes.</p>
                </div>

                <div class="dproc-grid">

                    <?php foreach ($seo_process as $i => $step): $d = ($i % 3) * 80; ?>
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
        <!--/ PROCESS -->

        <!-- ===== TOOLS ===== -->
        <section class="inner-section inner-section--alt">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">Our Toolkit</span>
                    <h2 class="inner-title">Tools We Use to <span>Drive Results</span></h2>
                    <p class="inner-subtitle">Industry-leading SEO and marketing tools that give us the data, insights and automation needed to outperform the competition.</p>
                </div>

                <div class="dtool-grid" style="grid-template-columns: repeat(5, 1fr);" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">

                    <?php foreach ($seo_tools as $tool): ?>
                    <div class="dtool-item">
                        <div class="dtool-item__icon">
                            <?= $tool['svg'] ?>
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
        <section class="inner-section">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">Common Questions</span>
                    <h2 class="inner-title">SEO &amp; Marketing <span>FAQs</span></h2>
                </div>

                <div class="dsvc-faq" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">

                    <?php foreach ($seo_faqs as $faq): ?>
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
                        <h3>Ready to Rank Higher &amp; Grow Faster?</h3>
                        <p>Get a free SEO audit of your website and a clear plan to improve your rankings and traffic. No obligation, no hard sell.</p>
                    </div>
                    <div class="inner-cta-strip__actions">
                        <a href="/enquiry" class="btn-cta-primary">Get Free SEO Audit</a>
                        <a href="https://wa.me/917799971112?text=Hello%2C%20I%27m%20interested%20in%20SEO%20and%20digital%20marketing%20services!" class="btn-cta-outline" target="_blank" rel="noopener noreferrer">WhatsApp Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!--/ CTA STRIP -->

    </main>


<?php include 'components/footer.php'; ?>
