<!doctype html>
<html class="no-js" <?php language_attributes();?>>

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <!-- <title>Portx - Logistics and Transportation HTML Template</title> -->
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

   <!-- CSS here -->
   <?php wp_head(); ?>
</head>

<body>
   <!-- back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
               stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   <!-- back to top end -->
   <!-- preloader to start -->
   <div id="loading">
      <div id="loading-center">
         <div id="loading-center-absolute">
            <div class="object" id="object_four"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_one"></div>
         </div>
      </div>
   </div>
   <!-- preloader to end -->
   <!-- Start Header Template Calling Part -->
   <?php echo get_template_part('template-parts/header/header-1')?>
   <!-- End Header Template Calling Part -->

   
   <?php portx_breadcrumb(); ?>