<?php ($id = 'faqs'); ?>
<?php if($index > 0): ?>
    <?php ($id = 'faqs-' . $index ); ?>
<?php endif; ?>

<?php if(!$is_hidden): ?>
    <section id="<?php echo e($id); ?>" class="faqs-section">
        <div class="container">
            <h2><?php echo $section['title']; ?></h2>

            <?php if($section['list']): ?>
                <div class="faqs-box">
                    <?php $__currentLoopData = $section['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
    </section><!-- <?php echo e($id); ?> -->
<?php endif; ?><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/faqs.blade.php ENDPATH**/ ?>