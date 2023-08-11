<section id="archive" class="archive-section">
    <div class="container">
        <div class="content">
            <?php if (isset($component)) { $__componentOriginal3623aded970131267fe528f2e256f6614c6b09c0 = $component; } ?>
<?php $component = App\View\Components\TopicsNav::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('topics-nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TopicsNav::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3623aded970131267fe528f2e256f6614c6b09c0)): ?>
<?php $component = $__componentOriginal3623aded970131267fe528f2e256f6614c6b09c0; ?>
<?php unset($__componentOriginal3623aded970131267fe528f2e256f6614c6b09c0); ?>
<?php endif; ?>

            <?php echo $__env->make('partials.archive-loop', array('args' => $args), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</section>
<?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/archive-case-studies.blade.php ENDPATH**/ ?>