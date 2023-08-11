<?php if($link): ?>
<a href="<?php echo e($link['url']); ?>"  target="<?php echo e($link['target']); ?>" title="<?php echo e($title); ?>" class="card active <?php echo e($class); ?> js-card">
    <?php echo $image_element; ?>

    <h3 class="title"><?php echo $title; ?></h3>
    <div class="description"><?php echo $description; ?></div>
    <?php echo $link_element; ?>

</a>
    <?php else: ?>
    <div class="card active <?php echo e($class); ?> js-card">
        <?php echo $image_element; ?>

        <h3 class="title"><?php echo $title; ?></h3>
        <div class="description"><?php echo $description; ?></div>
        <?php echo $link_element; ?>

    </div>
<?php endif; ?>


<?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/components/card-icon.blade.php ENDPATH**/ ?>