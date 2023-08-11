<div class="card">
    <?php echo $image_element; ?>


    <div class="bottom">
        <h3 class="title"><?php echo $title; ?></h3>
        <?php if($subtitle): ?>
            <p class="subtitle"><?php echo $subtitle; ?></p>
        <?php endif; ?>
        <p><?php echo $description; ?></p>

        <?php if($link): ?>
            <?php echo $link; ?>

        <?php endif; ?>
    </div>
</div><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/components/card.blade.php ENDPATH**/ ?>