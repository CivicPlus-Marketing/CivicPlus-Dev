<?php $__env->startSection('content'); ?>
    <section id="hero" class="hero-section <?php if($hero['with_gradient']): ?> with-gradient <?php endif; ?>"
             style="background-image: url(<?php echo e($hero['image']); ?>)">
        <div class="container">
            <?php if (isset($component)) { $__componentOriginal031b70f77448d6d2b1e9e96d77e7e66748a7c1aa = $component; } ?>
<?php $component = App\View\Components\Breadcrumbs::resolve(['type' => 'about'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

            <div class="left">
                <h1><?php echo $hero['title']; ?></h1>
            </div>
            <div class="right">
                <?php if (isset($component)) { $__componentOriginal8cd17333bed4590c4cc82a3bf399db85cf61e665 = $component; } ?>
<?php $component = App\View\Components\VideoWistia::resolve(['id' => $hero['video_id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('video-wistia'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\VideoWistia::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8cd17333bed4590c4cc82a3bf399db85cf61e665)): ?>
<?php $component = $__componentOriginal8cd17333bed4590c4cc82a3bf399db85cf61e665; ?>
<?php unset($__componentOriginal8cd17333bed4590c4cc82a3bf399db85cf61e665); ?>
<?php endif; ?>
            </div>
        </div>
    </section><!-- #hero -->

    <section id="content" class="content-section">
        <div class="container">
            <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php switch($item['acf_fc_layout']):
                    case ('content'): ?>
                        <div class="content-box <?php echo e($item['type']); ?>">
                            <div class="left">
                                <?php echo $item['content']; ?>

                                <?php echo cps_button($item['link'], 'btn-red'); ?>


                            </div>
                            <div class="right">
                                <?php echo wp_get_attachment_image( $item['image'], 'full' ); ?>

                            </div>
                        </div>
                        <?php break; ?>
                    <?php case ('feedback'): ?>
                        <?php if (isset($component)) { $__componentOriginal5b8c46b61153db0999347deace39f7c72f4b9330 = $component; } ?>
<?php $component = App\View\Components\FeedbackBox::resolve(['data' => $item] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('feedback-box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FeedbackBox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5b8c46b61153db0999347deace39f7c72f4b9330)): ?>
<?php $component = $__componentOriginal5b8c46b61153db0999347deace39f7c72f4b9330; ?>
<?php unset($__componentOriginal5b8c46b61153db0999347deace39f7c72f4b9330); ?>
<?php endif; ?>
                        <?php break; ?>
                <?php endswitch; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <?php echo $__env->make('sections.demo', array('demo' => $demo), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/template-default-page.blade.php ENDPATH**/ ?>