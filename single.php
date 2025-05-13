<?php
    get_header();

    $no_sidebar = is_active_sidebar('blog-sidebar') ? '' : 'justify-content-center';
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
                           <div class="postbox-details-author-thumb">
                              <a href="#">
                                 <img src="assets/img/blog-detials/img.png" alt="">
                              </a>
                           </div>
                           <div class="postbox-details-author-content">
                              <h5 class="postbox-details-author-title">
                                 <a href="#">About Harry Newman</a>
                              </h5>
                              <p>Supported substance consolidates parts of web promoting and substance showcasing. It
                                 includes making</p>

                              <div class="postbox-details-author-social">
                                 <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                 <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                 <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                 <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </article>
                  <div class="postbox-details-comment-wrapper">
                     <h3 class="postbox-details-comment-title">02 Comments</h3>
                     <div class="postbox-details-comment-inner">
                        <ul>
                           <li>
                              <div class="postbox-details-comment-box d-sm-flex align-items-start">
                                 <div class="postbox-details-comment-thumb">
                                    <img src="assets/img/blog-detials/user.png" alt="">
                                 </div>
                                 <div class="postbox-details-comment-content">
                                    <div
                                       class="postbox-details-comment-top d-flex justify-content-between align-items-start">
                                       <div class="postbox-details-comment-avater">
                                          <h4 class="postbox-details-comment-avater-title">Mithcel Adnan</h4>
                                       </div>
                                    </div>
                                    <p>Curabitur luctus nisl in justo maximus egestas. Curabitur sit amet sapien vel
                                       nunc molestie pulvinar at vitae quam. Aliquam lobortis nisi vitae congue
                                       consectetur. Aliquam et quam non metus </p>
                                    <div class="postbox-details-comment-reply">
                                       <a href="#">Reply</a>
                                    </div>
                                 </div>
                              </div>
                              <ul class="children">
                                 <li>
                                    <div class="postbox-details-comment-box d-sm-flex align-items-start">
                                       <div class="postbox-details-comment-thumb">
                                          <img src="assets/img/blog-detials/user-2.png" alt="">
                                       </div>
                                       <div class="postbox-details-comment-content">
                                          <div
                                             class="postbox-details-comment-top d-flex justify-content-between align-items-start">
                                             <div class="postbox-details-comment-avater">
                                                <h4 class="postbox-details-comment-avater-title">Liza Olivarez</h4>
                                             </div>
                                          </div>
                                          <p>Curabitur luctus nisl in justo maximus egestas. Curabitur sit amet sapien
                                             vel nunc molestie pulvinar at vitae quam. Aliquam lobortis nisi vitae
                                             congue consectetur. Aliquam et quam non metus </p>
                                          <div class="postbox-details-comment-reply">
                                             <a href="#">Reply</a>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="postbox__comment-form">
                     <h3 class="postbox__comment-form-title">Leave Your Comment</h3>
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