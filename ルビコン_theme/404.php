<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootscore
 */

get_header();
?>
<main> 
  <!-- メイン画像ここから -->
    <div class="bg-sub">
      <div style="height:30px;"></div>
      <div class="d-flex justify-content-center align-items-center h-100 ta_c">
        <h2 class="bg-white bg-opacity-50 px-5 py-3">404<br>
        <span class="small">not found</span></h2>
      </div>
    </div>	
  <section class="mt100 mb100">
    <div class="container">
      <div class="articleAreaText">
        <p class="mt100-50 mb50-20 ta_c f120">ページが見つかりません</p>
        <div class="mt-5 mb-5 w50per al_c"><div class="bg_black rounded pt10 pb10"><a class="d-block text-center text-white text-decoration-none py-2"
            href="<?= home_url(); ?>/">トップページへ</a></div></div>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
