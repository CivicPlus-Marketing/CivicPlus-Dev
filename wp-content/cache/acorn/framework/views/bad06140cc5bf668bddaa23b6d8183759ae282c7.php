<?php ($id = strtolower(str_replace(' ', '-', $section['acfe_flexible_layout_title']))); ?>

<section id="<?php echo e($id); ?>" class="challenge-section <?php echo e($section['type']); ?>" data-title="<?php echo $section['acfe_flexible_layout_title']; ?>">
    <div class="container">
        <?php if($section['title']): ?>
            <h2><?php echo $section['title']; ?></h2>
        <?php endif; ?>

        <div class="challenge">
            <div class="icon"></div>

            <div class="info">
                <?php echo $section['challenge']; ?>

            </div>
        </div>

        <div class="solution">
            <div class="info">
                <?php echo $section['solution']; ?>

            </div>

            <?php if($section['product']): ?>
                <div class="product">
                    <p class="h5"><?php echo $section['product']['title']; ?></p>

                    <?php if($section['product']['link']): ?>
                        <a href="<?php echo e($section['product']['link']['url']); ?>" title="<?php echo $section['product']['name']; ?>">
                            <?php echo wp_get_attachment_image($section['product']['logo'], 'full'); ?>


                            <div class="info">
                                <p class="title"><?php echo $section['product']['name']; ?></p>

                            </div>

                            <span class="learn-more"><?php echo $section['product']['link']['title']; ?></span>

                        </a>
                    <?php endif; ?>

                </div>
            <?php endif; ?>
        </div>

        <?php if($section['case_study']['content']): ?>
            <div class="case-study">
                <div class="left">
                    <?php echo wp_get_attachment_image($section['case_study']['image'], 'full'); ?>

                </div>
                <div class="right">
                    <div class="comment-box">
                        <?php echo $section['case_study']['content']; ?>

                    </div>

                    <div class="author-box">
                        <?php echo wp_get_attachment_image($section['case_study']['logo'], 'full'); ?>


                        <div class="info">
                            <p class="name"><?php echo e($section['case_study']['name']); ?></p>
                            <p class="position"><?php echo e($section['case_study']['position']); ?></p>
                        </div>
                    </div>

                    <?php if($section['case_study']['link']): ?>
                        <a href="<?php echo e($section['case_study']['link']['url']); ?>"
                           title="<?php echo e($section['case_study']['link']['title']); ?>"
                           target="<?php echo e($section['case_study']['link']['target']); ?>" class="learn-more">
                            <?php echo $section['case_study']['link']['title']; ?>

                        </a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section><!-- #<?php echo e($id); ?> -->
<?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/challenge.blade.php ENDPATH**/ ?>