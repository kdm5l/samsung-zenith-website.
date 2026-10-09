<?php
$page_title = 'Gallery — Samsung Zenith';
$page_description = 'A closer look at the Samsung Zenith collection.';
require_once __DIR__ . '/includes/header.php';

$gallery_items = [
    'Zenith X'    => 'zenithx.jpg',
    'Zenith Watch'    => 'watch.jpg',
    'Zenith Buds'     => 'budds.jpg',
    'Zenith Audio Max'     => 'headset.jpg',
    'Zenith Tablet'   => 'tabbl.jpg',
    'Studio Setup'    => 'studio.jpg',
];
?>

<!-- ============ HERO ============ -->
<section class="hero hero-compact">
    <div class="hero-media hero-stars"<?= bg_style('assets/img/gallery.jpg') ?>></div>
    <div class="container hero-content reveal">
        <span class="eyebrow">Visuals</span>
        <h1>Gallery</h1>
        <p class="lede">Product photography from across the Zenith collection.</p>
    </div>
</section>

<!-- ============ FEATURED VISUAL ============ -->
<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Product Gallery</span>
        </div>
        <div class="media-block text-overlay gallery-feature reveal"<?= bg_style('assets/img/banner.jpg') ?>>
            
        </div>
    </div>
</section>

<!-- ============ GALLERY GRID ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="gallery-grid reveal">
            <?php foreach ($gallery_items as $caption => $filename): ?>
            <div class="gallery-item">
                <?= img_tag("assets/img/{$filename}", h($caption)) ?>
                <div class="caption"><?= h($caption) ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ LIFESTYLE ============ -->
<section class="section">
    <div class="container">
        <div class="grid grid-2 reveal" style="margin-bottom:48px;">
            <div class="media-block" style="aspect-ratio:4/3;"><?= img_tag('assets/img/work.jpg', 'Lifestyle — Work') ?: 'Lifestyle — Work' ?></div>
            <div class="media-block" style="aspect-ratio:4/3;"><?= img_tag('assets/img/campus.jpg', 'Lifestyle — Campus') ?: 'Lifestyle — Campus' ?></div>
        </div>
        <div class="section-head reveal">
            <span class="eyebrow">Lifestyle</span>
            <h2>Let's Reach Our <em style="font-style:normal; color:var(--color-white);">Peak</em></h2>
            <p>Zenith devices are designed to move with you &mdash; from the studio, to the classroom, to the boardroom.</p>
            <div style="margin-top:28px;">
                <a href="products.php" class="btn btn-primary">For Our Products</a>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
