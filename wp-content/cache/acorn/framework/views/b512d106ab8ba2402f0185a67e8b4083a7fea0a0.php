<?php ($id = strtolower(str_replace(' ', '-', $section['acfe_flexible_layout_title']))); ?>

<section id="<?php echo e($id); ?>" class="tools-section" data-title="<?php echo $section['acfe_flexible_layout_title']; ?>">
    <div class="container">
        <h2><?php echo $section['title']; ?></h2>
        <?php echo $section['content']; ?>


        <?php if($section['list']): ?>
            <div class="tabs-box js-tabs">
                <div class="tabs-nav">
                    <div class="left">
                        <?php $__currentLoopData = $section['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button class="tab-nav-item js-tabs-nav" title="<?php echo $item['category']; ?>"><?php echo $item['category']; ?></button>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="right">
                        <?php echo cps_button($section['link'], 'learn-more'); ?>

                    </div>
                </div>

                <div class="tabs-content">
                    <?php $__currentLoopData = $section['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php ($index = $loop->index); ?>
                        <div class="tabs-body js-tabs-body js-subtabs">
                            <div class="left">
                                <?php $__currentLoopData = $item['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <button class="tab-subnav-item js-subtabs-nav" title="<?php echo $s_item['title']; ?>"><?php echo $s_item['title']; ?></button>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="right">
                                <?php $__currentLoopData = $item['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="subtabs-body js-subtabs-body">
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
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section><!-- #<?php echo e($id); ?> --><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/tabs-tools.blade.php ENDPATH**/ ?>