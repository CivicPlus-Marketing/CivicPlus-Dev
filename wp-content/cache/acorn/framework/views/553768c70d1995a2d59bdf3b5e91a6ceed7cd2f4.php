<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('sections.hero', array('hero' => $hero, 'breadcrumbs' => 'use-case', 'video' => false), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if($content): ?>
        <div id="content-box" class="content-box js-content-box">
            <div class="post-nav">
                <div class="post-nav-box">
                    <ul class="post-navigation js-post-navigation">
                    </ul>
                </div>
            </div>

            <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php switch($section['acf_fc_layout']):
                    case ('challenge'): ?>
                        <?php echo $__env->make('sections.challenge', array('section' => $section), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ('resources'): ?>
                        <?php echo $__env->make('sections.tabs-resources', array('section' => $section), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php default: ?>
                <?php endswitch; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>

    <?php echo $__env->make('sections.demo', array('demo' => $demo), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/template-use-case.blade.php ENDPATH**/ ?>