<?php ($id = strtolower(str_replace(' ', '-', $section['acfe_flexible_layout_title']))); ?>
<section id="<?php echo e($id); ?>" class="content-section">

    <div class="container">
        <div class="content">
            <?php $__currentLoopData = $section['content']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="content-box">
                    <div class="text-box">
                        <?php echo $content['content']; ?>

                    </div>

                    <?php if($content['dropdown_list']): ?>
                        <div class="dropdown-list">
                            <?php $__currentLoopData = $content['dropdown_list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($loop->index == 0): ?>
                                    <?php ($active = 'is-active'); ?>
                                <?php else: ?>
                                    <?php ($active = ''); ?>
                                <?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginal2ee890a8d394a0ad3bd803edcb3c01674e26c8f4 = $component; } ?>
<?php $component = App\View\Components\Faq::resolve(['data' => $item,'active' => $active] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('faq'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Faq::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ee890a8d394a0ad3bd803edcb3c01674e26c8f4)): ?>
<?php $component = $__componentOriginal2ee890a8d394a0ad3bd803edcb3c01674e26c8f4; ?>
<?php unset($__componentOriginal2ee890a8d394a0ad3bd803edcb3c01674e26c8f4); ?>
<?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php if (isset($component)) { $__componentOriginal72a460ce0f1469a5494c8039a0053a217081a7ac = $component; } ?>
<?php $component = App\View\Components\SidebarState::resolve(['data' => $section['sidebar']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar-state'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SidebarState::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal72a460ce0f1469a5494c8039a0053a217081a7ac)): ?>
<?php $component = $__componentOriginal72a460ce0f1469a5494c8039a0053a217081a7ac; ?>
<?php unset($__componentOriginal72a460ce0f1469a5494c8039a0053a217081a7ac); ?>
<?php endif; ?>
    </div>
</section><!-- #<?php echo e($id); ?> -->
<?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/state-content.blade.php ENDPATH**/ ?>