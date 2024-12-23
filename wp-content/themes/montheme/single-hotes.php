<?php get_header(); ?>

<?php
// Récupérer les métadonnées de l'hôte
$first_name = get_post_meta(get_the_ID(), 'first_name', true);
$last_name = get_post_meta(get_the_ID(), 'last_name', true);
$country = get_post_meta(get_the_ID(), 'country', true);
$city = get_post_meta(get_the_ID(), 'city', true);
$type_help = get_post_meta(get_the_ID(), 'type_help', true);
$age = get_post_meta(get_the_ID(), 'age', true);
$img_path = get_post_meta(get_the_ID(), 'img_path', true);
$note = get_post_meta(get_the_ID(), 'note', true);
$email = get_post_meta(get_the_ID(), 'email', true);

// Images de logement
$image_1 = get_post_meta(get_the_ID(), 'image_1', true);
$image_2 = get_post_meta(get_the_ID(), 'image_2', true);
$image_3 = get_post_meta(get_the_ID(), 'image_3', true);
?>

<div class="hero-section"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/img_2.jpg');">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>HÔTE</h1>
        <h2>
            <?php echo esc_html($country . ' | ' . $city); ?>
        </h2>
    </div>
</div>


<section class="human-details">

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

    <!-- Type de logement -->
    <div class="human-housing">
        <h3>Type de logement</h3>
        <div class="housing-grid">
            <?php if (!empty($image_1)) : ?>
            <div class="grid-item">
                <img src="<?php echo esc_url($image_1); ?>" alt="Image du logement 1">
            </div>
            <?php endif; ?>
            <?php if (!empty($image_2)) : ?>
            <div class="grid-item">
                <img src="<?php echo esc_url($image_2); ?>" alt="Image du logement 2">
            </div>
            <?php endif; ?>
            <?php if (!empty($image_3)) : ?>
            <div class="grid-item">
                <img src="<?php echo esc_url($image_3); ?>" alt="Image du logement 3">
            </div>
            <?php endif; ?>
        </div>
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