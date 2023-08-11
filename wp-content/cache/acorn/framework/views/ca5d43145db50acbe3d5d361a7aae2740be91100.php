<?php if($header_links): ?>
    <div class="top-header">
        <div class="container-wide">
            <?php $__currentLoopData = $header_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php ($link = $item['link']); ?>
                <?php if($link): ?>
                    <a href="<?php echo e($link['url']); ?>" <?php if($link['target']): ?>class="external"<?php endif; ?> target="<?php echo e($link['target']); ?>" title="<?php echo $link['title']; ?>">
                        <?php echo $link['title']; ?>

                    </a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <a href="tel: <?php echo e($phone); ?>" title="Phone: <?php echo e($phone); ?>"><?php echo $phone; ?></a>
        </div>
    </div>
<?php endif; ?>

<header id="header" class="header">
    <div class="container-wide">
        <div class="left">
            <a href="<?php echo e(home_url()); ?>" class="logo" title="CivicPlus Home">
                <?php echo $logo; ?>

            </a>

            <?php if (isset($component)) { $__componentOriginal1175084c644c25f44d57198e7d270b5a7e0eb673 = $component; } ?>
<?php $component = App\View\Components\MegaMenu::resolve(['data' => $header_menu] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('mega-menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\MegaMenu::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1175084c644c25f44d57198e7d270b5a7e0eb673)): ?>
<?php $component = $__componentOriginal1175084c644c25f44d57198e7d270b5a7e0eb673; ?>
<?php unset($__componentOriginal1175084c644c25f44d57198e7d270b5a7e0eb673); ?>
<?php endif; ?>

        </div>
        <div class="right">
            <?php if($header_buttons): ?>
                <?php $__currentLoopData = $header_buttons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php (cps_button($item['link'], $item['type'])); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</header><!-- #header -->
<?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/header.blade.php ENDPATH**/ ?>