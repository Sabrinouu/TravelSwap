<?php 
add_theme_support('title-tag'); // support de mon title tag
add_theme_support('post-thumbnails'); // support des images a la une
// Créer les Custom Post Types : Voyageurs et Hôtes
function create_custom_posttypes() {
    // Voyageurs
    register_post_type('voyageurs', [
        'labels' => [
            'name' => __('Voyageurs'),
            'singular_name' => __('Voyageur'),
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'voyageurs'],
        'show_in_rest' => true,
    ]);

    // Hôtes
    register_post_type('hotes', [
        'labels' => [
            'name' => __('Hôtes'),
            'singular_name' => __('Hôte'),
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'hotes'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'create_custom_posttypes');

// === Ajouter les Meta Boxes pour Voyageurs et Hôtes ===
function add_custom_meta_boxes() {
    // Voyageurs
    add_meta_box(
        'voyageurs_meta_box',
        'Détails du Voyageur',
        'show_voyageurs_meta_box',
        'voyageurs',
        'normal',
        'high'
    );

    // Hôtes
    add_meta_box(
        'hotes_meta_box',
        'Détails de l’Hôte',
        'show_hotes_meta_box',
        'hotes',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_custom_meta_boxes');

// === Affichage des champs pour Voyageurs ===
function show_voyageurs_meta_box($post) {
    $fields = [
        'first_name' => 'Prénom',
        'last_name' => 'Nom',
        'pays_souhaite' => 'Pays souhaité',
        'type_help' => 'Type d’aide proposé',
        'age' => 'Âge',
        'img_path' => 'URL de la photo de profil',
        'note' => 'Note ou description',
        'email' => 'Email',
    ];

    foreach ($fields as $field => $label) {
        $value = get_post_meta($post->ID, $field, true);
        echo '<label for="' . $field . '">' . $label . ':</label><br>';
        echo '<input type="text" id="' . $field . '" name="' . $field . '" value="' . esc_attr($value) . '" style="width:100%; margin-bottom:10px;"><br>';
    }
}

// === Affichage des champs pour Hôtes ===
function show_hotes_meta_box($post) {
    $fields = [
        'first_name' => 'Prénom',
        'last_name' => 'Nom',
        'img_path' => 'URL de la photo de profil',
        'country' => 'Pays',
        'city' => 'Ville',
        'type_help' => 'Type d’aide proposé',
        'age' => 'Âge',
        'image_1' => 'Image 1',
        'image_2' => 'Image 2',
        'image_3' => 'Image 3',
        'icon' => 'Icône',
        'note' => 'Note ou description',
        'email' => 'Email',
    ];

    foreach ($fields as $field => $label) {
        $value = get_post_meta($post->ID, $field, true);
        echo '<label for="' . $field . '">' . $label . ':</label><br>';
        echo '<input type="text" id="' . $field . '" name="' . $field . '" value="' . esc_attr($value) . '" style="width:100%; margin-bottom:10px;"><br>';
    }
}

// === Sauvegarder les données des Meta Boxes ===
function save_custom_meta_fields($post_id) {
    $fields = [
        'first_name', 'last_name', 'img_path', 
        'pays_souhaite', 'country', 'city',
        'type_help', 'age', 'image_1', 'image_2', 
        'image_3', 'icon', 'note', 'email',
    ];

    foreach ($fields as $field) {
        if (array_key_exists($field, $_POST)) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post', 'save_custom_meta_fields');

// === Ajouter les scripts et styles nécessaires (optionnel, si besoin) ===
function enqueue_custom_scripts() {
    // Ajouter des styles ou scripts si nécessaire
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


add_filter('template_include', function($template) {
    if (is_page('voyageurs')) { // Slug exact de la page
        return get_template_directory() . '/voyageurs.php';
    }
    return $template;
});


add_action('wp_head', function() {
    global $template;
    echo "<!-- Template utilisé : " . basename($template) . " -->";
});

add_action('admin_post_nopriv_register_voyageur', 'handle_register_voyageur');
add_action('admin_post_register_voyageur', 'handle_register_voyageur');

function handle_register_voyageur() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupération et validation des données
        $first_name = sanitize_text_field($_POST['first_name']);
        $last_name = sanitize_text_field($_POST['last_name']);
        $email = sanitize_email($_POST['email']);
        $birth_date = sanitize_text_field($_POST['birth_date']);
        $phone = sanitize_text_field($_POST['phone']);
        $country = sanitize_text_field($_POST['country']);
        $languages = sanitize_text_field($_POST['languages']);
        $id_card = sanitize_text_field($_POST['id_card']);
        $about = sanitize_textarea_field($_POST['about']);

        // Traitement du fichier (photo de profil)
        if (!empty($_FILES['profile_picture']['name'])) {
            $upload = wp_handle_upload($_FILES['profile_picture'], ['test_form' => false]);
            if (isset($upload['url'])) {
                $profile_picture_url = $upload['url'];
            }
        }

        // Enregistrement dans la base de données (ou création de CPT)
        $post_id = wp_insert_post([
            'post_type' => 'voyageurs',
            'post_title' => $first_name . ' ' . $last_name,
            'post_content' => $about,
            'post_status' => 'pending', // En attente de validation par l'admin
        ]);

        if ($post_id) {
            update_post_meta($post_id, 'first_name', $first_name);
            update_post_meta($post_id, 'last_name', $last_name);
            update_post_meta($post_id, 'email', $email);
            update_post_meta($post_id, 'birth_date', $birth_date);
            update_post_meta($post_id, 'phone', $phone);
            update_post_meta($post_id, 'country', $country);
            update_post_meta($post_id, 'languages', $languages);
            update_post_meta($post_id, 'id_card', $id_card);
            if (!empty($profile_picture_url)) {
                update_post_meta($post_id, 'profile_picture', $profile_picture_url);
            }
        }

        // Redirection après soumission
        wp_redirect(home_url('/merci-inscription'));
        exit;
    }
}


add_action('admin_post_nopriv_register_hote', 'handle_register_hote');
add_action('admin_post_register_hote', 'handle_register_hote');

function handle_register_hote() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupérer et valider les données
        $first_name = sanitize_text_field($_POST['first_name']);
        $last_name = sanitize_text_field($_POST['last_name']);
        $email = sanitize_email($_POST['email']);
        $phone = sanitize_text_field($_POST['phone']);
        $country = sanitize_text_field($_POST['country']);
        $city = sanitize_text_field($_POST['city']);
        $type_help = sanitize_text_field($_POST['type_help']);
        $about = sanitize_textarea_field($_POST['about']);

        // Gestion des fichiers (photos)
        $images = [];
        for ($i = 1; $i <= 3; $i++) {
            if (!empty($_FILES["image_$i"]['name'])) {
                $upload = wp_handle_upload($_FILES["image_$i"], ['test_form' => false]);
                if (isset($upload['url'])) {
                    $images[] = $upload['url'];
                }
            }
        }

        // Enregistrement dans la base de données ou CPT
        $post_id = wp_insert_post([
            'post_type' => 'hotes',
            'post_title' => $first_name . ' ' . $last_name,
            'post_content' => $about,
            'post_status' => 'pending',
        ]);

        if ($post_id) {
            update_post_meta($post_id, 'first_name', $first_name);
            update_post_meta($post_id, 'last_name', $last_name);
            update_post_meta($post_id, 'email', $email);
            update_post_meta($post_id, 'phone', $phone);
            update_post_meta($post_id, 'country', $country);
            update_post_meta($post_id, 'city', $city);
            update_post_meta($post_id, 'type_help', $type_help);
            foreach ($images as $index => $image) {
                update_post_meta($post_id, "image_$index", $image);
            }
        }

        // Redirection après soumission
        wp_redirect(home_url('/merci-inscription-hote'));
        exit;
    }
}

function get_current_language() {
    // Détermine la langue actuelle via l'URL (paramètre 'lang') ou par défaut.
    $current_language = isset($_GET['lang']) && in_array($_GET['lang'], ['fr', 'en']) ? $_GET['lang'] : 'fr';
    return $current_language;
}

// Utiliser une constante globale pour la langue actuelle
define('CURRENT_LANGUAGE', get_current_language());



add_filter('show_admin_bar', '__return_false');