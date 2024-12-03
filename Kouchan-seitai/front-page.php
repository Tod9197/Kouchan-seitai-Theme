<?php get_header(); ?>


<!-- メインビジュアル -->

<div class="mainVisual">
  <div class="mainVisual__inner">
    <div class="mainVisual__titleFlex">
      <div class="mainVisual__titleWrap">
      <h1 class="mainVisual__title">痛くない、快適な施術<br>身体が根本から変わる!!<br>京橋で一番優しい整体院<br></h1>
      <p class="mainVisual__text">
        頭痛、肩こり、胃痛、腰痛、足の痛み、心の不調など、<br class="pc-only">あらゆる症状を改善。<br>
        親切・丁寧にご対応させていただきます。
      </p>
    </div>
    <div class="mainVisual__imgWrap">
      <div class="mainVisual__ballon">
        <p class="mainVisual__ballonText">お身体の悩み<br>何でもご相談ください!！</p>
      </div>
      <div class="mainVisual__imgBox">
        <img class="mainVisual__img" src="<?php echo esc_url(get_theme_file_uri('/img/kouchan-01.png')); ?>" alt="代表画像">
      </div>
    </div>
  </div>

  <ul class="mainVisual__tagFlex">
    <li class="mainVisual__tagItem">
      <p class="mainVisual__tagText">京橋駅<br>徒歩3分</p>
    </li>
    <li class="mainVisual__tagItem">
      <p class="mainVisual__tagText">
        初回価格<br>
        <?php 
        $page_id = get_option('page_on_front'); 
        $initial_fee = get_post_meta($page_id,'初回料金',true);
        if(!empty($initial_fee)){
            echo $initial_fee;
          } else {
            echo ' - ';
          }
      ?>円!!
      </p>
    </li>
    <li class="mainVisual__tagItem">
      <p class="mainVisual__tagText">カード決済可</p>
    </li>
    <li class="mainVisual__tagItem">
      <p class="mainVisual__tagText">土日施術可</p>
    </li>
  </ul>
  </div>
</div>



<!-- 当院について -->
<section class="about">
  <div class="inner">
    <div class="aboutTitle__flex">
      <div class="aboutTitle__wrap">
        <p class="aboutTitle__sub">ABOUT</p>
        <h2 class="aboutTitle">こーちゃん整体院とは</h2>
      </div>
      <img class="aboutTitle__img" src="<?php echo esc_url(get_theme_file_uri('img/seitai-09.jpg')) ?>" alt="施術画像">
    </div>
    <p class="aboutText">痛くない、身体がどんどん楽に気持ち良くなる施術</p>
    <p class="aboutText__second">当院ではよくありがちな<span class="highlight">「ボキボキと骨をならす」</span>　<span class="highlight">「強く揉んでマッサージする」</span><br>といった整体院でよくありがちな施術を一切行いません。</p>
    <p class="aboutText__second">なぜなら、こういった施術は身体に無理を強いてしまい、実は身体の状態を悪化させてしまうこともあるのです。</p>
    <p class="aboutText__second">施術直後はスッキリしたり、症状が治ったと思っても時間が経てば元に戻ったなんてことはよくある話。</p>
    <p class="aboutText__second">当院ではそういった無理のある施術を避け、<span class="highlight">「身体本来の機能」</span>を取り戻し、時間が経つ度に状態が良くなる施術を行います。</p>
    <p class="aboutText__second">当院の施術を受けられた方は皆「こんな簡単なことで身体って良くなるの！？」としばし驚かれます。</p>
    <p class="aboutText__second">身体を良くするにはきついこと(骨をボキボキと鳴らしたり、痛みのあるマッサージに耐えるなど)<br>をしないダメという誤った考えが広まっていますが、その常識を当院では打ち砕きます！！</p>
    <p class="aboutText__second">今まで整体に行き、痛みに我慢した経験をされた方にこそ当院にお越しいただきたいと思いますし、<br><span class="highlight">痛みのある施術</span>は一切行いませんのでご安心下さい。</p>
    <ul class="aboutImg__list">
      <li class="aboutImg__listItem"><img src="<?php echo esc_url(get_theme_file_uri('/img/seitai-02.jpg')) ?>" alt=""></li>
      <li class="aboutImg__listItem"><img src="<?php echo esc_url(get_theme_file_uri('/img/seitai-03.jpg')) ?>" alt=""></li>
      <li class="aboutImg__listItem"><img src="<?php echo esc_url(get_theme_file_uri('/img/seitai-04.jpg')) ?>" alt=""></li>
    </ul>
    </div>  
</section>

