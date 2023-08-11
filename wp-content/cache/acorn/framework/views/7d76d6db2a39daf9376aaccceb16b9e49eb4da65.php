<?php $__env->startSection('content'); ?>
    <section id="hero" class="hero-section"
             style="background-image: url(<?php echo e(wp_get_attachment_image_url( $hero['image'], 'full' )); ?>)">
        <div class="container">
            <div class="content">
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
                <h1><?php echo $hero['title']; ?></h1>
                <?php echo $hero['subtitle']; ?>


                <?php if($hero['columns']): ?>
                    <div class="columns">
                        <?php $__currentLoopData = $hero['columns']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col">
                                <p class="title"><?php echo $item['title']; ?></p>
                                <p><?php echo $item['description']; ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </section>

    <?php if($hero['images']): ?>
        <section class="history-slider js-history-slider splide" aria-label="History Slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php $__currentLoopData = $hero['images']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="splide__slide">
                            <?php echo wp_get_attachment_image($image, 'full'); ?>

                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </section>
    <?php endif; ?>

    <?php if($content): ?>
        <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php switch($section['acf_fc_layout']):
                case ('history'): ?>
                    <div id="history" class="history-section">
                        <div class="container">
                            <?php if($section['list']): ?>
                                <div class="content">
                                    <?php $__currentLoopData = $section['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="date-box">
                                            <div class="left">
                                                <p><?php echo $item['date']; ?></p>
                                            </div>
                                            <div class="right">
                                                <?php echo wp_get_attachment_image($item['image'], 'full'); ?>

                                                <?php echo $item['text']; ?>

                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>                    <?php break; ?>
                <?php case ('image_text'): ?>
                    <?php echo $__env->make('sections.image-text', array('section' => $section, 'with_box' => false), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php break; ?>
                <?php default: ?>
            <?php endswitch; ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <?php echo $__env->make('sections.demo', array('demo' => $demo), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/template-history.blade.php ENDPATH**/ ?>