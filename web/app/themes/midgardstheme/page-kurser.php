<?php $post_courses_query = array(
    'post_type' => 'post',
    'orderby'    => 'ID',
    'post_status' => 'publish',
    'category_name' => 'kurser',
    'order'    => 'ASC',
    'posts_per_page' => -1
);
$result = new WP_Query($post_courses_query); ?>
<!-- regndroppsmassage
reiki 1, reiki 2, reiki master -->
<?php get_header() ?>
<?php the_content() ?>
<div class="courses-content">
    <?php if ($result->have_posts()) : ?>
        <?php while ($result->have_posts()) : $result->the_post() ?>
            <h2 class="course-title"><?php the_title(); ?></h2>
            <div class="course-info"><?php the_content(); ?></div>

        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer() ?>