<!-- 悩み解決 -->
<section class="counseling">
  <div class="inner">
    <div class="counselingTitle__wrap">
      <p class="counselingTitle__sub">COUNSELING</p>
      <h2 class="counselingTitle">お悩み相談</h2>
    </div>
    <div class="counselingFlex">
    <?php the_content(); ?>
    <img class="counselingList__img" src="<?php echo esc_url(get_theme_file_uri('/img/seitai-05.jpg')) ?>" alt="悩む男性">
    </div>
    <h3 class="counselingTitle -second">こういった悩みをお持ちの方もご安心ください!!</h3>
    <p class="counselingText">当院の施術で似たような症状をお持ちの方がどんどんと良くなっていっています。</p>
    <p class="counselingText">来院いただく皆様のほとんどはここに来られた時より元気になっていかれます。</p>
  </div>

  <a class="counselingTrial__link" href="#trial">
  <p class="counselingTrial">初回キャンペーン価格<span>
    <br class="tab-only">
    <?php 
      $page_id = get_option('page_on_front'); 
      $initial_fee = get_post_meta($page_id,'初回料金',true);
      if(!empty($initial_fee)){
        echo $initial_fee;
      } else {
        echo ' - ';
      }
      ?></span> 円<br class="tab-only">実施中！！</p>
  <p class="counselingTrial__text">お試し施術を受けてみる</p>
  </a>
</section>
<!-- 悩み解決ここまで -->

<!-- 特色 -->
<section class="features" id="features">
  <div class="inner">

  <div class="featuresTitle__wrap">
      <p class="featuresTitle__sub">FEATURES</p>
      <h2 class="featuresTitle">当院の特色</h2>
  </div>

    <p class="featuresText">他の院にはない当院最大の特徴</p>
    <ul class="featuresList">
      <li class="featuresList__item">
        <img class="featuresList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/seitai-06.jpg')) ?>" alt="">
        <p class="featuresList__itemTag">「身体の現在地」<br>をお伝えします。</p>
        <p class="featuresList__itemText">全身チェックすることで現在、あなたのお身体がどうなっているのか詳しくお伝えします。痛みや不調の根本原因を探し出します。</p>
      </li>
      <li class="featuresList__item">
        <img class="featuresList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/seitai-07.jpg')) ?>" alt="">
        <p class="featuresList__itemTag">「触れる」「なでる」「さする」<br class="pc-only -sp_block">といった優しい施術</p>
        <p class="featuresList__itemText">高齢者、妊婦さん、小さいお子様でも安心して受けていただけます。非常にソフトで気持ちの良い施術で寝てしまう方もおられます。</p>
      </li>
      <li class="featuresList__item">
        <img class="featuresList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/seitai-07.jpg')) ?>" alt="">
        <p class="featuresList__itemTag">徹底した<br>「アフターサポート」</p>
        <p class="featuresList__itemText">お客様一人一人に合わせたセルフケア方法をお伝えし、日常生活で気をつけることや身体の動かし方なども詳しく指導させていただきます。</p>
      </li>
    </ul>
  </div>
</section>
<!-- 特色ここまで -->

<!-- 選ばれる理由 -->
<section class="reason">
  <div class="inner">

  <div class="reasonTitle__wrap">
      <p class="reasonTitle__sub">REASON</p>
      <h2 class="reasonTitle">当院が選ばれる理由</h2>
  </div>
  <p class="reasonText">他の整体院との7つ違い</p>
  <ul class="reasonList">
    <li class="reasonList__item">①<span>カウンセリング・検査・説明</span>に重きを置き、痛みや不調の根本原因を探します。</li>
    <li class="reasonList__item">②<span>完全予約制</span>なので待ち時間なく施術を受けることができます。</li>
    <li class="reasonList__item">③あなたに合った<span>日常生活の注意点・
セルフケア</span>の方法をお伝えします。</li>
    <li class="reasonList__item">④誰よりもあなたと向き合い、<span>二人三脚</span>で悩みを解決していきます。</li>
    <li class="reasonList__item">⑤<span>2万人の臨床経験</span>があり身体に対する知識と経験が豊富です。</li>
    <li class="reasonList__item">⑥<span>その場しのぎの施術</span>は絶対にしません。</li>
    <li class="reasonList__item">⑦<span>「改善」</span>という結果を提供いたします。</li>
  </ul>
  <a class="counselingTrial__link" href="#trial">
  <p class="counselingTrial">初回キャンペーン価格<span>  
    <br class="tab-only">
    <?php 
      $page_id = get_option('page_on_front'); 
      $initial_fee = get_post_meta($page_id,'初回料金',true);
      if(!empty($initial_fee)){
        echo $initial_fee;
      } else {
        echo ' - ';
      }
      ?> </span>円<br class="tab-only">実施中！！</p>
  <p class="counselingTrial__text">お試し施術を受けてみる</p>
  </a>
  </div>
