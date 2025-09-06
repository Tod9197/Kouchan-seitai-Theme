<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|',true, 'right'); bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/base.css')); ?>?v=<?php echo filemtime(get_theme_file_path('/css/base.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/style.css')); ?>?v=<?php echo filemtime(get_theme_file_path('/css/style.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/header.css')); ?>?v=<?php echo filemtime(get_theme_file_path('/css/header.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/footer.css')); ?>?v=<?php echo filemtime(get_theme_file_path('/css/footer.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/access.css')); ?>?v=<?php echo filemtime(get_theme_file_path('/css/access.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/voices.css')); ?>?v=<?php echo filemtime(get_theme_file_path('/css/voices.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/blogs.css')); ?>?v=<?php echo filemtime(get_theme_file_path('/css/blogs.css')); ?>" type="text/css">
  <script src="<?php echo esc_url(get_theme_file_uri('/js/main.js')); ?>?v=<?php echo filemtime(get_theme_file_path('/js/main.js')); ?>"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KNF5Z28T');</script>
<!-- End Google Tag Manager -->
  <?php wp_head(); ?>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNF5Z28T"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <?php wp_body_open(); ?>


<header class="header">
    <div class="headerInner">
    <div class="headerLogo__wrap">
      <a class="headerLogo" href="<?php echo esc_url(home_url('/')) ?>">
        こーちゃん整体院
      </a>  
      <a href="<?php echo esc_url(home_url('/')) ?>">
      <img class="headerLogo__img" src="<?php echo esc_url(get_theme_file_uri('/img/seitai-logo.png')) ?>" alt="こーちゃん整体院ロゴ">
      </a>
    </div>
      <ul class="headerList">
        <li class="headerList__item">
          <a class="headerList__item -line" href="https://lin.ee/zRgydg8" target="_blank" ral="noopener"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png" alt="友だち追加" height="36" border="0"></a>
        </li>
        <li class="headerList__item -phone">
          <a class="headerList__itemPhone" href="tel:07085407701">
          <i class="fas fa-phone whiteIcon"></i>  
          070-8540-7701
          </a>
        </li>
      </ul>
        <!-- ハンバーガーメニュー -->
    <button class="hamburgerBtn" id="js-hamburgerBtn">
      <span id="js-hamburgerLine__first"></span>
      <span id="js-hamburgerLine__second"></span>
      <span id="js-hamburgerLine__third"></span>
    </button>

    <nav class="hamburgerNav" id="js-hamburgerNav">
      <ul class="hamburgerNav__list">
        <li class="hamburgerNav__item">
      <a href="<?php echo esc_url(home_url('#flow'));?>" class="hamburgerNav__link">施術の流れ</a>
      </li>
      <li class="hamburgerNav__item">
      <a href="<?php echo esc_url(home_url('#voices'));?>" class="hamburgerNav__link">お客様の声</a>
      </li>
      <li class="hamburgerNav__item">
      <a href="<?php echo esc_url(home_url('#price'));?>" class="hamburgerNav__link">施術料金</a>
      </li>
      <li class="hamburgerNav__item">
      <a href="<?php echo esc_url(get_post_type_archive_link('blogs')); ?>" class="hamburgerNav__link">ブログ</a>
      </li>
      <li class="hamburgerNav__item">
      <a href="<?php echo esc_url(home_url('#access'));?>" class="hamburgerNav__link">アクセス</a>
      </li>
      <li class="hamburgerNav__item">
      <a href="<?php echo esc_url(home_url('#contact'));?>" class="hamburgerNav__link">お問い合わせ</a>
      </li>
      <li class="hamburgerNav__item -phone">
          <a class="hamburgerNav__link -phone" href="tel:07085407701">
          <i class="fas fa-phone whiteIcon -hamburger"></i>  
          070-8540-7701
          </a>
      </li>
      <li class="hamburgerNav__item -line">
          <a class="hamburgerNav__link-line" href="https://lin.ee/zRgydg8" target="_blank" ral="noopener"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png" alt="友だち追加" height="36" border="0"></a>
      </li>
      </ul>
    </nav>

    </div>

  </header>
  <nav class="headerUnder__navWrap">
    <ul class="headerUnder__nav">
    <li class="headerUnder__navList">
      <a href="<?php echo esc_url(home_url('#flow'));?>" class="headerUnder__navItem">施術の流れ</a>
    </li>
    <li class="headerUnder__navList">
      <a href=" <?php echo esc_url(home_url('#voices'));?>" class="headerUnder__navItem">お客様の声</a>
    </li>
    <li class="headerUnder__navList">
      <a href="<?php echo esc_url(home_url('#price')); ?>" class="headerUnder__navItem">施術料金</a>
    </li>
    <li class="headerUnder__navList">
      <a href="<?php echo esc_url(get_post_type_archive_link('blogs')); ?>" class="headerUnder__navItem">ブログ</a>
    </li>
    <li class="headerUnder__navList">
      <a href="<?php echo esc_url(home_url('#access'));?>" class="headerUnder__navItem">アクセス</a>
    </li>
    <li class="headerUnder__navList">
      <a href="<?php echo esc_url(home_url('#contact')); ?>" class="headerUnder__navItem">お問い合わせ</a>
    </li>
    </ul>
  </nav>