<?php $__env->startSection('content'); ?>
    <section id="hero" class="hero-section" style="background-image: url(<?php echo e($image); ?>)">
        <div class="container">
            <div class="left">
                <h1><?php echo $title; ?></h1>
                <?php echo $subtitle; ?>

            </div>
            <div class="right">
                <?php if($form): ?>
                    <?php echo hubSpotForm($form); ?>

                <?php endif; ?>
            </div>
        </div>
    </section><!-- #pricing -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/template-pricing.blade.php ENDPATH**/ ?>