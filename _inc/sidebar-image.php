<?php if ( has_post_thumbnail() ) : ?>

    <div class="c-blog__featured">
        <?php the_post_thumbnail('full', array('class' => 'u-reset--margin')); ?>
    </div>

<?php else: ?>

    <?php if ( first_image_as_featured() ) : ?>

        <div class="c-blog__featured">
            <img class="u-reset--margin" src="<?php echo first_image_as_featured(); ?>" />
        </div>

    <?php endif; ?>

<?php endif; ?>