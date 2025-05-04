<?php

// portx panel
new \Kirki\Panel(
	'portx_panel_id',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Portx Options', 'kirki' ),
		'description' => esc_html__( 'Portx Panel Description.', 'kirki' ),
	]
);

// header logo panel sectoin
function header_logo_kirki(){
    new \Kirki\Section(
        'header_logo_section',
        [
            'title'       => esc_html__( 'Header Main Logo', 'kirki' ),
            'description' => esc_html__( 'Portx Section Description.', 'kirki' ),
            'panel'       => 'portx_panel_id',
            'priority'    => 160,
        ]
    );
    
    new \Kirki\Field\Image(
        [
            'settings'    => 'header_logo',
            'label'       => esc_html__( 'Header Logo', 'kirki' ),
            'description' => esc_html__( 'Upload Your Logo', 'kirki' ),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri().'/assets/img/logo/black-logo.png',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'request_a_quote',
            'label'    => esc_html__( 'Request A Quote Link', 'kirki' ),
            'section'  => 'header_logo_section',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );
}
header_logo_kirki();

// header search popup logo panel sectoin
function header_search_logo_kirki(){
    new \Kirki\Section(
        'header_search_logo_section',
        [
            'title'       => esc_html__( 'Header Search Panel Logo', 'kirki' ),
            'description' => esc_html__( 'Portx Section Description.', 'kirki' ),
            'panel'       => 'portx_panel_id',
            'priority'    => 160,
        ]
    );
    
    new \Kirki\Field\Image(
        [
            'settings'    => 'header_search_logo',
            'label'       => esc_html__( 'Header Search Section Logo', 'kirki' ),
            'description' => esc_html__( 'Upload Your Logo', 'kirki' ),
            'section'     => 'header_search_logo_section',
            'default'     => get_template_directory_uri().'/assets/img/logo/footer-logo.png',
        ]
    );
}
header_search_logo_kirki();

// header info panel sectoin
function header_info_kirki(){
    new \Kirki\Section(
        'header_info',
        [
            'title'       => esc_html__( 'Header Info', 'kirki' ),
            'description' => esc_html__( 'Portx Section Description.', 'kirki' ),
            'panel'       => 'portx_panel_id',
            'priority'    => 160,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'timing',
            'label'    => esc_html__( 'Opening Time', 'kirki' ),
            'section'  => 'header_info',
            'default'  => esc_html__( 'Mon - Sat 9.00 - 18.00
    ', 'kirki' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'email_address',
            'label'    => esc_html__( 'Your Email', 'kirki' ),
            'section'  => 'header_info',
            'default'  => esc_html__( 'portxinfo@gmail.com', 'kirki' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'phone_number',
            'label'    => esc_html__( 'Your Phone Number', 'kirki' ),
            'section'  => 'header_info',
            'default'  => esc_html__( '(00) 122 456 789', 'kirki' ),
            'priority' => 10,
        ]
    );
}
header_info_kirki();


// Header offcanvas social panel sectoin
function header_social_kirki(){
    new \Kirki\Section(
        'header_social_info',
        [
            'title'       => esc_html__( 'Header Offcanvas Social Info', 'kirki' ),
            'description' => esc_html__( 'Portx Section Description.', 'kirki' ),
            'panel'       => 'portx_panel_id',
            'priority'    => 160,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'social_fb',
            'label'    => esc_html__( 'Facebook', 'kirki' ),
            'section'  => 'header_social_info',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'social_tw',
            'label'    => esc_html__( 'Twitter', 'kirki' ),
            'section'  => 'header_social_info',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'social_in',
            'label'    => esc_html__( 'LinkedIn', 'kirki' ),
            'section'  => 'header_social_info',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'social_ig',
            'label'    => esc_html__( 'Instagram', 'kirki' ),
            'section'  => 'header_social_info',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );

}
header_social_kirki();

// header info panel sectoin
function header_offcanvas_info_kirki(){
    new \Kirki\Section(
        'header_offcanvas_info',
        [
            'title'       => esc_html__( 'Header Offcanvas Info', 'kirki' ),
            'description' => esc_html__( 'Portx Section Description.', 'kirki' ),
            'panel'       => 'portx_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'header_offcanvas_logo',
            'label'       => esc_html__( 'Header Offcanvas Logo', 'kirki' ),
            'description' => esc_html__( 'Upload Your Logo', 'kirki' ),
            'section'     => 'header_offcanvas_info',
            'default'     => get_template_directory_uri().'/assets/img/logo/black-logo.png',
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'getting_started',
            'label'    => esc_html__( 'Provide Your Link', 'kirki' ),
            'section'  => 'header_offcanvas_info',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'offcanvas_email_address',
            'label'    => esc_html__( 'Your Email', 'kirki' ),
            'section'  => 'header_offcanvas_info',
            'default'  => esc_html__( 'portxinfo@gmail.com', 'kirki' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'offcanvas_phone_number',
            'label'    => esc_html__( 'Your Phone Number', 'kirki' ),
            'section'  => 'header_offcanvas_info',
            'default'  => esc_html__( '(00) 122 456 789', 'kirki' ),
            'priority' => 10,
        ]
    );
}
header_offcanvas_info_kirki();

// footer copywright sectoin
function footer_copywright_kirki(){
    new \Kirki\Section(
        'footer_copywright_section',
        [
            'title'       => esc_html__( 'Footer Copywirht Url', 'kirki' ),
            'description' => esc_html__( 'Portx Section Description.', 'kirki' ),
            'panel'       => 'portx_panel_id',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'copywright_text',
            'label'    => esc_html__( 'Write Your Copywrith Text', 'kirki' ),
            'section'  => 'footer_copywright_section',
            'default'  => esc_html__( 'Copyright © 2025 Portx by Portx. All Rights Reserved', 'kirki' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'footer_banner_shape_switch',
            'label'       => esc_html__( 'Footer Banner Switch', 'kirki' ),
            'description' => esc_html__( 'Switch The Banner Shape', 'kirki' ),
            'section'     => 'footer_copywright_section',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'kirki' ),
                'off' => esc_html__( 'Disable', 'kirki' ),
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'footer_car_shape_switch',
            'label'       => esc_html__( 'Footer Switch', 'kirki' ),
            'description' => esc_html__( 'Switch The Shape', 'kirki' ),
            'section'     => 'footer_copywright_section',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'kirki' ),
                'off' => esc_html__( 'Disable', 'kirki' ),
            ],
        ]
    );
}
footer_copywright_kirki();