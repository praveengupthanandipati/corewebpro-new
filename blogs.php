<?php
require_once 'components/blog-data.php';

$page_meta = '
    <title>Blog | Core Web Pro – Web Design, Development &amp; SEO Insights</title>
    <meta name="description" content="Expert articles on web design, web development, SEO, digital marketing and the latest technology trends — from the Core Web Pro team in Hyderabad.">
    <meta name="keywords" content="web design blog Hyderabad, web development articles, SEO tips, UI UX design blog, React tutorials, Laravel tips, digital marketing Hyderabad">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.corewebpro.com/blogs.php">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Blog | Core Web Pro – Web Design &amp; Development Insights">
    <meta property="og:description" content="Expert articles on web design, development, SEO and emerging tech from Core Web Pro, Hyderabad.">
    <meta property="og:url" content="https://www.corewebpro.com/blogs.php">
    <meta property="og:image" content="https://www.corewebpro.com/img/og-image.jpg">
';
include 'components/header.php';

// Build category list dynamically from data
$categories = ['all' => 'All Posts'];
foreach ($blog_posts as $p) {
    if (!isset($categories[$p['cat_key']])) {
        $categories[$p['cat_key']] = strip_tags($p['cat_label']);
    }
}
?>

    <section class="page-hero">
        <div class="page-hero__overlay"></div>
        <div class="container-90">
            <div class="page-hero__inner">
                <h1 class="page-hero__title">Blog</h1>
                <nav class="page-hero__breadcrumb" aria-label="breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="page-hero__sep">/</span>
                    <span>Blog</span>
                </nav>
            </div>
        </div>
    </section>

    <main>
        <section class="inner-section blogs-listing-section">
            <div class="container-90">

                <!-- Section head -->
                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">Our Blog</span>
                    <h2 class="inner-title">Insights, Guides &amp; <span>Industry Trends</span></h2>
                    <p class="inner-subtitle">Articles on web design, development, SEO and emerging technologies — written from real project experience, not theory.</p>
                </div>

                <!-- Category filters -->
                <div class="pf-filters" data-aos="fade-up" data-aos-duration="500" data-aos-delay="80">
                    <?php foreach ($categories as $key => $label): ?>
                    <button class="pf-filter<?= $key === 'all' ? ' active' : '' ?>" data-filter="<?= htmlspecialchars($key) ?>">
                        <?= htmlspecialchars($label) ?>
                    </button>
                    <?php endforeach; ?>
                </div>

                <!-- Blog grid — same 4-col grid as home page -->
                <div class="blogs-grid" id="blogsGrid">
                    <?php foreach ($blog_posts as $i => $post): ?>
                    <div class="blog-filter-wrap" data-cat="<?= htmlspecialchars($post['cat_key']) ?>">
                        <?php $delay = ($i % 4) * 100; include 'components/blog-card.php'; ?>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Empty state -->
                <div class="pf-empty" id="blogsEmpty" style="display:none;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                    <p>No articles found in this category.</p>
                </div>

                <!-- Post count -->
                <p class="blogs-count" id="blogsCount">
                    Showing <strong><?= count($blog_posts) ?></strong> articles
                </p>

            </div>
        </section>

        <!-- CTA -->
        <section class="inner-cta-strip" data-aos="fade-up" data-aos-duration="700">
            <div class="container-90">
                <div class="inner-cta-strip__inner">
                    <div class="inner-cta-strip__text">
                        <h3>Ready to Grow Your Online Presence?</h3>
                        <p>Let's build something great together — get a free consultation and quote within 24 hours.</p>
                    </div>
                    <div class="inner-cta-strip__actions">
                        <a href="contact.php" class="btn-cta-primary">Get a Free Quote</a>
                        <a href="https://wa.me/917799971112?text=Hello%2C%20I%27d%20like%20to%20discuss%20a%20project!" class="btn-cta-outline" target="_blank" rel="noopener noreferrer">WhatsApp Us</a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <script>
    (function () {
        var filters  = document.querySelectorAll('.pf-filter');
        var wraps    = document.querySelectorAll('.blog-filter-wrap');
        var empty    = document.getElementById('blogsEmpty');
        var countEl  = document.getElementById('blogsCount');

        filters.forEach(function (btn) {
            btn.addEventListener('click', function () {
                filters.forEach(function (b) { b.classList.remove('active'); });
                btn.classList.add('active');

                var cat     = btn.dataset.filter;
                var visible = 0;

                wraps.forEach(function (wrap) {
                    if (cat === 'all' || wrap.dataset.cat === cat) {
                        wrap.style.display = '';
                        visible++;
                    } else {
                        wrap.style.display = 'none';
                    }
                });

                empty.style.display   = visible === 0 ? 'flex' : 'none';
                var label = btn.textContent.trim();
                countEl.innerHTML = 'Showing <strong>' + visible + '</strong> article' + (visible !== 1 ? 's' : '') + (cat !== 'all' ? ' in <em>' + label + '</em>' : '');
            });
        });
    })();
    </script>

<?php include 'components/footer.php'; ?>
