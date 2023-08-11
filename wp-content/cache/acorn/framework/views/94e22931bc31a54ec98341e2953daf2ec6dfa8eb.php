<?php ($id = 'about'); ?>
<?php if($index > 0): ?>
    <?php ($id = 'about-' . $index ); ?>
<?php endif; ?>

<section id="<?php echo e($id); ?>" class="about-section">
    <div class="container">
        <div class="left">
            <h2><?php echo $section['title']; ?></h2>
            <?php echo $section['content']; ?>

            <?php echo cps_button($section['link'], 'btn-red'); ?>

        </div>

        <div class="right">
            <?php if($section['list']): ?>
                    <?php $__currentLoopData = $section['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row">
                            <?php echo wp_get_attachment_image( $item['image'], 'full' ); ?>


                            <p><?php echo $item['title']; ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>

    </div>
</section><!-- <?php echo e($id); ?> --><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/product-about.blade.php ENDPATH**/ ?>