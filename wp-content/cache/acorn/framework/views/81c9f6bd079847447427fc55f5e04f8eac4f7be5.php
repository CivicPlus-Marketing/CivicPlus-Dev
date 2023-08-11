<?php if($list): ?>
    <div class="breadcrumbs">
        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($item['link']): ?>
                <a href="<?php echo e($item['link']); ?>" title="<?php echo $item['title']; ?>"><?php echo $item['title']; ?></a>
                <i class="icon-Chevron-right"></i>
            <?php else: ?>
                <p <?php if($loop->index == 0): ?> class="uppercase"<?php endif; ?>><?php echo $item['title']; ?></p><?php if($loop->index == 0): ?> <i class="icon-Chevron-right"></i> <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/components/breadcrumbs.blade.php ENDPATH**/ ?>