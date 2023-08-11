<?php ($id = strtolower(str_replace(' ', '-', $section['acfe_flexible_layout_title']))); ?>

<section id="<?php echo e($id); ?>" class="image-text-section <?php echo e($section['type']); ?>">
    <div class="container">
        <div class="left">
            <?php echo $section['content']; ?>

            <?php echo cps_button($section['link'], 'btn-red'); ?>

        </div>
        <div class="right">
            <?php echo wp_get_attachment_image( $section['image'], 'full' ); ?>

        </div>

        <?php if($with_box): ?>
            <div class="box">
                <?php echo $section['content_box']; ?>

            </div>
        <?php endif; ?>
    </div>
</section><!-- #<?php echo e($id); ?> -->
<?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/image-text.blade.php ENDPATH**/ ?>