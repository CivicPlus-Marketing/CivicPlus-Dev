<div class="types-nav">
    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e($type['link']); ?>" data-type="<?php echo e($type['type']); ?>" class="types-nav-item <?php echo e($type['class']); ?> <?php echo e($type['link'] == $current_link ? 'active' : null); ?> js-types-nav-item"><?php echo $type['title']; ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/components/types-nav.blade.php ENDPATH**/ ?>