<?php get_header(); ?>

<section class="singleBlogs">
  <div class="inner">
    <div class="singleBlogs__mv">
      <img class="singleBlogs__mvImg" src="<?php echo esc_url(get_theme_file_uri('/img/seitai-10.jpg')); ?>" alt="">
      <p class="singleBlogs__mvText">Blogs</p>
    </div>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="singleBlogs__content">
        <div class="singleBlogs__titleWrap">
        <h2 class="singleBlogs__subTitle"><?php the_title(); ?></h2>
        </div>
      <div class="singleBlogs__inner">
        <div class="singleBlogs__imgWrap">
          <?php the_content(); ?>
        </div>
      </div>
      </div>
    <?php endwhile; endif; ?>
  </div>
</section>

<?php get_footer(); ?>