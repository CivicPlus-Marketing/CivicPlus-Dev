<?php ($id = strtolower(str_replace(' ', '-', $section['acfe_flexible_layout_title']))); ?>

<section id="<?php echo e($id); ?>" class="cases-section js-cases-section" data-title="<?php echo $section['acfe_flexible_layout_title']; ?>">
    <div class="container">
        <h2><?php echo $section['title']; ?></h2>
        <?php echo $section['content']; ?>


        <?php if($section['list']): ?>
            <div id="logos-carousel" class="splide logos-slider js-logos-slider" role="group"
                 aria-label="<?php echo $section['title']; ?>">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php $__currentLoopData = $section['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="splide__slide">
                                <?php echo wp_get_attachment_image($item['logo'], 'full'); ?>

                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>

        <?php if($section['list']): ?>
            <div id="cases-carousel" class="splide cases-slider js-cases-slider" role="group"
                 aria-label="<?php echo e($section['title']); ?>">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php $__currentLoopData = $section['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="splide__slide">
                                <div class="left">
                                    <div class="comment-box">
                                        <?php echo $item['content']; ?>

                                    </div>

                                    <div class="author-box">
                                        <?php echo wp_get_attachment_image($item['logo'], 'full'); ?>


                                        <div class="info">
                                            <p class="name"><?php echo e($item['name']); ?></p>
                                            <p class="position"><?php echo e($item['position']); ?></p>
                                        </div>
                                    </div>

                                    <?php if($item['link']): ?>
                                        <a href="<?php echo e($item['link']['url']); ?>" title="<?php echo e($item['link']['title']); ?>" target="<?php echo e($item['link']['target']); ?>" class="learn-more">
                                            <?php echo $item['link']['title']; ?>

                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="right">
                                    <?php echo wp_get_attachment_image($item['image'], 'full'); ?>

                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section><!-- <?php echo e($id); ?> --><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/cases.blade.php ENDPATH**/ ?>