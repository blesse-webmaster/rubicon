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
      <h2 class="bg-white bg-opacity-50 px-5 py-3"><?php echo $cat[0]->cat_name; ?></h2>
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
          <h2 class="mt-0"><?php the_title(); ?></h2>
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
