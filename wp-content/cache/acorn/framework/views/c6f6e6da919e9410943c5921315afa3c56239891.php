<?php if( $section['title']): ?>
    <section id="hero" class="hero-section" style="background-image: url(<?php echo e($section['image']); ?>)">
        <div class="container">
            <h1><?php echo $section['title']; ?></h1>
            <p><?php echo $section['subtitel']; ?></p>
        </div>
    </section><!-- #hero -->
<?php endif; ?>
<?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/resources-hero.blade.php ENDPATH**/ ?>