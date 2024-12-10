<?php get_header(); ?>

<section class="archiveBlogs">
  <div class="inner">
    <div class="archiveBlogs__mv">
      <img class="archiveBlogs__mvImg" src="<?php echo esc_url(get_theme_file_uri('/img/seitai-09.jpg')); ?>" alt="">
      <p class="archiveBlogs__mvText">Blogs</p>
    </div>
    <div class="archiveBlogs__titleWrap">
        <h2 class="archiveBlogs__subTitle">ブログ一覧</h2>
    </div>
    <div class="archiveBlogs__inner">
      <?php if(have_posts()) : ?>
        <ul class="archiveBlogs__list">
          <?php while(have_posts()) :the_post(); ?>
            <li class="archiveBlogs__item">
              <a class="archiveBlogs__itemLink" href="<?php the_permalink(); ?>">
                <?php 
          // カスタムフィールドからYouTubeのURLを取得
          $youtube_url = get_post_meta(get_the_ID(), 'youtube_url', true);
          $youtube_thumbnail = '';

          if ($youtube_url) {
              // YouTubeの動画IDを抽出
              preg_match('/(?:https?:\/\/)?(?:www\.)?youtu(?:be\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|\.be\/)([a-zA-Z0-9_-]{11})/', $youtube_url, $matches);
              if (!empty($matches[1])) {
                  $video_id = $matches[1];
                  // YouTubeサムネイル画像URLを生成
                  $youtube_thumbnail = "https://img.youtube.com/vi/{$video_id}/hqdefault.jpg";
              }
          }

          if ($youtube_thumbnail): ?>
          <img src="<?php echo esc_url($youtube_thumbnail); ?>" alt="<?php the_title();?>">
          <?php elseif(has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_title(); ?>">
          <?php else : ?>
            <img src="<?php echo esc_url(get_theme_file_uri('img/bg-paper-01.jpg')) ?>" alt="画像なし">
          <?php endif; ?>
          <div class="archiveBlogs__itemWrap">
          <p class="archiveBlogs__itemTitle">
            タイトル : 
            <?php $blog_title = get_the_title(); 
            echo mb_strimwidth($blog_title,0,40,'...'); 
            ?>
            </p>
            <p class="archiveBlogs__itemDate">
              投稿 :
            <?php the_date('Y/m/d'); ?>
          </p>
          <p class="archiveBlogs__itemText">
            <?php 
            $blog_content = get_the_content();
            $trimmed_content = mb_substr(strip_tags($blog_content),0,50,'UTF-8') . '...';
            echo $trimmed_content;?>
          </p>
          <p class="archiveBlogs__itemButton">もっと見る</p>
          </div>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
        <?php else : ?>
          <p class="archiveBlogs__itemText -second">まだブログはありません。</p>
      <?php endif; ?>

      <!-- ページネーション -->
      <div class="archiveBlogs__Pagination">
        <?php  
        echo paginate_links([
          'total' => $wp_query->max_num_pages,
          'current' => max(1,get_query_var('paged')),
          'mid_size' =>  1,
          'prev_text' => '←',
          'next_text' => '→' 
        ]);
        ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>