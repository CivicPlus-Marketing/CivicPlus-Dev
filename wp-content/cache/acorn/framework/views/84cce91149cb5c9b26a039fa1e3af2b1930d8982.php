<?php if($title): ?>
    <section id="hero" class="hero-section <?php if($with_gradient): ?> with-gradient <?php endif; ?>" style="background-image: url(<?php echo e($image); ?>)">
        <div class="container">
            <?php if (isset($component)) { $__componentOriginal031b70f77448d6d2b1e9e96d77e7e66748a7c1aa = $component; } ?>
<?php $component = App\View\Components\Breadcrumbs::resolve(['type' => 'resources'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

            <div class="top">
                <span class="category"># <?php echo $category[0]->name; ?></span>

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
            </div>
            <h1><?php echo $title; ?></h1>
            <p><?php echo $subtitle; ?></p>

            <div class="bottom">
                <?php if (isset($component)) { $__componentOriginaldf1cb614b5a5b5f418033fb81fbdf8cf71819d31 = $component; } ?>
<?php $component = App\View\Components\Author::resolve(['id' => $author_id,'detail' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('author'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Author::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf1cb614b5a5b5f418033fb81fbdf8cf71819d31)): ?>
<?php $component = $__componentOriginaldf1cb614b5a5b5f418033fb81fbdf8cf71819d31; ?>
<?php unset($__componentOriginaldf1cb614b5a5b5f418033fb81fbdf8cf71819d31); ?>
<?php endif; ?>

                <div class="data-time-box">
                    <div class="date"><?php echo $date; ?></div>
                    <div class="time"><?php echo $time_to_read; ?></div>
                </div>
            </div>
        </div>
    </section><!-- #hero -->
<?php endif; ?>
<?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/single-hero.blade.php ENDPATH**/ ?>