</section>
<!-- 選ばれる理由ここまで -->

<!-- 施術の流れ -->
<section class="flow" id="flow">
  <div class="inner">
    <div class="flowTitle__wrap">
      <p class="flowTitle__sub">FLOW</p>
      <h2 class="flowTitle">施術の流れ</h2>
    </div>

    
    <ul class="flowList">
      <li class="flowList__item">
        <h3 class="flowList__itemTitle">①カウンセリング・検査</h3>
        <p class="flowList__itemText">最初にあなたのお身体の悩みをお聞かせください。</p>
        <p class="flowList__itemText">全身チェックにより、あなたの今の身体の状況(身体の現在地)が
どうなっているのかを詳しくお伝えします。</p>
        <img class="flowList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/seitai-08.jpg')); ?>" alt="問診画像">
      </li>
      <li class="flowList__item">
        <h3 class="flowList__itemTitle">②施術</h3>
        <p class="flowList__itemText">一人一人に合ったオーダーメイド施術。</p>
        <p class="flowList__itemText">問診の結果を元にその人にベストの施術を行います。
「バキバキしない」「痛くない」
ので安心して施術を受けていただけます。</p>
        <img class="flowList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/seitai-02.jpg')); ?>" alt="問診画像">
      </li>
      <li class="flowList__item">
        <h3 class="flowList__itemTitle">③セルフケア</h3>
        <p class="flowList__itemText">その人に合ったどこでも簡単にできるセルフケアをお伝えします。</p>
        <p class="flowList__itemText">施術で良くなった身体を維持し、日常生活の身体の
動かし方を変えることで痛みや不調の根本からの改善を目指します。</p>
        <img class="flowList__itemImg" src="<?php echo esc_url(get_theme_file_uri('/img/seitai-07.jpg')); ?>" alt="問診画像">
      </li>
    </ul>
  </div>
</section>
<!-- 施術の流れここまで -->

<!-- お客様の声 -->
<section class="voices" id="voices">
  <div class="inner">
    <div class="voicesTitle__wrap">
      <p class="voicesTitle__sub">VOICES</p>
      <h2 class="voicesTitle">お客様の声</h2>
    </div>
    <p class="voicesText">施術を受け健康状態が良くなったお客様の感想です。</p>
    <?php  
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = [
      'post_type' => 'voices',
      'posts_per_page' => 6,
      'order' => 'DESC',
      'paged' => $paged
    ];

    $the_query = new WP_Query($args);
    ?>

    <?php if($the_query->have_posts()) : ?>
      <ul class="voicesList">
        <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
          <li class="voicesList__item">
            <a class="voicesList__itemLink" href="<?php the_permalink(); ?>">
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

              <p class="voicesList__itemText"><?php 
            $title = get_the_title();
            echo mb_strimwidth($title,0,40,'...');
            ?></p>
              <p class="voicesList__itemText -seocnd">詳しく見る</p>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
      <p>まだ投稿はありません。</p>
    <?php endif; ?>
    <p class="archiveVoices__page">
    <a class="archiveVoices__pageLink" href="<?php echo get_post_type_archive_link('voices'); ?>">お客様の声一覧を見る</a>
  </p>
  </div>
</section>

 <!-- 代表挨拶 -->
    <div class="director">
      <div class="inner">
        <div class="directorTitle__wrap">
        <p class="directorTitle__sub">DIRECTOR</p>
        <h2 class="directorTitle">代表挨拶</h2>
        </div>
        
        <p class="directorName">西垣宏亮(にしがき こうすけ)</p>
        <img class="directorImg" src="<?php echo esc_url(get_theme_file_uri('/img/kouchan-01.png')); ?>" alt="院長画像">
        <div class="directorText__wrap">
          <p class="directorText -certification">保有資格 : <span>VALXスクール認定トレーナー</span><span>日本立腰協会認定トレーナー</span><span>二宮整体アカデミー修士</span></p>
          <p class="directorText -message">代表挨拶 : <br>僕が整体師になったきっかけは、18歳の時、当時19歳の兄が、リウマチになったことがきっかけでした。<br>お医者様には一生治らないと言われ、兄が絶望していたのを覚えています。<br>
