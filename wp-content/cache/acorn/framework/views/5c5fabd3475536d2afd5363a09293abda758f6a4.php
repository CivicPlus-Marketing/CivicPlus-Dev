<?php if(!$breadcrumbs): ?>
    <?php ($breadcrumbs = 'page'); ?>
<?php endif; ?>

<?php if($hero['title']): ?>
    <section id="hero" class="hero-section" style="background-image: url(<?php echo e(wp_get_attachment_image_url( $hero['image'], 'full' )); ?>)">
        <div class="container">
            <div class="content">
                <?php if (isset($component)) { $__componentOriginal031b70f77448d6d2b1e9e96d77e7e66748a7c1aa = $component; } ?>
<?php $component = App\View\Components\Breadcrumbs::resolve(['type' => ''.e($breadcrumbs).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Breadcrumbs::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal031b70f77448d6d2b1e9e96d77e7e66748a7c1aa)): ?>
<?php $component = $__componentOriginal031b70f77448d6d2b1e9e96d77e7e66748a7c1aa; ?>
<?php unset($__componentOriginal031b70f77448d6d2b1e9e96d77e7e66748a7c1aa); ?>
<?php endif; ?>

                <h1><?php echo $hero['title']; ?></h1>
                <?php echo $hero['subtitle']; ?>


                <?php if($hero['buttons']): ?>
                    <div class="buttons-row">
                        <?php $__currentLoopData = $hero['buttons']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo cps_button($item['link'], $item['type']); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
                <?php if($video): ?>
                    <div class="btn js-open-popup"><?php echo $hero['button_video']; ?></div>
                <?php endif; ?>
            </div>
        </div>
    </section><!-- #hero -->
<?php endif; ?>
<?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/hero.blade.php ENDPATH**/ ?>