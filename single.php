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
                  <article class="postbox__item format-image mb-50 transition-3">
                     <div class="postbox__thumb m-img p-relative">
                        <a href="blog-details.html">
                           <img class="w-100" src="assets/img/blog-detials/blog-img-4.jpg" alt="">
                           <div class="postbox__meta-date ">
                              <span><a href="#">08 April</a></span>
                           </div>
                        </a>
                     </div>
                     <div class="postbox__content">
                        <div class="postbox__meta d-flex justify-content-between">
                           <div class="postbox__info">
                              <span><a href="#"><i class="fa-light fa-user"></i> Yeamin</a></span>
                              <span><i class="fa-regular fa-location-dot"></i> Logistic</span>
                              <span><a href="#"><i class="fal fa-comments"></i> 02 Comments</a></span>
                           </div>
                        </div>
                        <h3 class="postbox__title">
                           <?php the_title(); ?>
                          <!-- Your business absolutely needs daily -->
                        </h3>
                        <div class="postbox__text">
                           <p>There are many variations of passages of Lorem Ipsum available, but majority have suffered
                              alteration in some form, by injected humour, or randomised words which don’t look even
                              slightly believable. If you are going to use a passage of Lorem Ipsum. There are many
                              variations of passages of Lorem Ipsum available, but majority have suffered alteration in
                              some form, by injected humour, or randomised words which don’t look even slightly
                              believable. If you are going to use a passage of Lorem Ipsum.</p>
                           <p>Suspendisse ultricies vestibulum vehicula. Proin laoreet porttitor lacus. Duis auctor vel
                              ex eu elementum. Fusce eu volutpat felis. Proin sed eros tincidunt, sagittis sapien eu,
                              porta diam. Aenean finibus scelerisque nulla non facilisis. Fusce vel orci sed quam gravid
                           </p>
                           <div class="postbox__gallaray mb-50">
                              <div class="row">
                                 <div class="col-xl-6 col-lg-6">
                                    <div class="postbox__right-img">
                                       <img class="w-100" src="assets/img/blog-detials/blog-video-img.jpg" alt="">
                                    </div>
                                 </div>
                                 <div class="col-xl-6 col-lg-6">
                                    <div class="postbox__left-img">
                                       <img class="w-100" src="assets/img/blog-detials/blog-video-img-2.jpg" alt="">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <h3 class="postbox__title">
                              Our Personal Approach
                           </h3>
                           <p>Aliquam condimentum, massa vel mollis volutpat, erat sem pharetra quam, ac mattis arcu
                              elit non massa. Nam mollis nunc velit, vel varius arcu fringilla tristique. Cras elit
                              nunc, sagittis eu bibendum eu, ultrices placerat sem. Praesent vitae metus auctor.</p>
                           <blockquote class="d-flex justify-content-between">
                              <span>
                                 <p>And the day came when the risk to remain tight in
                                    a bud was more painful than the risk.</p> <cite>- Harry Newman</cite>
                              </span>
                              <span><i class="flaticon-quote"></i></span>
                           </blockquote>

                           <p>Supported substance consolidates parts of web based promoting and substance showcasing. It
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
                                    <span>Tag:</span>
                                    <a href="#">Transport</a>
                                    <a href="#">Logistic</a>
                                    <a href="#">Air</a>
                                 </div>
                              </div>
                              <div class="col-xl-6 col-lg-12 col-md-12 col-12">
                                 <div class="postbox__details-share text-end">
                                    <span>Share:</span>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
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
                     <form action="#">
                        <div class="row">
                           <div class="col-xxl-6 col-xl-6 col-lg-6">
                              <div class="postbox__comment-input">
                                 <input type="text" placeholder="Your Name">
                              </div>
                           </div>
                           <div class="col-xxl-6 col-xl-6 col-lg-6">
                              <div class="postbox__comment-input">
                                 <input type="email" placeholder="Email Address">
                              </div>
                           </div>
                           <div class="col-xxl-12">
                              <div class="postbox__comment-input">
                                 <textarea placeholder="Write Your Comment"></textarea>
                              </div>
                           </div>
                           <div class="col-xxl-12">
                              <div class="postbox__comment-btn">
                                 <button type="submit" class="thm-btn">SUBMIT COMMENTS</button>
                              </div>
                           </div>
                        </div>
                     </form>
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