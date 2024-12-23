<?php
/**
 * Template Name: Hotes
 */
?>

<?php get_header(); ?>
<div class="hero-section"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/img_16.jpg');">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>Nos Hôtes</h1>
    </div>
</div>

<section>
    <div class="person-section">
        <h2>Rencontrez nos hôtes et vivez des expériences uniques autour du monde !</h2>
        <?php
    $args = [
        'post_type' => 'hotes',
        'posts_per_page' => 10,
    ];
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $thumbnail = get_post_meta(get_the_ID(), 'img_path', true);
            $first_name = get_post_meta(get_the_ID(), 'first_name', true);
            $last_name = get_post_meta(get_the_ID(), 'last_name', true);
            $country = get_post_meta(get_the_ID(), 'country', true);
            $type_help = get_post_meta(get_the_ID(), 'type_help', true);
            ?>
        <div class="person-card">
            <div class="person-image">
                <img src="<?php echo esc_url($thumbnail); ?>" alt="Photo de <?php echo esc_attr($first_name); ?>">
            </div>
            <div class="person-info">
                <div class="person-nom">
                    <h3><?php echo esc_html($first_name . ' ' . $last_name); ?></h3>
                </div>
                <div class="person-pays">
                    <i class="fas fa-globe"></i>
                    <span><?php echo esc_html($country); ?></span>
                </div>
                <div class="person-details">
                    <p><?php echo esc_html($type_help); ?></p>
                    <a href="<?php echo esc_url(home_url('/hotes/' . sanitize_title($first_name) . '-' . sanitize_title($last_name))); ?>"
                        class="btn-more">En savoir plus sur l’hôte</a>
                </div>
            </div>
        </div>
        <?php
        }
    }
    wp_reset_postdata();
    ?>
    </div>
</section>

<?php get_footer(); ?>