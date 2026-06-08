<?php
$page_meta = '
    <title>Pricing | Core Web Pro – Web Design & Development Packages in Hyderabad</title>
    <meta name="description" content="Transparent, fixed-price web design and development packages in Hyderabad. Choose from Starter, Business, Professional or Enterprise plans — no hidden charges.">
    <meta name="keywords" content="web design pricing Hyderabad, website development cost Hyderabad, affordable web design packages, web development packages India, Core Web Pro pricing">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.corewebpro.com/pricing.php">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Pricing | Core Web Pro – Web Design Packages Hyderabad">
    <meta property="og:description" content="Transparent pricing for web design, development and digital marketing — four clear packages with no hidden charges.">
    <meta property="og:url" content="https://www.corewebpro.com/pricing.php">
    <meta property="og:image" content="https://www.corewebpro.com/img/og-image.jpg">
';
include 'components/header.php';
?>

    <section class="page-hero">
        <div class="page-hero__overlay"></div>
        <div class="container-90">
            <div class="page-hero__inner">
                <h1 class="page-hero__title">Pricing</h1>
                <nav class="page-hero__breadcrumb" aria-label="breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="page-hero__sep">/</span>
                    <span>Pricing</span>
                </nav>
            </div>
        </div>
    </section>

    <main>

        <!-- PACKAGES -->
        <section class="inner-section">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">Simple, Transparent Pricing</span>
                    <h2 class="inner-title">Choose the Package <span>That Fits Your Goal</span></h2>
                    <p class="inner-subtitle">Fixed prices, clear deliverables and no surprise charges. Every package includes a free consultation before work begins.</p>
                </div>

                <?php require_once 'components/pricing-data.php'; ?>
                <div class="pricing-grid">

                    <?php foreach ($pricing_packages as $i => $pkg): $d = $i * 100; ?>
                    <div class="pricing-card <?= $pkg['card_mod'] ?>" data-aos="fade-up" data-aos-delay="<?= $d ?>" data-aos-duration="700">
                        <?php if ($pkg['popular_badge']): ?>
                        <div class="pricing-card__popular-badge"><?= htmlspecialchars($pkg['popular_badge']) ?></div>
                        <?php endif; ?>
                        <div class="pricing-card__head">
                            <span class="pricing-card__name"><?= htmlspecialchars($pkg['name']) ?></span>
                            <p class="pricing-card__tagline"><?= htmlspecialchars($pkg['tagline']) ?></p>
                        </div>
                        <?php if ($pkg['is_custom']): ?>
                        <div class="pricing-card__price pricing-card__price--custom">
                            <span class="pricing-card__amount pricing-card__amount--custom"><?= htmlspecialchars($pkg['amount']) ?></span>
                            <span class="pricing-card__note"><?= htmlspecialchars($pkg['price_note']) ?></span>
                        </div>
                        <?php else: ?>
                        <div class="pricing-card__price">
                            <span class="pricing-card__currency">₹</span>
                            <span class="pricing-card__amount"><?= htmlspecialchars($pkg['amount']) ?></span>
                            <span class="pricing-card__note"><?= htmlspecialchars($pkg['price_note']) ?></span>
                        </div>
                        <?php endif; ?>
                        <div class="pricing-card__timeline">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            Delivery in <strong><?= htmlspecialchars($pkg['timeline']) ?></strong>
                        </div>
                        <ul class="pricing-card__features">
                            <?php foreach ($pkg['features'] as $feat): ?>
                            <li class="<?= $feat['class'] ?>"><?= htmlspecialchars($feat['text']) ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="<?= htmlspecialchars($pkg['btn_href']) ?>" class="pricing-card__btn <?= $pkg['btn_class'] ?>"><?= htmlspecialchars($pkg['btn_text']) ?></a>
                    </div>
                    <?php endforeach; ?>

                </div>

                <!-- Disclaimer -->
                <p class="pricing-note" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                    All prices are exclusive of GST (18%). Prices are indicative — final quote is provided after a free scoping call.
                    Need something between packages? <a href="contact.php">Let's talk</a> — we build custom proposals for every project.
                </p>

            </div>
        </section>

        <!-- PACKAGE COMPARISON TABLE -->
        <section class="inner-section inner-section--alt">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">Side by Side</span>
                    <h2 class="inner-title">Full Package <span>Comparison</span></h2>
                </div>

                <div class="pricing-table-wrap" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">
                    <table class="pricing-table">
                        <thead>
                            <tr>
                                <th>Feature</th>
                                <th>Starter</th>
                                <th>Business</th>
                                <th class="pricing-table__highlight">Professional</th>
                                <th>Enterprise</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="pricing-table__group"><td colspan="5">Design &amp; Pages</td></tr>
                            <tr><td>Number of Pages</td><td>Up to 5</td><td>Up to 10</td><td class="pricing-table__highlight">Up to 15</td><td>Unlimited</td></tr>
                            <tr><td>Custom Design</td><td class="y">✓</td><td class="y">✓</td><td class="pricing-table__highlight y">✓</td><td class="y">✓</td></tr>
                            <tr><td>Mobile Responsive</td><td class="y">✓</td><td class="y">✓</td><td class="pricing-table__highlight y">✓</td><td class="y">✓</td></tr>
                            <tr><td>Figma Source File</td><td class="y">✓</td><td class="y">✓</td><td class="pricing-table__highlight y">✓</td><td class="y">✓</td></tr>
                            <tr><td>Revision Rounds</td><td>1</td><td>2</td><td class="pricing-table__highlight">3</td><td>Unlimited</td></tr>

                            <tr class="pricing-table__group"><td colspan="5">Development</td></tr>
                            <tr><td>HTML/CSS Build</td><td class="n">—</td><td class="y">✓</td><td class="pricing-table__highlight y">✓</td><td class="y">✓</td></tr>
                            <tr><td>CMS Integration</td><td class="n">—</td><td>WordPress</td><td class="pricing-table__highlight">WordPress / Laravel</td><td>Custom</td></tr>
                            <tr><td>Blog / Portfolio</td><td class="n">—</td><td class="y">✓</td><td class="pricing-table__highlight y">✓</td><td class="y">✓</td></tr>
                            <tr><td>Payment Gateway</td><td class="n">—</td><td class="n">—</td><td class="pricing-table__highlight y">✓</td><td class="y">✓</td></tr>
                            <tr><td>Custom Backend / API</td><td class="n">—</td><td class="n">—</td><td class="pricing-table__highlight n">—</td><td class="y">✓</td></tr>
                            <tr><td>User Dashboards</td><td class="n">—</td><td class="n">—</td><td class="pricing-table__highlight n">—</td><td class="y">✓</td></tr>

                            <tr class="pricing-table__group"><td colspan="5">SEO &amp; Performance</td></tr>
                            <tr><td>Basic On-Page SEO</td><td class="y">✓</td><td class="y">✓</td><td class="pricing-table__highlight y">✓</td><td class="y">✓</td></tr>
                            <tr><td>Schema Markup</td><td class="n">—</td><td class="n">—</td><td class="pricing-table__highlight y">✓</td><td class="y">✓</td></tr>
                            <tr><td>Speed Optimisation</td><td class="n">—</td><td class="n">—</td><td class="pricing-table__highlight y">✓ (90+ score)</td><td class="y">✓</td></tr>
                            <tr><td>Google Analytics</td><td class="n">—</td><td class="y">✓</td><td class="pricing-table__highlight y">✓</td><td class="y">✓</td></tr>
                            <tr><td>Search Console Setup</td><td class="n">—</td><td class="n">—</td><td class="pricing-table__highlight y">✓</td><td class="y">✓</td></tr>

                            <tr class="pricing-table__group"><td colspan="5">Support &amp; Delivery</td></tr>
                            <tr><td>Delivery Time</td><td>5–7 days</td><td>10–14 days</td><td class="pricing-table__highlight">20–25 days</td><td>4–12 weeks</td></tr>
                            <tr><td>Post-Launch Support</td><td>15 days</td><td>30 days</td><td class="pricing-table__highlight">60 days</td><td>90 days</td></tr>
                            <tr><td>WhatsApp Support</td><td class="y">✓</td><td class="y">✓</td><td class="pricing-table__highlight y">✓</td><td class="y">✓</td></tr>
                            <tr><td>Dedicated Manager</td><td class="n">—</td><td class="n">—</td><td class="pricing-table__highlight n">—</td><td class="y">✓</td></tr>

                            <tr class="pricing-table__foot">
                                <td>Price (+ GST)</td>
                                <td>₹8,999</td>
                                <td>₹24,999</td>
                                <td class="pricing-table__highlight"><strong>₹49,999</strong></td>
                                <td>Custom</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </section>

        <!-- ADD-ONS -->
        <section class="inner-section">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">Optional Add-Ons</span>
                    <h2 class="inner-title">Extend Any <span>Package</span></h2>
                    <p class="inner-subtitle">Every service below can be added to any package at a fixed price. Mix and match to build exactly what your project needs.</p>
                </div>

                <div class="addon-grid">

                    <?php foreach ($pricing_addons as $i => $addon): $d = $i * 40; ?>
                    <div class="addon-card" data-aos="fade-up" data-aos-delay="<?= $d ?>" data-aos-duration="600">
                        <div class="addon-card__left">
                            <h4 class="addon-card__title"><?= htmlspecialchars($addon['title']) ?></h4>
                            <p class="addon-card__desc"><?= htmlspecialchars($addon['desc']) ?></p>
                        </div>
                        <span class="addon-card__price"><?= htmlspecialchars($addon['price']) ?><?php if ($addon['suffix']): ?><span><?= htmlspecialchars($addon['suffix']) ?></span><?php endif; ?></span>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section class="inner-section inner-section--alt">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">Pricing Questions</span>
                    <h2 class="inner-title">Frequently Asked <span>Questions</span></h2>
                </div>

                <div class="dsvc-faq" data-aos="fade-up" data-aos-delay="80" data-aos-duration="700">

                    <?php foreach ($pricing_faqs as $faq): ?>
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
                        <h3>Not Sure Which Package Fits?</h3>
                        <p>Tell us about your project in a quick message — we'll recommend the right option and send a free, no-obligation quote within 24 hours.</p>
                    </div>
                    <div class="inner-cta-strip__actions">
                        <a href="contact.php" class="btn-cta-primary">Get a Free Quote</a>
                        <a href="https://wa.me/917799971112?text=Hello%2C%20I%27d%20like%20to%20discuss%20a%20pricing%20package!" class="btn-cta-outline" target="_blank" rel="noopener noreferrer">WhatsApp Us</a>
                    </div>
                </div>
            </div>
        </section>

    </main>


<?php include 'components/footer.php'; ?>
