<?php $__env->startSection('content'); ?>
    <section id="hero" class="hero-section contact-us-js" style="background-image: url(<?php echo e($image); ?>)">
        <div class="container">
            <?php if (isset($component)) { $__componentOriginal031b70f77448d6d2b1e9e96d77e7e66748a7c1aa = $component; } ?>
<?php $component = App\View\Components\Breadcrumbs::resolve(['type' => 'about'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Breadcrumbs::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal031b70f77448d6d2b1e9e96d77e7e66748a7c1aa)): ?>
<?php $component = $__componentOriginal031b70f77448d6d2b1e9e96d77e7e66748a7c1aa; ?>
<?php unset($__componentOriginal031b70f77448d6d2b1e9e96d77e7e66748a7c1aa); ?>
<?php endif; ?>
            <div class="left">
                <h1><?php echo $title; ?></h1>
                <?php echo $subtitle; ?>

            </div>
            <div class="right">
                <div class="tabs-box js-tabs">
                    <div class="tabs-nav">
                        <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button class="tab-nav-item js-tabs-nav" title="<?php echo $item['title']; ?>"
                                    data-product="tab-<?php echo e($loop->index); ?>"><?php echo $item['title']; ?></button>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="tabs-content">
                        <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php switch($item['acf_fc_layout']):
                                case ('form'): ?>
                                    <div class="tabs-body js-tabs-body">
                                        <?php echo hbsptForms($item['form']); ?>

                                    </div>
                                    <?php break; ?>
                                <?php case ('buttons'): ?>
                                    <div class="tabs-body js-tabs-body">
                                        <?php $__currentLoopData = $item['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="box">
                                                <?php echo $s_item['text']; ?>

                                                <?php echo cps_button($s_item['link'], 'btn-red'); ?>

                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <?php break; ?>
                                <?php case ('copy'): ?>
                                    <div class="tabs-body js-tabs-body">
                                        <div class="box">
                                            <?php echo $item['text']; ?>

                                        </div>
                                    </div>
                                    <?php break; ?>
                                <?php default: ?>
                                    <?php break; ?>
                            <?php endswitch; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #pricing -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/template-contact.blade.php ENDPATH**/ ?>