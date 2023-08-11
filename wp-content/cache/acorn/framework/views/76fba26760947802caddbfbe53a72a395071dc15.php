<?php if(!$demo['is_it_hidden']): ?>
    <section id="demo" class="demo-section">
        <div class="container">
            <h2><?php echo $demo['title']; ?></h2>
            <p><?php echo $demo['subtitle']; ?></p>

            <?php if($demo['type'] == 'type_a'): ?>
                <div class="columns-row">
                    <?php $__currentLoopData = $demo['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col" data-num="<?php echo e($loop->index + 1); ?>">
                            <?php echo wp_get_attachment_image( $item['image'], 'full' ); ?>

                            <p><?php echo $item['title']; ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

            <?php if($demo['buttons']): ?>
                <div class="buttons-row">
                    <?php $__currentLoopData = $demo['buttons']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo cps_button($item['link'], $item['type']); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>
    </section><!-- #demo -->
<?php endif; ?>
<?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/demo.blade.php ENDPATH**/ ?>