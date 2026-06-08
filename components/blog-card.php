<?php
/**
 * Blog card component.
 * Expects $post array and optional $delay (ms) in scope before include.
 * Usage:
 *   foreach ($blog_posts as $i => $post) {
 *       $delay = $i * 100;
 *       include 'components/blog-card.php';
 *   }
 */
$delay = $delay ?? 0;
$url   = 'blog-detail.php?slug=' . htmlspecialchars($post['slug']);
?>
<article class="blog-card" data-aos="fade-up" data-aos-delay="<?= $delay ?>" data-aos-duration="700">
    <a href="<?= $url ?>" class="blog-card__img-wrap">
        <img src="<?= htmlspecialchars($post['image']) ?>" alt="<?= htmlspecialchars($post['title']) ?>" class="blog-card__img" loading="lazy">
        <span class="blog-card__category blog-card__category--<?= htmlspecialchars($post['cat_key']) ?>"><?= $post['cat_label'] ?></span>
    </a>
    <div class="blog-card__body">
        <div class="blog-card__meta">
            <span class="blog-card__date"><?= htmlspecialchars($post['date']) ?></span>
            <span class="blog-card__read"><?= htmlspecialchars($post['read']) ?></span>
        </div>
        <h3 class="blog-card__title"><a href="<?= $url ?>"><?= $post['title'] ?></a></h3>
        <p class="blog-card__excerpt"><?= htmlspecialchars($post['excerpt']) ?></p>
        <a href="<?= $url ?>" class="blog-card__link">Read Article <span data-icon="arrowRight"></span></a>
    </div>
</article>
