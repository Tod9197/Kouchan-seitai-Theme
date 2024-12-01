  <?php get_header();?>

<section class="singleVoices">
  <div class="inner">
    <?php if(have_posts()) : while(have_posts()) :the_post();?>
      <div class="singleVoices__content">
        <div class="singleVoices__titleWrap">
          <p class="singleVoices__titleSub">VOICES</p>
          <h2 class="singleVoices__title">お客様の声</h2>
        </div>
        <h2 class="singleVoices__subTitle"><?php the_title(); ?></h2>
        <?php  
        // カスタムフィールドからYouTubeのURLを取得
        $youtube_url = get_post_meta(get_the_ID(), 'youtube_url',true);
        if($youtube_url) :
        ?>
        <div class="singleVoices__youtube">
          <?php echo wp_oembed_get($youtube_url); ?>
        </div>
        <?php endif; ?>
      </div>
      <div class="singleVoices__contentText">
          <?php the_content(); ?>
      </div>
    <?php endwhile; endif; ?>
  </div>
</section>


<?php get_footer(); ?>