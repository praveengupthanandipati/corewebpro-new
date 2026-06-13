<?php
$page_meta = '
    <title>Portfolio | Core Web Pro – Web Design & Development Projects in Hyderabad</title>
    <meta name="description" content="Explore Core Web Pro\'s portfolio of web design, web development and graphic design projects. 8+ years of delivering stunning websites and brand identities across industries in Hyderabad.">
    <meta name="keywords" content="web design portfolio Hyderabad, web development projects Hyderabad, graphic design portfolio, Core Web Pro work, website design examples, UI UX portfolio Hyderabad, freelance web designer portfolio">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.corewebpro.com/portfolio.php">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Portfolio | Core Web Pro – Web Design & Development Projects">
    <meta property="og:description" content="Browse our portfolio of websites, web apps and brand identities built for clients across Hyderabad and beyond.">
    <meta property="og:url" content="https://www.corewebpro.com/portfolio.php">
    <meta property="og:image" content="https://www.corewebpro.com/img/og-image.jpg">
';
include 'components/header.php';
?>

    <!-- ===== PAGE HERO ===== -->
    <section class="page-hero">
        <div class="page-hero__overlay"></div>
        <div class="container-90">
            <div class="page-hero__inner">
                <h1 class="page-hero__title">Our Portfolio</h1>
                <nav class="page-hero__breadcrumb" aria-label="breadcrumb">
                    <a href="https://www.corewebpro.in">Home</a>
                    <span class="page-hero__sep">/</span>
                    <span>Portfolio</span>
                </nav>
            </div>
        </div>
    </section>
    <!--/ PAGE HERO -->

    <main>

        <!-- ===== PORTFOLIO ===== -->
        <section class="inner-section pf-section">
            <div class="container-90">

                <!-- Header -->
                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">Our Work</span>
                    <h2 class="inner-title">Projects We're <span>Proud Of</span></h2>
                    <p class="inner-subtitle">From brand identities and landing pages to full-stack web applications — here's a look at some of the work we've delivered for clients across industries.</p>
                </div>

                <!-- Filter tabs -->
                <div class="pf-filters" data-aos="fade-up" data-aos-duration="500" data-aos-delay="80">
                    <button class="pf-filter active" data-filter="all">All Projects</button>
                    <button class="pf-filter" data-filter="webdesign">Web Designing</button>
                    <button class="pf-filter" data-filter="webdev">Web Development</button>
                    <button class="pf-filter" data-filter="seo">SEO & Digital Marketing</button>
                    <button class="pf-filter" data-filter="mobileapp">Mobile APP Development</button>
                </div>

                <?php require_once 'components/portfolio-data.php'; ?>
                <!-- Portfolio grid -->
                <div class="pf-grid" id="pfGrid">

                    <?php foreach ($portfolio_items as $i => $pf): $d = ($i % 3) * 80; ?>
                    <div class="pf-card" data-cat="<?= htmlspecialchars($pf['cat']) ?>" data-aos="fade-up" data-aos-delay="<?= $d ?>" data-aos-duration="650">
                        <div class="pf-card__thumb">
                            <div class="pf-card__logo-wrap">
                                <img src="<?= htmlspecialchars($pf['logo']) ?>" alt="<?= htmlspecialchars($pf['logo_alt']) ?> Logo" class="pf-card__logo">
                            </div>
                            <div class="pf-card__overlay">
                                <a href="<?= htmlspecialchars($pf['href']) ?>" target="_blank" rel="noopener noreferrer" class="pf-card__live">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                                    View Live
                                </a>
                            </div>
                        </div>
                        <div class="pf-card__body">
                            <div class="pf-card__meta">
                                <span class="pf-badge pf-badge--<?= htmlspecialchars($pf['cat']) ?>"><?= htmlspecialchars($pf['badge']) ?></span>
                                <span class="pf-card__type"><?= htmlspecialchars($pf['type']) ?></span>
                            </div>
                            <h3 class="pf-card__name"><?= htmlspecialchars($pf['name']) ?></h3>
                            <p class="pf-card__desc"><?= htmlspecialchars($pf['desc']) ?></p>
                            <a href="<?= htmlspecialchars($pf['href']) ?>" target="_blank" rel="noopener noreferrer" class="pf-card__url">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg>
                                <?= htmlspecialchars($pf['url_label']) ?>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
                <!-- /pf-grid -->

                <!-- No results message (hidden by default) -->
                <div class="pf-empty" id="pfEmpty" style="display:none;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                    <p>No projects found in this category.</p>
                </div>

            </div>
        </section>
        <!--/ PORTFOLIO -->

        <!-- ===== CTA STRIP ===== -->
        <section class="inner-cta-strip" data-aos="fade-up" data-aos-duration="700">
            <div class="container-90">
                <div class="inner-cta-strip__inner">
                    <div class="inner-cta-strip__text">
                        <h3>Have a Project in Mind?</h3>
                        <p>Let's create something you'll be proud to show the world. Tell us about your project and we'll get back to you within 24 hours.</p>
                    </div>
                    <div class="inner-cta-strip__actions">
                        <a href="/enquiry" class="btn-cta-primary">Start a Project</a>
                        <a href="https://wa.me/917799971112?text=Hello%2C%20I%27d%20like%20to%20discuss%20a%20project!" class="btn-cta-outline" target="_blank" rel="noopener noreferrer">WhatsApp Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!--/ CTA STRIP -->

    </main>

    <script>
    (function () {
        var filters = document.querySelectorAll('.pf-filter');
        var cards   = document.querySelectorAll('.pf-card');
        var empty   = document.getElementById('pfEmpty');

        filters.forEach(function (btn) {
            btn.addEventListener('click', function () {
                filters.forEach(function (b) { b.classList.remove('active'); });
                btn.classList.add('active');

                var cat = btn.dataset.filter;
                var visible = 0;

                cards.forEach(function (card) {
                    if (cat === 'all' || card.dataset.cat === cat) {
                        card.classList.remove('pf-card--hidden');
                        visible++;
                    } else {
                        card.classList.add('pf-card--hidden');
                    }
                });

                empty.style.display = visible === 0 ? 'flex' : 'none';
            });
        });
    })();
    </script>

<?php include 'components/footer.php'; ?>
