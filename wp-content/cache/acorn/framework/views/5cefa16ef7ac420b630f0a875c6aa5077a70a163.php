<?php ($id = strtolower(str_replace(' ', '-', $section['acfe_flexible_layout_title']))); ?>

<section id="<?php echo e($id); ?>" class="awards-section">
    <div class="container">
        <h2><span><?php echo $section['title']; ?></span><br><?php echo $section['subtitle']; ?></h2>

        <?php if($section['list']): ?>
            <div class="list">
                <?php $__currentLoopData = $section['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal06a7a546848b1effb705056979b4d5e62e2446bb = $component; } ?>
<?php $component = App\View\Components\AwardCard::resolve(['id' => $item] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('award-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AwardCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal06a7a546848b1effb705056979b4d5e62e2446bb)): ?>
<?php $component = $__componentOriginal06a7a546848b1effb705056979b4d5e62e2446bb; ?>
<?php unset($__componentOriginal06a7a546848b1effb705056979b4d5e62e2446bb); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
</section><!-- <?php echo e($id); ?> --><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/awards.blade.php ENDPATH**/ ?>