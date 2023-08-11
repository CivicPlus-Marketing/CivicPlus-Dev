<aside class="topics-nav">
    <p class="title"><?php echo __('Topic', 'sage'); ?></p>

    <a href="<?php echo e($link); ?>" data-type="all"
       class="topics-nav-item <?php echo e($current_link == $link ? 'active' : null); ?> js-topics-nav-item"><?php echo __('All', 'sage'); ?></a>
    <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($post_type['type'] == 'resources'): ?>
        <a href="<?php echo e($link . '?topic=' . $topic['slug']); ?>" data-type="<?php echo e($topic['slug']); ?>"
           class="topics-nav-item <?php echo e($topic['slug'] == $active_topic  ? 'active' : null); ?> js-topics-nav-item"><?php echo $topic['name']; ?></a>
        <?php else: ?>
            <a href="<?php echo e($link . $topic['slug']); ?>" data-type="<?php echo e($topic['slug']); ?>"
                class="topics-nav-item <?php echo e($topic['slug'] == $active_topic || $link . $topic['slug'] . '/' == $current_link ? 'active' : null); ?> js-topics-nav-item"><?php echo $topic['name']; ?></a>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</aside>
<?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/components/topics-nav.blade.php ENDPATH**/ ?>