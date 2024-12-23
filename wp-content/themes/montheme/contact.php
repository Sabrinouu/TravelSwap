<?php
/* Template Name: Contact */
?>

<?php get_header(); ?>
<div class="hero-section"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/img_13.jpg');">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>CONTACTEZ-NOUS</h1>
    </div>
</div>

<section class="contact-section">
    <h2>PRENEZ CONTACT AVEC TRAVELSWAP</h2>

    <div class="contact-info">
        <div class="info-box">
            <h3>Notre adresse postale</h3>
            <p>35 Rue des Piches<br>1210 Bruxelles, Belgique</p>
        </div>
        <div class="info-box">
            <h3>Notre numéro</h3>
            <i class="fas fa-phone"></i>
            <p>02 42 42 70</p>
        </div>
        <div class="info-box">
            <h3>Notre mail</h3>
            <i class="fas fa-envelope"></i>
            <p>contact@travelswap.com</p>
        </div>
    </div>

    <div class="contact-form">
        <h3>Une question spécifique ?<br>Posez-la ici</h3>
        <form>
            <input type="text" placeholder="Nom :" required>
            <input type="text" placeholder="Prénom :" required>
            <input type="email" placeholder="Email :" required>
            <textarea placeholder="Ta question :" required></textarea>
            <button type="submit">Envoyer</button>
        </form>
    </div>

    <div class="social-media">
        <h3>Retrouvez nous sur :</h3>
        <div class="social-icons">
            <div class="social-icon">
                <i class="fab fa-facebook"></i>
                <p>@travelswap</p>
            </div>
            <div class="social-icon">
                <i class="fab fa-instagram"></i>
                <p>@travelswap</p>
            </div>
            <div class="social-icon">
                <i class="fab fa-twitter"></i>
                <p>@travelswap</p>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>