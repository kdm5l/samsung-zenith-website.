<?php
$page_title = 'Samsung Zenith — The Future Is Now';
$page_description = 'Samsung Zenith: premium, futuristic technology for students, professionals and creatives.';
require_once __DIR__ . '/includes/header.php';

$featured = array_slice(get_products(true), 0, 4);
?>

<!-- ============ HERO ============ -->
<section class="hero">
    <div class="hero-media hero-stars"<?= bg_style('assets/img/hero.png') ?>></div>
    <div class="container hero-content reveal">
        <span class="eyebrow">Samsung Zenith &middot; Zenith Prime</span>
        <h1>THE FUTURE IS NOW</h1>
        <p class="lede">Precision-engineered technology built for students, professionals and creatives who refuse to compromise on performance or design.</p>
        <div class="btn-row">
            <a href="products.php" class="btn btn-primary">Explore Products</a>
            <a href="about.php" class="btn btn-outline">Learn More</a>
        </div>
    </div>
</section>

<!-- ============ FEATURED PRODUCTS ============ -->
<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Featured</span>
            <h2>Featured Products</h2>
            <p>The lineup redefining what premium technology feels like.</p>
        </div>

        <div class="grid grid-4">
            <?php foreach ($featured as $p): ?>
            <article class="card product-card reveal">
                <a href="product-detail.php?slug=<?= h($p['slug']) ?>">
                    <div class="card-media">
                        <?= img_tag($p['hero_image'] ?? '', h($p['name'])) ?>
                        <?php if (!empty($p['is_new'])): ?><span class="badge">New</span><?php endif; ?>
                    </div>
                    <div class="card-body">
                        <span class="category"><?= h($p['category']) ?></span>
                        <h3><?= h($p['name']) ?></h3>
                        <p><?= h($p['tagline'] ?? $p['short_description']) ?></p>
                        <div class="card-footer">
                            <span class="price"><?= format_price($p['price']) ?></span>
                            <span class="btn btn-outline" style="padding:8px 16px;">View</span>
                        </div>
                    </div>
                </a>
            </article>
            <?php endforeach; ?>
        </div>

        <div class="text-center" style="margin-top:48px;">
            <a href="products.php" class="btn btn-outline">View All Products</a>
        </div>
    </div>
</section>

<!-- ============ BRAND VALUES ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Why Zenith</span>
            <h2>Our Quality</h2>
        </div>

        <div class="grid grid-3 value-grid">
            <div class="value-item reveal">
                <div class="value-icon"><?= icon('innovation') ?></div>
                <h3>Innovation</h3>
                <p>Engineering that pushes the boundary of what technology can do.</p>
            </div>
            <div class="value-item reveal">
                <div class="value-icon"><?= icon('quality') ?></div>
                <h3>Premium Design</h3>
                <p>Every material and detail chosen for a feel that matches the performance.</p>
            </div>
            <div class="value-item reveal">
                <div class="value-icon"><?= icon('performance') ?></div>
                <h3>Top Performance</h3>
                <p>Built to keep up with your work, your studies and your creative process.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ EXPLORE THE COLLECTION ============ -->
<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">The Collection</span>
            <h2>Explore The Collection</h2>
        </div>

        <div class="grid" style="grid-template-columns: 1.4fr 1fr; gap:16px;" class="reveal">
            <div class="media-block" style="aspect-ratio:4/3.2;"><?= img_tag('assets/img/mobile.png', 'Zenith Mobile') ?: 'Zenith Mobile' ?></div>
            <div class="grid" style="gap:16px; grid-template-rows: 1fr 1fr;">
                <div class="media-block"><?= img_tag('assets/img/buds.png', 'Zenith Buds') ?: 'Zenith Buds' ?></div>
                <div class="media-block"><?= img_tag('assets/img/tablet.jpg', 'Zenith Prime') ?: 'Zenith Prime' ?></div>
            </div>
        </div>

        <div class="text-center" style="margin-top:40px;">
            <a href="gallery.php" class="btn btn-outline">View Gallery</a>
        </div>
    </div>
</section>

<!-- ============ DISCOVER MORE ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Keep Exploring</span>
            <h2>Discover More</h2>
        </div>

        <div class="grid grid-2">
            <article class="card reveal">
                <div class="card-media" style="aspect-ratio:16/10;"><?= img_tag('assets/img/hero.png', 'About Zenith') ?></div>
                <div class="card-body">
                    <h3>About Zenith</h3>
                    <p>Learn about our story, our mission and the people behind the brand.</p>
                    <a href="about.php" class="btn btn-outline">About Us</a>
                </div>
            </article>
            <article class="card reveal">
                <div class="card-media" style="aspect-ratio:16/10;"><?= img_tag('assets/img/media.jpg', 'Newsroom') ?></div>
                <div class="card-body">
                    <h3>Newsroom</h3>
                    <p>The latest product news, articles and behind-the-scenes stories.</p>
                    <a href="media.php" class="btn btn-outline">Visit Media</a>
                </div>
            </article>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
