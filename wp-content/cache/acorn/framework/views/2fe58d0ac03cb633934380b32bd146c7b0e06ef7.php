<?php ($id = 'questions'); ?>
<?php if($index > 0): ?>
    <?php ($id = 'questions-' . $index ); ?>
<?php endif; ?>

<section id="<?php echo e($id); ?>" class="questions-section">
    <div class="container">
        <span class="tag"><?php echo $section['tag']; ?></span>
        <h2><?php echo $section['title']; ?></h2>

        <div class="content">
            <div class="left">
                <?php if($section['list']): ?>
                    <?php $__currentLoopData = $section['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($loop->index % 2 == 0): ?>
                            <div class="question-box">
                                <p><?php echo $item['question']; ?></p>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            <div class="center">
                <?php echo wp_get_attachment_image( $section['image'], 'full' ); ?>

            </div>
            <div class="right">
                <?php if($section['list']): ?>
                    <?php $__currentLoopData = $section['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($loop->index % 2 !== 0): ?>
                            <div class="question-box">
                                <p><?php echo $item['question']; ?></p>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section><!-- <?php echo e($id); ?> --><?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/sections/questions.blade.php ENDPATH**/ ?>