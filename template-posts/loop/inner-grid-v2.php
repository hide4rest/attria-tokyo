<?php
    $thumbsize = !isset($thumbsize) ? superio_get_config( 'blog_item_thumbsize', 'full' ) : $thumbsize;
    $thumb = superio_display_post_thumb($thumbsize);
?>
<article <?php post_class('post post-layout post-grid-v2'); ?>>
    <?php if($thumb) {?>
        <div class="top-image">
            <?php
                echo trim($thumb);
            ?>
         </div>
    <?php } ?>
    <div class="inner-bottom">
        <div class="top-info">
            <div class="date">
                <?php the_time( get_option('date_format', 'd M, Y') ); ?>
            </div>
            <div class="comments">
                <?php comments_number( esc_html__('0 Comments', 'superio'), esc_html__('1 Comment', 'superio'), esc_html__('% Comments', 'superio') ); ?>
            </div>
        </div>
        <?php if (get_the_title()) { ?>
            <h4 class="entry-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>
        <?php } ?>
    </div>
</article>