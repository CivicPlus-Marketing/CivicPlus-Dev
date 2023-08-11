<?php ($id = 'tools'); ?>
<?php if($index > 0): ?>
    <?php ($id = 'tools-' . $index ); ?>
<?php endif; ?>

<section id="<?php echo e($id); ?>" class="tools-section">
    <div class="container">
        <?php if($section['title']): ?>
            <h2><?php echo $section['title']; ?></h2>
        <?php endif; ?>
        <?php if($section['content']): ?>
            <?php echo $section['content']; ?>

        <?php endif; ?>

        <?php if($section['list']): ?>
            <div class="tools-list">
                <?php $__currentLoopData = $section['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php ($index = $loop->index); ?>
                    <?php if (isset($component)) { $__componentOriginal7ab84136e4913f0c55e3617277dcb220461fcad6 = $component; } ?>
<?php $component = App\View\Components\CardIcon::resolve(['data' => $item,'index' => $index] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CardIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7ab84136e4913f0c55e3617277dcb220461fcad6)): ?>
<?php $component = $__componentOriginal7ab84136e4913f0c55e3617277dcb220461fcad6; ?>
<?php unset($__componentOriginal7ab84136e4913f0c55e3617277dcb220461fcad6); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
</section><!-- <?php echo e($id); ?> --><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/tools.blade.php ENDPATH**/ ?>