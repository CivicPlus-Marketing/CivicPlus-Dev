<?php ($id = strtolower(str_replace(' ', '-', $section['acfe_flexible_layout_title']))); ?>

<section id="<?php echo e($id); ?>" class="cards-section js-cards-section" data-title="<?php echo $section['acfe_flexible_layout_title']; ?>">
    <div class="container">
        <h2><?php echo $section['title']; ?></h2>
        <?php if($type != 'empty'): ?>
            <?php echo $section['content']; ?>

        <?php endif; ?>

        <?php if($section['list']): ?>
            <div class="cards-row splide js-cards-slider" role="group" aria-label="<?php echo e($section['title']); ?>">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php $__currentLoopData = $section['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="splide__slide">
                                <?php if (isset($component)) { $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8 = $component; } ?>
<?php $component = App\View\Components\Card::resolve(['data' => $item,'withSubtitle' => $with_subtitle] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8)): ?>
<?php $component = $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8; ?>
<?php unset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8); ?>
<?php endif; ?>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section><!-- <?php echo e($id); ?> --><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/cards.blade.php ENDPATH**/ ?>