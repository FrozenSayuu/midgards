<?php $post_courses_query = array(
    'post_type' => 'post',
    'orderby'    => 'ID',
    'post_status' => 'publish',
    'category_name' => 'kurser',
    'posts_per_page' => -1
);
$result = new WP_Query($post_courses_query); ?>

<?php get_header() ?>
<?php the_content() ?>
<div class="courses-content">
</div>

<?php get_footer() ?>