<div class="feedback-box">
    <div class="copy">
        <?php echo $content; ?>

    </div>

    <p class="name"><?php echo $name; ?></p>
    <p class="position"><?php echo $position; ?></p>

    <?php if($link): ?>
        <a href="<?php echo e($link['url']); ?>" class="learn-more" title="<?php echo $link['title']; ?>" target="<?php echo e($link['target']); ?>"><?php echo $link['title']; ?></a>
    <?php endif; ?>
</div><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/components/feedback-box.blade.php ENDPATH**/ ?>