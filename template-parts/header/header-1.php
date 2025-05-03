<?php

    $opening_time = get_theme_mod('timing' , esc_html__('Mon - Sat 9.00 - 18.00' , 'portx'));
    $email_address = get_theme_mod('email_address' , esc_html__('portxinfo@gmail.com' , 'portx'));
    $phone_number = get_theme_mod('phone_number' , esc_html__('(00) 122 456 789' , 'portx'));

    $request_a_quote = get_theme_mod('request_a_quote' , esc_html__('#' , 'portx'));

?>
   
   <!-- header area start -->
   <header>
      <div class="main-header d-none d-xl-block">
         <div class="tp-header__top tp-header__he pt-20 pb-20 p-relative">
            <div class="tp-header-wrap">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xl-4">
                        <div class="main-logo ">
                            <?php echo portx_header_logo(); ?>
                        </div>
                     </div>
                     <div class="col-xl-8">
                        <div class="tp-header">
                           <div class="tp-header__right  d-flex justify-content-end">

                              <?php if(!empty($opening_time)) : ?>
                              <div class="tp-header__contact mr-30">
                                 <div class="tp-header__contact d-flex align-items-center">
                                    <span class="tp-header__icon"><i class="flaticon-clock"></i></span>
                                    <div class="tp-header__icon-info ml-20">
                                       <label><?php echo esc_html__('Sunday Closed','portx');?></label>
                                       <span><?php echo esc_html($opening_time, '');?></span>
                                    </div>
                                 </div>
                              </div>
                              <?php endif; ?>

                              <?php if(!empty($email_address)) : ?>
                              <div class="tp-header__contact mr-30">
                                 <div class="tp-header__contact d-flex align-items-center">
                                    <span class="tp-header__icon"><i class="flaticon-envelope"></i></span>
                                    <div class="tp-header__icon-info ml-20">
                                       <label><?php echo esc_html__('Email','portx');?></label>
                                       <span><a href="mailto:<?php echo esc_attr($email_address, '');?>"><?php echo esc_html($email_address, '');?></a></span>
                                    </div>
                                 </div>
                              </div>
                              <?php endif; ?>

                              <?php if(!empty($phone_number)) : ?>
                              <div class="tp-header__contact">
                                 <div class="tp-header__contact d-flex align-items-center">
                                    <span class="tp-header__icon"><i class="flaticon-telephone"></i></span>
                                    <div class="tp-header__icon-info ml-20">
                                       <label><?php echo esc_html__('Call us','portx');?></label>
                                       <span><a href="tel:<?php echo esc_attr($phone_number, '');?>"><?php echo esc_html($phone_number, '');?></a></span>
                                    </div>
                                 </div>
                              </div>
                              <?php endif; ?>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tp-header">
            <div id="header-sticky" class="header-bottom black-bg d-flex align-items-center">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xl-8">
                        <div class="tp-header__main-menu main-menu">
                           <nav class="tp-main-menu-content">
                              <?php portx_main_menu(); ?>
                           </nav>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="tp-header__right text-end d-flex align-items-center justify-content-end">
                           <div class="search-img f-left mr-30">
                              <button class="search-open-btn">
                                 <i class="flaticon-loupe"></i>
                              </button>
                           </div>

                           <?php if(!empty($request_a_quote)) : ?>
                           <div class="tp-header__btn">
                              <a class="tp-btn" href="<?php echo esc_url($request_a_quote); ?>"><?php echo esc_html__('REQUEST A QUOTE','portx');?></a>
                           </div>
                           <?php endif; ?>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="mobile-header d-xl-none pt-20 pb-20">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-6">
                  <div class="main-logo ">
                     <a href="index.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo/black-logo.png" alt=""></a>
                  </div>
               </div>
               <div class="col-6">
                  <div class="mobile__menu d-flex align-items-center justify-content-end">
                     <button class="search-open-btn mr-30 d-none d-sm-block">
                        <i class="flaticon-loupe"></i>
                     </button>
                     <a class="tp-menu-bar" href="javascript:void(0)"><i class="fa-solid fa-bars"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header area end -->

   <?php get_template_part('template-parts/header/header-search'); ?>
   <?php get_template_part('template-parts/header/offcanvas'); ?>
