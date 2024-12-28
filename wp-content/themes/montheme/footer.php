<?php wp_footer(); ?>
<footer>
    <div class="footer-top">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo">
    </div>
    <div class="footer-grid">
        <div>
            <h4>RÉSEAUX-SOCIAUX</h4>
            <div class="social-icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-x"></i>
            </div>

        </div>
        <div>
            <h4>CONTACTEZ-NOUS</h4>
            <p>contact@travelswap.com</p>
            <p>02/412.47.70</p>
        </div>
        <div>
            <h4>
                <a href="/PROJET-WORDPRESS/mentions/">MENTIONS LÉGALES</a>
            </h4>
            <a href="/PROJET-WORDPRESS/#qui-sommes-nous">Qui sommes nous ?</a>
        </div>
    </div>
    <h3>NEWSLETTER</h3>
    <p>
        Restez informé(e)
        <br />
        Reçevez nos dernières offres et nouvelles destinations :
    </p>
    <div class="email-section">
        <input type="email" placeholder="Entrez votre email" />
    </div>
    <p>
        2024 TravelSwap - Tous droits réservés
        <br />
        Fait avec ❤️ par l'équipe TravelSwap
    </p>
</footer>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.querySelector(".menu-toggle");
    const navLinks = document.querySelector(".nav-links");

    if (!menuToggle || !navLinks) {
        console.error("Revoir la stucture HTML : élément introuvable !");
        return;
    }

    menuToggle.addEventListener("click", () => {
        console.log("Menu button clicked!");
        navLinks.classList.toggle("active");
    });
});
</script>
</body>

</html>