しかし、ある整体の先生との出会いがきっかけで、見事リウマチが改善されたのです。<br>今では何事もなかったかのように過ごしています。身体を整えることの素晴らしさに感動し、整体を勉強することになりました。<br>

身体を緩めること、骨格の構造通り使うことは、痛み、不調の改善に役立つだけでなく、スポーツパフォーマンス向上、メンタルケアにつながるということがお客様の身体を通して分かりました。<br>今では施術をするだけでなく、自分で身体を緩めるセルフケアの方法をご高齢の方から、ビジネスマン、アスリート、老若男女問わず、お伝えしています。<br>
私の兄のように痛みや不調で苦しんでいる方、身体の不調に悩まされている方の力になりたいと思っています。<br>
あなたのお身体の改善を全力でポートできればと考えています！
お身体のこと、何でも気軽にご相談ください！</p>
        </div>
      </div>
    </div>


    <!-- 治療料金 -->
<section class="price" id="price">
  <div class="inner">

  <div class="priceTitle__wrap" id="trial">
      <p class="priceTitle__sub">PRICE</p>
      <h2 class="priceTitle">治療料金</h2>
    </div>

    <div class="priceText__wrap">
      <p class="priceText">施術料 : <span>8,800円</span></p>
      <span class="priceText__arrow">⬇︎</span>
      <div class="priceText__trialWrap">
      <p class="priceText__trial">初回お試し価格 : <span>
      <?php 
      $page_id = get_option('page_on_front'); 
      $initial_fee = get_post_meta($page_id,'初回料金',true);
      if(!empty($initial_fee)){
        echo $initial_fee;
      } else {
        echo ' - ';
      }
      ?>円</span> </p>
        <p class="priceText__trial -second">施術時間目安：約60分~90分</p>
      </div>
        <!-- 電話問い合わせ -->
      <p class="priceReserve__numberText" id="contact">ご予約はお電話で</p>
      <div class="priceReserve__numberWrap">
          <a class="priceReserve__number" href="tel:07085407701">
          <i class="fas fa-phone whiteIcon -price"></i>  
          070-8540-7701
          </a>
      </div>
      <p class="priceReserve__numberText -second">施術中は電話に出られない可能性があります。<br>必ず折り返ししますので、メッセージにて<span class="highlight">「お名前」</span>と<span class="highlight">「お電話番号」</span>を残してください。</p>
      <!-- LINEorお問い合わせフォーム -->
      <div class="priceReserve__lineWrap">
        <a class="priceReserve__lineLink">公式LINEで予約・相談</a>
        <p class="priceReserve__lineText"><span class="highlight">「公式LINE」からもご予約が可能です。</p>
        <a class="priceReserve__lineAdd" href="https://lin.ee/zRgydg8" target="_blank" ral="noopener"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png" alt="友だち追加" height="36" border="0"></a>
        <p class="priceReserve__lineText">☆ご予約だけでなく、相談や質問にもお答えしていますので、お気軽にご連絡ください☆</p>
      </div>
    </div>
  </div>
</section>


<!-- アクセス -->
<section class="access" id="access">
  <div class="inner">
  <div class="accessTitle__wrap">
      <p class="accessTitle__sub">ACCESS</p>
      <h2 class="accessTitle">アクセス</h2>
  </div>
    <p class="accessText">当院の住所です。大阪京橋の各線からすぐの便利な立地にあります。</p>
    <p class="accessText -address">〒534-0024<br>大阪府大阪市都島区東野田町2丁目3-12 ワタヤラベンダービル 402号</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.3134778998983!2d135.52912637574414!3d34.697272472921036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e0d637602daf%3A0xf32f0b08d38ddc4b!2z44CSNTM0LTAwMjQg5aSn6Ziq5bqc5aSn6Ziq5biC6YO95bO25Yy65p2x6YeO55Sw55S677yS5LiB55uu77yT4oiS77yR77ySIOODr-OCv-ODpOODqeODmeODs-ODgOODvOODk-ODqw!5e0!3m2!1sja!2sjp!4v1731721786323!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <ul class="accessList">
        <li class="accessList__item">
        <i class="fas fa-train custom-train-icon"></i>  
        <i class="fas fa-person-walking"></i>
        <span>京阪京橋駅</span>から徒歩で約3分</li>
        <li class="accessList__item">
        <i class="fas fa-train custom-train-icon"></i>  
        <i class="fas fa-person-walking"></i>  
        <span>JR京橋駅</span>から徒歩で約3分</li>
      </ul>
      <a class="accessList__link" href="<?php echo esc_url('/access-detail'); ?>">駅からの具体的なアクセスはこちら</a>
  </div>
</section>

<?php get_footer(); ?>