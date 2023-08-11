<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('sections.resources-hero', array('section' => $hero), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('sections.archive', array('args' => $args), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/index.blade.php ENDPATH**/ ?>