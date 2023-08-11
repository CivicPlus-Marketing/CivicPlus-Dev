<?php ($id = 'about'); ?>
<?php if($index > 0): ?>
    <?php ($id = 'about-' . $index ); ?>
<?php endif; ?>
<section id="<?php echo e($id); ?>" class="about-section">
    <div class="container">
        <h2><?php echo $section['title']; ?></h2>
        <?php if($section['content']): ?>
            <?php $__currentLoopData = $section['content']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row">
                    <div class="text-box">
                        <?php echo $item['content']; ?>

                    </div>

                    <div class="image-box">
                        <?php echo wp_get_attachment_image( $item['image'], 'full' ); ?>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</section><!-- <?php echo e($id); ?> --><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/tool-about.blade.php ENDPATH**/ ?>