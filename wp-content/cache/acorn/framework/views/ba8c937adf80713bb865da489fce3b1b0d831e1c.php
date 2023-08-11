<?php $__env->startSection('content'); ?>
    <?php if($hero['title']): ?>
        <section id="hero" class="hero-section">
            <div class="container">
                <div class="left">
                    <span class="tag"><?php echo $hero['tag']; ?></span>
                    <h1><?php echo $hero['title']; ?></h1>
                    <?php echo $hero['subtitle']; ?>


                    <?php echo cps_button($hero['link']); ?>


                    <?php if($hero['achievements']): ?>
                        <div class="achievements">
                            <?php $__currentLoopData = $hero['achievements']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col">
                                    <p><?php echo $item['title']; ?></p>
                                    <p><?php echo $item['description']; ?></p>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="right">
                    <?php echo wp_get_attachment_image( $hero['image'], 'full' ); ?>

                </div>
            </div>
        </section><!-- #hero -->
    <?php endif; ?>

    <?php if($content): ?>
        <div id="content-box" class="content-box js-content-box">
            <?php if($announcement['title']): ?>
                <div class="announcement-bar">
                    <div class="container">
                        <div class="content">
                            <span class="tag"><?php echo $announcement['tag']; ?></span>
                            <p class="title"><?php echo $announcement['title']; ?></p>
                            <?php echo cps_button($announcement['link'], 'learn-more'); ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="post-nav">
                <div class="post-nav-box">
                    <ul class="post-navigation js-post-navigation">
                    </ul>
                </div>
            </div>

            <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php switch($section['acf_fc_layout']):
                    case ('cards'): ?>
                        <?php echo $__env->make('sections.cards', array('section' => $section, 'with_subtitle' => true, 'type' => 'detail'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ('products'): ?>
                        <?php echo $__env->make('sections.tabs-products', array('section' => $section, 'type' => 'home'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ('tools'): ?>
                        <?php echo $__env->make('sections.tabs-tools', array('section' => $section), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ('cases'): ?>
                        <?php echo $__env->make('sections.cases', array('section' => $section), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ('resources'): ?>
                        <?php echo $__env->make('sections.tabs-resources', array('section' => $section), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php default: ?>
                        <?php break; ?>
                <?php endswitch; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>

    <?php echo $__env->make('sections.demo', array('demo' => $demo), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/template-home.blade.php ENDPATH**/ ?>