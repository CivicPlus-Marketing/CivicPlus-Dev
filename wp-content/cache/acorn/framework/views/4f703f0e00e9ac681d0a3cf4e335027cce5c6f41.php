<?php ($loop = new WP_Query($args)); ?>
<div class="archive-box">
    <?php if($loop->have_posts()): ?>
        <div class="archive-list js-archive-list">
            <?php while( $loop->have_posts() ): ?>
                <?php ($loop->the_post()); ?>
                <?php ($id = get_the_ID()); ?>
                <?php if($post_type['name'] == 'case-studies'): ?>
                    <?php if (isset($component)) { $__componentOriginal5674f6893bb1bde9b0422a6d32059c83e576306e = $component; } ?>
<?php $component = App\View\Components\CaseCard::resolve(['id' => $id] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('case-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CaseCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5674f6893bb1bde9b0422a6d32059c83e576306e)): ?>
<?php $component = $__componentOriginal5674f6893bb1bde9b0422a6d32059c83e576306e; ?>
<?php unset($__componentOriginal5674f6893bb1bde9b0422a6d32059c83e576306e); ?>
<?php endif; ?>
                <?php else: ?>
                    <?php if (isset($component)) { $__componentOriginalb6f7c37376c8c16b0ea5f7170130ebba1dd1f02a = $component; } ?>
<?php $component = App\View\Components\PostCard::resolve(['id' => $id] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('post-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PostCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb6f7c37376c8c16b0ea5f7170130ebba1dd1f02a)): ?>
<?php $component = $__componentOriginalb6f7c37376c8c16b0ea5f7170130ebba1dd1f02a; ?>
<?php unset($__componentOriginalb6f7c37376c8c16b0ea5f7170130ebba1dd1f02a); ?>
<?php endif; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</div>


<?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/partials/archive-loop.blade.php ENDPATH**/ ?>