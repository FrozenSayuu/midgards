<?php get_header(); ?>
<div class="single-post-content">

    <?php if (!empty(get_the_post_thumbnail())) { ?>
        <?php the_post_thumbnail('midgards-gallery'); ?>
    <?php } else { ?>
        <img src="/app/uploads/placeholder_no_image.png" alt="placeholder for no image found">
    <?php } ?>
    <div class="single-post-text"><?php the_content(); ?></div>
</div>
<?php wp_footer(); ?>