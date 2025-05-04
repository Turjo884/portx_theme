<?php

$copywright_text = get_theme_mod('copywright_text' , esc_html__('Copyright © 2025 Portx by Portx. All Rights Reserved' , 'portx'));
$footer_banner_shape_switch = get_theme_mod('footer_banner_shape_switch' , true);
$footer_car_shape_switch = get_theme_mod('footer_car_shape_switch' , true);
?>
   
   <!-- footer area start -->
   <footer>
      <div class="footer-area theme-background pt-120 pb-80 p-relative fix">

         <?php if(!empty($footer_banner_shape_switch)): ?>
         <div class="tp-footer__right-bg wow slideInLeft   ">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/footer/footer-left-trns.png" alt="">
         </div>
         <?php endif; ?>

         <?php if(!empty($footer_car_shape_switch)): ?>
         <div class="tp-footer__car">
            <img class=" tp-footer__shape-1 movingX" src="<?php echo get_template_directory_uri();?>/assets/img/footer/footer-car.png" alt="">
         </div>
         <?php endif; ?>

         <?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') ||is_active_sidebar('footer-4')): ?>
         <div class="container">
            <div class="row">

               <?php if(is_active_sidebar('footer-1')): ?>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <?php dynamic_sidebar('footer-1'); ?>
               </div>
               <?php endif; ?>

               <?php if(is_active_sidebar('footer-2')): ?>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <?php dynamic_sidebar('footer-2'); ?>
               </div>
               <?php endif; ?>

               <?php if(is_active_sidebar('footer-3')): ?>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <?php dynamic_sidebar('footer-3'); ?>
               </div>
               <?php endif; ?>

               <?php if(is_active_sidebar('footer-4')): ?>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <?php dynamic_sidebar('footer-4'); ?>
               </div>
               <?php endif; ?>

            </div>
         </div>
         <?php endif; ?>

      </div>
      <div class="tp-footer__bottom  pt-25 pb-25">
         <div class="container">
            <div class="row">

            <?php if(!empty($copywright_text)) : ?>
               <div class="col-xxl-6 col-lg-6 col-md-7  col-12">
                  <div class="tp-footer__copyright text-md-start text-center">
                     <p><?php echo esc_html($copywright_text, '');?>
                  </div>
               </div>
            <?php endif; ?>

               <div class="col-xxl-6 col-lg-6 col-md-5  col-12">
                  <div class="tp-footer__menu text-md-end text-center">
                     <?php portx_footer_menu(); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- footer area end -->