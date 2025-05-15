<?php

function portx_breadcrumb(){
    global $post;  
    $breadcrumb_class = '';
    $breadcrumb_show = 1;

    if ( is_front_page() && is_home() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','portx'));
        $breadcrumb_class = 'home_front_page';
    }
    elseif ( is_front_page() ) {
        // Home page (not blog) — don't show breadcrumb
        return;
    }
    elseif ( is_home() ) {
        if ( get_option( 'page_for_posts' ) ) {
            $title = get_the_title( get_option( 'page_for_posts') );
        }
    }
    elseif ( is_single() && 'post' == get_post_type() ) {
        $title = get_the_title();
    } 
    elseif ( is_single() && 'service' == get_post_type() ) {
        $title = get_the_title();
    } 
    elseif ( is_single() && 'product' == get_post_type() ) {
        $title = get_theme_mod( 'breadcrumb_product_details', __( 'Shop', 'portx' ) );
    } 
    elseif ( is_search() ) {
        $title = esc_html__( 'Search Results for : ', 'portx' ) . get_search_query();
    } 
    elseif ( is_404() ) {
        $title = esc_html__( 'Page not Found', 'portx' );
    } 
    elseif ( is_archive() ) {
        $title = get_the_archive_title();
    } 
    else {
        $title = get_the_title();
    }

    $_id = get_the_ID();

    if ( is_single() && 'product' == get_post_type() ) { 
        $_id = $post->ID;
    } 
    elseif ( function_exists("is_shop") AND is_shop()  ) { 
        $_id = wc_get_page_id('shop');
    } 
    elseif ( is_home() && get_option( 'page_for_posts' ) ) {
        $_id = get_option( 'page_for_posts' );
    }

    $breadcrumb_bg_image = get_theme_mod('breadcrumb_bg_image');
    $breadcrumb_switch = function_exists('get_field') ? get_field('breacrumb_on_off', $_id) : null;

    ?>

    <!--  breadcrumb-area  start -->
    <div class="wrapper-box p-relative ">
        <div class="breadcrumb__bg breadcrumb__bg__overlay pt-130 pb-130 "
            data-background="<?php echo esc_url($breadcrumb_bg_image); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1 ">
                            <div class="breadcrumb__list mb-10">
                                <h3 class="breadcrumb__title page-title mb-15"><?php echo wp_kses_post($title); ?></h3>
                                <div class="breadcrumb__item">
                                    <span><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__('home', 'portx'); ?></a></span>
                                    <span class="dvdr"> / </span>
                                    <span class="sub-page-black"><?php echo wp_kses_post($title); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  breadcrumb-area  end -->

    <?php
}
// add_action( 'portx_header_before' , 'portx_breadcrumb' );