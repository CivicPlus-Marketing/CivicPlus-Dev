<?php if($loop->max_num_pages > 1): ?>
    <div class="pagination js-pagination" data-post-type="<?php echo e($type['name']); ?>"
         data-posts-per-page="<?php echo e($post_per_page); ?>" data-type="">
        <ul>
            <?php if($paged !== 1): ?>
                <li><a href="<?php echo $link . $paged - 1; ?>" data-page="prev" class="prev">Prev</a></li>
            <?php endif; ?>
            <?php for($i=1; $i<$loop->max_num_pages + 1; $i++): ?>

                    <li><a href="<?php echo $link . $i; ?>" data-page="<?php echo e($i); ?>"
                           class="<?php echo e($i === $paged ? 'active' : ''); ?>"><?php echo e($i); ?></a></li>

            <?php endfor; ?>

            <?php if($paged != $loop->max_num_pages): ?>
                <li><a href="<?php echo $link . $paged + 1; ?>" data-page="next" class="next">Next</a></li>
            <?php endif; ?>
        </ul>
    </div>
<?php endif; ?>


<?php /**PATH /var/www/html/civicplus/wp-content/themes/civicplus/resources/views/components/pagination.blade.php ENDPATH**/ ?>