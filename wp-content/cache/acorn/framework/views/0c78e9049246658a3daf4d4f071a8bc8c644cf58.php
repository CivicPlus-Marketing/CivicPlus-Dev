<?php ($id = strtolower(str_replace(' ', '-', $section['acfe_flexible_layout_title']))); ?>

<section id="<?php echo e($id); ?>" class="tabs-resources-section" data-title="<?php echo $section['acfe_flexible_layout_title']; ?>">
    <div class="container">
        <?php if($section['title']): ?>
            <h2><?php echo $section['title']; ?></h2>
        <?php endif; ?>

        <?php if($section['list']): ?>
            <div class="tabs-box js-tabs">
                <div class="tabs-nav">
                    <div class="left">
                        <?php $__currentLoopData = $section['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button class="tab-nav-item js-tabs-nav"
                                    title="<?php echo $item['category']; ?>"><?php echo $item['category']; ?></button>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="right">
                        <?php echo cps_button( $section['link'], 'learn-more'); ?>

                    </div>
                </div>

                <div class="tabs-content">
                    <?php $__currentLoopData = $section['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tabs-body js-tabs-body">
                            <div class="top">
                                <?php ($post_type = get_post_type($item['resources'][0])); ?>
                                <?php if($post_type == 'case-studies'): ?>
                                    <?php if (isset($component)) { $__componentOriginal5674f6893bb1bde9b0422a6d32059c83e576306e = $component; } ?>
<?php $component = App\View\Components\CaseCard::resolve(['id' => $item['resources'][0]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = App\View\Components\PostCard::resolve(['id' => $item['resources'][0]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            </div>
                            <div class="bottom resources-slider splide js-resources-slider" role="group"
                                 aria-label="<?php echo e($section['title']); ?> - <?php echo e($item['category']); ?>">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <?php $__currentLoopData = $item['resources']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($loop->index > 0): ?>
                                                <?php ($post_type = get_post_type($id)); ?>
                                                <?php if($post_type == 'case-studies'): ?>
                                                    <li class="splide__slide">
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
                                                    </li>
                                                <?php else: ?>
                                                    <li class="splide__slide">
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
                                                    </li>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section><!-- #<?php echo e($id); ?> --><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/tabs-resources.blade.php ENDPATH**/ ?>