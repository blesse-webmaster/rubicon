<?php
get_header('top');
$upload_dir = wp_upload_dir();
$upload = $upload_dir['baseurl'];

$information = get_posts(array('posts_per_page' => 12,));
?>
<img src="<?php echo get_theme_file_uri(); ?>/assets/img/circle-chevron-right-solid.svg" class="img-fluid mr05" loading="lazy" alt="矢印アイコン" height="15" width="15">
<a class="d-block text-center text-white text-decoration-none py-3" href="<?php echo home_url(); ?>/knowledge/">特集記事をみる</a> </div>

<section class="pt-4 pt-lg-5 pb-5">
  <div class="container">
    <div class="mb80-40">
      <h2 class="black fs-2 fw-bold f-mplus-2 z-1 position-relative">記事一覧</h2>
    </div>
    <div class="row mb-3">
      <?php foreach ($information as $post): ?>
        <?php setup_postdata($post); ?>
        <?php $cat = get_the_category(); ?>
        <?php $category = $cat[0]->name; ?>
        <?php $category_slug = $cat[0]->slug; ?>
        <div class="col-6 col-lg-3 mb-3">
          <div class="position-relative"> <a class="black link-box" href="<?php the_permalink(); ?>"></a>
            <?php if (has_post_thumbnail()): ?>
              <?php //アイキャッチ画像を設定している場合 
              ?>
              <?php $post_title = get_the_title(); ?>
              <?php the_post_thumbnail('medium', array('alt' => $post_title, 'class' => 'img-fluid object-fit-cover height120p', 'loading' => 'lazy', 'style' => "height:150px; object-fit: cover;")); ?>
            <?php else: ?>
              <?php //アイキャッチ画像を設定していない場合 
              ?>
              <figure>
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/news01.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/news01.png" alt="<?php echo wp_trim_words(get_the_title(), 45, '...'); ?>" class="img-fluid object-fit-cover height120p" loading="lazy" height="400" width="800" style="height:150px; object-fit: cover;">
                </picture>
              </figure>
            <?php endif; ?>
            <p class="d-block text-decoration-none mb05 blue mt05 f90 strong" href="<?php the_permalink(); ?>"><?php echo $category ?></p>
            <h3 class="text-decoration-none black fw-normal fs-6" href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 45, '...'); ?></h3>
            <p class="d-block text-decoration-none black text-end f80" href="<?php the_permalink(); ?>">
              公開 <?php the_time('Y.m.d'); ?> / 更新 <?php the_modified_time('Y.m.d'); ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <div class="d-flex justify-content-center">
      <div class="bg_black rounded"> <a class="d-block text-decoration-none text-white py-3 px-5 rounded" href="<?= home_url(); ?>/articles">記事一覧へ</a> </div>
    </div>
  </div>
  </div>
</section>
</main>
<!-- コンテンツここまで -->

<?php
get_footer();
