<?php $post_query = array(
    'post_type' => 'post',
    'orderby'    => 'ID',
    'post_status' => 'publish',
    'order'    => 'DESC',
    'posts_per_page' => -1
);
$result = new WP_Query($post_query); ?>

<?php get_header(); ?>

<div class="news-content">
    <div class="news-grid">

        <?php if ($result->have_posts()) : ?>

            <?php while ($result->have_posts()) : $result->the_post(); ?>
                <div class="news-grid-card">
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="card-title"><?php the_title(); ?></h2>
                    </a>
                    <?php if (!empty(get_the_post_thumbnail())) { ?>
                        <?php the_post_thumbnail('midgards-gallery'); ?>
                    <?php } else { ?>
                        <img src="/app/uploads/placeholder_no_image.png" alt="placeholder for no image found">
                    <?php } ?>
                    <?php the_excerpt(); ?>
                    <div class="card-date-link">
                        <span class="card-date"> <?php echo get_the_date('Y-m-d'); ?></span>
                        <a class="card-read-more" href="<?php the_permalink(); ?>">Läs mer</a>
                    </div>
                </div>
            <?php endwhile; ?>

        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>