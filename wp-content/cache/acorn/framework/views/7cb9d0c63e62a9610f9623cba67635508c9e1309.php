<?php if($link): ?>
    <a href="<?php echo e($link['url']); ?>"
       title="<?php echo $link['title']; ?>"
       target="<?php echo e($link['target']); ?>"
       class="submenu-link">
        <?php echo wp_get_attachment_image($image, 'menu-icon'); ?>

        <div>
            <span><?php echo $link['title']; ?></span>
            <p><?php echo $description; ?></p>
        </div>
    </a>
<?php endif; ?><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/components/menu-link.blade.php ENDPATH**/ ?>