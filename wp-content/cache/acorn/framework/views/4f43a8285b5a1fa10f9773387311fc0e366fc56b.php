<?php ($id = 'map'); ?>
<?php if($index > 0): ?>
    <?php ($id = 'map-' . $index ); ?>
<?php endif; ?>

<section id="<?php echo e($id); ?>" class="map-section">
    <div class="container">
        <div class="left">
            <h2><?php echo $section['title']; ?></h2>
            <?php echo $section['content']; ?>

        </div>
        <div class="right">
            <?php echo $section['map']; ?>

        </div>
    </div>
</section><!-- <?php echo e($id); ?> --><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/map.blade.php ENDPATH**/ ?>