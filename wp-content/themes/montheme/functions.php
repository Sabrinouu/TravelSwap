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



//add_filter('show_admin_bar', '__return_false');