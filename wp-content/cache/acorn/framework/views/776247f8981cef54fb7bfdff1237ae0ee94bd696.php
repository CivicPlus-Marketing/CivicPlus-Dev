<?php $__env->startSection('content'); ?>
    <section id="hero" class="hero-section <?php if($hero['with_gradient']): ?> with-gradient <?php endif; ?>"
             style="background-image: url(<?php echo e($hero['hero_image']); ?>)">
        <div class="container">
            <?php if (isset($component)) { $__componentOriginal031b70f77448d6d2b1e9e96d77e7e66748a7c1aa = $component; } ?>
<?php $component = App\View\Components\Breadcrumbs::resolve(['type' => 'case-studies'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                <?php if (isset($component)) { $__componentOriginal1d3959a75b4659951519fa9aa2138cc669194867 = $component; } ?>
<?php $component = App\View\Components\Share::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('share'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Share::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1d3959a75b4659951519fa9aa2138cc669194867)): ?>
<?php $component = $__componentOriginal1d3959a75b4659951519fa9aa2138cc669194867; ?>
<?php unset($__componentOriginal1d3959a75b4659951519fa9aa2138cc669194867); ?>
<?php endif; ?>

                <h1><?php echo $title; ?></h1>
                <?php if($hero['keys_to_project']): ?>
                    <div class="row first">
                        <p><?php echo e(_x('Keys to Project: :', 'sage')); ?></p>
                        <p><?php echo $hero['keys_to_project']; ?></p>
                    </div>
                <?php endif; ?>
                <?php if($hero['city_country']): ?>
                    <div class="row">
                        <p><?php echo $municipality[0]->name; ?>:</p>
                        <span class="case-label"><?php echo $hero['city_country']; ?></span>
                    </div>
                <?php endif; ?>
                <?php if($hero['population']): ?>
                    <div class="row">
                        <p><?php echo e(_x('Population:', 'sage')); ?></p>
                        <span class="case-label population"><?php echo $hero['population']; ?></span>
                    </div>
                <?php endif; ?>
                <?php if($hero['products']): ?>
                    <div class="row products">
                        <p><?php echo e(_x('Products:', 'sage')); ?></p>

                        <div class="list">
                            <?php $__currentLoopData = $hero['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo cps_button($product['link'], 'case-label product'); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="right">
                <?php if($hero['challenge'] || $hero['solution'] || $hero['result']): ?>
                    <div class="info-box">
                        <div class="logo-box">
                            <?php echo wp_get_attachment_image($hero['logo'],'full'); ?>

                        </div>
                        <?php if($hero['challenge']): ?>
                            <div class="box">
                                <p class="title"><?php echo e(_x('Challenge:', 'sage')); ?></p>
                                <p><?php echo $hero['challenge']; ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if($hero['solution']): ?>
                            <div class="box">
                                <p class="title"><?php echo e(_x('Solution:', 'sage')); ?></p>
                                <p><?php echo $hero['solution']; ?></p>
                            </div>
                        <?php endif; ?>

                        <?php if($hero['result']): ?>
                            <div class="box">
                                <p class="title"><?php echo e(_x('Result:', 'sage')); ?></p>
                                <p><?php echo $hero['result']; ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section><!-- #hero -->

    <section id="content" class="content-section">
        <div class="container">
            <div class="post-nav">
                <div class="post-nav-box">
                    <ul class="post-navigation js-post-navigation">
                    </ul>
                </div>
            </div>
            <div class="content js-content">
                <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php switch($item['acf_fc_layout']):
                        case ('simple'): ?>
                            <div class="content-box">
                                <?php echo $item['content']; ?>

                            </div>
                            <?php break; ?>
                        <?php case ('video'): ?>
                            <?php if (isset($component)) { $__componentOriginal8cd17333bed4590c4cc82a3bf399db85cf61e665 = $component; } ?>
<?php $component = App\View\Components\VideoWistia::resolve(['id' => $item['video']['id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
        </div>
    </section>

    <?php echo $__env->make('sections.demo', array('demo' => $demo), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/single-case-studies.blade.php ENDPATH**/ ?>