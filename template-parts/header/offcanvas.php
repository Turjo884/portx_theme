<?php
    $offcanvas_email_address = get_theme_mod('offcanvas_email_address' , esc_html__('portxinfo@gmail.com' , 'portx'));
    $offcanvas_phone_number = get_theme_mod('offcanvas_phone_number' , esc_html__('(00) 122 456 789' , 'portx'));
    $getting_started = get_theme_mod('getting_started' , esc_html__('#' , 'portx'));

   // footer 
   $social_fb = get_theme_mod('social_fb' , esc_html__('#' , 'portx'));
   $social_ig = get_theme_mod('social_ig' , esc_html__('#' , 'portx'));
   $social_in = get_theme_mod('social_in' , esc_html__('#' , 'portx'));
   $social_tw = get_theme_mod('social_tw' , esc_html__('#' , 'portx'));

?>
   
   <!--  tp-offcanvus-area-start  -->
   <div class="tpoffcanvas-area">
      <div class="tpoffcanvas">
         <div class="tpoffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
         </div>
         <div class="tpoffcanvas__logo">
            <?php echo portx_offcanvas_logo(); ?>
         </div>
         <div class="tp-main-menu-mobile"></div>
         <div class="offcanvas__btn mb-20">

         <?php if(!empty($getting_started)) : ?>
            <a href="<?php echo esc_url($getting_started); ?>" class="tp-btn w-100"><?php echo esc_html__('Getting Started','portx');?></a>
         <?php endif; ?>

         </div>
         <div class="offcanvas__contact mb-40">

            <?php if(!empty($offcanvas_phone_number)) : ?>
               <p class="offcanvas__contact-call"><a href="tel:<?php echo esc_attr($offcanvas_phone_number, '');?>"><?php echo esc_html($offcanvas_phone_number, '');?></a></p>
            <?php endif; ?>

            <?php if(!empty($offcanvas_email_address)) : ?>
               <p class="offcanvas__contact-mail"><a href="mailto:<?php echo esc_attr($offcanvas_email_address, '');?>"><?php echo esc_html($offcanvas_email_address, '');?></a></p>
            <?php endif; ?>

            </div>
         <div class="offcanvas__social">
            <a href="<?php echo esc_url($social_fb); ?>"><i class="fab fa-facebook-f"></i></a>
            <a href="<?php echo esc_url($social_tw); ?>"><i class="fab fa-twitter"></i></a>
            <a href="<?php echo esc_url($social_in); ?>"><i class="fab fa-linkedin"></i></a>
            <a href="<?php echo esc_url($social_ig); ?>"><i class="fab fa-instagram"></i></a>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!--  tp-offcanvus-area end -->