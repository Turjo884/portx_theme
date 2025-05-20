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

// portx_pagination
function portx_pagination(){
    $pages = paginate_links( array( 
        'type' => 'array',
        'prev_text'    => __('<i class="fa-sharp fa-regular fa-arrow-left"></i>','portx'),
        'next_text'    => __('<i class="fa-sharp fa-regular fa-arrow-right"></i>','portx'),
    ) );
        if( $pages ) {
        echo '<nav><ul>';
        foreach ( $pages as $page ) {
            echo "<li>$page</li>";
        }
        echo '</ul></nav>';
    }
}


// portx_blog_tags
function portx_tags(){
	$post_tags = get_the_tags();
    if ($post_tags) {
        foreach ($post_tags as $tag) {
            ?>
            <a href="<?php echo get_tag_link($tag); ?>"><?php echo esc_html( $tag->name); ?></a>
            <?php
        }
    } else {
        ?>
        <i><?php echo esc_html__('No tags found','portx'); ?></i>
        <?php
    }
}

/**
* Sanitize SVG markup for front-end display.
*
* @param  string $svg SVG markup to sanitize.
* @return string 	  Sanitized markup.
*/
/**
* Sanitize SVG markup for front-end display.
*
* @param  string $svg SVG markup to sanitize.
* @return string 	  Sanitized markup.
*/
function portx_kses( $allow_tags = '' ) {
	$allowed_html = [
        'svg' => array(
            'class' => true,
            'aria-hidden' => true,
            'aria-labelledby' => true,
            'role' => true,
            'xmlns' => true,
            'width' => true,
            'height' => true,
            'viewbox' => true, // <= Must be lower case!
        ),
        'path'  => array( 
            'd' => true, 
            'fill' => true,  
            'stroke' => true,  
            'stroke-width' => true,  
            'stroke-linecap' => true,  
            'stroke-linejoin' => true,  
            'opacity' => true,  
        ),
		'a' => [
			'class'    => [],
			'href'    => [],
			'title'    => [],
			'target'    => [],
			'rel'    => [],
		],
         'b' => [],
         'blockquote'  =>  [
            'cite' => [],
         ],
         'cite'                      => [
            'title' => [],
         ],
         'code'                      => [],
         'del'                    => [
            'datetime'   => [],
            'title'      => [],
        ],
         'dd'                     => [],
         'div'                    => [
            'class'   => [],
            'title'   => [],
            'style'   => [],
         ],
         'dl'                     => [],
         'dt'                     => [],
         'em'                     => [],
         'h1'                     => [],
         'h2'                     => [],
         'h3'                     => [],
         'h4'                     => [],
         'h5'                     => [],
         'h6'                     => [],
         'i'                         => [
            'class' => [],
         ],
         'img'                    => [
            'alt'  => [],
            'class'   => [],
            'height' => [],
            'src'  => [],
            'width'   => [],
         ],
         'li'                     => array(
            'class' => array(),
         ),
         'ol'                     => array(
            'class' => array(),
         ),
         'p'                         => array(
            'class' => array(),
         ),
         'q'                         => array(
            'cite'    => array(),
            'title'   => array(),
         ),
         'span'                      => array(
            'class'   => array(),
            'title'   => array(),
            'style'   => array(),
         ),
         'iframe'                 => array(
            'width'         => array(),
            'height'     => array(),
            'scrolling'     => array(),
            'frameborder'   => array(),
            'allow'         => array(),
            'src'        => array(),
         ),
         'strike'                 => array(),
         'br'                     => array(),
         'strong'                 => array(),
	];

	return wp_kses( $allow_tags, $allowed_html );
}


