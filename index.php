<?php
    get_header();
?>
<!-- blog area start -->
<div class="blog-area-2 blog-padding pt-115 pb-120">
   <div class="container">
      <div class="row">
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <div class="col-xl-4 col-md-6 col-sm-6">
               <?php get_template_part('template-parts/content', get_post_format()); ?>
            </div>

         <?php endwhile; ?>
         
         <div class="col-xl-12">
            <div class="tp-pagination text-center">
               <?php portx_pagination(); ?>
            </div>
         </div>
         
         <?php else : ?> 
            <div class="col-xl-12">
               <p>Content Not Found</p>
            </div>
         <?php endif; ?>
      </div>
   </div>
</div>
<!-- blog area end -->
<?php
    get_footer();
?>