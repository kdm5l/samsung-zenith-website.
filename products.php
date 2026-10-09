<?php
$page_title = 'Products — Samsung Zenith';
$page_description = 'Explore the full Samsung Zenith product range — laptops, mobile, audio, wearables and more.';
require_once __DIR__ . '/includes/header.php';

$products = get_products();
$featured = $products[0] ?? null;
$categories = array_values(array_unique(array_column($products, 'category')));
?>

<!-- ============ HERO ============ -->
<section class="hero hero-compact">
    <div class="hero-media hero-stars"<?= bg_style('assets/img/hero-products.jpg') ?>></div>
    <div class="container hero-content reveal">
        <span class="eyebrow">The Range</span>
        <h1>Our Products</h1>
        <p class="lede">Engineered for performance. Designed for life.</p>
    </div>
</section>

<!-- ============ FEATURED PRODUCT ============ -->
<?php if ($featured): ?>
<section class="section">
    <div class="container">
        <div class="split reveal">
            <div>
                <span class="eyebrow">Featured Product</span>
                <h2><?= h($featured['name']) ?></h2>
                <p style="margin:16px 0 28px;"><?= h($featured['short_description']) ?></p>
                <a href="product-detail.php?slug=<?= h($featured['slug']) ?>" class="btn btn-primary">Learn More</a>
            </div>
            <div class="media-block"><?= img_tag($featured['hero_image'] ?? '', h($featured['name'])) ?: 'Product Image' ?></div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ============ EXPLORE RANGE ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Full Range</span>
            <h2>Explore Our Range Of Products</h2>
        </div>

        <div class="filter-bar reveal">
            <button class="filter-pill active" data-filter="all">All</button>
            <?php foreach ($categories as $cat): ?>
            <button class="filter-pill" data-filter="<?= h($cat) ?>"><?= h($cat) ?></button>
            <?php endforeach; ?>
        </div>

        <div class="grid grid-3">
            <?php foreach ($products as $p): ?>
            <article class="card product-card reveal" data-category="<?= h($p['category']) ?>">
                <a href="product-detail.php?slug=<?= h($p['slug']) ?>">
                    <div class="card-media">
                        <?= img_tag($p['hero_image'] ?? '', h($p['name'])) ?>
                        <?php if (!empty($p['is_new'])): ?><span class="badge">New</span><?php endif; ?>
                    </div>
                    <div class="card-body">
                        <span class="category"><?= h($p['category']) ?></span>
                        <h3><?= h($p['name']) ?></h3>
                        <p><?= h($p['short_description']) ?></p>
                        <div class="card-footer">
                            <span class="price"><?= format_price($p['price']) ?></span>
                            <span class="btn btn-outline" style="padding:8px 16px;">View</span>
                        </div>
                    </div>
                </a>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ PRODUCTS FOR EVERY LIFESTYLE ============ -->
<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Built For You</span>
            <h2>Products For Every Lifestyle</h2>
        </div>

        <div class="grid grid-3 value-grid">
            <div class="value-item reveal">
                <div class="value-icon"><?= icon('briefcase') ?></div>
                <h3>Professionals</h3>
                <p>Devices that keep up with deadlines, meetings and everything after.</p>
            </div>
            <div class="value-item reveal">
                <div class="value-icon"><?= icon('grad-cap') ?></div>
                <h3>Students</h3>
                <p>Lightweight, reliable performance built for campus life.</p>
            </div>
            <div class="value-item reveal">
                <div class="value-icon"><?= icon('globe') ?></div>
                <h3>Creatives</h3>
                <p>Colour-accurate, powerful tools for bringing ideas to life.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ COMPARE PRODUCTS ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Compare</span>
            <h2>Compare Products</h2>
        </div>

        <div class="compare-table-wrap reveal">
            <table class="compare-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>New</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $p): ?>
                    <tr>
                        <td><?= h($p['name']) ?></td>
                        <td><?= h($p['category']) ?></td>
                        <td><?= format_price($p['price']) ?></td>
                        <td><?= !empty($p['is_new']) ? 'Yes' : '—' ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ============ CTA ============ -->
<section class="section text-center">
    <div class="container reveal">
        <h2>Ready To Find Your Perfect Device?</h2>
        <p style="max-width:480px; margin:14px auto 32px;">Get in touch with our team for guidance choosing the right Zenith product for you.</p>
        <a href="contact.php" class="btn btn-primary">Contact Us</a>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
