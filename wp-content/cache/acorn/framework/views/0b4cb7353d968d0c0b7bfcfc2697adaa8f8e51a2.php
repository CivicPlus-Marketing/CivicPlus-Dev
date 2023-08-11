<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('sections.single-hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section id="content" class="content-section">
        <div class="container">
            <div class="post-nav">
                <div class="post-nav-box">
                    <ul class="post-navigation js-post-navigation">
                    </ul>
                </div>
            </div>
            <div class="content js-content">
                <?php echo $content; ?>

            </div>
        </div>
    </section>

    <div id="author-detail" class="author-section">
        <div class="container">
            <div class="content">
                <h3><?php echo e(_x('Written by', 'sage')); ?></h3>
                <?php if (isset($component)) { $__componentOriginaldf1cb614b5a5b5f418033fb81fbdf8cf71819d31 = $component; } ?>
<?php $component = App\View\Components\Author::resolve(['id' => $author_id,'detail' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('author'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Author::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf1cb614b5a5b5f418033fb81fbdf8cf71819d31)): ?>
<?php $component = $__componentOriginaldf1cb614b5a5b5f418033fb81fbdf8cf71819d31; ?>
<?php unset($__componentOriginaldf1cb614b5a5b5f418033fb81fbdf8cf71819d31); ?>
<?php endif; ?>
            </div>
        </div>
    </div>

    <?php echo $__env->make('sections.faqs', array('section' => $faqs, 'index' => 0, 'is_hidden' => $faqs['is_it_hidden']), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="near-post-section">
        <div class="container">
            <div class="content">
                <div class="next-prev-buttons">
                    <div class="previous-button"><?php (previous_post_link( '%link',
            '<span><span class="icon-Chevron-left"></span>PREV</span> <p>%title</p>' )); ?></div>
                    <div class="next-button"><?php (next_post_link( '%link',
            '<span>NEXT<span class="icon-Chevron-right"></span></span><p>%title</p>' )); ?></div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('sections.related', array('section' => $related), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('sections.demo', array('demo' => $demo), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/single.blade.php ENDPATH**/ ?>