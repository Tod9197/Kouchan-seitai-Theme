<?php get_header(); ?>

<div class="archiveVoices__Wrap">
<section class="archiveVoices">
  <div class="inner">
    <div class="archiveVoices__titleWrap">
      <p class="archiveVoices__titleSub">VOICES</p>
      <h2 class="archiveVoices__title">お客様の声一覧</h2>
    </div>

   <?php if (have_posts()) : ?>
  <ul class="archiveVoices__list">
    <?php while (have_posts()) : the_post(); ?>
      <li class="archiveVoices__item">
        <a class="archiveVoices__itemLink" href="<?php the_permalink(); ?>">
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
            <img src="<?php echo esc_url($youtube_thumbnail); ?>" alt="<?php the_title(); ?>">
          <?php elseif(has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
          <?php else: ?>
            <img src="<?php echo esc_url(get_theme_file_uri('img/bg-paper-01.jpg')) ?>" alt="画像なし">
          <?php endif; ?>

          <p class="archiveVoices__itemText"><?php the_title(); ?></p>
          <p class="archiveVoices__itemText -second">詳しく見る</p>
        </a>
      </li>
    <?php endwhile; ?>
  </ul>
<?php else : ?>
  <p>投稿がありません。</p>
<?php endif; ?>

  <!-- ページネーション -->
  <div class="archiveVoices__Pagination">
    <?php
    echo paginate_links([
        'total' => $wp_query->max_num_pages,
        'current' => max(1, get_query_var('paged')),
        'mid_size' => 1,
        'prev_text' => '←',
        'next_text' => '→',
    ]);
    ?>
  </div>
  </div>
</div>
</section>

<?php get_footer(); ?>