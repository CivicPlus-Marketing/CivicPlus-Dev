<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('sections.modal-video', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('sections.hero', array('hero' => $hero, 'video' => true), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if($content): ?>
            <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php switch($section['acf_fc_layout']):
                    case ('questions'): ?>
                        <?php echo $__env->make('sections.questions', array('section' => $section, 'index' => $loop->index), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ('tour'): ?>
                        <?php echo $__env->make('sections.tour', array('section' => $section, 'index' => $loop->index), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ('benefits'): ?>
                        <?php echo $__env->make('sections.cards', array('section' => $section, 'with_subtitle' => false, 'type' => 'empty', 'index' => $loop->index), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ('map'): ?>
                        <?php echo $__env->make('sections.map', array('section' => $section, 'index' => $loop->index), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ('features'): ?>
                        <?php echo $__env->make('sections.cards-icon', array('section' => $section, 'index' => $loop->index), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ('about'): ?>
                        <?php echo $__env->make('sections.product-about', array('section' => $section, 'index' => $loop->index), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ('video'): ?>
                        <?php echo $__env->make('sections.video', array('section' => $section, 'index' => $loop->index), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ('cases'): ?>
                        <?php echo $__env->make('sections.cases', array('section' => $section, 'index' => $loop->index), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ('integrations'): ?>
                        <?php echo $__env->make('sections.cards-icon', array('section' => $section, 'index' => $loop->index), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ('faq'): ?>
                        <?php echo $__env->make('sections.faqs', array('section' => $section, 'index' => $loop->index, 'is_hidden' => false), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ('resources'): ?>
                        <?php echo $__env->make('sections.tabs-resources', array('section' => $section), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php default: ?>
                <?php endswitch; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <?php echo $__env->make('sections.demo', array('demo' => $demo), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/template-product.blade.php ENDPATH**/ ?>