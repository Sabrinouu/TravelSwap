<?php get_header(); ?>
<h1>Voyageurs</h1>
<?php
$args = [
    'post_type' => 'voyageurs',
    'posts_per_page' => 10,
];
$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        echo '<h2>' . get_the_title() . '</h2>';
        echo '<p>Prénom : ' . get_post_meta(get_the_ID(), 'first_name', true) . '</p>';
        echo '<p>Nom : ' . get_post_meta(get_the_ID(), 'last_name', true) . '</p>';
        echo '<p>Pays souhaité : ' . get_post_meta(get_the_ID(), 'pays_souhaite', true) . '</p>';
        echo '<p>Type d’aide : ' . get_post_meta(get_the_ID(), 'type_help', true) . '</p>';
        echo '<p>Âge : ' . get_post_meta(get_the_ID(), 'age', true) . '</p>';
        echo '<img src="' . get_post_meta(get_the_ID(), 'img_path', true) . '" alt="Photo du voyageur">';
        echo '<p>Note : ' . get_post_meta(get_the_ID(), 'note', true) . '</p>';
        echo '<p>Email : ' . get_post_meta(get_the_ID(), 'email', true) . '</p>';
    }
}
wp_reset_postdata();
?>


<?php get_footer(); ?>