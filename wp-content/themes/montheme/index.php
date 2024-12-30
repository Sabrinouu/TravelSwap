<?php get_header(); ?>

<div class="hero-section"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/img_12.jpg');">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>TravelSwap</h1>
        <p>Vivez le monde à travers l'entraide</p>
        <a href="/TravelSwap/nos-voyageurs/" class="btn-discover">VOYAGEURS</a>
        <a href="/TravelSwap/nos-hotes/" class="btn-discover">HOTES</a>

    </div>
</div>

<section class="about-section" id="qui-sommes-nous">
    <h2>QUI SOMMES-NOUS ?</h2>
    <p>
        Nous sommes TravelSwap
        <br />
        Une plateforme d'hébergement qui permet aux voyageurs d'échanger leurs
        compétences contre un logement gratuit.
        <br />
        Cette expérience favorise des rencontres authentiques, des découvertes
        culturelles et des liens durables, offrant ainsi une nouvelle manière de
        voyager !
    </p>
    <div class="about-grid">
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_8.jpg" alt="Image 1">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_7.jpg" alt="Image 2">
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_3.jpg" alt="Image 3">
        </div>
    </div>
</section>

<section class="destinations-section">
    <h2>DESTINATIONS DISPONIBLES</h2>
    <div class="destinations-grid">
        <div>
            <h3>Espagne</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_6.jpg" alt="Destination 1">
            <a href="/hotes/sergio-silens/" class="btn-discover">VOIR PLUS</a>
        </div>
        <div>
            <h3>Maroc</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_14.jpg" alt="Destination 2">
            <a href="/hotes/mohammed-belghrid/" class="btn-discover">VOIR PLUS</a>
        </div>
        <div>
            <h3>Norvège</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_15.jpg" alt="Destination 3">
            <a href="/hotes/john-hansen/" class="btn-discover">VOIR PLUS</a>
        </div>
        <div>
            <h3>Vietnam</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_4.jpg" alt="Destination 4">
            <a href="/hotes/binh-hoang/" class="btn-discover">VOIR PLUS</a>
        </div>
    </div>
</section>
<section class="ready-section">
    <h2>Prêt(e) à découvrir le monde autrement ?</h2>
    <p class="slogan">
        Faites le premier pas et rejoignez TravelSwap, où chaque rencontre est
        une nouvelle aventure !
    </p>
    <div class="ready-grid">
        <div>
            <h3>Profil clé</h3>
            <i class="fa-regular fa-user"></i>
            <p class="slogan">Votre profil, votre passeport !</p>
            <p>
                Décrivez vos compétences et vos disponibilités pour attirer les
                hôtes.
            </p>
        </div>
        <div>
            <h3>Explorez partout</h3>
            <i class="fa-solid fa-magnifying-glass"></i>
            <p class="slogan">Trouvez votre aventure !</p>
            <p>Découvrez des hôtes et des lieux inspirants</p>
        </div>
        <div>
            <h3>Planifiez tout</h3>
            <i class="fa-regular fa-comments"></i>
            <p class="slogan">Trouvez l'offre idéale ?</p>
            <p>Lancez la discussion et organisez votre séjour !</p>
        </div>
    </div>
</section>




<?php get_footer(); ?>