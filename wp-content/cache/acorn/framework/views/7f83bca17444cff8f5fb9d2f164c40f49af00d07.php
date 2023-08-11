<?php $__env->startSection('content'); ?>
    <?php if($hero['title']): ?>
        <section id="hero" class="hero-section"
                 style="background-image: linear-gradient(90deg, #2F030B 30.12%, rgba(47, 3, 11, 0) 82.24%), url(<?php echo e($hero['image']); ?>)">
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

                    <div class="row">
                        <?php echo wp_get_attachment_image($hero['logo'], 'full'); ?>


                        <div class="text>">
                            <span class="label"><?php echo $hero['label']; ?></span>
                            <h1><?php echo $hero['title']; ?></h1>
                        </div>

                </div>

            </div>
        </section><!-- #hero -->
    <?php endif; ?>

    <section id="content" class="content-section">
        <div class="container">
            <div class="tabs-box js-tab-box js-tabs">
                <div class="left tabs-nav">
                    <p class="title"><?php echo e(_x('Software Tour', 'sage')); ?></p>
                        <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button class="tab-nav-item js-tabs-nav"><?php echo $item['title']; ?></button>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="right tabs-content">
                    <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tabs-body js-tabs-body">
                            <?php if (isset($component)) { $__componentOriginal8cd17333bed4590c4cc82a3bf399db85cf61e665 = $component; } ?>
<?php $component = App\View\Components\VideoWistia::resolve(['id' => $item['video_id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

                            <div class="row">
                                <h2><?php echo $item['title']; ?></h2>

                                <div class="buttons-row">
                                    <?php echo cps_button($item['link'], 'btn-red'); ?>

                                </div>
                            </div>

                            <div class="copy">
                                <?php echo $item['content']; ?>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section><!-- #content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/template-demo-success.blade.php ENDPATH**/ ?>