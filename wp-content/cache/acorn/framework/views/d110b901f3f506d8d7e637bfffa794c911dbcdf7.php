<footer id="footer" class="footer">
    <div class="container">
        <div class="top">
            <div class="col">
                <a href="<?php echo e(home_url()); ?>" class="logo" title="CivicPlus Home">
                    <?php echo $logo; ?>

                </a>

                <div>
                    <p class="title"><?php echo e(_x('Location', 'sage')); ?></p>

                    <p><?php echo $location; ?></p>

                    <a href="tel: <?php echo e($phone); ?>" title="Phone: <?php echo e($phone); ?>"><?php echo $phone; ?></a>
                </div>

                <div>
                    <p class="title"><?php echo e(_x('Awards & Recognition', 'sage')); ?></p>

                    <div class="awards">
                        <?php $__currentLoopData = $awards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo wp_get_attachment_image($item, 'full'); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <?php $__currentLoopData = $footer_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <?php $__currentLoopData = $item['buttons']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php switch($link['acf_fc_layout']):
                            case ('title'): ?>
                                <p class="title"><?php echo $link['title']; ?></p>
                                <?php break; ?>
                            <?php case ('simple_link'): ?>
                                <?php echo cps_button($link['link'], ''); ?>

                                <?php break; ?>
                            <?php case ('bold_link'): ?>
                                <?php echo cps_button($link['link'], 'bold-link'); ?>

                                <?php break; ?>
                            <?php default: ?>
                                <?php break; ?>
                        <?php endswitch; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="bottom">
            <div class="left">
                <p><?php echo $copy; ?></p>
            </div>

            <div class="right">
                <?php $__currentLoopData = $footer_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo cps_button($item['link'], ''); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</footer><!-- #footer -->
<?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/footer.blade.php ENDPATH**/ ?>