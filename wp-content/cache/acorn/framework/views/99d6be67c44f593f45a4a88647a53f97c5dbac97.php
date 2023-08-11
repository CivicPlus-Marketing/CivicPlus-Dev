<?php if(!$demo['is_it_hidden']): ?>
    <section id="demo" class="demo-section">
        <div class="container">
            <div class="left">
                <p class="tag"><?php echo $demo['tag']; ?></p>
                <h2><?php echo $demo['title']; ?></h2>
                <?php echo $demo['subtitle']; ?>

                <?php if($demo['buttons']): ?>
                    <div class="buttons-row">
                        <?php $__currentLoopData = $demo['buttons']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo cps_button($item['link'], $item['type']); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="right">
                <?php echo wp_get_attachment_image( $demo['image'], 'full' ); ?>

            </div>
        </div>
    </section><!-- #demo -->
<?php endif; ?>
<?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/demo-image.blade.php ENDPATH**/ ?>