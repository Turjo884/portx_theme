<?php
    get_header();

    $no_sidebar = is_active_sidebar('blog-sidebar') ? '' : 'justify-content-center';

   $blog_post_autor_name = get_theme_mod('blog_post_autor_name' , esc_html__('About Harry Newman' , 'portx'));

   $autor_description = get_theme_mod('autor_description' , esc_html__('Supported substance consolidates parts of web promoting and substance showcasing. It includes making' , 'portx'));

   $author_image = get_theme_mod('author_image', get_template_directory_uri() . '/assets/img/blog-detials/img.png');


   // social section
      $social_fb = get_theme_mod('social_fb' , esc_html__('#' , 'portx'));
      $social_ig = get_theme_mod('social_ig' , esc_html__('#' , 'portx'));
      $social_in = get_theme_mod('social_in' , esc_html__('#' , 'portx'));
      $social_tw = get_theme_mod('social_tw' , esc_html__('#' , 'portx'));

?>

   <!-- postbox area start -->
   <section class="postbox__area pt-120 pb-120 blablablabla">
      <div class="container">
         <div class="row <?php echo esc_attr($no_sidebar); ?>">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12">
               <div class="postbox__wrapper pr-20">
                  <article id="post-<?php the_ID(); ?> <?php post_class("tpblog-2 wow fadeInUp mb-30"); ?> class="postbox__item format-image mb-50 transition-3">
                     <div class="postbox__thumb m-img p-relative">
                        <a href="blog-details.html">
                           <?php the_post_thumbnail(); ?>
                           <div class="postbox__meta-date ">
                              <span><a href="#"><?php echo get_the_date(); ?></a></span>
                           </div>
                        </a>
                     </div>
                     <div class="postbox__content">
                        <div class="postbox__meta d-flex justify-content-between">
                           <div class="postbox__info">
                             <?php get_template_part('template-parts/blog/blog-meta'); ?>
                           </div>
                        </div>
                        <h3 class="postbox__title">
                           <?php the_title(); ?>
                          <!-- Your business absolutely needs daily -->
                        </h3>
                        <div class="postbox__text">
                           <?php the_content(); ?>
                              includes making substance, for example, a blog entry or video and paying for its
                              consideration on a site that routinely distributes comparative substance. A piece of
                              supported substance will seem to be like the remainder of the substance on the site yet
                              will incorporate some sign that it’s supported. With execution showcasing, you would pay a
                              pre-decided aps on your supported article navigates to your site from the article.</p>
                        </div>

                        <div class="postbox__details-share-wrapper">
                           <div class="row">
                              <div class="col-xl-6 col-lg-12  col-md-12 col-12">
                                 <div class="postbox__details-tag tagcloud">
                                    <span><?php echo esc_html__('Tag:','portx'); ?></span>
                                    <?php portx_tags(); ?>
                                 </div>
                              </div>
                              <div class="col-xl-6 col-lg-12 col-md-12 col-12">
                                 <div class="postbox__details-share text-end">
                                    <span><?php echo esc_html__('Share','portx'); ?></span>
                                       <a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a>

                                       <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                                       <i class="fab fa-facebook-f"></i></a>

                                       <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>

                                       <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank">
                                       <i class="fab fa-twitter"></i></a>

                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="postbox-details-author d-sm-flex align-items-start">

                        <?php if(!empty($author_image)) : ?>
                           <div class="postbox-details-author-thumb">
                              <a href="#">
                                 <img src="<?php echo esc_url($author_image); ?>" alt="Author Imag">
                              </a>
                           </div>
                        <?php endif; ?>
                           <div class="postbox-details-author-content">

                           <?php if(!empty($blog_post_autor_name)) : ?>
                              <h5 class="postbox-details-author-title">
                                 <a href="#"><?php echo esc_html($blog_post_autor_name, '');?></a>
                              </h5>
                           <?php endif; ?>
               
                           <?php if(!empty($autor_description)) : ?>
                              <p><?php echo esc_html($autor_description, '');?></p>
                           <?php endif; ?>

                              <div class="postbox-details-author-social">

                               <?php if(!empty($social_fb)) : ?>
                                 <a href="<?php echo esc_url($social_fb); ?>"><i class="fa-brands fa-facebook-f"></i></a>
                                 <?php endif; ?>

                                  <?php if(!empty($social_tw)) : ?>
                                 <a href="<?php echo esc_url($social_tw); ?>"><i class="fa-brands fa-twitter"></i></a>
                                 <?php endif; ?>

                                  <?php if(!empty($social_in)) : ?>
                                 <a href="<?php echo esc_url($social_in); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
                                 <?php endif; ?>

                                  <?php if(!empty($social_ig)) : ?>
                                 <a href="<?php echo esc_url($social_ig); ?>"><i class="fa-brands fa-vimeo-v"></i></a>
                                 <?php endif; ?>
                              </div>
                           </div>
                        </div>
                     </div>
                  </article>
                  <div class="postbox-details-comment-wrapper">

                  </div>
                  <div class="postbox__comment-form">
                     <h3 class="postbox__comment-form-title"><?php echo esc_html__('Leave Your Comment', 'portx'); ?></h3>
                        <?php if(comments_open() || get_comments_number() ) : comments_template(); endif?>
                  </div>
               </div>
            </div>

            <?php if(is_active_sidebar('blog-sidebar')): ?>
             <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12">
               <?php get_sidebar(); ?>
            </div>
            <?php endif; ?>

         </div>
      </div>
   </section>
   <!-- postbox area end -->

<?php
    get_footer();
?>