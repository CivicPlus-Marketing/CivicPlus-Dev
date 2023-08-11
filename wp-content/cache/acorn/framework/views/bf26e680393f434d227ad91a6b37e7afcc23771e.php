<?php ($id = 'cards-icon'); ?>
<?php if($index > 0): ?>
    <?php ($id = 'cards-icon-' . $index ); ?>
<?php endif; ?>

<section id="<?php echo e($id); ?>" class="cards-icon-section">
    <div class="container">
        <?php if(!$simple): ?>
            <span class="tag"><?php echo $section['tag']; ?></span>
        <?php endif; ?>
        <h2><?php echo $section['title']; ?></h2>
        <?php if(!$simple): ?>
            <?php if($section['content']): ?>
                <div class="content">
                    <?php echo $section['content']; ?>

                </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php if($section['list']): ?>
            <div class="cards-row">
                <?php $__currentLoopData = $section['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal7ab84136e4913f0c55e3617277dcb220461fcad6 = $component; } ?>
<?php $component = App\View\Components\CardIcon::resolve(['data' => $item,'index' => $loop->index] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
</section><!-- <?php echo e($id); ?> --><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/cards-icon.blade.php ENDPATH**/ ?>