<?php if($section['list']): ?>
    <section id="related" class="related-section">
        <div class="container">
            <h2><?php echo $section['title']; ?></h2>

            <div class="list">
                <?php $__currentLoopData = $section['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginalb6f7c37376c8c16b0ea5f7170130ebba1dd1f02a = $component; } ?>
<?php $component = App\View\Components\PostCard::resolve(['id' => $item] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <?php echo cps_button($section['link'], 'learn-more'); ?>

        </div>
    </section>
<?php endif; ?><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/related.blade.php ENDPATH**/ ?>