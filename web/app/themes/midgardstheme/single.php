<?php get_header(); ?>
<div class="single-post-content">
    <div class="single-post-image">
        <?php if (!empty(get_the_post_thumbnail())) { ?>
            <?php the_post_thumbnail('midgards-gallery'); ?>
        <?php } else { ?>
            <img src="/app/uploads/placeholder_no_image.png" alt="placeholder for no image found">
        <?php } ?>
    </div>

    <div class="single-post-text">
        <h2 class="single-post-title">
            <?php the_title() ?>
        </h2>
        <div class="single-post-description">
            <?php the_content(); ?>
        </div>
        <span class="card-date"> <?php echo get_the_date('Y-m-d'); ?></span>
    </div>
</div>
<?php wp_footer(); ?>