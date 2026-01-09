<?php
$h1 = the_title('', '', false) . ' | ' . get_bloginfo('name');
$cat = get_the_category();
/**
 * Template Post Type: post
 */

get_header();
?>
<!-- コンテンツここから -->
<main>
  <!-- メイン画像ここから -->
  <div class="bg-sub">
    <div style="height:30px;"></div>
    <div class="d-flex justify-content-center align-items-center h-100">
      <p class="bg-white bg-opacity-50 px-5 py-3  fs-2"><?php echo $cat[0]->cat_name; ?></p>
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
        <div>
          <h1 class="mt-0 fs-3"><?php the_title(); ?></h1>
          <div class="mt-3 mb-3 me-1 ta_r">
            <div class="d-inline bg_blue white p-1 me-1 f12px"><?php echo $cat[0]->cat_name; ?></div>
            <div class="d-inline f12px">公開：<?php the_time('Y.m.d'); ?>　更新：<?php the_modified_date('Y.m.d'); ?></div>
          </div>
          <?php if (has_post_thumbnail()) : //アイキャッチ画像を設定している場合 
          ?>
            <?php $post_title = get_the_title(); ?>
            <?php the_post_thumbnail('full', array('alt' => $post_title, 'class' => 'img-fluid border border-dark')); ?>
          <?php else : //アイキャッチ画像を設定していない場合 
          ?>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/img-news01.png" alt="<?php the_title(); ?>" class="img-fluid border border-dark">
          <?php endif; ?>

          <?php $source = get_post_meta($post->ID, 'source_name', true); ?>
          <?php if (!empty($source)): ?>
            <div>引用元：<a href="<?php echo get_post_meta($post->ID, 'source_URL', true); ?>" target="_blank" class=""><?php echo $source ?></a></div>
          <?php elseif (get_post(get_post_thumbnail_id())->post_excerpt) : ?>
            <div class="image-caption text-right small mb-5" style="margin-top:-20px"><?php echo get_post(get_post_thumbnail_id())->post_excerpt ?></div>
          <?php endif; ?>

          <?php the_content(); ?>
        </div>
        <!-- 記事ここまで -->

        <!-- CTAボタンここから -->
        <div class="container mb-5 mt-5">
          <a href="<?php echo home_url(); ?>">
            <picture>
              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/banner_bottom.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/banner_bottom.png" alt="大阪市北区の不動産売却ガイド" class="img-fluid" loading="lazy"
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
