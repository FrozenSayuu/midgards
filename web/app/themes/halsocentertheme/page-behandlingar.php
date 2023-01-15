<?php $post_treatments_query = array(
    'post_type' => 'behandling',
    'orderby'    => 'ID',
    'post_status' => 'publish',
    'posts_per_page' => -1
);
$result = new WP_Query($post_treatments_query); ?>

<?php get_header() ?>

<div class="halsocenter-treatments-content">
    <div class="halsocenter-treatments-hero">
        <?php the_content() ?>
    </div>

    <?php if ($result->have_posts()) : ?>
        <?php while ($result->have_posts()) : $result->the_post(); ?>
            <div class="treatment-content">
                <div class="treatment-image">
                    <?php if (!empty(get_the_post_thumbnail())) { ?>
                        <?php the_post_thumbnail('midgards-gallery'); ?>
                    <?php } else { ?>
                        <img src="/app/uploads/placeholder_no_image.png" width="150" height="150" alt="placeholder for no image found">
                    <?php } ?>
                </div>
                <div class="treatment-info">
                    <h2 class="treatment-title"><?php the_title(); ?></h2>
                    <div class="treatment-text">
                        <?php the_content() ?>
                    </div>
                </div>

            </div>
        <?php endwhile; ?>
    <?php endif; ?>

</div>

<?php get_footer() ?>