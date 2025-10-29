<?php $categories = get_categories(); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/common.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/base.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/desktop/base.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/footer.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/desktop/footer.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/header.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/desktop/header.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/headline.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/desktop/headline.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/table.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/desktop/table.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/desktop/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/button.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/blog.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/pagination.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/add.css">
</head>

<body class="bg-white">
  <!-- ヘッダここから -->
  <header>
    <div class="d-flex justify-content-end">
      <span class="m-0 f10px">【PR】</span>
      <h1 class="m-0 me-2 f12px"><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></h1>
    </div>
    <div class="position-fixed w-100 header-nav" style="z-index:1000;">
      <nav class="navbar navbar-expand-lg navbar-light py-0">
        <div class="container-fluid" style="--bs-gutter-x: 0;">
          <div class="w-100">
            <div class="text-end">
              <button class="btn-hamburger navbar-toggler border-0 rounded-0 py-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="btn-hamburger-icon navbar-toggler-icon"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse justify-content-between align-items-center mx-3 mx-xxl-5 px-2" id="navbarNavDropdown">
              <a class="nav-link fw-bold fs-6 py-2 text-white d-none d-lg-block" aria-current="page" href="<?php echo home_url(); ?>/">
                <?php bloginfo('name'); ?>
              </a>
              <ul class="navbar-nav d-md-flex align-items-center">
                <li class="nav-item text-center mb-3 mb-lg-0 d-block d-lg-none">
                  <a class="nav-link fw-bold fs-6 py-2 text-white" aria-current="page" href="<?php echo home_url(); ?>/">
                    <picture>
                      <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/m_icon_hake.webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/img/m_icon_hake.png" loading="lazy" alt="はけ" height="20" width="20" class="img-fluid">
                    </picture>
                    <?php bloginfo('name'); ?>
                  </a>
                </li>
                <li class="nav-item text-center mb-3 mb-lg-0">
                  <a class="nav-link lh-sm py-0 text-white" href="/">大阪市北区<br>エリアコラム</a>
                </li>
                <li class="nav-item text-center mb-3 mb-lg-0">
                  <a class="nav-link lh-sm py-0 text-white" href="/">大阪市北区の<br>不動産会社一覧</a>
                </li>
                <li class="nav-item text-center mb-3 mb-lg-0">
                  <a class="nav-link lh-sm py-0 text-white" href="#recomend">大阪市北区で<br>おすすめの不動産会社3選</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- ヘッダここまで -->

  <!-- 戻るボタン -->
  <div class="position-sticky z-99  end-0 top-50">
    <a class="position-absolute end-0" href="#">
      <picture>
        <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_btn_top.webp">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_btn_top.png" loading="lazy" alt="戻るボタン" height="70" width="70" class="img-fluid">
      </picture>
    </a>
  </div>