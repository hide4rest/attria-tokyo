<?php 
global $post;
$thumbsize = !isset($thumbsize) ? superio_get_config( 'blog_item_thumbsize', 'full' ) : $thumbsize;
$thumb = superio_display_post_thumb($thumbsize);
?>
<article <?php post_class('post post-layout post-list-item'); ?>>
    <div class="flex-middle">
        <?php
            if ( !empty($thumb) ) {
                ?>
                <div class="top-image">
                    <?php
                        echo trim($thumb);
                    ?>
                 </div>
                <?php
            }
        ?>
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
                    <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
                        <div class="stick-icon text-theme"><i class="ti-pin2"></i></div>
                    <?php endif; ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h4>
            <?php } ?>
            <div class="description hidden-xs"><?php echo trim(superio_substring( get_the_excerpt(),14, '...' )); ?></div>
            <div class="readmore">
                <a class="btn-readmore text-theme" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'superio'); ?><i class="ti-angle-right"></i></a>
            </div>
        </div>
    </div>
</article>