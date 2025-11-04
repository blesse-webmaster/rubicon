<?php
get_header('top');
$upload_dir = wp_upload_dir();
$upload = $upload_dir['baseurl'];

$information = get_posts(array('posts_per_page' => 12,));
?>
<main class="container-fluid p-0">
  <div class="bg-fv bg_blue pt-5">
    <div class="container mt-4">
      <div class="row align-items-center">
        <!-- 左側のコンテンツ -->
        <div class="col-lg-7">
          <!-- メインキャッチコピー -->
          <div class="text-white mb-3">
            <!-- SEO用テキスト（非表示） -->
            <h2 class="visually-hidden">知名度だけで不動産会社を選ぶと100万円以上損するかも！！</h2>
            <!-- メインタイトル画像 -->
            <picture>
              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/fv-title.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/fv-title.png" loading="lazy" alt="知名度だけで不動産会社を選ぶと100万円以上損するかも！！" class="img-fluid">
            </picture>
          </div>

          <!-- 説明文 -->
          <div class="bg_light_beige rounded-pill px-4 py-2 mb-4 text-center fv_subTitle">
            <p class="blue mb-0">「不動産売却は大手に任せれば安心」<br class="d-block d-lg-none d-md-none">「名前を知っているから」</p>
            <p class="blue mb-0">そんな理由だけで不動産会社を<br class="d-block d-lg-none d-md-none">選んでいませんか</p>
          </div>

          <!-- 詳細説明 -->
          <!-- <div class="text-white small lh-base">
                            <p class="mb-2">地域性が強く出る不動産売却では「会社選び」が最重要課題します。同じ物件でも、<br>会社によっては最終的な売却額に100万円以上もの差が出ることもあるのです。</p>
                            <p class="mb-2">このメディアでは、不動産売却を成功させるために確認すべき「会社選びの重要ポイント」をわかりやすく解説します。</p>
                            <p class="mb-0">地域密着・大手のメリットデメリットをしっかり見極めて、あなたにピッタリの相談先を見つけてください。</p>
                        </div> -->
          <div class="text-center d-none d-lg-block">
            <a href="#recomend">
              <picture>
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/fv_cta.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/fv_cta.png" loading="lazy" alt="大阪市北区で仲介に強い不動産会社3選！" class="img-fluid w50" height="180" width="350">
              </picture>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- メインコンテンツここから -->
  <!-- INDEX -->
  <div class="bg_blue">
    <div class="container px-2">
      <ul class="row list-unstyled mb-0 justify-content-center align-items-center">
        <li class="col-6 col-lg text-center px-1 px-md-2 border_right_solid_vertical">
          <p class="white py-2 text-decoration-none d-flex flex-column align-items-center justify-content-center fs-4 mb-0">
            INDEX
          </p>
        </li>
        <li class="col-6 col-lg text-center px-1 px-md-2 border_right_solid_vertical">
          <a href="#point" class="white py-2 text-decoration-none d-flex flex-column align-items-center justify-content-center f14px">
            大阪市北区の<br>不動産会社選びの<br>ポイント
          </a>
        </li>
        <li class="col-6 col-lg text-center px-1 px-md-2 border_right_solid_vertical">
          <a href="#comparison" class="white py-2 text-decoration-none d-flex flex-column align-items-center justify-content-center f14px">
            仲介と買取の<br>違いは？
          </a>
        </li>
        <li class="col-6 col-lg text-center px-1 px-md-2 border_right_solid_vertical">
          <a href="#recomend" class="white py-2 text-decoration-none d-flex flex-column align-items-center justify-content-center f14px">
            仲介に強い<br>不動産会社3選
          </a>
        </li>
        <li class="col-6 col-lg text-center px-1 px-md-2 border_right_solid_vertical">
          <a href="#price" class="white py-2 text-decoration-none d-flex flex-column align-items-center justify-content-center f14px">
            大阪市北区の<br>不動産売却相場
          </a>
        </li>
        <li class="col-6 col-lg text-center px-1 px-md-2 mb-2 border_right_solid_vertical">
          <a href="#faq" class="white py-2 text-decoration-none d-flex flex-column align-items-center justify-content-center f14px">
            不動産売却<br>よくある質問
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="py-4 py-lg-5 bg_sky_blue">
    <div class="container text-lg-center f14px white px-2">
      <p>地域性が強く出る不動産売却では<span class="yellow fw-bold">「会社選び」</span>が最重要課題します。同じ物件でも、<br class="d-none d-lg-block">会社によっては最終的な売却額に100万円以上もの差が出ることもあるのです。</p>
      <p>このメディアでは、不動産売却を成功させるために確認すべき<br class="d-none d-lg-block"><span class="yellow fw-bold">「会社選びの重要ポイント」</span>をわかりやすく解説します。</p>
      <p class="mb-0">地域密着・大手のメリットデメリットをしっかり見極めて、<br class="d-none d-lg-block">あなたにピッタリの相談先を見つけてください。</p>
    </div>
  </div>


  <section id="recomend" class="py-5 bg_light_blue">
    <div class="container">
      <!-- ヘッダー部分 -->
      <div class="text-center mb-2">
        <div class="bg_blue yellow py-2 px-4 d-inline-block mb-4">
          <p class="fs-3 mb-0 fw-bold">大阪市北区の家を<br class="d-block d-lg-none d-md-none">売りたい方必見！</p>
        </div>
        <h2 class="display-4 fw-bold mb-2">
          地域密着・<br class="d-block d-lg-none d-md-none">大手から選ぶ<br>
          仲介に強い<br class="d-block d-lg-none d-md-none">不動産会社<span class="text-danger display-3 fw-bold">3</span><span class="text-danger fw-bold">選</span>！
        </h2>
      </div>
      <div class="text-end mb-0">
        <p class="f13px text-secondary mb-0">※2025年8月時点の情報です。</p>
      </div>

      <!-- 3つの会社 -->
      <div class="row flex-nowrap overflow-x-auto d-lg-flex flex-lg-wrap pt-5">
        <!-- 1. 株式会社ルビコン -->
        <div class="col-12 col-lg-4">
          <div class="position-relative bg-white" style="margin-top: 30px;">
            <!-- 会社名 -->
            <div class="bg_blue text-white text-center d-flex align-items-end justify-content-center" style="height: 120px;">
              <h3 class="m-0 fw-bold fs-3 pb-2"><span class="fs-5">株式会社</span><br>ルビコン</h3>
            </div>

            <!-- 上部の黄色いタブ -->
            <div class="bg_yellow text-dark text-center rounded-pill position-absolute d-flex align-items-center justify-content-center" style="top: -45px; left: 0; right: 0; z-index: 10; height: 78px;">
              <div>
                <p class="mb-0 fw-bold f16px">中崎町・天六周辺で高値売却を狙うなら！</p>
                <p class="mb-0 f13px">大手で取り扱いが難しい物件の<br>ご相談もお任せ！</p>
              </div>
            </div>

            <!-- 画像エリア -->
            <div class="p-0 border-blue-inset">
              <div class="mb-3">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/rubicon.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/rubicon.png" loading="lazy" alt="株式会社ルビコン" class="img-fluid w-100" height="180" width="350">
                </picture>
              </div>
              <div class="text-end mt-3 me-2">
                <p class="f13px text-secondary">引用元：<a href="https://www.rubi.co.jp/" target="_blank" class="text-black mb-0">株式会社ルビコン</a></p>
              </div>

              <!-- ボタン部分 -->
              <div class="p-3 mb-3">
                <div class="d-grid gap-2">
                  <a href="https://www.rubi.co.jp/" class="btn bg_red text-white fw-bold py-2 shadow  position-relative" role="button" target="_blank">
                    ルビコンの<br>公式HPはこちら
                    <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                      <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                    </picture>
                  </a>
                  <a href="<?php echo home_url() ?>/corporate/a001/" class="btn bg_sky_blue text-white fw-bold py-2 shadow position-relative">
                    ルビコンの<br>口コミ・評判記事はこちら！
                    <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                      <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                    </picture>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 2. 東急リバブル株式会社 -->
        <div class="col-12 col-lg-4">
          <div class="position-relative bg-white" style="margin-top: 30px;">
            <!-- 会社名 -->
            <div class="bg_blue text-white text-center d-flex align-items-end justify-content-center" style="height: 120px;">
              <h3 class="m-0 fw-bold fs-4 pb-2">東急リバブル株式会社<br><span class="fs-5">梅田センター</span>
              </h3>
            </div>

            <!-- 上部の黄色いタブ -->
            <div class="bg_yellow text-dark text-center rounded-pill position-absolute d-flex align-items-center justify-content-center" style="top: -45px; left: 0; right: 0; z-index: 10; height: 78px;">
              <div>
                <p class="mb-0 fw-bold f16px">大手ならではの信頼と実績！</p>
                <p class="mb-0 f13px">オンライン対応で</p>
                <p class="mb-0 f13px">遠方の方も安心</p>
              </div>
            </div>

            <!-- 画像エリア -->
            <div class="p-0 border-blue-inset">
              <div class="mb-3">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/tokyuribaburu.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/tokyuribaburu.png" loading="lazy" alt="東急リバブル株式会社" class="img-fluid w-100" height="180" width="350">
                </picture>
              </div>
              <div class="text-end mt-3 me-2">
                <p class="f13px text-secondary">引用元：<a href="https://www.livable.co.jp/branch/umeda/" target="_blank" rel="nofollow" class="text-black mb-0">東急リバブル株式会社 梅田センター</a></p>
              </div>
              <!-- ボタン部分 -->
              <div class="p-3 mb-3">
                <div class="d-grid gap-2">
                  <a href="https://www.livable.co.jp/kansai/" class="btn bg_red text-white fw-bold py-2 shadow  position-relative" role="button" target="_blank" rel="nofollow">
                    東急リバブルの<br>公式HPはこちら
                    <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                      <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                    </picture>
                  </a>
                  <a href="<?php echo home_url() ?>/corporate/a002/" class="btn bg_sky_blue text-white fw-bold py-2 shadow position-relative">
                    東急リバブルの<br>口コミ・評判記事はこちら！
                    <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                      <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                    </picture>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 3. 住友不動産ステップ株式会社 -->
        <div class="col-12 col-lg-4">
          <div class="position-relative bg-white" style="margin-top: 30px;">
            <!-- 会社名 -->
            <div class="bg_blue text-white text-center d-flex align-items-end justify-content-center" style="height: 120px;">
              <h3 class="m-0 fw-bold fs-4 pb-2"><span class="fs-6">すみふの仲介ステップ 梅田統括事業所1課</span><br>住友不動産ステップ株式会社</h3>
            </div>

            <!-- 上部の黄色いタブ -->
            <div class="bg_yellow text-dark text-center rounded-pill position-absolute d-flex align-items-center justify-content-center" style="top: -45px; left: 0; right: 0; z-index: 10; height: 78px;">
              <div>
                <p class="mb-1 fw-bold f16px">住友不動産グループの総合力！</p>
                <p class="mb-0 f13px">専任担当者による一貫対応！</p>
              </div>
            </div>

            <!-- 画像エリア -->
            <div class="p-0 border-blue-inset">
              <div class="mb-3">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/sumifunochukai.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/sumifunochukai.png" loading="lazy" alt="東急リバブル株式会社" class="img-fluid w-100" height="180" width="350">
                </picture>
              </div>
              <div class="text-end mt-3 me-2">
                <p class="f13px text-secondary">引用元：<a href="https://www.stepon.co.jp/center/umeda/" target="_blank" rel="nofollow" class="text-black mb-0 f12px">すみふの仲介ステップ 梅田統括事業所1課</a></p>
              </div>
              <!-- ボタン部分 -->
              <div class="p-3 mb-3">
                <div class="d-grid gap-2">
                  <a href="https://www.stepon.co.jp/uri/" class="btn bg_red text-white fw-bold py-2 shadow position-relative" role="button" target="_blank" rel="nofollow">
                    すみふの仲介ステップの<br>公式HPはこちら
                    <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                      <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                    </picture>
                  </a>
                  <a href="<?php echo home_url() ?>/corporate/a003/" class="btn bg_sky_blue text-white fw-bold py-2 shadow position-relative">
                    すみふの仲介ステップの<br>口コミ・評判記事はこちら！
                    <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                      <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                    </picture>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 bg_sky_blue" id="point">
    <div class="container">
      <!-- ヘッダー部分 -->
      <div class="text-center text-white mb-5">
        <div class="mb-3 ">
          <picture>
            <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/r_point_lead.webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/img/r_point_lead.png" loading="lazy" alt="知名度だけで不動産会社を選ぶと100万円以上損するかも" class="img-fluid" height="100" width="560">
          </picture>
        </div>
        <h2 class="mb-0 fw-bold lh-base">
          大阪市北区の<br class="d-block d-lg-none"><span class="yellow display-4">不動産会社選び</span>の<br class="d-block d-lg-none">
          <span class="border border-white px-2 py-1 ms-2">ポ</span>
          <span class="border border-white px-2 py-1">イ</span>
          <span class="border border-white px-2 py-1">ン</span>
          <span class="border border-white px-2 py-1">ト</span>
        </h2>
      </div>
      <div class="row">
        <!-- ポイント01 -->
        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
          <div class="h-100 bg-white py-4 px-2">
            <!-- ポイント番号 -->
            <div class="text-center mb-3">
              <span class="text-muted">ポイント</span>
              <div class="centerline_heading__point">
                <h3 class="display-4 fw-bold blue mb-0">01</h3>
              </div>
            </div>

            <!-- タイトル -->
            <p class="text-center fw-bold mb-4 fs-4">
              <span class="blue fs-3">地域の物件事情</span>に<br>詳しい会社か？
            </p>

            <!-- 画像エリア -->
            <div class="mb-3">
              <picture>
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/point-01.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/point-01.png" loading="lazy" alt="01" class="object-fit-cover w-100" height="200" width="350">
              </picture>
            </div>

            <!-- 説明文 -->
            <div class="small">
              <ul class="list-unstyled">
                <li class="mb-2">• 地価や取引事例、買主層などを“エリア単位”で把握しているか</li>
                <li>• 路地裏や連棟、再建築不可などの難物件への対応経験があるか</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- ポイント02 -->
        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
          <div class="h-100 bg-white py-4 px-2">
            <!-- ポイント番号 -->
            <div class="text-center mb-3">
              <span class="text-muted">ポイント</span>
              <div class="centerline_heading__point">
                <h3 class="display-4 fw-bold blue mb-0">02</h3>
              </div>
            </div>

            <!-- タイトル -->
            <p class="text-center fw-bold mb-4 fs-4">
              <span class="blue fs-3">法律・相続・税務</span>まで<br>対応できる体制があるか？
            </p>

            <!-- 画像エリア -->
            <div class="mb-3">
              <picture>
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/point-02.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/point-02.png" loading="lazy" alt="02" class="object-fit-cover w-100" height="200" width="350">
              </picture>
            </div>

            <!-- 説明文 -->
            <div class="small">
              <ul class="list-unstyled mx-2">
                <li class="mb-2">• 司法書士・弁護士・税理士などと連携し複雑なケースに対応可能か</li>
                <li>• 相続・共有名義・空き家など、よくある問題を先回りしてサポートできるか</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- ポイント03 -->
        <div class="col-12 col-lg-4">
          <div class="h-100 bg-white py-4 px-2">
            <!-- ポイント番号 -->
            <div class="text-center mb-3">
              <span class="text-muted">ポイント</span>
              <div class="centerline_heading__point">
                <h3 class="display-4 fw-bold blue mb-0">03</h3>
              </div>
            </div>

            <!-- タイトル -->
            <p class="text-center fw-bold mb-4 fs-4">
              専任担当者が“<span class="blue fs-3">一貫して</span>”<br>対応してくれるか？
            </p>

            <!-- 画像エリア -->
            <div class="mb-3">
              <picture>
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/point-03.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/point-03.png" loading="lazy" alt="03" class="object-fit-cover w-100" height="200" width="350">
              </picture>
            </div>

            <!-- 説明文 -->
            <div class="small">
              <ul class="list-unstyled mx-2">
                <li class="mb-2">• 売主との信頼関係を重視する体制か<br>（専任制or分業制か）</li>
                <li>• 査定〜成約後の引き渡し・アフター対応まで見届けてくれるか</li>
              </ul>
            </div>

            <!-- </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 地域密着 or 大手の違いセクション -->
  <section class="py-5 bg_light_beige" id="comparison">
    <div class="container">
      <!-- ヘッダー部分 -->
      <div class="text-center mb-4 mb-lg-5">
        <p class="fw-bold fs-2 mb-0">地域密着 or 大手の違いは？</p>
        <div class="text-center">
          <h2 class="mb-0 title-comparison">それぞれの強み・特徴を比較！</h2>
        </div>
      </div>

      <!-- 比較カード -->
      <div class="row mb-5">
        <!-- 地域密着型 -->
        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
          <div class="h-100 bg-hikaku-01 rounded-2 px-4">
            <div class="text-center mb-3">
              <h3 class="text-danger fw-bold fs-3">地域密着型</h3>
              <hr>
            </div>

            <!-- 特徴リスト -->
            <ul class="list-unstyled">
              <li class="mb-2">• 地元での買主ネットワークが豊富</li>
              <li class="mb-2">• エリアの細かい特性（アクセス・再開発など）にも精通</li>
              <li class="mb-2">• 築古住宅や連棟、共有物件など難物件の相談実績が豊富</li>
            </ul>
          </div>
        </div>

        <!-- 大手仲介業者 -->
        <div class="col-12 col-lg-6">
          <div class="h-100 bg-hikaku-02 rounded-2 px-4">
            <!-- タイトル -->
            <div class="text-center mb-3">
              <h3 class="text-danger fw-bold fs-3">大手仲介業者</h3>
              <hr>
            </div>

            <!-- 特徴リスト -->
            <ul class="list-unstyled">
              <li class="mb-2">• 全国的なネットワークや実績件数における安心感</li>
              <li class="mb-2">• 転勤・住み替えなど広域展開ニーズへの対応力</li>
              <li class="mb-2">• 社内システム（AI化など）・オペレーションが<br class="d-none d-lg-block">整備されている</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- 結論セクション -->
      <div class="bg_yellow text-center rounded-1 py-3 mb-5 col-12 col-lg-8 mx-auto">
        <h4 class="mb-0 fw-bold">結論</h4>
      </div>

      <div class="text-center mb-5">
        <p class="fw-bold mb-2 mb-lg-3 fs-3">高く売るならまずは</p>
        <h3 class="fw-bold fs-3 lh-sm">
          <span class="red">「地域密着型」<br class="d-block d-lg-none d-md-none"></span>に相談がおすすめ！
        </h3>
      </div>

      <!-- チェックリスト -->
      <div class="row justify-content-center">
        <div class="col-12 col-lg-8 rounded-1 bg-white py-4 px-5">
          <div class="list-group list-group-flush">
            <div class="list-group-item border-0 bg-transparent">
              <div class="d-flex align-items-center">
                <picture class="me-2">
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_black.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_black.png" loading="lazy" alt="チェックアイコン" class="object-fit-cover" height="28" width="28">
                </picture>
                <p class="m-0 fw-bold">「高く売れる買主に届く」売却戦略が取れる</p>
              </div>
            </div>
            <div class="list-group-item border-0 bg-transparent">
              <div class="d-flex align-items-center">
                <picture class="me-2">
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_black.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_black.png" loading="lazy" alt="チェックアイコン" class="object-fit-cover" height="28" width="28">
                </picture>
                <p class="m-0 fw-bold">価格の"根拠説明"が丁寧かつ納得感がある</p>
              </div>
            </div>
            <div class="list-group-item border-0 bg-transparent">
              <div class="d-flex align-items-center">
                <picture class="me-2">
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_black.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_black.png" loading="lazy" alt="チェックアイコン" class="object-fit-cover" height="28" width="28">
                </picture>
                <p class="m-0 fw-bold">相談時点で「エリア×物件タイプ」の成約傾向を示してくれる</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- バナーセクション -->
 <section class="py-4">
    <div class="container">
      <div class="position-relative bg-pr rounded p-4" style="min-height: 200px;">
        <!-- 背景画像 -->
        <div class="position-absolute top-0 start-0 w-100 h-100 rounded">
          <div class="d-flex align-items-center justify-content-start h-100">
            <div class="justify-content-center mx-2 mx-md-3">
              <!-- メインテキスト -->
              <div class="mb-3 mt-5">
                <div class="text-center text-lg-center">
                  <p class="fw-bold d-flex align-items-start align-items-sm-center justify-content-start mb-0">
                    <span class="bg-warning text-black px-3 py-1 me-2 fw-bold f12px">PR</span>
                    <span class="fs-3 fs-sm-18px">大阪市北区／中崎町・天六周辺の<br class="d-block d-lg-none d-md-none">不動産売却なら</span>
                  </p>
                  <p class="mt-0 fs-3 fw-bold fs-sm-18px text-center">築古・連棟など難物件のご相談も!</p>
                </div>
              </div>

              <!-- CTAボタン -->
              <div class="mb-5">
                <div class="text-center">
                  <a href="https://www.rubi.co.jp/inquiry.php" class="btn bg_red text-white fw-bold py-3 px-5 position-relative" role="button" target="_blank">
                    不動産売却についてルビコンにお問い合わせ
                    <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                      <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                    </picture>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 仲介と買取の比較セクション -->
  <section class="py-5" style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);">
    <div class="container">
      <!-- ヘッダー -->
      <div class="text-center mb-5">
        <p class="text-white fw-bold fs-2 mb-0">仲介と買取の違いは？
        </p>
        <div class="text-center">
          <h2 class="mb-0 title-meri">メリットとデメリットを解説！</h2>
        </div>
      </div>
      <!-- 比較表 -->
      <div class="row mb-5">
        <!-- 仲介（左側） -->
        <div class="col-12 col-lg-6">
          <div class="h-100 border-0">
            <!-- ヘッダー -->
            <div class="bg_sky_blue text-white text-center py-3">
              <h3 class="mb-0 fw-bold fs-4">仲介<br class="d-block d-lg-none">（おすすめ：高く売りたい人）</h3>
            </div>

            <!-- ボディ -->
            <div class="p-1 text-center bg-white">
              <!-- 売却価格 -->
              <div class="bg_light-gray py-4 mb-1">
                <h5 class="fw-bold mb-2">売却価格</h5>
                <div class="text-center mb-2">
                  <picture>
                    <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_black.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_black.png" loading="lazy" alt="チェックアイコン" class="object-fit-cover" height="28" width="28">
                  </picture>
                </div>
                <p class="small text-muted mb-0">市場相場で売れる／高値売却の可能性が高い</p>
              </div>

              <!-- 売却までのスピード -->
              <div class="bg_light-gray py-4 mb-1">
                <h5 class="fw-bold mb-2">売却までのスピード</h5>
                <div class="text-center mb-2">
                  <picture>
                    <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_batu_black.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_batu_black.png" loading="lazy" alt="バツアイコン" class="object-fit-cover" height="28" width="28">
                  </picture>
                </div>
                <p class="small text-muted mb-0">買主探しに時間がかかることも（3ヶ月以上が目安）</p>
              </div>

              <!-- 手間の少なさ -->
              <div class="bg_light-gray py-4 mb-1">
                <h5 class="fw-bold mb-2">手間の少なさ</h5>
                <div class="text-center mb-2">
                  <picture>
                    <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_batu_black.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_batu_black.png" loading="lazy" alt="バツアイコン" class="object-fit-cover" height="28" width="28">
                  </picture>
                </div>
                <p class="small text-muted mb-0">内覧対応や書類準備などの手間がかかる</p>
              </div>

              <!-- 費用 -->
              <div class="bg_light-gray py-4 mb-1">
                <h5 class="fw-bold mb-2">費用</h5>
                <div class="text-center mb-2">
                  <picture>
                    <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_black.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_black.png" loading="lazy" alt="チェックアイコン" class="object-fit-cover" height="28" width="28">
                  </picture>
                </div>
                <p class="small text-muted mb-0">仲介手数料のみ（売却価格に応じて法定上限）</p>
                <div class="text-end mt-2 me-2">
                  <p class="f13px text-secondary">※その他取引成立時に税金等が発生</p>
                </div>
              </div>
            </div>

            <!-- フッター -->
            <div class="bg_yellow text-center py-3">
              <p class="fw-bold mb-0 text-dark">こんな方におすすめ</p>
            </div>
            
            <!-- タブレット以下でのみ表示するおすすめ説明 -->
            <div class="d-block d-lg-none mt-4 mb-5">
              <div class="bg_red text-white py-3 rounded-3">
                <div class="d-flex align-items-center text-center">
                  <div class="flex-grow-1">
                    <p class="fw-bold m-0 fs-5">少し時間がかかっても<br class="d-block d-lg-none d-md-none">高く売りたい／</p>
                    <p class="fw-bold m-0 fs-5">納得感を重視したい人</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 買取（右側） -->
        <div class="col-12 col-lg-6">
          <div class="h-100 border-0">
            <!-- ヘッダー -->
            <div class="bg_yellow text-dark text-center py-3">
              <h3 class="mb-0 fw-bold fs-4">買取<br class="d-block d-lg-none">（おすすめ：早く売りたい人）</h3>
            </div>

            <!-- ボディ -->
            <div class="p-1 text-center bg-white">
              <!-- 売却価格 -->
              <div class="bg_light-gray py-4 mb-1">
                <h5 class="fw-bold mb-2">売却価格</h5>
                <div class="text-center mb-2">
                  <picture>
                    <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_batu_black.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_batu_black.png" loading="lazy" alt="バツアイコン" class="object-fit-cover" height="28" width="28">
                  </picture>
                </div>
                <p class="small text-muted mb-0">相場よりも低くなりがち<br class="d-block d-lg-none">（再販利益を見込んだ価格設定）</p>
              </div>

              <!-- 売却までのスピード -->
              <div class="bg_light-gray py-4 mb-1">
                <h5 class="fw-bold mb-2">売却までのスピード</h5>
                <div class="text-center mb-2">
                  <picture>
                    <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_black.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_black.png" loading="lazy" alt="チェックアイコン" class="object-fit-cover" height="28" width="28">
                  </picture>
                </div>
                <p class="small text-muted mb-0">最短数日〜1週間で現金化可能</p>
              </div>

              <!-- 手間の少なさ -->
              <div class="bg_light-gray py-4 mb-1">
                <h5 class="fw-bold mb-2">手間の少なさ</h5>
                <div class="text-center mb-2">
                  <picture>
                    <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_black.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_black.png" loading="lazy" alt="チェックアイコン" class="object-fit-cover" height="28" width="28">
                  </picture>
                </div>
                <p class="small text-muted mb-0">即決・内覧不要・瑕疵担保も免除されるケースが多い</p>
              </div>

              <!-- 費用 -->
              <div class="bg_light-gray py-4 mb-1">
                <h5 class="fw-bold mb-2">費用</h5>
                <div class="text-center mb-2">
                  <picture>
                    <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_black.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_black.png" loading="lazy" alt="チェックアイコン" class="object-fit-cover" height="28" width="28">
                  </picture>
                </div>
                <p class="small text-muted mb-0">仲介手数料不要（直接取引のため）</p>
                <div class="text-end mt-2 me-2">
                  <p class="f13px text-secondary">※その他取引成立時に税金等が発生</p>
                </div>
              </div>
            </div>

            <!-- フッター -->
            <div class="bg_sky_blue text-white text-center py-3">
              <p class="fw-bold mb-0">こんな方におすすめ</p>
            </div>
            
            <!-- タブレット以下でのみ表示するおすすめ説明 -->
            <div class="d-block d-lg-none mt-4">
              <div class="bg_red text-white py-3 rounded-3">
                <div class="d-flex align-items-center text-center">
                  <div class="flex-grow-1">
                    <p class="fw-bold m-0 fs-5">とにかく早く・<br class="d-block d-lg-none d-md-none">確実に現金化したい／</p>
                    <p class="fw-bold m-0 fs-5">価格は重視しない人</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 下部のおすすめ説明（デスクトップのみ表示） -->
      <div class="row d-none d-lg-flex">
        <div class="col-12 col-lg-6 mb-3 mb-lg-0">
          <div class="bg_red text-white py-3 rounded-3">
            <div class="d-flex align-items-center text-center">
              <div class="flex-grow-1">
                <p class="fw-bold m-0 fs-4">少し時間がかかっても<br class="d-block d-lg-none">高く売りたい／</p>
                <p class="fw-bold m-0 fs-4">納得感を重視したい人</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="bg_red text-white py-3 rounded-3">
            <div class="d-flex align-items-center text-center">
              <div class="flex-grow-1">
                <p class="fw-bold m-0 fs-4">とにかく早く・<br class="d-block d-lg-none">確実に現金化したい／</p>
                <p class="fw-bold m-0 fs-4">価格は重視しない人</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="company">
    <div class="background-reccomend_bg pt-4 pt-lg-5">
      <div class="container mb-5 pb-5">
        <div class="text-center">
          <div class="bg_blue yellow py-2 px-4 d-inline-block mb-5 speech-box position-relative">
            <p class="fs-3 mb-0 fw-bold">大阪市北区の家を<br class="d-block d-lg-none d-md-none">売りたい方必見！</p>
          </div>
          <h2 class="fs-1 fw-bold">
            地域密着・大手から選ぶ<br>
            仲介に強い不動産会社<br class="d-block d-lg-none"><span class="red display-3 fw-bold">3</span><span class="text-danger fw-bold">選</span>！
          </h2>
        </div>
        <div class="text-end mt-3 me-2">
          <p class="f13px text-secondary"><span class="bg-white">※2025年8月時点の情報です。</span></p>
        </div>
      </div>
    </div>
    <div class="position-relative bg_sky_blue container">
      <div class="bg_yellow text-dark p-2 text-center rounded-pill position-absolute mb-4" style="top: -45px; left: 5%; right: 5%; z-index: 10; min-height: 70px;">
        <p class="m-0 fw-bold fs-5">中崎町・天六周辺で<br class="d-block d-lg-none d-md-none">高値売却を狙うなら！</p>
        <p class="m-0">大手で取り扱いが難しい物件の<br class="d-block d-lg-none d-md-none">ご相談もお任せ！</p>
      </div>
      <h2 class="text-center text-white mt-5 mb-4 pt-5 pb-4 fw-bold fs-1 ls2 text-shadow_black" style="padding-top: 6rem !important;"><span class="fs-3">株式会社</span>ルビコン</h2>
    </div>

    <!-- 株式会社ルビコンの特徴セクション -->
    <div class="py-5 mb-5">
      <div class="container">
        <!-- セクションタイトル -->
        <div class="mb-5 centerline_heading text-center">
          <h3 class="fw-bold">株式会社ルビコンの<br class="d-block d-lg-none">特徴</h3>
        </div>

        <!-- 特徴グリッド -->
        <div class="row mb-5 justify-content-center">
          <!-- 特徴1: 中崎町・天六エリアに特化 -->
          <div class="col-12 col-lg-6 mb-4 mb-lg-3">
            <div class="bg-white">
              <picture class="mb-3">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/rubi-img01.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/rubi-img01.png" loading="lazy" alt="中崎町・天六エリアに特化" class="img-fluid object-fit-cover w-100" height="200" width="220">
              </picture>
              <div class="bg_gray py-3 px-3 height-80px d-flex align-items-center">
                <p class="m-0">中崎町・天六エリアに特化。地域特性や売却相場を熟知。</p>
              </div>
            </div>
          </div>

          <!-- 特徴2: 築古や連棟など難物件にも対応 -->
          <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <div class="bg-white">
              <picture class="mb-3">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/rubi-img02.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/rubi-img02.png" loading="lazy" alt="築古や連棟など難物件にも対応" class="img-fluid object-fit-cover w-100" height="200" width="220">
              </picture>
              <div class="bg_gray py-3 px-3 height-80px d-flex align-items-center">
                <p class="m-0">築古や連棟、共有名義などの"難物件"にも対応。</p>
              </div>
            </div>
          </div>

          <!-- 特徴3: 弁護士・税理士と主業と連携し、法的に複雑なケースも無料相談可能 -->
          <div class="col-12 col-lg-6 mb-4 mb-lg-3">
            <div class="bg-white">
              <picture class="mb-3">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/rubi-img03.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/rubi-img03.png" loading="lazy" alt="弁護士・税理士と主業と連携" class="img-fluid object-fit-cover w-100" height="200" width="220">
              </picture>
              <div class="bg_gray py-3 px-3 height-80px d-flex align-items-center">
                <p class="m-0">弁護士・税理士などと主業と連携し、法的に複雑なケースも<br class="d-none d-lg-block">無料相談可能。</p>
              </div>
            </div>
          </div>

          <!-- 特徴4: 専任担当制で、最初から最後まで同じ担当が対応 -->
          <div class="col-12 col-lg-6 mb-4 mb-lg-3">
            <div class="bg-white">
              <picture class="mb-3">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/rubi-img04.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/rubi-img04.png" loading="lazy" alt="専任担当制で一貫対応" class="img-fluid object-fit-cover w-100" height="200" width="220">
              </picture>
              <div class="bg_gray py-3 px-3 height-80px d-flex align-items-center">
                <p class="m-0">専任担当制で、最初から最後まで同じ担当が伴走。</p>
              </div>
            </div>
          </div>
        </div>

        <!-- CTAボタンエリア -->
        <div class="px-lg-5 mt-0 mt-lg-4">
          <div class="d-flex flex-column flex-md-row justify-content-center w-100 px-3 px-lg-5 gap-5">
            <a href="https://www.rubi.co.jp/inquiry.php" class="btn max-w-348 w-100 btn-arrow bg_red white position-relative hover-reverse-oapcity py-2 fw-bold text-center" role="button" target="_blank">
              不動産売却について<br>ルビコンにお問い合わせ
              <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
              </picture>
            </a>
            <a href="<?php echo home_url() ?>/corporate/a001/" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-center">
              ルビコンの<br>口コミ・評判記事はこちら！
              <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
              </picture>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-5 pb-5">
      <div class="mb-5 centerline_heading text-center">
        <h3 class="fw-bold">株式会社ルビコンの<br class="d-block d-lg-none">会社概要</h3>
      </div>
      <div class="mt-5 px-lg-5 mb-3 pb-3">
        <div class="row align-items-center">
          <div class="col-lg-6 pe-lg-4">
            <table class="table comparison-table w-100">
              <tbody class="fw-bold">
                <tr>
                  <td class="w35-25 border-dashed-gray pt-4 pb-3 text-nowrap">会社名</td>
                  <td class="border-dashed-gray pt-4 pb-3">株式会社ルビコン</td>
                </tr>
                <tr>
                  <td class="w35-25 border-dashed-gray pt-4 pb-3 text-nowrap">住所</td>
                  <td class="border-dashed-gray pt-4 pb-3">〒530-0016<br>大阪府大阪市北区中崎3-3-7<br>ロイヤルメゾン中崎町Nビル201</td>
                </tr>
                <tr>
                  <td class="w35-25 border-dashed-gray pt-4 pb-3 text-nowrap">電話番号</td>
                  <td class="border-dashed-gray pt-4 pb-3">06-6136-3604</td>
                </tr>
                <tr>
                  <td class="w35-25 border-dashed-gray pt-4 pb-3 text-nowrap">公式URL</td>
                  <td class="border-dashed-gray pt-4 pb-3"><a href="https://www.rubi.co.jp/" target="_blank" class="text-link">https://www.rubi.co.jp/</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- Google Map 埋め込み -->
          <div class="col-lg-6">
            <div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.8570204015136!2d135.50226107554664!3d34.70878607291678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6bf59cc5cf3%3A0x7ec9aca4c18d13c0!2z5qCq5byP5Lya56S-44Or44OT44Kz44Oz!5e0!3m2!1sja!2sjp!4v1760093920846!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
      <!-- CTAボタンエリア -->
      <div class="px-lg-5 mt-0 mb-5 mt-lg-4">
        <div class="d-flex flex-column flex-md-row justify-content-center w-100 px-3 px-lg-5 gap-5">
          <a href="https://www.rubi.co.jp/inquiry.php" class="btn max-w-348 w-100 btn-arrow bg_red white position-relative hover-reverse-oapcity py-2 fw-bold text-center" role="button" target="_blank">
            不動産売却について<br>ルビコンにお問い合わせ
            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
            </picture>
          </a>
          <a href="<?php echo home_url() ?>/corporate/a001/" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-center">
            ルビコンの<br>口コミ・評判記事はこちら！
            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
            </picture>
          </a>
        </div>
      </div>
      <div class="mb-5 centerline_heading text-center">
        <h3 class="fw-bold">株式会社ルビコンの<br class="d-block d-lg-none">口コミ・評判</h3>
      </div>
      <!-- 口コミコンテンツ -->
      <div class="row mb-5">
        <!-- 口コミ01 -->
        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
          <div class="bg_light-gray p-4 h-100 position-relative">
            <!-- 口コミテキスト -->
            <div>
              <p class="text-dark">口コミ</p>
            </div>
            <!-- 口コミ番号とアイコン群画像 -->
            <div class="d-flex align-items-start mb-5">
              <div class="fs-2 lh100 fw-bold blue me-1">01</div>
              <div class="text-center">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/r_kuti01.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/r_kuti01.png" loading="lazy" alt="人物アイコン" class="img-fluid object-fit-cover w-50" height="130" width="220">
                </picture>
              </div>
            </div>

            <!-- 口コミ内容 -->
            <div class="small lh-base mb-5">
              <p class="mb-3">色々な不動産会社に相談したけど対応頂けなかった借地権付建物を、親身になって話を聞いて頂き対応してくださいました。</p>
              <p class="mb-0">他社とは違う対応に驚きました。会社は規模じゃなく人だと思いました。また困った時は相談したいと思います。</p>
            </div>

            <!-- 引用元 -->
            <div class="position-absolute end-0 bottom-0 ps-4 pb-3 me-4">
              <p class="text-muted">引用元：<a href="https://share.google/8pKzdUXeOEwpEaHGo" target="_blank" rel="nofollow" class="text-darkmb-0">Google</a></p>
            </div>
          </div>
        </div>

        <!-- 口コミ02 -->
        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
          <div class="bg_light_blue p-4 h-100 position-relative">
            <!-- 口コミテキスト -->
            <div>
              <p class="text-dark">口コミ</p>
            </div>
            <!-- 口コミ番号とアイコン群画像 -->
            <div class="d-flex align-items-start mb-5">
              <div class="fs-2 lh100 fw-bold blue me-1">02</div>
              <div class="text-center">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/r_kuti02.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/r_kuti02.png" loading="lazy" alt="人物アイコン" class="img-fluid object-fit-cover w-50" height="130" width="220">
                </picture>
              </div>
            </div>

            <!-- 口コミ内容 -->
            <div class="small lh-base mb-5">
              <p class="mb-3">今まで長年付き合いのある業者さんに頼んでいたのですが入居者が付かず困っておりました。</p>
              <p class="mb-0">その後、ルビコンさんに頼んですぐに入居者さまがついたので感謝しております。</p>
            </div>

            <!-- 引用元 -->
            <div class="position-absolute end-0 bottom-0 ps-4 pb-3 me-4">
              <p class="text-muted">引用元：<a href="https://share.google/eWnkmh665txXr5gxw" target="_blank" rel="nofollow" class="text-darkmb-0">Google</a></p>
            </div>
          </div>
        </div>

        <!-- 口コミ03 -->
        <div class="col-12 col-lg-4">
          <div class="bg_light-gray p-4 h-100 position-relative">
            <!-- 口コミテキスト -->
            <div>
              <p class="text-dark">口コミ</p>
            </div>
            <!-- 口コミ番号とアイコン群画像 -->
            <div class="d-flex align-items-start mb-5">
              <div class="fs-2 lh100 fw-bold blue me-1">03</div>
              <div class="text-center">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/r_kuti03.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/r_kuti03.png" loading="lazy" alt="人物アイコン" class="img-fluid object-fit-cover w-50" height="130" width="220">
                </picture>
              </div>
            </div>

            <!-- 口コミ内容 -->
            <div class="small lh-base mb-5">
              <p class="mb-3">中崎町で店舗物件を探していたところ、このエリアに強いというルビコンさんをご紹介して頂きました。</p>
              <p class="mb-0">重飲食店舗ということでそれまでなかなかいい物件と巡り会えなかったのですが、とても親身になってご相談にのって頂き、迅速に物件紹介から契約まで丁寧にご対応頂けて感謝です！</p>
            </div>

            <!-- 引用元 -->
            <div class="position-absolute end-0 bottom-0 ps-4 pb-3 me-4">
              <p class="text-muted">引用元：<a href="https://share.google/yCSP64yuNvcafJ9rO" target="_blank" rel="nofollow" class="text-darkmb-0">Google</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- CTAボタンエリア -->
      <div class="px-lg-5 mt-0 mt-lg-4">
        <div class="d-flex flex-column flex-md-row justify-content-center w-100 px-3 px-lg-5 gap-5">
          <a href="https://www.rubi.co.jp/" class="btn max-w-348 w-100 btn-arrow bg_red white position-relative hover-reverse-oapcity py-2 fw-bold text-center" role="button" target="_blank">
            ルビコンの<br>公式HPはこちら
            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
            </picture>
          </a>
          <a href="<?php echo home_url() ?>/corporate/a001/" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-center">
            ルビコンの<br>口コミ・評判記事はこちら！
            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
            </picture>
          </a>
        </div>
      </div>
    </div>

    <!-- 東急リバブル -->
    <div class="position-relative bg_sky_blue container">
      <div class="bg_yellow text-dark p-2 text-center rounded-pill position-absolute mb-4" style="top: -45px; left: 5%; right: 5%; z-index: 10;">
        <p class="m-0 fw-bold fs-5">大手ならではの信頼と実績！</p>
        <p class="m-0">オンライン対応で遠方の方も安心！</p>
      </div>
      <h2 class="text-center text-white mt-5 mb-4 pt-5 pb-4 fw-bold fs-1 ls2 text-shadow_black">東急リバブル<br class="d-block d-lg-none"><span class="fs-3">株式会社 梅田センター</span></h2>
    </div>

    <div class="py-5 mb-5">
      <div class="container">
        <!-- セクションタイトル -->
        <div class="mb-5 centerline_heading text-center">
          <h3 class="fw-bold">東急リバブル株式会社<br class="d-block d-lg-none"> 梅田センターの特徴</h3>
        </div>

        <!-- 特徴グリッド -->
        <div class="row mb-5 justify-content-center">
          <div class="col-12 col-lg-6 mb-4 mb-lg-3">
            <div class="bg-white">
              <picture class="mb-3">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/livable-img01.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/livable-img01.png" loading="lazy" alt="東証プライム上場グループの安心感と豊富な実績" class="img-fluid object-fit-cover w-100" height="200" width="220">
              </picture>
              <div class="bg_gray py-3 px-3 height-80px">
                <p>東証プライム上場グループの安心感と豊富な実績。</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 mb-4 mb-lg-3">
            <div class="bg-white">
              <picture class="mb-3">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/livable-img02.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/livable-img02.png" loading="lazy" alt="大阪市内にも複数拠点あり" class="img-fluid object-fit-cover w-100" height="200" width="220">
              </picture>
              <div class="bg_gray py-3 px-3 height-80px">
                <p>全国に226店舗展開（2025年5月25日時点）、大阪市内にも<br class="d-none d-lg-block">複数拠点あり。</p>
              </div>
            </div>
          </div>

          <!-- 特徴3: 弁護士・税理士と主業と連携し、法的に複雑なケースも無料相談可能 -->
          <div class="col-12 col-lg-6 mb-4 mb-lg-3">
            <div class="bg-white">
              <picture class="mb-3">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/livable-img03.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/livable-img03.png" loading="lazy" alt="多彩な広告手法で早期売却を支援早期売却を支援" class="img-fluid object-fit-cover w-100" height="200" width="220">
              </picture>
              <div class="bg_gray py-3 px-3 height-80px">
                <p>ポータルサイトや自社ネットワークなど、多彩な広告手法で<br class="d-none d-lg-block">早期売却を支援。</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 mb-4 mb-lg-3">
            <div class="bg-white">
              <picture class="mb-3">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/livable-img04.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/livable-img04.png" loading="lazy" alt="充実した売却サポートが魅力" class="img-fluid object-fit-cover w-100" height="200" width="220">
              </picture>
              <div class="bg_gray py-3 px-3 height-80px">
                <p>リバブル売却保証など、充実した売却サポートが魅力。</p>
              </div>
            </div>
          </div>
        </div>

        <!-- CTAボタンエリア -->
        <div class="px-lg-5 mt-0 mt-lg-4">
          <div class="d-flex flex-column flex-md-row justify-content-center w-100 px-3 px-lg-5 gap-5">
            <a href="https://www.livable.co.jp/kansai/" class="btn max-w-348 w-100 btn-arrow bg_red white position-relative hover-reverse-oapcity py-2 fw-bold text-center" role="button" target="_blank" rel="nofollow">
              東急リバブルの<br>公式HPはこちら
              <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
              </picture>
            </a>
            <a href="<?php echo home_url() ?>/corporate/a002/" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-center">
              東急リバブルの<br>口コミ・評判記事はこちら！
              <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
              </picture>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-5 pb-5">
      <div class="mb-5 centerline_heading text-center">
        <h3 class="fw-bold">東急リバブル株式会社<br class="d-block d-lg-none"> 梅田センターの<br class="d-block d-lg-none">会社概要</h3>
      </div>
      <div class="mt-5 px-lg-5 mb-3 pb-3">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6">
            <table class="table comparison-table w-100">
              <tbody class="fw-bold">
                <tr>
                  <td class="w35-25 border-dashed-gray pt-4 pb-3">会社名</td>
                  <td class="border-dashed-gray pt-4 pb-3">東急リバブル株式会社 梅田センター</td>
                </tr>
                <tr>
                  <td class="w35-25 border-dashed-gray pt-4 pb-3">住所</td>
                  <td class="border-dashed-gray pt-4 pb-3">〒530-0001<br>大阪府大阪市北区梅田1-11-4-152<br>大阪駅前第4ビル1F</td>
                </tr>
                <tr>
                  <td class="w35-25 border-dashed-gray pt-4 pb-3">電話番号</td>
                  <td class="border-dashed-gray pt-4 pb-3">0120-109-635</td>
                </tr>
                <tr>
                  <td class="w35-25 border-dashed-gray pt-4 pb-3">公式URL</td>
                  <td class="border-dashed-gray pt-4 pb-3"><a href="https://www.livable.co.jp/branch/umeda/" target="_blank" rel="nofollow" class="text-link">https://www.livable.co.jp/branch/umeda/</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- Google Map 埋め込み -->
          <div class="col-lg-6">
            <div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.8570204015136!2d135.50226107554664!3d34.70878607291678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6ed233111a7%3A0x9d1ca11ec411f4e1!2z5p2x5oCl44Oq44OQ44OW44OrIOaiheeUsOOCu-ODs-OCv-ODvA!5e0!3m2!1sja!2sjp!4v1760093932096!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
      <!-- CTAボタンエリア -->
      <div class="px-lg-5 mt-0 mb-5 mt-lg-4">
        <div class="d-flex flex-column flex-md-row justify-content-center w-100 px-3 px-lg-5 gap-5">
          <a href="https://www.livable.co.jp/branch/umeda/" class="btn max-w-348 w-100 btn-arrow bg_red white position-relative hover-reverse-oapcity py-2 fw-bold text-center" role="button" target="_blank" rel="nofollow">
            不動産売却について<br>東急リバブルにお問い合わせ！
            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
            </picture>
          </a>
          <a href="<?php echo home_url() ?>/corporate/a002/" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-center">
            東急リバブルの<br>口コミ・評判記事はこちら！
            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
            </picture>
          </a>
        </div>
      </div>
      <div class="mb-5 centerline_heading text-center">
        <h3 class="fw-bold">東急リバブル株式会社<br class="d-block d-lg-none"> 梅田センターの<br class="d-block d-lg-none">口コミ・評判</h3>
      </div>
      <!-- 口コミコンテンツ -->
      <div class="row mb-5">
        <!-- 口コミ01 -->
        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
          <div class="bg-light p-4 h-100 position-relative">
            <!-- 口コミテキスト -->
            <div>
              <p class="text-dark">口コミ</p>
            </div>
            <!-- 口コミ番号とアイコン群画像 -->
            <div class="d-flex align-items-start mb-5">
              <div class="fs-2 lh100 fw-bold blue me-1">01</div>
              <div class="text-center">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/r_kuti01.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/r_kuti01.png" loading="lazy" alt="人物アイコン" class="img-fluid object-fit-cover w-50" height="130" width="220">
                </picture>
              </div>
            </div>

            <!-- 口コミ内容 -->
            <div class="small lh-base mb-5">
              <p class="mb-3">最初２社で検討しておりましたが、当方の事情をしっかり汲み取ってくださり、最適な提案をしてくれたことで、取引を決めさせていただきました。</p>
              <p class="pb-3">その後こちらの事情が変わった時も、それに合わせて対応いただき感謝しております。ありがとうございました。</p>
            </div>

            <!-- 引用元 -->
            <div class="position-absolute end-0 bottom-0 ps-4 pb-3 me-4">
              <p class="text-muted">引用元：<a href="https://www.livable.co.jp/branch/umeda/reviews/" target="_blank" rel="nofollow" class="text-darkmb-0">東急リバブル株式会社 梅田センター</a></p>
            </div>
          </div>
        </div>

        <!-- 口コミ02 -->
        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
          <div class="bg-primary-subtle p-4 h-100 position-relative">
            <!-- 口コミテキスト -->
            <div>
              <p class="text-dark">口コミ</p>
            </div>
            <!-- 口コミ番号とアイコン群画像 -->
            <div class="d-flex align-items-start mb-5">
              <div class="fs-2 lh100 fw-bold blue me-1">02</div>
              <div class="text-center">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/r_kuti02.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/r_kuti02.png" loading="lazy" alt="人物アイコン" class="img-fluid object-fit-cover w-50" height="130" width="220">
                </picture>
              </div>
            </div>

            <!-- 口コミ内容 -->
            <div class="small lh-base mb-5">
              <p class="mb-3">査定依頼をしてから、契約、引き渡しまで迅速に対応していただき、スムーズに売却することができて感謝しています。</p>
              <p class="pb-3">担当者さんの一つ一つの物件に熱意を以て接する様子に安心感が持てました。ありがとうございました。</p>
            </div>

            <!-- 引用元 -->
            <div class="position-absolute end-0 bottom-0 ps-4 pb-3 me-4">
              <p class="text-muted">引用元：<a href="https://www.livable.co.jp/branch/umeda/reviews/" target="_blank" rel="nofollow" class="text-darkmb-0">東急リバブル株式会社 梅田センター</a></p>
            </div>
          </div>
        </div>

        <!-- 口コミ03 -->
        <div class="col-12 col-lg-4">
          <div class="bg-light p-4 h-100 position-relative">
            <!-- 口コミテキスト -->
            <div>
              <p class="text-dark">口コミ</p>
            </div>
            <!-- 口コミ番号とアイコン群画像 -->
            <div class="d-flex align-items-start mb-5">
              <div class="fs-2 lh100 fw-bold blue me-1">03</div>
              <div class="text-center">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/r_kuti03.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/r_kuti03.png" loading="lazy" alt="人物アイコン" class="img-fluid object-fit-cover w-50" height="130" width="220">
                </picture>
              </div>
            </div>

            <!-- 口コミ内容 -->
            <div class="small lh-base mb-5">
              <p class="mb-3">担当者の方が終始丁寧かつ迅速に対応してくださり、安心して取引を進めることができました。不安もありましたが、質問にもすぐ答えてもらえたので助かりました。</p>
              <p class="pb-3">他社とも比較しましたが、提案内容や説明のわかりやすさは東急リバブルさんが一番でした。今後も知人に相談された際には紹介したいと思います。</p>
            </div>

            <!-- 引用元 -->
            <div class="position-absolute end-0 bottom-0 ps-4 pb-3 me-4 pt-3">
              <p class="text-muted">引用元：<a href="https://www.livable.co.jp/branch/umeda/reviews/" target="_blank" rel="nofollow" class="text-darkmb-0">東急リバブル株式会社 梅田センター</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- CTAボタンエリア -->
      <div class="px-lg-5 mt-0 mt-lg-4">
        <div class="d-flex flex-column flex-md-row justify-content-center w-100 px-3 px-lg-5 gap-5">
          <a href="https://www.livable.co.jp/kansai/" class="btn max-w-348 w-100 btn-arrow bg_red white position-relative hover-reverse-oapcity py-2 fw-bold text-center" role="button" target="_blank" rel="nofollow">
            東急リバブルの<br>公式HPはこちら
            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
            </picture>
          </a>
          <a href="<?php echo home_url() ?>/corporate/a002/" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-center">
            東急リバブルの<br>口コミ・評判記事はこちら！
            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
            </picture>
          </a>
        </div>
      </div>
    </div>

    <!-- すみふの仲介ステップ -->
    <div class="position-relative bg_sky_blue container">
      <div class="bg_yellow text-dark p-2 text-center rounded-pill position-absolute mb-4" style="top: -45px; left: 5%; right: 5%; z-index: 10;">
        <p class="m-0 fw-bold fs-5">住友不動産グループの総合力！</p>
        <p class="m-0">専任担当者による一貫対応！</p>
      </div>
      <h2 class="text-center text-white mt-5 mb-4 pt-5 pb-4 fw-bold fs-1 ls2 text-shadow_black">すみふの仲介ステップ<br class="d-block d-lg-none"><span class="fs-3">梅田統括事業所1課<br>住友不動産ステップ<br class="d-block d-lg-none d-md-none">株式会社</span></h2>
    </div>

    <div class="py-5 mb-5">
      <div class="container">
        <!-- セクションタイトル -->
        <div class="mb-5 centerline_heading text-center">
          <h3 class="fw-bold">すみふの仲介ステップ<br class="d-block d-lg-none"> 梅田統括事業所1課の<br class="d-block d-lg-none">特徴</h3>
        </div>
        <!-- 特徴グリッド -->
        <div class="row mb-5 justify-content-center">
          <div class="col-12 col-lg-4 mb-4 mb-lg-0">
            <div class="bg-white">
              <picture class="mb-3">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/step-img01.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/step-img01.png" loading="lazy" alt="全国規模のブランド力と50年以上の業界実績" class="img-fluid object-fit-cover w-100" height="200" width="220">
              </picture>
              <div class="bg_gray py-3 px-3 height-80px">
                <p>全国規模のブランド力と50年以上の<br class="d-none d-lg-block">業界実績。</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 mb-4 mb-lg-0">
            <div class="bg-white">
              <picture class="mb-3">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/step-img02.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/step-img02.png" loading="lazy" alt="ワンストップで対応可能" class="img-fluid object-fit-cover w-100" height="200" width="220">
              </picture>
              <div class="bg_gray py-3 px-3 height-80px">
                <p>売却サポートから税金・相続まで<br class="d-none d-lg-block">ワンストップで対応可能。</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 mb-4 mb-lg-0">
            <div class="bg-white">
              <picture class="mb-3">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/step-img03.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/step-img03.png" loading="lazy" alt="売却後の買主への安心感も支援" class="img-fluid object-fit-cover w-100" height="200" width="220">
              </picture>
              <div class="bg_gray py-3 px-3 height-80px">
                <p>建物検査や設備保証など、売却後の<br class="d-none d-lg-block">買主への安心感も支援。</p>
              </div>
            </div>
          </div>
        </div>

        <!-- CTAボタンエリア -->
        <div class="px-lg-5 mt-0 mt-lg-4">
          <div class="d-flex flex-column flex-md-row justify-content-center w-100 px-3 px-lg-5 gap-5">
            <a href="https://www.stepon.co.jp/uri/" class="btn max-w-348 w-100 btn-arrow bg_red white position-relative hover-reverse-oapcity py-2 fw-bold text-center" role="button" target="_blank" rel="nofollow">
              すみふの仲介ステップの<br>公式HPはこちら
              <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
              </picture>
            </a>
            <a href="<?php echo home_url() ?>/corporate/a003/" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-center">
              すみふの仲介ステップの<br>口コミ・評判記事はこちら！
              <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
              </picture>
            </a>
          </div>
        </div>

      </div>
    </div>
    <div class="container mb-5 pb-5">
      <div class="mb-5 centerline_heading text-center">
        <h3 class="fw-bold">すみふの仲介ステップ<br class="d-block d-lg-none"> 梅田統括事業所1課の<br class="d-block d-lg-none">会社概要</h3>
      </div>
      <div class="mt-5 px-lg-5 mb-3 pb-3">
        <div class="row align-items-center">
          <div class="col-lg-6 pe-lg-4">
            <table class="table comparison-table w-100">
              <tbody class="fw-bold">
                <tr>
                  <td class="w35-25 border-dashed-gray pt-4 pb-3 text-nowrap">屋号</td>
                  <td class="border-dashed-gray pt-4 pb-3">すみふの仲介ステップ 梅田統括事業所1課</td>
                </tr>
                <tr>
                  <td class="w35-25 border-dashed-gray pt-4 pb-3 text-nowrap">会社名</td>
                  <td class="border-dashed-gray pt-4 pb-3">住友不動産ステップ株式会社</td>
                </tr>
                <tr>
                  <td class="w35-25 border-dashed-gray pt-4 pb-3 text-nowrap">住所</td>
                  <td class="border-dashed-gray pt-4 pb-3">〒530-0001<br>大阪府大阪市北区梅田1-1-3-3100<br>大阪駅前第三ビル31F</td>
                </tr>
                <tr>
                  <td class="w35-25 border-dashed-gray pt-4 pb-3 text-nowrap">電話番号</td>
                  <td class="border-dashed-gray pt-4 pb-3">0120-051-232</td>
                </tr>
                <tr>
                  <td class="w35-25 border-dashed-gray pt-4 pb-3 text-nowrap">公式URL</td>
                  <td class="border-dashed-gray pt-4 pb-3"><a href="https://www.stepon.co.jp/center/umeda/" target="_blank" rel="nofollow" class="text-link">https://www.stepon.co.jp/center/umeda/</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- Google Map 埋め込み -->
          <div class="col-lg-6">
            <div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.2537680591677!2d135.49684107554623!3d34.69877877292039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6ed006d84ad%3A0x95907cdb814d9bc2!2z5L2P5Y-L5LiN5YuV55Sj44K544OG44OD44OXIOaiheeUsOe1seaLrOS6i-alreaJgO-8keiqsg!5e0!3m2!1sja!2sjp!4v1760093943923!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
      <!-- CTAボタンエリア -->
      <div class="px-lg-5 mt-0 mb-5 mt-lg-4">
        <div class="d-flex flex-column flex-md-row justify-content-center w-100 px-3 px-lg-5 gap-5">
          <a href="https://www.stepon.co.jp/center/umeda/" class="btn max-w-348 w-100 btn-arrow bg_red white position-relative hover-reverse-oapcity py-2 fw-bold text-center" role="button" target="_blank" rel="nofollow">
            不動産売却について<br>すみふの仲介ステップにお問い合わせ！
            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
            </picture>
          </a>
          <a href="<?php echo home_url() ?>/corporate/a003/" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-center">
            すみふの仲介ステップの<br>口コミ・評判記事はこちら！
            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
            </picture>
          </a>
        </div>
      </div>
      <div class="mb-5 centerline_heading text-center">
        <h3 class="fw-bold">すみふの仲介ステップ<br class="d-block d-lg-none">の口コミ・評判</h3>
      </div>
      <!-- 口コミコンテンツ -->
      <div class="row mb-5">
        <!-- 口コミ01 -->
        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
          <div class="bg-light p-4 h-100 position-relative">
            <!-- 口コミテキスト -->
            <div>
              <p class="text-dark">口コミ</p>
            </div>
            <!-- 口コミ番号とアイコン群画像 -->
            <div class="d-flex align-items-start mb-5">
              <div class="fs-2 lh100 fw-bold blue me-1">01</div>
              <div class="text-center">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/r_kuti01.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/r_kuti01.png" loading="lazy" alt="人物アイコン" class="img-fluid object-fit-cover w-50" height="130" width="220">
                </picture>
              </div>
            </div>

            <!-- 口コミ内容 -->
            <div class="small lh-base mb-5">
              <p class="mb-3">住友不動産さんに今回もお世話になりました。これで6回目の不動産取引となりますが毎回確実に丁寧に仕事をして頂き安心感は半端ないです。今回も梅田第一センターの笠井様に大変お世話になりました。細かく丁寧なアドバイスや確実な取引を推進して頂き本当に安心してお任せできました。お人柄も素晴らしく大変感謝しております。</p>
              <p class="mb-0">また何かありましたらよろしくお願いします。</p>
            </div>

            <!-- 引用元 -->
            <div class="position-absolute end-0 bottom-0 ps-4 pb-3 me-4">
              <p class="text-muted">引用元：<a href="https://share.google/DgtKCE31fOFftG89x" target="_blank" rel="nofollow" class="text-darkmb-0">Google</a></p>
            </div>
          </div>
        </div>

        <!-- 口コミ02 -->
        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
          <div class="bg-primary-subtle p-4 h-100 position-relative">
            <!-- 口コミテキスト -->
            <div>
              <p class="text-dark">口コミ</p>
            </div>
            <!-- 口コミ番号とアイコン群画像 -->
            <div class="d-flex align-items-start mb-5">
              <div class="fs-2 lh100 fw-bold blue me-1">02</div>
              <div class="text-center">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/r_kuti02.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/r_kuti02.png" loading="lazy" alt="人物アイコン" class="img-fluid object-fit-cover w-50" height="130" width="220">
                </picture>
              </div>
            </div>

            <!-- 口コミ内容 -->
            <div class="small lh-base mb-5">
              <p class="mb-3">マンション購入でお世話になりました。初めて中、担当の角垣さんが非常に丁寧にご対応頂の不動産購入で、わからない事が多々あるいたおかげで、無事、契約に至りました。</p>
              <p class="mb-0">また、何かあればお願いしたいと思います。</p>
            </div>

            <!-- 引用元 -->
            <div class="position-absolute end-0 bottom-0 ps-4 pb-3 me-4">
              <p class="text-muted">引用元：<a href="https://share.google/8yRkm057rhq9mUJVB" target="_blank" rel="nofollow" class="text-darkmb-0">Google</a></p>
            </div>
          </div>
        </div>

        <!-- 口コミ03 -->
        <div class="col-12 col-lg-4">
          <div class="bg-light p-4 h-100 position-relative">
            <!-- 口コミテキスト -->
            <div>
              <p class="text-dark">口コミ</p>
            </div>
            <!-- 口コミ番号とアイコン群画像 -->
            <div class="d-flex align-items-start mb-5">
              <div class="fs-2 lh100 fw-bold blue me-1">03</div>
              <div class="text-center">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/r_kuti03.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/r_kuti03.png" loading="lazy" alt="人物アイコン" class="img-fluid object-fit-cover w-50" height="130" width="220">
                </picture>
              </div>
            </div>

            <!-- 口コミ内容 -->
            <div class="small lh-base mb-5">
              <p class="mb-0">初めてで分からないことも多かったですが、担当していただいた角垣さまから丁寧にご説明いただけましたので、よかったと思います。</p>
            </div>

            <!-- 引用元 -->
            <div class="position-absolute end-0 bottom-0 ps-4 pb-3 me-4">
              <p class="text-muted">引用元：<a href="https://maps.app.goo.gl/ZFpGXScdhMNPZ25A9" target="_blank" rel="nofollow" class="text-darkmb-0">Google</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- CTAボタンエリア -->
      <div class="px-lg-5 mt-0 mt-lg-4">
        <div class="d-flex flex-column flex-md-row justify-content-center w-100 px-3 px-lg-5 gap-5">
          <a href="https://www.stepon.co.jp/uri/" class="btn max-w-348 w-100 btn-arrow bg_red white position-relative hover-reverse-oapcity py-2 fw-bold text-center" role="button" target="_blank" rel="nofollow">
            すみふの仲介ステップの<br>公式HPはこちら
            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
            </picture>
          </a>
          <a href="<?php echo home_url() ?>/corporate/a003/" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-center">
            すみふの仲介ステップの<br>口コミ・評判記事はこちら！
            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
            </picture>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- 大阪市北区の売却相場セクション -->
  <section class="py-5 bg_light_beige" id="price">
    <div class="container">
      <!-- セクションタイトル -->
      <div class="text-center mb-5">
        <h2 class="mb-4 mb-lg-5 fs-2 fw-bold">
          大阪市北区の<span class="blue fs-1">不動産売却相場</span>
        </h2>
      </div>

      <!-- 相場テーブル -->
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <div class="table-responsive">
            <table class="table table-bordered mb-0">
              <thead class="text-center">
                <tr>
                  <th class="bg_blue text-white fw-bold py-3">大阪市北区の戸建て</th>
                  <th class="bg_blue text-white fw-bold py-3">大阪市北区のマンション</th>
                  <th class="bg_blue text-white fw-bold py-3">大阪市北区の土地</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center py-4 bg-white">
                    <span class="h2 fw-bold text-danger">5,980</span><br class="d-block d-md-none"><span class="fs-5 text-danger fw-bold">万円</span>
                  </td>
                  <td class="text-center py-4 bg_light-gray">
                    <span class="h2 fw-bold text-danger">6,124</span><br class="d-block d-md-none"><span class="fs-5 text-danger fw-bold">万円</span>
                  </td>
                  <td class="text-center py-4 bg-white">
                    <span class="h2 fw-bold text-danger">6,775</span><br class="d-block d-md-none"><span class="fs-5 text-danger fw-bold">万円</span>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- 引用元 -->
            <div class="text-end mt-3 me-2">
              <p class="f13px text-secondary">引用元：suumo<a href="https://suumo.jp/baikyaku/chukoikkodate/soba/osaka/sc_osakashikita/" target="_blank" rel="nofollow" class="text-black mb-0"> 戸建て</a>
              <a href="https://suumo.jp/baikyaku/ms/chuko/soba/osaka/sc_osakashikita/" target="_blank" rel="nofollow" class="text-black mb-0">/マンション</a>
              <a href="https://suumo.jp/baikyaku/tochi/soba/osaka/sc_osakashikita/" target="_blank" rel="nofollow" class="text-black mb-0">/土地</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- バナーセクション -->
 <section class="py-4">
    <div class="container">
      <div class="position-relative bg-pr rounded p-4" style="min-height: 200px;">
        <!-- 背景画像 -->
        <div class="position-absolute top-0 start-0 w-100 h-100 rounded">
          <div class="d-flex align-items-center justify-content-start h-100">
            <div class="justify-content-center mx-2 mx-md-3">
              <!-- メインテキスト -->
              <div class="mb-3 mt-5">
                <div class="text-center text-lg-center">
                  <p class="fw-bold d-flex align-items-start align-items-sm-center justify-content-start mb-0">
                    <span class="bg-warning text-black px-3 py-1 me-2 fw-bold f12px">PR</span>
                    <span class="fs-3 fs-sm-18px">大阪市北区／中崎町・天六周辺の<br class="d-block d-lg-none d-md-none">不動産売却なら</span>
                  </p>
                  <p class="mt-0 fs-3 fw-bold fs-sm-18px text-center">築古・連棟など難物件のご相談も!</p>
                </div>
              </div>

              <!-- CTAボタン -->
              <div class="mb-5">
                <div class="text-center">
                  <a href="https://www.rubi.co.jp/inquiry.php" class="btn bg_red text-white fw-bold py-3 px-5 position-relative" role="button" target="_blank">
                    不動産売却についてルビコンにお問い合わせ
                    <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                      <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                    </picture>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FAQ -->
  <section class="py-4 py-lg-5 bg_white" id="faq">
    <div class="container">
      <div class="text-center mb-2">
        <h2 class="mb-4 mb-lg-5 fs-2 fw-bold">
          不動産売却の<span class="blue fs-1">よくある質問</span>
        </h2>
      </div>

      <div class="mx-auto">
        <div class="accordion" id="faqAccordion">
          <!-- Q1 -->
          <div class="accordion-item mb-3 rounded-3 overflow-hidden border_lightblue_1px">
            <h3 class="accordion-header" id="headingOne">
              <button class="accordion-button fs-5 px-4 py-3 black bg_white f-sm-20 faq-accordion-btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="border-radius:0;">
                <span class="me-3 fw-bold blue">Q</span>不動産を売るのに最適なタイミングはいつですか？
              </button>
            </h3>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
              <div class="accordion-body bg-white px-4 py-3">
                一般的には、春（3～4月）や秋（9～10月）が不動産市場が活発になる傾向があります。また、金利や税制優遇の影響も受けるため、経済動向<br>
                も確認しておくと安心です。売却理由や住み替えの事情に応じて、時期を調整することが大切です。
              </div>
            </div>
          </div>
          <!-- Q2 -->
          <div class="accordion-item mb-3 overflow-hidden">
            <h3 class="accordion-header" id="headingTwo">
              <button class="accordion-button fs-5 px-4 py-3 black bg_white collapsed f-sm-20 faq-accordion-btn rounded-3 border_lightblue_1px" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="border-radius:0;">
                <span class="me-3 fw-bold blue">Q</span>まず何から始めればいいですか？
              </button>
            </h3>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
              <div class="accordion-body bg-white fs-6 px-4 py-3">
                査定価格はあくまで目安であり、実際の売却価格とは異なることが多いです。売却時の市場状況や買い手の交渉、物件の状態によって価格が変動するため、査定価格は「売れる可能性のある価格帯」として捉えるのが現実的です。
              </div>
            </div>
          </div>
          <!-- Q3 -->
          <div class="accordion-item mb-3 overflow-hidden">
            <h3 class="accordion-header" id="headingThree">
              <button class="accordion-button fs-5 px-4 py-3 black bg_white collapsed f-sm-20 faq-accordion-btn rounded-3 border_lightblue_1px" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="border-radius:0;">
                <span class="me-3 fw-bold blue">Q</span>売却する際に必要な費用はありますか？
              </button>
            </h3>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
              <div class="accordion-body bg-white fs-6 px-4 py-3">
                早ければ1〜3か月で成約に至るケースもありますが、相場より高く設定した場合や築年数が古い物件は、半年以上かかることもあります。売却期間に余裕がある場合は、希望価格に近づけやすくなります。
              </div>
            </div>
          </div>
          <!-- Q4 -->
          <div class="accordion-item mb-3 overflow-hidden ">
            <h3 class="accordion-header" id="headingFour">
              <button class="accordion-button fs-5 px-4 py-3 black bg_white collapsed f-sm-20 faq-accordion-btn rounded-3 border_lightblue_1px" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="border-radius:0;">
                <span class="me-3 fw-bold blue">Q</span>住みながら売却活動はできますか？
              </button>
            </h3>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
              <div class="accordion-body bg-white fs-6 px-4 py-3">
                仲介は買い手を探して市場で売却する方法で、高く売れる可能性がありますが時間がかかることもあります。一方、買取は業者が直接物件を買い取るため、即現金化できますが価格はやや下がる傾向があります。状況に応じて使い分けることが大切です。
              </div>
            </div>
          </div>
          <!-- Q5 -->
          <div class="accordion-item mb-3 overflow-hidden">
            <h3 class="accordion-header" id="headingFive">
              <button class="accordion-button fs-5 px-4 py-3 black bg_white collapsed f-sm-20 faq-accordion-btn rounded-3 border_lightblue_1px" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="border-radius:0;">
                <span class="me-3 fw-bold blue">Q</span>査定価格はそのまま売れる金額ですか？
              </button>
            </h3>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
              <div class="accordion-body bg-white fs-6 px-4 py-3">
                仲介手数料、登記費用、契約書の印紙税、住宅ローンの残債がある場合は抵当権抹消費用などがかかります。また、売却益が出た場合には譲渡所得税が発生することもあるため、事前に資金計画を立てておくと安心です。
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 会社一覧 -->
  <section class="pt-4 pt-lg-5 pb-4 pb-lg-5" id="list">
    <div class="container">
      <div class="text-center mb-5">
        <div class="bg_blue yellow py-2 px-4 d-inline-block mb-4">
          <p class="fs-3 mb-0 fw-bold">大阪市北区の<br class="d-block d-lg-none d-md-none">不動産売却に対応</p>
        </div>
        <h2 class="mb-4 mb-lg-5 fs-2 fw-bold">
          <span class="blue fs-1">不動産会社</span>一覧
        </h2>
      </div>
      <div class="row box-parent">
        <div class="col-12 col-lg-4 d-flex box-child mb-3">
          <div class="box-child-text border_blue_2px w-100">
            <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
              <h3 class="fs-6 fw-bold  m-0 col-11">株式会社ルビコン</h3>
            </div>
            <div class="p-3 f13px">
              <p class="pb-2 mb-2 height-70 height-80-lg">不動産に関する様々な事に対応する仲介会社です。事業内容として、お客様の声をもとにしたサービス提供や、管理物件の取り扱いを行っています。</p>
              <dl class="mb-3">
                <dt class="black fw-bold">所在地</dt>
                <dd class="height-40-lg">〒530-0016<br>大阪府大阪市北区中崎3-3-7 ロイヤルメゾン中崎町Nビル201</dd>
              </dl>
              <dl class="row">
                <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-6136-3604</span></dt>
                <div class="text-start col-md-7 mt-1 mt-md-2">
                  <a href="<?php echo home_url() ?>/corporate/a001/" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                    記事で詳しく見る
                    <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                      <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                    </picture>
                  </a>
                </div>
              </dl>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.8570204015136!2d135.50226107554664!3d34.70878607291678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6bf59cc5cf3%3A0x7ec9aca4c18d13c0!2z5qCq5byP5Lya56S-44Or44OT44Kz44Oz!5e0!3m2!1sja!2sjp!4v1760093920846!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 d-flex box-child mb-3">
          <div class="box-child-text border_blue_2px w-100">
            <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
              <h3 class="fs-6 fw-bold  m-0 col-11">東急リバブル株式会社<br>梅田センター</h3>
            </div>
            <div class="p-3 f13px">
              <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売買・賃貸仲介、無料査定、スピードAI査定、売却サポートを提供。2024年度売買仲介取扱高No.1の実績と全国ネットワークが強みです。</p>
              <dl class="mb-3">
                <dt class="black fw-bold">所在地</dt>
                <dd class="height-40-lg">〒530-0001<br>大阪府大阪市北区梅田1-11-4-152 大阪駅前第4ビル1F</dd>
              </dl>
              <dl class="row">
                <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0120-109-635</span></dt>
                <div class="text-start col-md-7 mt-1 mt-md-2">
                  <a href="<?php echo home_url() ?>/corporate/a002/" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                    記事で詳しく見る
                    <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                      <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                    </picture>
                  </a>
                </div>
              </dl>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.8570204015136!2d135.50226107554664!3d34.70878607291678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6ed233111a7%3A0x9d1ca11ec411f4e1!2z5p2x5oCl44Oq44OQ44OW44OrIOaiheeUsOOCu-ODs-OCv-ODvA!5e0!3m2!1sja!2sjp!4v1760093932096!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 d-flex box-child mb-3">
          <div class="box-child-text border_blue_2px w-100">
            <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
              <h3 class="fs-6 fw-bold  m-0 col-11">すみふの仲介ステップ <br>梅田統括事業所1課<br>住友不動産ステップ株式会社</h3>
            </div>
            <div class="p-3 f13px">
              <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売買、賃貸、資産活用まで仲介。ステップAI査定や買取仲介サービスを提供。建物・設備補修サポートが充実しており、全国直営ネットワークで対応します。</p>
              <dl class="mb-3">
                <dt class="black fw-bold">所在地</dt>
                <dd class="height-40-lg">〒530-0001<br>大阪府大阪市北区梅田1-1-3-3100 大阪駅前第三ビル31F</dd>
              </dl>
              <dl class="row">
                <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0120-051-232</span></dt>
                <div class="text-start col-md-7 mt-1 mt-md-2">
                  <a href="<?php echo home_url() ?>/corporate/a003/" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                    記事で詳しく見る
                    <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                      <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                    </picture>
                  </a>
                </div>
              </dl>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.2537680591677!2d135.49684107554623!3d34.69877877292039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6ed006d84ad%3A0x95907cdb814d9bc2!2z5L2P5Y-L5LiN5YuV55Sj44K544OG44OD44OXIOaiheeUsOe1seaLrOS6i-alreaJgO-8keiqsg!5e0!3m2!1sja!2sjp!4v1760093943923!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="row box-parent">
        <div class="col-12 col-lg-4 d-flex box-child mb-3">
          <div class="box-child-text border_blue_2px w-100">
            <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
              <h3 class="fs-6 fw-bold  m-0 col-11">センチュリー21プラウデストレジデンス堂島<br>プラウデストレジデンス株式会社</h3>
            </div>
            <div class="p-3 f13px">
              <p class="pb-2 mb-2 height-70 height-80-lg">センチュリー21加盟店として、新築・中古の戸建て、中古マンションの売買仲介を行います。居住用のお部屋、店舗・事務所の賃貸物件も幅広く取り扱っています。</p>
              <dl class="mb-3">
                <dt class="black fw-bold">所在地</dt>
                <dd class="height-40-lg">〒530-0002<br>大阪府大阪市北区曽根崎新地2-1-23 JPR堂島ビル</dd>
              </dl>
              <dl class="row">
                <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0120-760-021</span></dt>
                <div class="text-start col-md-7 mt-1 mt-md-2">
                  <a href="<?php echo home_url() ?>/corporate/a005/" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                    記事で詳しく見る
                    <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                      <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                    </picture>
                  </a>
                </div>
              </dl>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.301792185063!2d135.49265237554604!3d34.69756727292076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e7fac0fcc9cd%3A0xe90586b2016cd8a9!2z44K744Oz44OB44Ol44Oq44O8MjHjg5fjg6njgqbjg4fjgrnjg4jjg6zjgrjjg4fjg7PjgrnloILls7Y!5e0!3m2!1sja!2sjp!4v1760093954190!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 d-flex box-child mb-3">
          <div class="box-child-text border_blue_2px w-100">
            <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
              <h3 class="fs-6 fw-bold  m-0 col-11">株式会社福屋不動産販売<br>大阪駅前店</h3>
            </div>
            <div class="p-3 f13px">
              <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売却に関して無料査定を受け付けており、仲介・即時買取・買取保証付き仲介の3つの売却方法から選べます。売却後の住み替え相談にも対応しています。</p>
              <dl class="mb-3">
                <dt class="black fw-bold">所在地</dt>
                <dd class="height-40-lg">〒530-0001<br>大阪府大阪市北区梅田1-11-4 大阪駅前第4ビル17F</dd>
              </dl>
              <dl class="row">
                <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0120-760-021</span></dt>
                <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                  <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                    記事で詳しく見る
                    <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                      <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                    </picture>
                  </a>
                </div> -->
              </dl>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.301792185063!2d135.49265237554604!3d34.69756727292076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6f2ce1d5593%3A0xf4e2cd0ba5e5bdc!2zKOagqinnpo_lsYvkuI3li5XnlKPosqnlo7Ig5aSn6Ziq6aeF5YmN5bqX!5e0!3m2!1sja!2sjp!4v1760093963057!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 d-flex box-child mb-3">
          <div class="box-child-text border_blue_2px w-100">
            <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
              <h3 class="fs-6 fw-bold  m-0 col-11">株式会社ハウスコミュニケーション 天六営業センター</h3>
            </div>
            <div class="p-3 f13px">
              <p class="pb-2 mb-2 height-70 height-80-lg">不動産売却に関する無料査定から、買取保証サービス、専任担当者による売却活動、引渡し後の設備保証まで、安心して取引を進めるための各種サポートを提供しています。</p>
              <dl class="mb-3">
                <dt class="black fw-bold">所在地</dt>
                <dd class="height-40-lg">〒531-0064<br>大阪府大阪市北区国分寺1-3-6 キャンパスライフ国分寺1F</dd>
              </dl>
              <dl class="row">
                <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-4801-8868</span></dt>
                <div class="text-start col-md-7 mt-1 mt-md-2">
                  <a href="<?php echo home_url() ?>/corporate/a004/" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                    記事で詳しく見る
                    <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                      <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                    </picture>
                  </a>
                </div>
              </dl>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.8158979949812!2d135.51231177554658!3d34.70982317291646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6b839de96eb%3A0xa2e3f8e0bdf854c5!2z44OP44Km44K544Kz44Of44Ol44OL44Kx44O844K344On44OzIOWkqeWFreWWtualreOCu-ODs-OCv-ODvA!5e0!3m2!1sja!2sjp!4v1760093973601!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
      
      <div class="accordion mb-4" id="subsidyAccordion02">
        <div class="accordion-item  border-0 bg-transparent">
          <p class="d-flex justify-content-center" id="headingSubsidy02">
              <button class="accordion-button collapsed fs-5 custom-accordion-btn custom-accordion-btn02 bg_light_blue" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSubsidy02" aria-expanded="false" aria-controls="collapseSubsidy02">
                  もっとみる
              </button>
          </p>
          <div id="collapseSubsidy02" class="accordion-collapse collapse" aria-labelledby="headingSubsidy02" data-bs-parent="#subsidyAccordion02">
            <div class="accordion-body">

              <div class="row mb-5 g-3 g-lg-3 box-parent">

                  <div class="col-12 col-lg-4 d-flex box-child mb-3">
                    <div class="box-child-text border_blue_2px w-100">
                      <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                        <h3 class="fs-6 fw-bold  m-0 col-11">三井のリハウス 梅田センター<br>三井不動産リアルティ株式会社</h3>
                      </div>
                      <div class="p-3 f13px">
                        <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売却査定・購入相談に対応。豊富な実績とノウハウ、独自のネットワークを活かし、専属の担当者が一貫して売却をサポートします。</p>
                        <dl class="mb-3">
                          <dt class="black fw-bold">所在地</dt>
                          <dd class="height-40-lg">〒530-0057<br>大阪府大阪市北区曽根崎2-12-7 清和梅田ビル19F</dd>
                        </dl>
                        <dl class="row">
                          <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0120-3815-31</span></dt>
                          <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                            <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                              記事で詳しく見る
                              <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                              </picture>
                            </a>
                          </div> -->
                        </dl>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.2338781495678!2d135.49256762554606!3d34.699280522920226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6ed006d84ad%3A0x6808b543321ccb7b!2z5LiJ5LqV44Gu44Oq44OP44Km44K5IOaiheeUsOOCu-ODs-OCv-ODvA!5e0!3m2!1sja!2sjp!4v1760093987896!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-lg-4 d-flex box-child mb-3">
                    <div class="box-child-text border_blue_2px w-100">
                      <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                        <h3 class="fs-6 fw-bold  m-0 col-11">ジョージ不動産<br>株式会社WWW</h3>
                      </div>
                      <div class="p-3 f13px">
                        <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売買仲介、買取、リフォーム、賃貸、管理など、不動産全般の幅広いサービスを展開。物件の潜在的な価値を引き出し、お客様のニーズに合わせた提案を行います。</p>
                        <dl class="mb-3">
                          <dt class="black fw-bold">所在地</dt>
                          <dd class="height-40-lg">〒530-0044<br>大阪府大阪市北区東天満1-11-13 AXIS南森町ビル703</dd>
                        </dl>
                        <dl class="row">
                          <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-4800-7113</span></dt>

                        </dl>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.3233282399747!2d135.51153517554613!3d34.697023972921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e7324bcee1b1%3A0x3d6372141fa0a646!2z5qCq5byP5Lya56S-V1dXL-OCuOODp-ODvOOCuOS4jeWLleeUow!5e0!3m2!1sja!2sjp!4v1760093998419!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-lg-4 d-flex box-child mb-3">
                    <div class="box-child-text border_blue_2px w-100">
                      <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                        <h3 class="fs-6 fw-bold  m-0 col-11">三菱UFJ不動産販売株式会社 梅田第1センター</h3>
                      </div>
                      <div class="p-3 f13px">
                        <p class="pb-2 mb-2 height-70 height-80-lg">不動産売却を専門とし、オンラインでの無料売却査定を提供。全国の店舗連携と、お客様の物件情報と購入希望者をマッチングさせる仲介サービスで早期売却を目指します。</p>
                        <dl class="mb-3">
                          <dt class="black fw-bold">所在地</dt>
                          <dd class="height-40-lg">〒530-0017<br>大阪府大阪市北区角田町8-1 大阪梅田ツインタワーズ・ノース29F</dd>
                        </dl>
                        <dl class="row">
                          <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0800-814-3865</span></dt>

                        </dl>
                        <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.093666475637!2d135.49595767554615!3d34.70281737291894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6940ef302bb%3A0x7baa58fd734127ab!2z5LiJ6I-x77y177ym77yq5LiN5YuV55Sj6LKp5aOyIOaiheeUsOesrO-8keOCu-ODs-OCv-ODvA!5e0!3m2!1sja!2sjp!4v1760094007574!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-lg-4 d-flex box-child mb-3">
                    <div class="box-child-text border_blue_2px w-100">
                      <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                        <h3 class="fs-6 fw-bold  m-0 col-11">暮らしの相談室 中崎町店<br>株式会社オーシャンズプロデュース</h3>
                      </div>
                      <div class="p-3 f13px">
                        <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売買、賃貸、管理、買取、リフォームなど、住まいの総合的なサービスを提供。お客様のライフスタイルや将来設計に合わせた最適な提案を目指し、無料相談・査定を受け付けています。</p>
                        <dl class="mb-3">
                          <dt class="black fw-bold">所在地</dt>
                          <dd class="height-40-lg">〒530-0016<br>大阪府大阪市北区中崎2-2-7 ナカガミビル1F</dd>
                        </dl>
                        <dl class="row">
                          <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-4802-0077</span>
                          </dt>
                        </dl>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13120.37473890969!2d135.48823285645722!3d34.702816912536804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e7dab46f540b%3A0xdfbcca0619aa7a54!2z5qCq5byP5Lya56S-44Kq44O844K344Oj44Oz44K644OX44Ot44OH44Ol44O844K5!5e0!3m2!1sja!2sjp!4v1760094021292!5m2!1sja!2sjp"  width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-lg-4 d-flex box-child mb-3">
                    <div class="box-child-text border_blue_2px w-100">
                      <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                        <h3 class="fs-6 fw-bold  m-0 col-11">株式会社HOUSE・FRONT</h3>
                      </div>
                      <div class="p-3 f13px">
                        <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売却に特化し、無料査定から対応。独自のネットワークや多岐にわたる広告活動で、スムーズな早期売却を目指します。不動産の買取りにも対応し、無料相談を受け付けています。</p>
                        <dl class="mb-3">
                          <dt class="black fw-bold">所在地</dt>
                          <dd class="height-40-lg">〒530-0021<br>大阪府大阪市北区浮田1-6-10</dd>
                        </dl>
                        <dl class="row">
                          <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-6486-0050</span></dt>
                        </dl>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.874458737138!2d135.5048701755465!3d34.70834627291696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e79f60d1e9cb%3A0xd7269e1cbb03463a!2z5qCq5byP5Lya56S-SE9VU0Xjg7sgRlJPTlQg44OP44Km44K544OV44Ot44Oz44OI!5e0!3m2!1sja!2sjp!4v1760094031134!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">ウィル不動産販売 本町営業所<br>株式会社ウィル</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">売買仲介、賃貸、リフォーム、建築請負、資産活用まで総合的にサポート。独自の査定基準と地域に根差した情報力を活用し、お客様一人ひとりに合わせたコンサルティングを提供します。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒541-0053<br>大阪府大阪市中央区本町1-4-13</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0120-750-755</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.853284633904!2d135.5059720755454!3d34.68365217292571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e788c40c6803%3A0x7dd56fb85207dc73!2z44Km44Kj44Or5LiN5YuV55Sj6LKp5aOyIOacrOeUuuWWtualreaJgA!5e0!3m2!1sja!2sjp!4v1760094044729!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">株式会社NORTH COMPANY</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">売買仲介、賃貸仲介、建物管理、リフォームなど、住まいに関わるサービスを幅広く展開。お客様とのコミュニケーションを重視し、不動産の多様なニーズにきめ細かく対応しています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒546-0011<br>大阪府大阪市東住吉区針中野4-9-7</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">050-8882-8241</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.487817645677!2d135.53380637554216!3d34.617110872949596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000df3edd3a2527%3A0x61ff2df8e5ed9656!2z5qCq5byP5Lya56S-Tk9SVEggQ09NUEFOWQ!5e0!3m2!1sja!2sjp!4v1760094054301!5m2!1sja!2sjp"  width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">株式会社大京穴吹不動産 大阪中央店</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">マンションや戸建て、土地などの不動産売却仲介サービスを提供。無料査定に加え、即時買取やリースバックなど多様な売却方法があり、各種保証・サポートも充実しています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒542-0086<br>大阪府大阪市中央区西心斎橋2-2-3 A-PLACE心斎橋4F</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0120-743-215</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.357086319944!2d135.49718312554478!3d34.67093612293016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e711719ac307%3A0x95178d8ec571cf0!2z5aSn5Lqs56m05ZC55LiN5YuV55SjIOWkp-mYquS4reWkruW6lw!5e0!3m2!1sja!2sjp!4v1760094066468!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">株式会社アセットマネジメント</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">売買仲介、賃貸仲介、リフォームに加え、不動産コンサルティングも提供。収益物件や事業用不動産の取り扱いにも強みがあり、専門的な視点から資産活用をサポートします。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒530-0015 大阪府大阪市北区中崎西4-3-32 タカ大阪梅田ビル8F</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-6136-5246</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13125.428418197676!2d135.48945830643373!3d34.67093566274092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e7f3ab61ef3b%3A0x6bba37c02ac6e212!2z5qCq5byP5Lya56S-44Ki44K744OD44OI44Oe44ON44K444Oh44Oz44OI!5e0!3m2!1sja!2sjp!4v1760094082111!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">センチュリー21不動産情報ネット<br>株式会社不動産情報ネット</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売買仲介や賃貸仲介、リフォーム、建築など、住まいに関する総合的なサービスを提供しています。無料の査定相談を受け付け、お客様の住み替えや資産活用をサポートします。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒534-0025<br>大阪府大阪市都島区片町1-2-34</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0120-7887-21</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1640.2366453728314!2d135.52776728872288!3d34.69324059323056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e0d4fa166959%3A0x4e77858dcb9ba809!2z44K744Oz44OB44Ol44Oq44O8MjHkuI3li5XnlKPmg4XloLHjg43jg4Pjg4jniYfnlLrlupc!5e0!3m2!1sja!2sjp!4v1760094099829!5m2!1sja!2sjp"  width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="f14px fw-bold  m-0 col-11">センチュリー21ネクスト・アールアンドディ<br>株式会社ネクスト・アールアンドディ</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">売買仲介、賃貸仲介、リフォーム・リノベーション、賃貸管理を提供し、住まいの総合プロデュースを行います。お客様の理想実現に向け、物件探しからアフターフォローまで一貫してサポートします。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒550-0013<br>大阪府大阪市西区新町1-4-24 大阪四ツ橋新町ビルディング2F</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-6310-1121</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.1497956381663!2d135.494705175545!3d34.676168672928405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e31528a941ad%3A0x7955390cc7481558!2z44K744Oz44OB44Ol44Oq44O8MjHjg43jgq_jgrnjg4jjg7vjgqLjg7zjg6vjgqLjg7Pjg4njg4fjgqM!5e0!3m2!1sja!2sjp!4v1760094110553!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">阪急阪神不動産株式会社 大阪梅田営業所 第1チーム</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">阪急阪神ブランドとして売却仲介サービスを提供。無料査定や即時買取、リースバックなど多様な売却メニューがあり、各種サポート制度も充実しています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒530-0012<br>大阪府大阪市北区芝田1-1-3 阪急三番街南館2F</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0120-8984-24</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.0243696983302!2d135.49636337554628!3d34.70456527291841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e693784d794f%3A0xc3dc4f59c775d883!2z6Ziq5oCl6Ziq56We44Gu5Luy5LuLIOWkp-mYquaiheeUsOWWtualreaJgCDlpKfpmKrnrKwx44OB44O844Og!5e0!3m2!1sja!2sjp!4v1760094119700!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">阪急阪神の仲介<br>株式会社ホームカラーズ</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売買仲介を主力とし、お客様に寄り添ったきめ細やかなサポートを提供。無料査定で市場価格を提示し、売却や購入の成功に向けた最適なプランニングを行っています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒531-0062<br>大阪府大阪市北区長柄中1-6-20 新城ビル1F</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0120-460-070</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.745906940832!2d135.51308577554664!3d34.71158827291586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6b9d92f18f5%3A0x66ea50cc71079517!2z5qCq5byP5Lya56S-44Ob44O844Og44Kr44Op44O844K6!5e0!3m2!1sja!2sjp!4v1760094139149!5m2!1sja!2sjp"  width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">株式会社リブクラス</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">売買仲介、賃貸仲介、賃貸管理、リノベーション、コンサルティングなど幅広いサービスを提供。特に資産運用や投資に関する専門知識を活かし、お客様の収益向上をサポートします。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒530-0047<br>大阪府大阪市北区西天満5-16-3 西天満ファイブビル8F</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-6467-4398</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.279883217677!2d135.50409547554597!3d34.69811997292061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6c27bfcbb13%3A0xc90cf8c09b9a399a!2z5qCq5byP5Lya56S-44Oq44OW44Kv44Op44K5!5e0!3m2!1sja!2sjp!4v1760094151799!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">三和通産株式会社</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">店舗や事務所、工場・倉庫、ビルなど事業用不動産を専門に取り扱っています。売買仲介、賃貸仲介、管理を行い、お客様の資産価値向上を目指して専門的なサービスを提供しています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒530-0041<br>大阪府大阪市北区天神橋3-2-34</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0120-840-302</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.279883217677!2d135.50409547554597!3d34.69811997292061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6c49f35fd19%3A0x3ccd6988ee4bb6ed!2z5LiJ5ZKM6YCa55Sj5qCq5byP5Lya56S-!5e0!3m2!1sja!2sjp!4v1760094162294!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">プライマリー<br>株式会社ダハイム</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売買仲介、賃貸仲介、賃貸管理、リフォームなど住まいに関する総合的なサービスを提供。戸建てやマンションの購入・売却相談に注力し、無料査定も受け付けています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒530-0022<br>大阪府大阪市北区浪花町13-38 千代田ビル北館6F</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-6616-8422</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.8455672194164!2d135.50784277554655!3d34.7090749229167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6bec56ed099%3A0x4dfc2ccb4b1b21a5!2z44CSNTMwLTAwMjIg5aSn6Ziq5bqc5aSn6Ziq5biC5YyX5Yy65rWq6Iqx55S677yR77yT4oiS77yT77yY!5e0!3m2!1sja!2sjp!4v1760094213824!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">株式会社福楽</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">マンション、戸建て、土地など不動産売却を専門とし、無料査定から相談まで対応しています。売却時の価格保証や仲介手数料の割引など、お客様の負担を軽減するサービスが特徴です。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒530-0043<br>大阪府大阪市北区天満3-1-5 南天満ビル405</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-4400-5574</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.5132830501984!2d135.5127568755457!3d34.69223157292268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6d825ae50f3%3A0xffbaec037b1fec67!2z44CSNTMwLTAwNDMg5aSn6Ziq5bqc5aSn6Ziq5biC5YyX5Yy65aSp5rqA77yT5LiB55uu77yR4oiS77yVIOWNl-Wkqea6gOODk-ODqw!5e0!3m2!1sja!2sjp!4v1760094254228!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">北区不動産売却・買取センター<br>株式会社天満不動産</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">マンション、戸建て、土地の不動産売却を専門に、無料査定から仲介まで対応。独自のネットワークとデジタル技術を活用した販売戦略で、早期かつ高値での売却を目指します。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒530-0053<br>大阪府大阪市北区末広町3-11</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-6364-8881</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.13228405983!2d135.50711617554614!3d34.70184327291934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6c1662639b7%3A0x6d427ef1fb4e0bfc!2z77yI5qCq77yJ5aSp5rqA5LiN5YuV55SjL-WMl-WMuuWwgumWgA!5e0!3m2!1sja!2sjp!4v1760094273266!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">スター・マイカ株式会社 大阪支店</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売却仲介サービスを提供し、無料査定や売却相談に対応。全国に広がる店舗ネットワークと住まいに関する多様なサービスを通じて、お客様に最適な売却活動を提案します。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒530-0011<br>大阪府大阪市北区大深町3-1 グランフロント大阪タワーC16F</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-6375-5502</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.9705286853355!2d135.49183357554642!3d34.70592327291789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e691dc1051a3%3A0x374a3f78de2cbff!2z44K544K_44O844O744Oe44Kk44Kr44ixIOWkp-mYquaUr-W6lw!5e0!3m2!1sja!2sjp!4v1760094282367!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">日住サービス 大阪梅田店</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売却仲介サービスを提供し、無料査定や売却相談に対応。全国に広がる店舗ネットワークと住まいに関する多様なサービスを通じて、お客様に最適な売却活動を提案します。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒530-0001<br>大阪府大阪市北区梅田1-11-4-300 大阪駅前第4ビル 3F</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-6375-5502</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.9705286853355!2d135.49183357554642!3d34.70592327291789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e691dc1051a3%3A0x374a3f78de2cbff!2z44K544K_44O844O744Oe44Kk44Kr44ixIOWkp-mYquaUr-W6lw!5e0!3m2!1sja!2sjp!4v1760094282367!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">日住サービス 大阪梅田店</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売買仲介、賃貸仲介、賃貸管理、リフォーム、建築請負など、住まいのトータルサポートを提供。お客様のニーズに合わせた物件提案や、資産活用のコンサルティングを行います。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒530-0001<br>大阪府大阪市北区梅田1-11-4-300 大阪駅前第4ビル 3F</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-6343-1951</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.2094291716444!2d135.49625187554622!3d34.69989727292004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6ed225be993%3A0x5721f0c895eadc9b!2z5LiN5YuV55Sj5aOy6LK344O76LOD6LK444Gu5pel5L2P44K144O844OT44K5IOWkp-mYquaiheeUsCDlupc!5e0!3m2!1sja!2sjp!4v1760094293414!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">たまご不動産 梅田営業所<br>岡壱建物管理株式会社</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">売買仲介、賃貸仲介、賃貸管理、リフォームなど幅広いサービスを提供。丁寧なヒアリングと専門知識に基づき、お客様の最適な住まい探しや売却をきめ細やかにサポートしています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒530-0047<br>大阪府大阪市北区西天満4-2-15 マツウラビル2F</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">03-6360-6388</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13121.353093669859!2d135.49398021579452!3d34.69664693965516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6e82143497b%3A0x8369f43b9f16386d!2z44Gf44G-44GU5LiN5YuV55Sj!5e0!3m2!1sja!2sjp!4v1760094327166!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">三菱地所の住まいリレー 梅田営業所<br>三菱地所ハウスネット株式会社</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">マンション、戸建て、土地など各種不動産の売買仲介サービスを提供。培ってきた実績とノウハウ、全国ネットワークを活かし、お客様の円滑な不動産取引をサポートします。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒530-0001<br>大阪府大阪市北区梅田1-11-4-2000 大阪駅前第4ビル20F</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0120-453-108</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13121.353368455317!2d135.49398020913188!3d34.69664520659188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6ed225be993%3A0x4261e30824aa97f!2z5LiJ6I-x5Zyw5omA44OP44Km44K544ON44OD44OI5qCq5byP5Lya56S-IOaiheeUsOWWtualreaJgA!5e0!3m2!1sja!2sjp!4v1760094381776!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">松和住建株式会社</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売買仲介、賃貸仲介、賃貸管理、リフォームなど、住まいのサービスを幅広く提供。無料査定を通じて適正価格を提示し、お客様のライフプランに合わせた最適な提案を行います。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒530-0047<br>大阪府大阪市北区西天満3-6-22 日宝北大阪屋ビル6F</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-6364-0007</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.305823528657!2d135.5054488755459!3d34.69746557292083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e773347f39c5%3A0xb5c4c0b0fa7ba504!2z5p2-5ZKM5L2P5bu65qCq5byP5Lya56S-!5e0!3m2!1sja!2sjp!4v1760094364587!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">だんらん住宅株式会社</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">戸建て、マンション、土地などの不動産売買仲介を専門としています。詳細なヒアリングと無料査定、独自のネットワークを活用し、スピーディーで納得のいく売却・購入を実現します。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒530-0041<br>大阪府大阪市北区天神橋3-2-28 ノーブル南森町1102</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0120-180-414</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.226209516337!2d135.50883847554604!3d34.69947397292008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6c484c78bb5%3A0x7649c5fc8811596f!2z44Gg44KT44KJ44KT5L2P5a6F5qCq5byP5Lya56S-!5e0!3m2!1sja!2sjp!4v1760094400027!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">センチュリー21ライズ<br>株式会社ライズ</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売買仲介、買取、リフォーム、賃貸管理、資産運用コンサルティングを提供。お客様の多様なニーズに対し、独自のノウハウと専門知識を活かした総合的なサポートを行っています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒531-0041<br>大阪府大阪市北区天神橋8-3-4 4F</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0120-883-911</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9276.227768083232!2d135.49985437672825!3d34.71421411556365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e78080b1020b%3A0xf7b416014fdf515!2z44K744Oz44OB44Ol44Oq44O8MjHjg6njgqTjgro!5e0!3m2!1sja!2sjp!4v1760094415861!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">株式会社エムズプレイス</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">売買仲介、買取、賃貸仲介、賃貸管理、建築など、住まいに関する多様なサービスを提供。お客様との対話を重視し、不動産に関する疑問や不安に寄り添った丁寧なサポートが特徴です。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒530-0041<br>大阪府大阪市北区天神橋2-4-17 千代田第一ビル9F</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-6755-4252</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.32257509744!2d135.509633075546!3d34.69704297292098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6db4004497b%3A0x9f4cccd0bf3f8e6f!2z77yI5qCq77yJ44Ko44Og44K644OX44Os44Kk44K5!5e0!3m2!1sja!2sjp!4v1760094428824!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">株式会社住和リアライズ</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">戸建て、マンション、土地などの不動産売買仲介を専門。お客様のライフプランに合わせた最適な住み替えをサポートするため、無料査定や物件の買い取りサービスを提供しています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒530-0041<br>大阪府大阪市北区天神橋3-6-22 ミナミビル2F</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-6809-1193</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.145564705849!2d135.50951147554625!3d34.70150827291939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6c41469a3e9%3A0x2b99925cc546b3fd!2z5qCq5byP5Lya56S-IOS9j-WSjOODquOCouODqeOCpOOCug!5e0!3m2!1sja!2sjp!4v1760094438190!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">株式会社ベストウエスト</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産売却仲介サービスを提供し、マンション、戸建て、土地の無料査定に対応。お客様のニーズに応じた売却プランを提案し、独自のネットワークで早期売却を目指します。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒530-0028<br>大阪府大阪市北区万歳町3-41 城野ビル103</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-4256-8559</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.145564705849!2d135.50951147554625!3d34.70150827291939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6ed3d9d8e2b%3A0xe9e8ac5117148daa!2z44OZ44K544OI44Km44Ko44K544OI5aSn6Ziq5qKF55Sw5bqX!5e0!3m2!1sja!2sjp!4v1760094447475!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">東商ハウス株式会社 大阪駅前店</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売買仲介、賃貸仲介、賃貸管理、リフォームなど、住まいに関するサービスを幅広く提供。お客様の資産形成や住み替えをサポートするため、無料の査定・相談を受け付けています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒530-0001<br>大阪府大阪市北区梅田1-3-1-100 大阪駅前第一ビル1F</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-6345-1110</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.25206350278!2d135.49346747554608!3d34.698821772920354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6f2b745ca89%3A0x3cfc9cb17fd3affb!2z5p2x5ZWG44OP44Km44K55aSn6Ziq6aeF5YmN5bqX!5e0!3m2!1sja!2sjp!4v1760094457783!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">長谷工の仲介 梅田センター<br>株式会社長谷工リアルエステート</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">マンション、一戸建て、土地など不動産の売却仲介サービスを提供。無料査定や売却相談に対応し、長谷工グループの総合力と独自のネットワークを活かしたサポート体制が特徴です。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒530-0002<br>大阪府大阪市北区曽根崎新地2-2-16 関電不動産西梅田ビル6F</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0120-373-579</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.2806601647485!2d135.49249627554596!3d34.69810037292059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6f2dd60cbcb%3A0x478e06e7baf3129d!2z6ZW36LC35bel44Oq44Ki44Or44Ko44K544OG44O844OI5qKF55Sw44K744Oz44K_44O8!5e0!3m2!1sja!2sjp!4v1760094468884!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child mb-3">
                  <div class="box-child-text border_blue_2px w-100">
                    <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
                      <h3 class="fs-6 fw-bold  m-0 col-11">三井住友トラスト不動産株式会社 大阪梅田センター</h3>
                    </div>
                    <div class="p-3 f13px">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売却仲介サービスを提供し、マンション、戸建て、土地の無料査定に対応。金融グループならではのノウハウを活かし、お客様のニーズに合わせた最適な売却プランを提案します。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒530-0017<br>大阪府大阪市北区角田町8-1 大阪梅田ツインタワーズ・ノース24F</dd>
                      </dl>
                      <dl class="row">
                        <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0120-08-6541</span></dt>
                        <!-- <div class="text-start col-md-7 mt-1 mt-md-2">
                          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                            記事で詳しく見る
                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                            </picture>
                          </a>
                        </div> -->
                      </dl>
                      <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.0946813837286!2d135.49626527554625!3d34.70279177291896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6925608a11f%3A0x113042124cae9d64!2z5LiJ5LqV5L2P5Y-L44OI44Op44K544OI5LiN5YuV55Sj5qCq5byP5Lya56S-IOWkp-mYquaiheeUsOOCu-ODs-OCv-ODvA!5e0!3m2!1sja!2sjp!4v1760094477478!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
                  
              </div>
            
            </div>
          </div>
        </div>
      </div>





      <div class="text-center mb-5 col-12 col-lg-8 mx-auto">
        <a href="<?php echo home_url() ?>/company/"
          class="btn bg_sky_blue text-white fw-bold btn-hover-blue position-relative shadow rounded-1 w-100 py-3"
          role="button">
          大阪市北区の不動産売却会社をもっと見る
          <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
            <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
          </picture>
        </a>
      </div>
    </div>
  </section>
  <!-- 記事一覧 -->
  <section class="py-4 py-lg-5 bg_blue" id="articles">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="mb-0 fw-bold white fs-1">
          記事一覧
        </h2>
      </div>
      <div class="row mb-5">
        <?php foreach ($information as $post): ?>
          <?php setup_postdata($post); ?>
          <?php $cat = get_the_category(); ?>
          <?php $category = $cat[0]->name; ?>
          <?php $category_slug = $cat[0]->slug; ?>
          <div class="col-6 col-lg-4 mb-3">
            <div class="position-relative"> <a class="black link-box" href="<?php the_permalink(); ?>"></a>
              <picture>
                <?php if (has_post_thumbnail()): ?>
                  <?php //アイキャッチ画像を設定している場合 
                  ?>
                  <?php $post_title = get_the_title(); ?>
                  <?php the_post_thumbnail('medium', array('alt' => $post_title, 'class' => 'img-fluid rounded-2 object-fit-cover height-150 w-100', 'loading' => 'lazy', 'height' => "201", 'width' => "274")); ?>
                <?php else: ?>
                  <?php //アイキャッチ画像を設定していない場合 
                  ?>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/hikaku-01.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/hikaku-01.png" class="img-fluid rounded-2 object-fit-cover height-150 w-100" loading="lazy" alt="<?php echo wp_trim_words(get_the_title(), 45, '...'); ?>" height="201" width="274">
                <?php endif; ?>
              </picture>
              </a>
            </div>
            <a class="d-block text-decoration-none black mb-3 small" href="<?php echo $category_slug; ?>"><span class="black bg_yellow p-2 position-relative" style="top: -20px;"><?php echo $category ?></span></a>
            <a class="d-block text-decoration-none white height-100 height-80-lg" href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 45, '...'); ?></a>
            <a class="d-block text-decoration-none small text-end white" href="<?php the_permalink(); ?>">公開 <?php the_time('Y.m.d'); ?> / 更新 <?php the_modified_time('Y.m.d'); ?></a>
          </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="text-center mb-5 col-12 col-lg-8 mx-auto">
        <a href="/articles"
          class="btn bg_sky_blue text-white fw-bold btn-hover-blue position-relative shadow rounded-1 w-100 py-3"
          role="button">
          記事一覧を見る
          <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
            <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
          </picture>
        </a>
      </div>
    </div>
  </section>
  <!-- サイトコンテンツ一覧 -->
  <section class="pb-5 position-relative mt-5 z-1">
    <div class="container">
      <div class="text-center mb-2">
        <h2 class="mb-4 mb-lg-5 fs-2 fw-bold">
          <span class="blue fs-1">サイトコンテンツ</span>一覧
        </h2>
      </div>
      <?php $cats = get_categories(); ?>
      <?php foreach ($cats as $cat) : ?>
      <div class="mb-4">
        <div class="my-4">
          <div class="mb-5 centerline_heading text-center">
            <h3 class="fw-bold"><?php echo $cat->name; ?></h3>
          </div>
        </div>
          <?php
          $posts = get_posts(array(
              'category' => $cat->term_id,
              'numberposts' => -1
          ));
          ?>
          <?php if ($posts) : ?>
              <ul class="d-flex flex-wrap gap-2 list-unstyled mb-5">
                  <?php foreach ($posts as $post) : ?>
                      <li class="my-2"><a class="text-black text-decoration-none" href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a></li>
                  <?php endforeach; ?>
              </ul>
          <?php else : ?>
              <p>このカテゴリには記事がありません。</p>
          <?php endif; ?>

      </div>
      <?php endforeach; ?>
    </div>
  </section>
</main>
<!-- コンテンツここまで -->

<?php
get_footer();
