<?php ($id = 'video'); ?>
<?php if($index > 0): ?>
    <?php ($id = 'video-' . $index ); ?>
<?php endif; ?>

<section id="<?php echo e($id); ?>" class="video-section">
    <div class="container">
        <div class="left">
            <h2><?php echo $section['title']; ?></h2>

            <?php if($section['list']): ?>
                <div class="icons-box <?php echo e($section['type']); ?>">
                    <?php $__currentLoopData = $section['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row">
                            <?php echo wp_get_attachment_image( $item['image'], 'full' ); ?>


                            <?php if($section['type'] != 'simple'): ?>
                                <p><?php echo $item['title']; ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="right">
            <div class="youtube js-youtube" data-embed="<?php echo e($section['video_id']); ?>"></div>
        </div>

    </div>
</section><!-- <?php echo e($id); ?> --><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/video.blade.php ENDPATH**/ ?>