<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('sections.hero', array('hero' => $hero, 'video' => false), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if($content): ?>
        <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php switch($section['acf_fc_layout']):
                case ('about'): ?>
                    <?php echo $__env->make('sections.tool-about', array('section' => $section, 'index' => $loop->index), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php break; ?>
                <?php case ('features'): ?>
                    <?php echo $__env->make('sections.cards-icon', array('section' => $section, 'index' => $loop->index), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php break; ?>
                <?php case ('partners'): ?>
                    <?php echo $__env->make('sections.partners', array('section' => $section, 'index' => $loop->index), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php break; ?>
                <?php case ('integrations'): ?>
                    <?php echo $__env->make('sections.cards-icon', array('section' => $section, 'index' => $loop->index), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php break; ?>
                <?php case ('faq'): ?>
                    <?php echo $__env->make('sections.faqs', array('section' => $section, 'index' => $loop->index, 'is_hidden' => false), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php break; ?>
                <?php default: ?>
            <?php endswitch; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <?php echo $__env->make('sections.demo', array('demo' => $demo), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/template-tool.blade.php ENDPATH**/ ?>