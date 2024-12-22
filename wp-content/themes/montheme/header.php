<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header_styles.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/index_styles.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer_styles.css">
</head>

<body style="font-family: 'Baskervville', serif">
    <header>
        <nav class="my-navbar">
            <div class="my-navbar-left">
                <ul class="nav-left-links">
                    <li>
                        <div>
                            <span>MENU
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="dropdown">
                            <a href="<?php echo home_url('/'); ?>">Menu 1</a>
                            <a href="<?php echo home_url('/'); ?>">Menu 2</a>
                            <a href="<?php echo home_url('/'); ?>">Menu 3</a>
                        </div>
                    </li>
                </ul>
                <button class="menu-toggle" aria-label="Toggle navigation" style="margin-left: 40px">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="my-navbar-center">
                <ul class="nav-links">
                    <li><a href="<?php echo home_url('/'); ?>">TRAVELSWAP</a></li>
                    <li><a href="<?php echo home_url('/'); ?>">CONTACT</a></li>
                    <li><a href="<?php echo home_url('/'); ?>">SÉCURITÉ</a></li>
                </ul>
            </div>
            <div class="my-navbar-right">
                <ul class="nav-right-links">
                    <li>
                        <a href="<?php echo home_url('/'); ?>">FRANCAIS</a>
                    </li>
                    <li>
                        <a href="#?">
                            <i class="fas fa-user-circle"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>