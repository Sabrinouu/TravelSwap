<?php get_header(); ?>
<h1>Hotes</h1>
<?php
$args = [
    'post_type' => 'hotes',
    'posts_per_page' => 10,
];
$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        echo '<h2>' . get_the_title() . '</h2>';
        echo '<p>Prénom : ' . get_post_meta(get_the_ID(), 'first_name', true) . '</p>';
        echo '<p>Nom : ' . get_post_meta(get_the_ID(), 'last_name', true) . '</p>';
        echo '<p>Pays : ' . get_post_meta(get_the_ID(), 'country', true) . '</p>';
        echo '<p>Ville : ' . get_post_meta(get_the_ID(), 'city', true) . '</p>';
        echo '<p>Type d’aide : ' . get_post_meta(get_the_ID(), 'type_help', true) . '</p>';
        echo '<p>Âge : ' . get_post_meta(get_the_ID(), 'age', true) . '</p>';
        echo '<img src="' . get_post_meta(get_the_ID(), 'img_path', true) . '" alt="Photo de l\'hôte">';
        echo '<img src="' . get_post_meta(get_the_ID(), 'image_1', true) . '" alt="Image 1">';
        echo '<img src="' . get_post_meta(get_the_ID(), 'image_2', true) . '" alt="Image 2">';
        echo '<img src="' . get_post_meta(get_the_ID(), 'image_3', true) . '" alt="Image 3">';
        echo '<p>Icône : ' . get_post_meta(get_the_ID(), 'icon', true) . '</p>';
        echo '<p>Note : ' . get_post_meta(get_the_ID(), 'note', true) . '</p>';
        echo '<p>Email : ' . get_post_meta(get_the_ID(), 'email', true) . '</p>';
    }
}
wp_reset_postdata();
?>


<?php get_footer(); ?>