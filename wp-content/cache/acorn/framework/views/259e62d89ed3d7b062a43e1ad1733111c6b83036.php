<?php ($id = strtolower(str_replace(' ', '-', $section['acfe_flexible_layout_title']))); ?>

<section id="<?php echo e($id); ?>" class="products-section" data-title="<?php echo $section['acfe_flexible_layout_title']; ?>">
    <div class="container">
        <?php if($section['title']): ?>
            <h2><?php echo $section['title']; ?></h2>
        <?php endif; ?>
        <?php if($section['content']): ?>
            <?php echo $section['content']; ?>

        <?php endif; ?>

        <?php if($section['list']): ?>
            <div class="tabs-box js-tab-box">
                <div class="tabs-nav">
                    <div class="left">
                        <button class="tab-nav-item active js-products-nav" title="All" data-product="all">All</button>

                        <?php $__currentLoopData = $section['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button class="tab-nav-item js-products-nav" title="<?php echo $item['category']; ?>"
                                    data-product="product-<?php echo e($loop->index); ?>"><?php echo $item['category']; ?></button>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="right">
                        <?php echo cps_button($section['link'], 'learn-more'); ?>

                    </div>
                </div>

                <div class="tabs-content">
                    <?php $__currentLoopData = $section['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php ($index = $loop->index); ?>
                        <?php $__currentLoopData = $item['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php switch($type):
                                case ('home'): ?>
                                    <?php if (isset($component)) { $__componentOriginal7ab84136e4913f0c55e3617277dcb220461fcad6 = $component; } ?>
<?php $component = App\View\Components\CardIcon::resolve(['data' => $s_item,'index' => $index] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <?php break; ?>
                                <?php case ('archive'): ?>
                                    <?php if (isset($component)) { $__componentOriginalcc93dfa51b363e1b716e34df2e36a2cd8ba2deb2 = $component; } ?>
<?php $component = App\View\Components\CardIconFeedback::resolve(['data' => $s_item,'index' => $index] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-icon-feedback'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CardIconFeedback::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcc93dfa51b363e1b716e34df2e36a2cd8ba2deb2)): ?>
<?php $component = $__componentOriginalcc93dfa51b363e1b716e34df2e36a2cd8ba2deb2; ?>
<?php unset($__componentOriginalcc93dfa51b363e1b716e34df2e36a2cd8ba2deb2); ?>
<?php endif; ?>
                                    <?php break; ?>
                                <?php default: ?>
                                    <?php if (isset($component)) { $__componentOriginal7ab84136e4913f0c55e3617277dcb220461fcad6 = $component; } ?>
<?php $component = App\View\Components\CardIcon::resolve(['data' => $s_item,'index' => $index] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                    <?php break; ?>
                            <?php endswitch; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <?php if($section['link']): ?>
                    <div class="bottom">
                        <?php echo cps_button($section['link'], 'learn-more'); ?>

                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

    </div>
</section><!-- #<?php echo e($id); ?> --><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/tabs-products.blade.php ENDPATH**/ ?>