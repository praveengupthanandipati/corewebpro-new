<?php
$page_meta = '
    <title>Sitemap | Core Web Pro – Web Design &amp; Development Hyderabad</title>
    <meta name="description" content="Browse all pages of the Core Web Pro website — services, portfolio, pricing, blog and more.">
    <meta name="robots" content="noindex, follow">
    <link rel="canonical" href="https://www.corewebpro.com/sitemap.php">
';
include 'components/header.php';
?>

    <section class="page-hero">
        <div class="page-hero__overlay"></div>
        <div class="container-90">
            <div class="page-hero__inner">
                <h1 class="page-hero__title">Sitemap</h1>
                <nav class="page-hero__breadcrumb" aria-label="breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="page-hero__sep">/</span>
                    <span>Sitemap</span>
                </nav>
            </div>
        </div>
    </section>

    <main>

        <!-- SITEMAP GROUPS -->
        <section class="inner-section">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">All Pages</span>
                    <h2 class="inner-title">Website <span>Sitemap</span></h2>
                    <p class="inner-subtitle">A complete index of every page on the Core Web Pro website — find what you need quickly.</p>
                </div>

                <?php require_once 'components/sitemap-data.php'; ?>
                <div class="row gy-5">

                    <?php foreach ($sitemap_groups as $i => $group): $d = $i * 120; ?>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="<?= $d ?>" data-aos-duration="700">
                        <div class="smap-group">

                            <div class="smap-group__head">
                                <div class="smap-group__icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $group['svg'] ?></svg>
                                </div>
                                <div>
                                    <span class="smap-group__eyebrow"><?= htmlspecialchars($group['eyebrow']) ?></span>
                                    <h3 class="smap-group__title"><?= htmlspecialchars($group['title']) ?></h3>
                                </div>
                            </div>

                            <ul class="smap-group__list">
                                <?php foreach ($group['links'] as $link): ?>
                                <li class="smap-group__item">
                                    <a href="<?= htmlspecialchars($link['href']) ?>" class="smap-group__link">
                                        <svg class="smap-group__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                        <div>
                                            <span class="smap-group__link-label"><?= htmlspecialchars($link['label']) ?></span>
                                            <span class="smap-group__link-desc"><?= htmlspecialchars($link['desc']) ?></span>
                                        </div>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>

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
                        <h3>Ready to Start Your Project?</h3>
                        <p>Explore our services or get in touch — we'll help you find the right solution for your business.</p>
                    </div>
                    <div class="inner-cta-strip__actions">
                        <a href="contact.php" class="btn-cta-primary">Contact Us</a>
                        <a href="pricing.php" class="btn-cta-outline">View Pricing</a>
                    </div>
                </div>
            </div>
        </section>

    </main>


<?php include 'components/footer.php'; ?>
