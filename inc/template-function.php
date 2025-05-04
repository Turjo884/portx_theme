<?php

// portx menu
function portx_main_menu(){
    wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'container' => '',
        'menu_class' => 'nav-menu',
        'fallback_cb' => 'Portx_Walker_Nav_Menu::fallback',
        'walker' => new Portx_Walker_Nav_Menu,
      ));
}

// portx footer menu
function portx_footer_menu(){
    wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container' => '',
        'menu_class' => 'nav-menu',
        'fallback_cb' => 'Portx_Walker_Nav_Menu::fallback',
        'walker' => new Portx_Walker_Nav_Menu,
      ));
}

// portx header logo
function portx_header_logo(){

    $header_logo = get_theme_mod('header_logo', get_template_directory_uri() . '/assets/img/logo/black-logo.png');

    ?>
    <a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url( $header_logo); ?>" alt=""></a>
    <?php
}

// portx search header logo
function portx_search_header_logo(){

    $header_search_logo = get_theme_mod('header_search_logo', get_template_directory_uri() . '/assets/img/logo/footer-logo.png');

    ?>
    <a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url( $header_search_logo); ?>" alt=""></a>
    <?php
}

// portx offcanvas logo
function portx_offcanvas_logo(){

    $header_offcanvas_logo = get_theme_mod('header_offcanvas_logo', get_template_directory_uri() . '/assets/img/logo/black-logo.png');

    ?>
    <a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url( $header_offcanvas_logo); ?>" alt=""></a>
    <?php
}


