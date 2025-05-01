<?php

function portx_header_logo(){

    $header_logo = get_theme_mod('header_logo', get_template_directory_uri() . '/assets/img/logo/black-logo.png');

    ?>
    <a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url( $header_logo); ?>" alt=""></a>
    <?php
}

function portx_search_header_logo(){

    $header_search_logo = get_theme_mod('header_search_logo', get_template_directory_uri() . '/assets/img/logo/footer-logo.png');

    ?>
    <a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url( $header_search_logo); ?>" alt=""></a>
    <?php
}
