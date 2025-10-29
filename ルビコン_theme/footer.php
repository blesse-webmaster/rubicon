<?php
$categories = get_categories();
$year_month = Null;
$year = Null;
$month = Null;
$args = array(
  'post_type' => 'post', //投稿タイプを指定
  'orderby' => 'date', // 日付順で表示
  'order' => 'DESC',
  'posts_per_page' => -1 // すべての投稿を表示
);
$the_query = new WP_Query($args);
?>
<!-- フッタここから -->
<footer class="p-0 bg_black">
  <div class="container">
    <div class="p-2 p-lg-5">
      <div class="row mb-5">
        <div class="col-12 col-lg-6 mb-3">
          <div class="mb-3 border-left-white">
            <p class="m-0 fs-5 fw-bold ps-3 text-white">カテゴリー</p>
            <hr class="text-white my-2">
          </div>
          <ul class="nav d-flex flex-column">
            <?php foreach ($categories as $category): ?>
              <li class="nav-item mb-1"><a href="<?= home_url(); ?>/<?php echo $category->slug ?>" class="nav-link text-decoration-none text-white p-0"><?php echo $category->name ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="col-12 col-lg-6">
          <div class="mb-3 border-left-white">
            <p class="m-0 fs-5 fw-bold ps-3 text-white">アーカイブ</p>
            <hr class="text-white my-2">
          </div>
          <ul class="nav d-flex flex-column">
            <?php if ($the_query->have_posts()) : ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <?php if ($year_month != get_the_date('Y.m')) : // 同じ年月でなければ表示 
                  $year_month = get_the_date('Y.m');
                  $year = get_the_date('Y'); // 年の取得
                  $month = get_the_date('m'); // 月の取得
                ?>
                  <li class="nav-item mb-1"><a href="<?= home_url(); ?>/<?php echo $year; ?>/<?php echo $month; ?>/" class="nav-link text-decoration-none text-white p-0"><?php echo $year; ?>年<?php echo $month; ?>月</a></li>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
          </ul>
        </div>
      </div>

      <hr class="text-white">

      <div class="d-flex flex-column flex-lg-row justify-content-lg-between pt-2">
        <ul class="nav">
          <li class="nav-item mb-2 me-5"><a href="<?= home_url(); ?>/" class="nav-link p-0 text-white">ホーム</a></li>
          <li class="nav-item mb-2 me-5"><a href="<?= home_url(); ?>/privacypolicy" class="nav-link p-0 text-white">プライバシーポリシー</a></li>
          <li class="nav-item mb-2 me-5"><a href="<?= home_url(); ?>/profile" class="nav-link p-0 text-white">運営者情報</a></li>
          <li class="nav-item mb-2 me-5"><a href="<?= home_url(); ?>/sitemap" class="nav-link p-0 text-white">サイトマップ</a></li>
        </ul>
        <p class="text-white small">&copy; <?php bloginfo('name'); ?></p>
      </div>
    </div>
  </div>
</footer>
<!-- フッタここまで -->

<script src="<?php echo get_theme_file_uri(); ?>/assets/js/jquery.min.js"></script>
<script>
  // ページ内遷移位置調整
  $(function() {
    $('a[href^="#"]').click(function() {
      var adjust = -80; //調整値
      var speed = 200;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top + adjust;
      $('body,html').animate({
        scrollTop: position
      }, speed, 'swing');
      return false;
    });
  });
  // ヘッダー背景変更
  $(function() {
    $(window).on('scroll', function() {
      if ($('.header-nav').height() < $(this).scrollTop()) {
        $('.header-nav').addClass('change-color');
      } else {
        $('.header-nav').removeClass('change-color');
      }
    });
  });
  // ハンバーガーメニュークリック時にメニューを閉じる
  const ham = $('.btn-hamburger');
  const nav = $('#navbarNavDropdown');
  ham.on('click', function() { //ハンバーガーメニューをクリックしたら
    ham.toggleClass('active'); // ハンバーガーメニューにactiveクラスを付け外し
    nav.toggleClass('active'); // ナビゲーションメニューにactiveクラスを付け外し
  });
  $('.nav-link').not('.dropdown-item').not('.dropdown-toggle').on('click', function(event) {
    ham.trigger('click');
  });
  // ドロップダウンメニュー以外をクリックしたらメニューが閉じる
  $(document).ready(function() {
    $(document).click(function(event) {
      var clickover = $(event.target);
      var _opened = $(".navbar-collapse").hasClass("show");
      if (_opened === true && !clickover.closest(".navbar").length) {
        $(".navbar-toggler").click();
      }
    });
  });

  // ポップアップ
  $(document).ready(function() {
    $('.clickable-image').on('click', function() {
      var src = $(this).attr('src');
      $('body').append(
        '<div class="modal">' +
        '<span class="close">&times;</span>' +
        '<img class="modal-content" src="' + src + '">' +
        '</div>'
      );
      $('.modal').fadeIn();

      $('.close').on('click', function() {
        $('.modal').fadeOut(function() {
          $(this).remove();
        });
      });
    });
  });
</script>
<script async src="<?php echo get_theme_file_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>