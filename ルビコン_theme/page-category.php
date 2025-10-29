<?php

/**
 * Template Name: カテゴリー
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Base_Theme
 * @since base_theme 1.0
 */

$slug = $post->post_name;

$articlesView = true;
$h1 = the_title('', '', false) . ' | ' . get_bloginfo('name');
//現在のページ(自動取得)
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
  'paged' => $paged,
  "post_status" => "publish",
);

if ($slug != 'articles') {
  $args += ['category_name' => $slug];
};

get_header();
?>
<!-- コンテンツここから -->
<main>

  <!-- メイン画像ここから -->
  <div class="bg-sub">
    <div style="height:30px;"></div>
    <div class="d-flex justify-content-center align-items-center h-100">
      <h2 class="bg-white bg-opacity-50 px-5 py-3"><?php the_title(); ?></h2>
    </div>
  </div>

  <!-- パンくず -->
  <div class="container">
    <?php get_template_part('breadcrumb'); ?>
  </div>

  <!-- コンテンツ -->
  <div class="container">
    <div class="row mt-5">

      <!-- 左コンテンツここから -->
      <section class="col-lg-8 col-12 my-1">
        <?php if ($paged < 2): ?>
          <div id="blog">
            <?php the_content(); ?>
          </div>
        <?php endif; ?>

        <?php if ($articlesView): ?>
          <div class="hero_head">
            <h2>記事一覧</h2>
          </div>
          <?php query_posts($args); ?>
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php $category = get_the_category(); ?>

              <article class="row mb-4">
                <figure class="col-lg-3 col-4">
                  <a href="<?php the_permalink() ?>" class="cursor-d">
                    <?php if (has_post_thumbnail()): //アイキャッチ画像を設定している場合 
                    ?>
                      <?php $post_title = get_the_title(); ?>
                      <?php the_post_thumbnail('medium', ['alt' => $post_title, 'class' => 'img-fluid thumbnail-object-fit', 'loading' => 'lazy']); ?>
                    <?php else: //アイキャッチ画像を設定していない場合 
                    ?>
                      <picture>
                        <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/news-04.webp">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/news-04.png" alt="<?php the_title(); ?>" class="img-fluid thumbnail-object-fit">
                      </picture>
                    <?php endif; ?>
                  </a>
                </figure>
                <div class="col-lg-9 col-8">
                  <a href="<?php the_permalink() ?>" class="text-decoration-none cursor-d">
                    <h3 class="f-mincho gray fw-bold fs-5"><?php echo wp_trim_words(get_the_title(), 30, '...'); ?></h3>
                  </a>
                  <p><?php echo wp_trim_words(get_the_content(), 75, '...'); ?></p>
                  <div class="d-inline bg_blue white p-1 me-1 f12px"><?php echo $category[0]->cat_name; ?></div>
                  <div class="d-inline gray f12px"><?php the_time('Y.m.d'); ?></div>
                </div>
              </article>

            <?php endwhile; ?>
          <?php endif; ?>

          <!--固定ページ、静的ページにページャーを付ける-->
          <nav aria-label="Page navigation mb-5">
            <?php bootstrap_pagination(); ?>
            <!-- pagination -->
          </nav>
        <?php endif; ?>

        <!-- CTAボタンここから -->
        <div class="container mb-5 mt-5">
          <a href="<?php echo home_url(); ?>">
            <picture>
              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/banner_bottom.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/banner_bottom.png" alt="マンション駐輪場の改修・リニューアルガイド" class="img-fluid" loading="lazy"
                width="1098" height="259">
            </picture>
          </a>
        </div>
        <!-- CTAボタンここまで -->
      </section>
      <!-- 左コンテンツここまで -->

      <div class="col-lg-1 col-0"></div>

      <!-- サイドバーここから -->
      <aside class="col-lg-3 col-12">
        <?php get_sidebar(); ?>
      </aside>
      <!-- サイドバーここまで -->
    </div>
  </div>

</main>
<!-- コンテンツここまで -->

<?php
get_footer();
