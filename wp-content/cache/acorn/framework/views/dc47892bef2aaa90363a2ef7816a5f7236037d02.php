<section id="archive" class="archive-section">
    <div class="container">
        <?php if (isset($component)) { $__componentOriginal9841cee97daf9d33274e5355a6698a10049e6a6e = $component; } ?>
<?php $component = App\View\Components\TypesNav::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('types-nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TypesNav::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9841cee97daf9d33274e5355a6698a10049e6a6e)): ?>
<?php $component = $__componentOriginal9841cee97daf9d33274e5355a6698a10049e6a6e; ?>
<?php unset($__componentOriginal9841cee97daf9d33274e5355a6698a10049e6a6e); ?>
<?php endif; ?>

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
        <?php ($loop = new WP_Query($args)); ?>

        <?php if(!is_page_template('template-resources.blade.php')): ?>
            <?php if (isset($component)) { $__componentOriginal41fa1a726c2cdc888fd1699c1c531da853ade966 = $component; } ?>
<?php $component = App\View\Components\Pagination::resolve(['type' => $post_type,'perPage' => 10,'loop' => $loop] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('pagination'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Pagination::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal41fa1a726c2cdc888fd1699c1c531da853ade966)): ?>
<?php $component = $__componentOriginal41fa1a726c2cdc888fd1699c1c531da853ade966; ?>
<?php unset($__componentOriginal41fa1a726c2cdc888fd1699c1c531da853ade966); ?>
<?php endif; ?>
        <?php endif; ?>
    </div>
</section>
<?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/archive.blade.php ENDPATH**/ ?>