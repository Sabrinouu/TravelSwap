<?php
/* Template Name: Inscription Hote */
?>

<?php get_header(); ?>

<div class="hero-section"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/img_18.jpg');">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>S'inscrire en tant qu'hôte</h1>
    </div>
</div>

<section class="registration-form">
    <h2>Informations personnelles</h2>
    <form action="<?php echo admin_url('admin-post.php'); ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="action" value="register_hote">

        <div class="form-row">
            <div class="form-group">
                <label for="first_name">Prénom :</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Nom :</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="phone">Téléphone mobile :</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" required>
            </div>
        </div>

        <div class="form-group">
            <label for="country">Pays :</label>
            <input type="text" id="country" name="country" required>
        </div>
        <div class="form-group">
            <label for="city">Ville :</label>
            <input type="text" id="city" name="city" required>
        </div>

        <h2>Détails du logement</h2>
        <div class="form-group photo-upload">
            <label>Ajouter des photos de votre logement :</label>
            <input type="file" name="image_1" accept="image/*" required>
            <input type="file" name="image_2" accept="image/*">
            <input type="file" name="image_3" accept="image/*">
        </div>

        <div class="form-group">
            <label for="type_help">Type d'aide souhaitée :</label>
            <input type="text" id="type_help" name="type_help" placeholder="Ex : jardinage, ménage..." required>
        </div>
        <div class="form-group">
            <label for="about">Description du logement :</label>
            <textarea id="about" name="about" rows="5"
                placeholder="Parlez-nous de votre logement et des services attendus..."></textarea>
        </div>

        <h3>Conditions d'utilisation</h3>
        <div class="form-group">
            <label><input type="checkbox" name="terms[]" value="rules" required> Je respecte les règles et conditions
                convenues avec le voyageur.</label>
            <label><input type="checkbox" name="terms[]" value="responsibility" required> Je m'engage à fournir un
                logement dans les conditions décrites.</label>
            <label><input type="checkbox" name="terms[]" value="privacy" required> J'accepte les Conditions Générales
                d'Utilisation et la Politique de Confidentialité de TravelSwap.</label>
        </div>

        <button type="submit" class="btn-submit">S’INSCRIRE COMME HÔTE</button>
    </form>
</section>

<?php get_footer(); ?>