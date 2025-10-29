<?php
$h1 = the_title('', '', false) . ' | ' . get_bloginfo('name');
//現在のページ(自動取得)
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
  'paged' => $paged,
  "post_status" => "publish",
);

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
      <article id="blog" class="col-lg-8 col-12">
        <!-- 記事ここから -->
        <h2 class="mt-0"><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <!-- 記事ここまで -->

        <!-- CTAボタンここから -->
        <div class="container mb-5 mt-5">
          <a href="<?php echo home_url(); ?>" class="d-none d-lg-block">
            <picture>
              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/banner_bottom.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/banner_bottom.png" alt="マンション駐輪場の改修・リニューアルガイド" class="img-fluid" loading="lazy"
                width="1098" height="259">
            </picture>
          </a>
        </div>
        <!-- CTAボタンここまで -->
      </article>
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
