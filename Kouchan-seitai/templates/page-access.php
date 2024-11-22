<?php
/**
 * Template Name: アクセス詳細
 * @package WordPress
 * @subpackage I'LL
 * @since I'LL Pro 1.0
 */

get_header(); ?>

<section class="accessDetail">
  <div class="inner">
  <div class="accessDetail__titleWrap">
      <p class="accessDetail__titleSub">ACCESS</p>
      <h2 class="accessDetail__title">アクセス詳細</h2>
  </div>

  <p class="accessDetail__text">各線 京橋駅からの詳しい道のりをお伝えします。</p>

  <div class="accessDetail__wayWrap">
    <h2 class="accessDetail__wayTitle">JR 京橋駅から</h2>
  </div>
  <ol class="accessDetail__wayList">
      <li class="accessDetail__wayItem"><img class="accessDetail__wayImg" src="<?php echo esc_url(get_theme_file_uri('/img/access-01.jpg')); ?>" alt="道順画像1"></li>
      <li class="accessDetail__wayItem"><img class="accessDetail__wayImg" src="<?php echo esc_url(get_theme_file_uri('/img/access-02.jpg')); ?>" alt="道順画像2"></li>
      <li class="accessDetail__wayItem"><img class="accessDetail__wayImg" src="<?php echo esc_url(get_theme_file_uri('/img/access-03.jpg')); ?>" alt="道順画像3"></li>
      <li class="accessDetail__wayItem"><img class="accessDetail__wayImg" src="<?php echo esc_url(get_theme_file_uri('/img/access-04.jpg')); ?>" alt="道順画像4"></li>
      <li class="accessDetail__wayItem"><img class="accessDetail__wayImg" src="<?php echo esc_url(get_theme_file_uri('/img/access-05.jpg')); ?>" alt="道順画像5"></li>
      <li class="accessDetail__wayItem"><img class="accessDetail__wayImg -sixth" src="<?php echo esc_url(get_theme_file_uri('/img/access-06.jpg')); ?>" alt="道順画像6"></li>
      <li class="accessDetail__wayItem"><img class="accessDetail__wayImg -seventh" src="<?php echo esc_url(get_theme_file_uri('/img/access-07.jpg')); ?>" alt="道順画像7"></li>
      <li class="accessDetail__wayItem"><img class="accessDetail__wayImg" src="<?php echo esc_url(get_theme_file_uri('/img/access-08.jpg')); ?>" alt="道順画像1"></li>
    </ol>
  <!-- <div class="accessDetail__wayWrap">
    <h2 class="accessDetail__wayTitle">京阪 京橋駅から</h2>
  </div> -->

    <p class="accessDetail__address">〒534-0024<br>大阪府大阪市都島区東野田町2丁目3-12 ワタラヤベンダービル</p>
  

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.3134778998983!2d135.52912637574414!3d34.697272472921036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e0d637602daf%3A0xf32f0b08d38ddc4b!2z44CSNTM0LTAwMjQg5aSn6Ziq5bqc5aSn6Ziq5biC6YO95bO25Yy65p2x6YeO55Sw55S677yS5LiB55uu77yT4oiS77yR77ySIOODr-OCv-ODpOODqeODmeODs-ODgOODvOODk-ODqw!5e0!3m2!1sja!2sjp!4v1731721786323!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <p class="accessDetail__text -second">場所がわからない場合は遠慮なくお電話ください！</p>
      <div class="priceReserve__numberWrap">
          <a class="priceReserve__number" href="tel:07085407701">
          <i class="fas fa-phone whiteIcon -price"></i>  
          070-8540-7701
          </a>
      </div>
  </div>
</section>



<?php get_footer(); ?>