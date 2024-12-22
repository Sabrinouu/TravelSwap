<?php wp_footer(); ?>
<footer>
    <h2>TravelSwap</h2>
    <h3>NAVIGATION</h3>
    <div class="footer-grid">
        <div>
            <a href="#">Accueil</a>
            <a href="#">Qui sommes-nous ?</a>
            <a href="#">Destinations</a>
            <a href="#">Comment ça marche ?</a>
            <a href="#">Annonces</a>
            <a href="#">Témoignages</a>
        </div>
        <div>
            <a href="#">Espagne</a>
            <a href="#">Norvège</a>
            <a href="#">Maroc</a>
            <a href="#">Vietnam</a>
        </div>
        <div>
            <h4>SUIS-NOUS</h4>
            <div class="social-icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
            </div>
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