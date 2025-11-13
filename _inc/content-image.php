<?php 
    
    $image = get_field('image');

    if ( $image ) : ?>

    <div class="c-content__img">
        
        <img class="u-reset--margin u-img--full b-lazy"
             src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
             data-original="<?php echo $image['url']; ?>"
             alt="<?php echo $image['alt']; ?>"
             width="<?php echo $image['width']; ?>"
             height="<?php echo $image['height']; ?>">

    </div>

<?php endif; ?>