<?php ($id = 'partners'); ?>
<?php if($index > 0): ?>
    <?php ($id = 'partners-' . $index ); ?>
<?php endif; ?>
<section id="<?php echo e($id); ?>" class="partners-section">
    <div class="container">
        <h2><?php echo $section['title']; ?></h2>
        <?php echo $section['content']; ?>

        <?php if($section['list']): ?>
            <div class="row">
                <?php $__currentLoopData = $section['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="image-box">
                        <?php echo wp_get_attachment_image( $item, 'full' ); ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        <?php endif; ?>
    </div>
</section><!-- <?php echo e($id); ?> --><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/partners.blade.php ENDPATH**/ ?>