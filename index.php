<?php
    get_header();
?>
   <!-- blog area start -->
   <div class="blog-area-2 blog-padding pt-115 pb-120">
      <div class="container">
         <div class="row">

            <div class="col-xl-4 col-md-6 col-sm-6">
               <!-- Start While Loop -->
               <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                  <?php get_template_part('template-parts/content', get_post_format()); ?>

               <?php endwhile; else : ?> 

                  <p>Content Not Found</p>

               <?php endif; ?>
               <!-- End the while loop -->
            </div>

            <div class="col-xl-12">
               <div class="tp-pagination text-center">
                  <nav>
                     <ul>
                        <li>
                           <a href="#">1</a>
                        </li>
                        <li>
                           <span class="current">2</span>
                        </li>
                        <li>
                           <a href="#">3</a>
                        </li>
                        <li>
                           <a href="#">
                              <i class="fa-sharp fa-regular fa-arrow-right"></i>
                           </a>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- blog area end -->

<?php
    get_footer();
?>