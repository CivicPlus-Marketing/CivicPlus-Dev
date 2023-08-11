<?php if(!$demo['is_it_hidden']): ?>
    <section id="demo" class="demo-section">
        <div class="container">
            <div class="left">
                <h2><?php echo $demo['title']; ?></h2>
                <p><?php echo $demo['subtitle']; ?></p>
            </div>
            <div class="right">
                <?php if($demo['form']): ?>
                    <?php echo hubSpotForm($demo['form']); ?>

                <?php endif; ?>
            </div>
        </div>
    </section><!-- #demo -->
<?php endif; ?>
<?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/demo-form.blade.php ENDPATH**/ ?>