<?php

/**
 * Template Name: アーカイブ
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Base_Theme
 * @since base_theme 1.0
 */

get_header();
?>
<!-- コンテンツここから -->
<main>
  <!-- メイン画像ここから -->
  <div class="bg-sub">
    <div style="height:30px;"></div>
    <div class="d-flex justify-content-center align-items-center h-100">
      <h2 class="bg-white bg-opacity-50 px-5 py-3"><?php echo get_the_date('Y年n月'); ?> 一覧</h2>
    </div>
  </div>

  <!-- パンくず -->
  <div class="container">
    <?php get_template_part('breadcrumb', null, ['type' => 'archive', 'title' => get_the_date('Y年n月') . '一覧']); ?>
  </div>

  <!-- コンテンツ -->
  <div class="container">
    <div class="row mt-5">

      <!-- 左コンテンツここから -->
      <section class="col-lg-8 col-12 my-3">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php $category = get_the_category(); ?>

            <article class="row mb-4">
              <figure class="col-lg-3 col-4">
                <a href="<?php the_permalink() ?>" class="cursor-d">
                  <?php if (has_post_thumbnail()): //アイキャッチ画像を設定している場合 
                  ?>
                    <?php $post_title = get_the_title(); ?>
                    <?php the_post_thumbnail('medium', ['alt' => $post_title, 'class' => 'border img-fluid thumbnail-object-fit', 'loading' => 'lazy']); ?>
                  <?php else: //アイキャッチ画像を設定していない場合 
                  ?>
                    <picture>
                      <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/news-04.webp">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/img/news-04.png" alt="<?php the_title(); ?>" class="border img-fluid thumbnail-object-fit">
                    </picture>
                  <?php endif; ?>
                </a>
              </figure>
              <div class="col-lg-9 col-8">
                <a href="<?php the_permalink() ?>" class="text-decoration-none">
                  <h3 class="f-mincho gray fw-bold fs-5"><?php echo wp_trim_words(get_the_title(), 30, '...'); ?></h3>
                </a>
                <p><?php echo wp_trim_words(get_the_content(), 75, '...'); ?></p>
                  <div class="d-inline bg_blue white p-1 me-1 f12px"><?php echo $category[0]->cat_name; ?></div>
                  <div class="d-inline gray f12px">公開：<?php the_time('Y.m.d'); ?>　更新：<?php the_modified_date('Y.m.d'); ?></div>
              </div>
            </article>

          <?php endwhile; ?>
        <?php endif; ?>

        <!--固定ページ、静的ページにページャーを付ける-->
        <nav aria-label="Page navigation mb-5">
          <?php bootstrap_pagination(); ?>
          <!-- pagination -->
        </nav>

        <!-- CTAボタンここから -->
        <div class="container mb-5 mt-5">
          <a href="<?php echo home_url(); ?>">
            <picture>
              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/banner_bottom.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/banner_bottom.png" alt="<?php bloginfo('name'); ?>" class="img-fluid" loading="lazy"
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
