<?php
require_once __DIR__ . '/includes/functions.php';

$slug = $_GET['slug'] ?? 'zenith-prime';
$product = get_product_by_slug($slug);

// Fall back to the first available product if the slug doesn't match anything
if (!$product) {
    $all = get_products();
    $product = $all[0] ?? null;
}

if (!$product) {
    http_response_code(404);
    $page_title = 'Product Not Found — Samsung Zenith';
    require_once __DIR__ . '/includes/header.php';
    echo '<section class="section text-center"><div class="container"><h1>Product Not Found</h1><p style="margin-top:12px;"><a href="products.php" class="btn btn-outline" style="margin-top:20px;display:inline-flex;">Back To Products</a></p></div></section>';
    require_once __DIR__ . '/includes/footer.php';
    exit;
}

$page_title = $product['name'] . ' — Samsung Zenith';
$page_description = $product['short_description'] ?? '';
require_once __DIR__ . '/includes/header.php';

$features = $product['features'] ?? [
    ['icon' => 'performance', 'title' => 'Powerful Performance', 'description' => 'Tuned for demanding, everyday workloads.'],
    ['icon' => 'display', 'title' => 'Brilliant Display', 'description' => 'True-to-life colour, edge to edge.'],
    ['icon' => 'battery', 'title' => 'Long Battery Life', 'description' => 'Built to last a full day, every day.'],
    ['icon' => 'design', 'title' => 'Premium Design', 'description' => 'Precision materials, thoughtfully finished.'],
];
$specs = $product['specs'] ?? [];

// Related products: same category, excluding the current one
$related = array_values(array_filter(get_products(), fn($p) => $p['category'] === $product['category'] && $p['slug'] !== $product['slug']));
$related = array_slice($related, 0, 3);
?>

<!-- ============ PRODUCT HERO ============ -->
<section class="product-hero">
    <div class="container reveal">
        <span class="category-tag"><?= h($product['category']) ?></span>
        <h1><?= h($product['name']) ?></h1>
        <p class="lede" style="margin:14px auto 0;"><?= h($product['tagline'] ?? '') ?></p>
        <p class="price-lg"><?= format_price($product['price']) ?></p>
        <a href="contact.php" class="btn btn-primary">Enquire Now</a>
        <div class="product-hero-media"><?= img_tag($product['hero_image'] ?? '', h($product['name'])) ?></div>
    </div>
</section>

<!-- ============ OVERVIEW ============ -->
<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <h2>Overview</h2>
            <p><?= h($product['description'] ?? $product['short_description'] ?? '') ?></p>
        </div>
    </div>
</section>

<!-- ============ KEY FEATURES ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Highlights</span>
            <h2>Key Features</h2>
        </div>

        <div class="feature-list">
            <?php foreach ($features as $f): ?>
            <div class="feature-row reveal">
                <div class="value-icon"><?= icon($f['icon']) ?></div>
                <div>
                    <h3><?= h($f['title']) ?></h3>
                    <p><?= h($f['description']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ PRODUCT GALLERY ============ -->
<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Gallery</span>
            <h2>Product Gallery</h2>
        </div>
        <div class="gallery-two reveal">
            <div class="gallery-item"><?= img_tag("assets/img/product-{$product['slug']}-gallery-1.jpg", h($product['name'])) ?></div>
            <div class="gallery-item"><?= img_tag("assets/img/product-{$product['slug']}-gallery-2.jpg", h($product['name'])) ?></div>
            <div class="gallery-item"><?= img_tag("assets/img/product-{$product['slug']}-gallery-3.jpg", h($product['name'])) ?></div>
        </div>
    </div>
</section>

<!-- ============ TECHNICAL SPECIFICATIONS ============ -->
<?php if ($specs): ?>
<section class="section section-alt">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Specs</span>
            <h2>Technical Specifications</h2>
        </div>
        <table class="spec-table reveal">
            <?php foreach ($specs as $s): ?>
            <tr><td><?= h($s['spec_key']) ?></td><td><?= h($s['spec_value']) ?></td></tr>
            <?php endforeach; ?>
        </table>
    </div>
</section>
<?php endif; ?>

<!-- ============ CUSTOMER REVIEWS ============ -->
<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Reviews</span>
            <h2>Customer Reviews</h2>
        </div>
        <div class="grid grid-3">
            <div class="card reveal"><div class="card-body">
                <h3>&ldquo;Exactly what I needed.&rdquo;</h3>
                <p>The build quality and performance have completely changed how I work. Worth every cent. &mdash; A. Naidoo</p>
            </div></div>
            <div class="card reveal"><div class="card-body">
                <h3>&ldquo;Premium in every way.&rdquo;</h3>
                <p>From the packaging to the finish, it's clear Zenith cares about the details. &mdash; T. Mokoena</p>
            </div></div>
            <div class="card reveal"><div class="card-body">
                <h3>&ldquo;My go-to recommendation.&rdquo;</h3>
                <p>I recommend this to every student in my design classes now. &mdash; L. Fischer</p>
            </div></div>
        </div>
    </div>
</section>

<!-- ============ RELATED PRODUCTS ============ -->
<?php if ($related): ?>
<section class="section section-alt">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">You May Also Like</span>
            <h2>Related Products</h2>
        </div>
        <div class="grid grid-3">
            <?php foreach ($related as $p): ?>
            <article class="card product-card reveal">
                <a href="product-detail.php?slug=<?= h($p['slug']) ?>">
                    <div class="card-media"><?= img_tag($p['hero_image'] ?? '', h($p['name'])) ?></div>
                    <div class="card-body">
                        <span class="category"><?= h($p['category']) ?></span>
                        <h3><?= h($p['name']) ?></h3>
                        <div class="card-footer">
                            <span class="price"><?= format_price($p['price']) ?></span>
                        </div>
                    </div>
                </a>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="section text-center">
    <div class="container reveal">
        <a href="products.php" class="btn btn-outline">Back To Products</a>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
