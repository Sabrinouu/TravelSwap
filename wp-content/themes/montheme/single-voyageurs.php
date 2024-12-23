<?php get_header(); ?>

<div class="hero-section"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/img_1.jpg');">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>VOYAGEUR</h1>
    </div>
</div>


<?php
// Récupérer les métadonnées du voyageur
$first_name = get_post_meta(get_the_ID(), 'first_name', true);
$last_name = get_post_meta(get_the_ID(), 'last_name', true);
$pays_souhaite = get_post_meta(get_the_ID(), 'pays_souhaite', true);
$type_help = get_post_meta(get_the_ID(), 'type_help', true);
$age = get_post_meta(get_the_ID(), 'age', true);
$img_path = get_post_meta(get_the_ID(), 'img_path', true);
$note = get_post_meta(get_the_ID(), 'note', true);
$email = get_post_meta(get_the_ID(), 'email', true);
?>

<section class="human-details">
    <!-- Grid avec 1 x 3 colonnes -->
    <div class="details-grid">
        <div class="grid-item">
            <strong>Pays souhaité :</strong>
            <p><?php echo esc_html($pays_souhaite); ?></p>
        </div>
        <div class="grid-item">
            <strong>Type d’aide proposé :</strong>
            <p><?php echo esc_html($type_help); ?></p>
        </div>
        <div class="grid-item">
            <strong>Âge :</strong>
            <p><?php echo esc_html($age); ?></p>
        </div>
    </div>

    <!-- Image centrée -->
    <div class="human-image">
        <img src="<?php echo esc_url($img_path); ?>" alt="Photo de <?php echo esc_attr($first_name); ?>">
    </div>

    <!-- Prénom et nom centrés -->
    <div class="human-name">
        <h1><?php echo esc_html($first_name . ' ' . $last_name); ?></h1>
    </div>

    <!-- Informations sur la personne -->
    <div class="human-info">
        <h3>Informations sur la personne</h3>
        <p><?php echo esc_html($note); ?></p>
    </div>

    <!-- Contact section -->
    <div class="human-contact">
        <h4>Contacter <?php echo esc_html($first_name); ?></h4>
        <div class="contact-icon">
            <i class="fas fa-envelope"></i>
        </div>
        <p>
            <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
        </p>
    </div>
</section>


<?php get_footer(); ?>