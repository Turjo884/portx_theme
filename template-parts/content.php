<?php if(is_single()) : ?>

<?php else: ?>

<div id="post-<?php the_ID(); ?>" <?php post_class("tpblog-2 wow fadeInUp mb-30"); ?> data-wow-duration=".9s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 100ms; animation-name: fadeInUp;">
   <div class="tpblog-2__content">
      <?php get_template_part('template-parts/blog/blog-meta'); ?>
      <h3 class="tpblog-2__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
   </div>
   <div class="tpblog-2__thumb p-relative fix">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
      <div class="tpblog-2__plus-icon">
         <a href="<?php the_permalink(); ?>"><i class="fa-sharp fa-solid fa-plus"></i></a>
      </div>
   </div>
   <div class="tpblog-2__link">
      <div class="tpblog-2__button blog-border d-flex align-items-center fix">
         <span class="f-left tpblog-2__more-btn">
            <a href="<?php the_permalink(); ?>" tabindex="0">
               <span class="tpblog-2__blog-more"><?php echo esc_html__('READ MORE', 'portx'); ?></span>
               <i class="fa-regular fa-arrow-right"></i>
            </a>
         </span>
      </div>
   </div>
</div>

<?php endif; ?>