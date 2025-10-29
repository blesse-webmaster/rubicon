<?php $categories = get_categories(); ?>
<?php
$year_month = Null;
$year = Null;
$month = Null;
$args = [
  'post_type' => 'post', //投稿タイプを指定
  'orderby' => 'date', // 日付順で表示
  'order' => 'DESC',
  'posts_per_page' => -1 // すべての投稿を表示
];
$the_query = new WP_Query($args);
?>


<a href="<?= home_url(); ?>/" class="d-none d-md-block">
  <picture>
    <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/banner_top.webp">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/img/banner_top.png" alt="マンション駐輪場の改修・リニューアルガイド" class="img-fluid w-100" loading="lazy"
      width="300" height="260">
  </picture>
</a>

<section class="my-3">
  <?php foreach ($categories as $category): ?>
    <h2 class="black side-tit"><a href="<?= home_url(); ?>/<?php echo $category->slug ?>" class="black f-mincho text-decoration-none"><?php echo $category->name; ?></a></h2>
    <ul class="list-unstyled">
      <?php $my_query = new WP_Query(['cat' => $category->term_id, 'posts_per_page' => -1,]); ?>
      <?php if ($my_query->have_posts()): ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
          <li class="mb-2 pb-2 border-bottom"><a href="<?php the_permalink(); ?>" class="gray text-decoration-none"><?php the_title(); ?></a></li>
        <?php endwhile; ?>
    </ul>
    <?php wp_reset_postdata(); ?>
  <?php else: ?>
    <p>投稿はありません。</p>
  <?php endif; ?>
<?php endforeach; ?>
</section>

<section class="my-3">
  <h2 class="black f-mincho side-tit text-decoration-none">カテゴリー</h2>
  <ul class="list-unstyled">
    <?php foreach ($categories as $category): ?>
      <li class="mb-2 pb-2 border-bottom">
        <a class="gray text-decoration-none" href="<?= home_url(); ?>/<?php echo $category->slug ?>">
          <?php echo $category->name ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</section>

<section class="my-3">
  <h2 class="black side-tit">アーカイブ</h2>
  <ul class="list-unstyled">
    <!-- 月別アーカイブリスト -->
    <?php if ($the_query->have_posts()) : ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <?php if ($year_month != get_the_date('Y.m')) : // 同じ年月でなければ表示 
        ?>
          <?php $year_month = get_the_date('Y.m'); ?>
          <?php $year = get_the_date('Y'); // 年の取得 
          ?>
          <?php $month = get_the_date('m'); // 月の取得 
          ?>
          <li class="mb-2 pb-2 border-bottom">
            <a href="<?= home_url(); ?>/<?php echo $year; ?>/<?php echo $month; ?>/" class="gray text-decoration-none">
              <?php echo $year; ?>年<?php echo $month; ?>月
            </a>
          </li>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
  </ul>
</section>