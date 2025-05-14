<?php
    get_header();
?>
<!-- blog area start -->
<div class="blog-area-2 blog-padding pt-115 pb-120">
   <div class="container">
      <div class="row justify-content-center">
            <div class="col-xl-4 col-md-6 col-sm-6">
               <div class="error-page text-center">
                  <h2>404 Error</h2>
                  <p>Opps! conent not found</p>
                  <button class="tp-contact__submit-btn thm-btn btn-style-two hvr-light" type="button" onclick="window.location.href='<?php echo esc_url(home_url('/')); ?>'">
                     <span class="btn-title">BACK TO HOME</span>
                  </button>

               </div>
            </div>
      </div>
   </div>
</div>
<!-- blog area end -->
<?php
    get_footer();
?>