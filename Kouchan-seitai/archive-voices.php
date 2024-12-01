<?php get_header(); ?>

<section class="archiveVoices">
  <div class="inner">
    <div class="archiveVoices__titleWrap">
      <p class="archiveVoices__titleSub">VOICES</p>
      <h2 class="archiveVoices__title">お客様の声一覧</h2>
    </div>

   <?php if (have_posts()) : ?>
  <ul class="voicesList">
    <?php while (have_posts()) : the_post(); ?>
      <li class="voicesList__item">
        <a href="<?php the_permalink(); ?>">
          <h2><?php the_title(); ?></h2>
        </a>
      </li>
    <?php endwhile; ?>
  </ul>

  <!-- ページネーション -->
  <div class="archiveVoices__Pagination">
    <?php
    echo paginate_links([
        'total' => $wp_query->max_num_pages,
        'current' => max(1, get_query_var('paged')),
        'mid_size' => 1,
        'prev_text' => '前へ',
        'next_text' => '次へ',
    ]);
    ?>
  </div>
<?php else : ?>
  <p>投稿がありません。</p>
<?php endif; ?>
</div>
</section>

<?php get_footer(); ?>