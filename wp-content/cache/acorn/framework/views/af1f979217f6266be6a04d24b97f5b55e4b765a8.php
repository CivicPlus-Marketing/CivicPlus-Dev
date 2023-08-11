<?php ($id = strtolower(str_replace(' ', '-', $section['acfe_flexible_layout_title']))); ?>

<section id="<?php echo e($id); ?>" class="tour-section">
    <div class="container">
        <div class="content">
            <?php echo wp_get_attachment_image( $section['image'], 'tour' ); ?>


            <div class="info-box">
                <h3><?php echo $section['title']; ?></h3>
                <?php echo $section['description']; ?>

                <?php echo cps_button($section['link'], 'btn-red'); ?>

            </div>
        </div>
    </div>
</section><!-- <?php echo e($id); ?> --><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/tour.blade.php ENDPATH**/ ?>