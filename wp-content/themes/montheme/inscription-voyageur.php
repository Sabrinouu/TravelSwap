<?php
/* Template Name: Inscription Voyageur */
?>


<?php get_header(); ?>

<div class="hero-section"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/img_19.jpg');">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>S'inscrire en tant que voyageur</h1>
    </div>
</div>


<section class="registration-form">
    <h2>Informations personnelles</h2>
    <form action="<?php echo admin_url('admin-post.php'); ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="action" value="register_voyageur">

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
                <label for="birth_date">Date de naissance :</label>
                <input type="date" id="birth_date" name="birth_date" required>
            </div>
            <div class="form-group">
                <label for="phone">Téléphone mobile (ex : +32) :</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
        </div>

        <div class="form-group">
            <label for="country">Pays de résidence :</label>
            <input type="text" id="country" name="country" required>
        </div>
        <div class="form-group">
            <label for="languages">Langues parlées :</label>
            <input type="text" id="languages" name="languages">
        </div>

        <h2>Détails du profil</h2>
        <div class="form-group">
            <label for="email">Adresse e-mail :</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirmez le mot de passe :</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
        </div>

        <h2>Pour compléter votre inscription :</h2>
        <div class="form-group photo-upload">
            <label>Ajouter une photo de profil (obligatoire)</label>
            <input type="file" name="profile_picture" accept="image/*" required>
        </div>

        <div class="form-group">
            <label for="id_card">Numéro de carte d'identité :</label>
            <input type="text" id="id_card" name="id_card" required>
            <p class="info-text">(Ce numéro est requis uniquement pour vérification et restera confidentiel)</p>
        </div>
        <div class="form-group">
            <label for="about">À propos de vous :</label>
            <textarea id="about" name="about" rows="5" placeholder="Parlez-nous de vous..."></textarea>
        </div>

        <h3>Conditions d'utilisation</h3>
        <div class="form-group">
            <label><input type="checkbox" name="terms[]" value="rules" required> Je respecte les règles et conditions
                établies par l’hôte que j’accueille.</label>
            <label><input type="checkbox" name="terms[]" value="services" required> Je m’engage à offrir mes services
                convenus lors de l’échange.</label>
            <label><input type="checkbox" name="terms[]" value="responsibility" required> Je suis conscient(e) que
                TravelSwap n’est pas responsable des arrangements non documentés entre les parties.</label>
            <label><input type="checkbox" name="terms[]" value="privacy" required> J’accepte les Conditions Générales
                d’Utilisation et la Politique de Confidentialité de TravelSwap.</label>
        </div>

        <button type="submit" class="btn-submit">S’INSCRIRE COMME VOYAGEUR</button>
    </form>
</section>
<?php get_footer(); ?>