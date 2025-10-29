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
<footer class="p-0 bg_sky_blue">
  <div class="container">
    <div class="py-4 py-lg-5 border-bottom-white-1px">
      <div class="row mb-lg-2">
        <div class="col-12 col-lg-5 mb-5">
          <div class="border-bottom-white-1px">
            <h3 class="fs-5 fw-bold py-2 mb-0 white">カテゴリー</h3>
          </div>
          <ul class="nav d-flex flex-column mt-3">
            <?php foreach ($categories as $category): ?>
              <li class="nav-item mb-1"><a href="<?= home_url(); ?>/<?php echo $category->slug ?>" class="nav-link text-decoration-none p-0 white"><?php echo $category->name ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="col-12 col-lg-7">
          <div class="border-bottom-white-1px">
            <h3 class="fs-5 fw-bold py-2  mb-0 white">アーカイブ</h3>
          </div>
          <ul class="nav row mt-3">
            <?php if ($the_query->have_posts()) : ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <?php if ($year_month != get_the_date('Y.m')) : // 同じ年月でなければ表示 
                  $year_month = get_the_date('Y.m');
                  $year = get_the_date('Y'); // 年の取得
                  $month = get_the_date('m'); // 月の取得
                ?>
                  <li class="nav-item mb-1 col-6 col-sm-4 col-lg-3"><a href="<?= home_url(); ?>/<?php echo $year; ?>/<?php echo $month; ?>/" class="nav-link text-decoration-none white p-0"><?php echo $year; ?>年<?php echo $month; ?>月</a></li>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
          </ul>
        </div>
        <div class="col-12 mt-4 mt-lg-5">
          <div class="border_blue_1px bg-white rounded-pill text-start py-2 px-3 mx-auto">
            <p class="mb-0 blue f14px">免責事項：当サイトは2025年8月時点の情報をもとに作成しています。最新の情報は必ず、各社の公式サイトをご確認ください。</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pb-3">
    <div class="container">
      <div class="d-flex flex-column flex-lg-row justify-content-lg-between py-4">
        <ul class="nav">
          <li class="nav-item mb-2 me-3"><a href="<?php echo home_url(); ?>/" class="nav-link p-0 white">HOME</a></li>
          <li class="nav-item mb-2 me-3"><a href="<?php echo home_url(); ?>/privacypolicy" class="nav-link p-0 white">プライバシーポリシー</a></li>
          <li class="nav-item mb-2 me-3"><a href="<?php echo home_url(); ?>/profile" class="nav-link p-0 white">運営者情報</a></li>
          <li class="nav-item mb-2 me-3"><a href="<?php echo home_url(); ?>/sitemap" class="nav-link p-0 white">サイトマップ</a></li>
        </ul>
        <p class="small white">&copy; Copyright <?php bloginfo('name'); ?> All Rights Reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- フッタここまで -->
<script src="<?php echo get_theme_file_uri(); ?>/assets/js/jquery.min.js"></script>
<script>
  // 内部リンククリック時にハンバーガーメニューを閉じる
  $(function() {
    $('a[href^="#"]').on('click', function() {
      // スクロール処理
      var adjust = -80;
      var speed = 200;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top + adjust;
      $('body,html').animate({
        scrollTop: position
      }, speed, 'swing');

      // ハンバーガーメニューが開いている場合は閉じる
      if ($('.navbar-collapse').hasClass('show')) {
        $('.navbar-toggler').trigger('click');
      }
      return false; // ページ遷移を防ぐ
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
  // const ham = $('.btn-hamburger');
  // const nav = $('#navbarNavDropdown');
  // ham.on('click', function() { 
  //   ham.toggleClass('active'); 
  //   nav.toggleClass('active'); 
  //   $('.header-nav').toggleClass('bg-white-on'); 
  // });
  // $('.nav-item').not('.dropdown').on('click', function(event) {
  //   ham.trigger('click');
  // });

  // ハンバーガーメニュークリック時にメニューを閉じる
  // Bootstrapのcollapseイベントを利用
$('#navbarNavDropdown').on('show.bs.collapse', function () {
  $('.header-nav').addClass('bg-white-on');
});
$('#navbarNavDropdown').on('hide.bs.collapse', function () {
  $('.header-nav').removeClass('bg-white-on');
});

// メニュー内リンクをクリックしたら閉じる
$('.nav-item a').on('click', function() {
  $('#navbarNavDropdown').collapse('hide');
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

  //   フローティングバナー
  $(function() {
    $(document).ready(function() {
      $('.banner-close').click(function() {
        $(this).parent().hide();
      });
    });
  });

  window.onload = init();

  function init() {
    const accordion_items = document.querySelectorAll(".accordion_title");
    for (var i = 0; i < accordion_items.length; i++) {
      accordion_items[i].addEventListener("click", function() {
        this.nextElementSibling.classList.toggle("show");
        this.classList.toggle("active");
        if (this.classList.contains("active")) {
          this.nextElementSibling.style.height =
            // 40は余白分
            this.nextElementSibling.children[0].clientHeight + 40 + "px";
        } else {
          this.nextElementSibling.style.height = 0;
        }
      });
    }
  }
</script>

<script async src="<?php echo get_theme_file_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>

<?php wp_footer(); ?>
</body>

</html>