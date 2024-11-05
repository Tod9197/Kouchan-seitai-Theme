<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|',true, 'right'); bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/base.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/style.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/header.css')); ?>" type="text/css">
  <script src="<?php echo esc_url(get_theme_file_uri('/js/main.js')); ?>"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
  <?php wp_body_open(); ?>


<header class="header">
    <div class="headerInner">
    <div class="headerLogo__wrap">
      <a class="headerLogo" href="<?php esc_url(home_url('/')) ?>">
        こーちゃん整体院
      </a>  
      <a href="<?php esc_url(home_url('/')) ?>">
      <img class="headerLogo__img" src="<?php echo esc_url(get_theme_file_uri('/img/seitai-logo.png')) ?>" alt="こーちゃん整体院ロゴ">
      </a>
    </div>
      <ul class="headerList">
        <li class="headerList__item -phone">
          <a class="headerList__itemPhone" href="tel:07085407701">
          <i class="fas fa-phone whiteIcon"></i>  
          070-8540-7701
          </a>
        </li>
      </ul>
    </div>
  </header>
  <nav class="headerUnder__navWrap">
    <ul class="headerUnder__nav">
    <li class="headerUnder__navList">
      <a href="" class="headerUnder__navItem">お客様の声</a>
    </li>
    <li class="headerUnder__navList">
      <a href="" class="headerUnder__navItem">施術の流れ</a>
    </li>
    <li class="headerUnder__navList">
      <a href="" class="headerUnder__navItem">施術料金</a>
    </li>
    <li class="headerUnder__navList">
      <a href="" class="headerUnder__navItem">アクセス</a>
    </li>
    <li class="headerUnder__navList">
      <a href="" class="headerUnder__navItem">お問い合わせ</a>
    </li>
    </ul>
  </nav>