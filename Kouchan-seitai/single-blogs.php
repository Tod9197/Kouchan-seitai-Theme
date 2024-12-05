<?php get_header(); ?>

<section class="singleBlogs">
  <div class="inner">
    <div class="singleBlogs__mv">
      <p class="singleBlogs__mvText">Blogs</p>
    </div>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="singleBlogs__content">
      <div class="singleBlogs__titleWrap">
        </div>
        <div class="singleBlogs__imgWrap">
          <h2 class="singleBlogs__subTitle"><?php the_title(); ?></h2>
          <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('thumbnail',['class' => 'singleBlogs__img']) ?>
            <?php else : ?>
              <img class="singleBlogs__img" src="<?php  echo esc_url(get_theme_file_uri('img/bg-paper-01.jpg'))?>" alt="画像なし">
            <?php endif; ?>
        </div>
      </div>
    <?php endwhile; endif; ?>
  </div>
</section>

<?php get_footer(); ?>