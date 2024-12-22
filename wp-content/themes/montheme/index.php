<?php get_header(); ?>
<div class="container">
    <?php if (have_posts()): ?>
    <h1>Mes articles</h1>
    <ul>
        <?php while(have_posts()): the_post(); ?>
        <li>
            <?php the_post_thumbnail('thumbnail'); ?><br>
            <?php the_title() ?> - <?php the_author(); ?>
            <a href="<?php the_permalink(); ?>">lire l'article</a>
        </li>
        <?php endwhile; ?>
    </ul>
    <?php else: ?>
    <h1>Aucun articles disponible pour le moment</h1>
    <?php endif; ?>
    <h3>Formations</h3>
    <ul>
        <?php
$formationsList = new WP_Query([
    'post_type' => 'formations',
    'posts_per_page' => -1
]);
while ( $formationsList->have_posts() ) : $formationsList->the_post();
    $start_date = get_post_meta(get_the_ID(), 'start_date', true);
    $end_date = get_post_meta(get_the_ID(), 'end_date', true);
    ?>
        <li>
            <?php if($start_date && $end_date): ?>
            <?php echo $start_date; ?> - <?php echo $end_date; ?> :
            <?php endif; ?>
            <?php the_title(); ?>
        </li>
        <?php endwhile; ?>
    </ul>
    <h3>Compétences</h3>
    <?php
    $competencesList = new WP_Query([
        'post_type' => 'competences',
        'posts_per_page' => -1
    ]);
    ?>
    <ul>
        <?php while ($competencesList->have_posts()) : $competencesList->the_post(); ?>
        <li><?php the_title(); ?></li>
        <?php endwhile; ?>
    </ul>
</div>
<?php get_footer(); ?>