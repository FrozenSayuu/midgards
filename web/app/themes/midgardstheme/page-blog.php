<?php $post_query = array(
    'post_type' => 'post',
    'orderby'    => 'ID',
    'post_status' => 'publish',
    'order'    => 'DESC',
    'posts_per_page' => -1
);
$result = new WP_Query($post_query); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="news-content">
        <h1>Blogg</h1>
        <div class="news-grid">
            <?php if ($result->have_posts()) : ?>
                <div class="news-grid-card"> <?php while ($result->have_posts()) : $result->the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>



    <?php wp_footer(); ?>
</body>

</html>