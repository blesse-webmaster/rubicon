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
            <p class="blue mb-0">「不動産売却は大手に任せれば安心」「名前を知っているから」</p>
            <p class="blue mb-0">そんな理由だけで不動産会社を選んでいませんか</p>
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
    <div class="container px-2 pt-3 px-xl-5">
      <ul class="row list-unstyled mb-0 justify-content-center align-items-center">
        <li class="col-6 col-lg text-center px-1 px-md-2 mb-3 border_right_solid_vertical">
          <p class="white pt-sm-1 pt-2 text-decoration-none d-flex flex-column align-items-center justify-content-center fs-4 mb-0">
            INDEX
          </p>
        </li>
        <li class="col-6 col-lg text-center px-1 px-md-2 mb-3 border_right_solid_vertical">
          <a href="#point" class="white pt-sm-1 pt-2 text-decoration-none d-flex flex-column align-items-center justify-content-center">
            大阪市北区の<br>不動産会社選びの<br>ポイント
          </a>
        </li>
        <li class="col-6 col-lg text-center px-1 px-md-2 mb-3 border_right_solid_vertical">
          <a href="#comparison" class="white pt-sm-1 pt-2 text-decoration-none d-flex flex-column align-items-center justify-content-center">
            仲介と買取の<br>違いは？
          </a>
        </li>
        <li class="col-6 col-lg text-center px-1 px-md-2 mb-3 border_right_solid_vertical">
          <a href="#recomend" class="white pt-sm-1 pt-2 text-decoration-none d-flex flex-column align-items-center justify-content-center">
            仲介に強い<br>不動産会社3選
          </a>
        </li>
        <li class="col-6 col-lg text-center px-1 px-md-2 mb-3 border_right_solid_vertical">
          <a href="#price" class="white pt-sm-1 pt-2 text-decoration-none d-flex flex-column align-items-center justify-content-center">
            大阪市北区の<br>不動産売却相場
          </a>
        </li>
        <li class="col-6 col-lg text-center px-1 px-md-2 mb-3 border_right_solid_vertical">
          <a href="#faq" class="white pt-sm-1 pt-2 text-decoration-none d-flex flex-column align-items-center justify-content-center">
            不動産売却<br>よくある質問
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="py-4 py-lg-5 bg_sky_blue">
    <div class="container text-center fs-5 white">
      <p>地域性が強く出る不動産売却では<span class="yellow fw-bold">「会社選び」</span>が最重要課題します。同じ物件でも、<br class="d-none d-lg-block">会社によっては最終的な売却額に100万円以上もの差が出ることもあるのです。</p>
      <p>このメディアでは、不動産売却を成功させるために確認すべき<br class="d-none d-lg-block"><span class="yellow fw-bold">「会社選びの重要ポイント」</span>をわかりやすく解説します。</p>
      <p class="mb-0">地域密着・大手のメリットデメリットをしっかり見極めて、<br class="d-none d-lg-block">あなたにピッタリの相談先を見つけてください。</p>
    </div>
  </div>


  <section id="company" class="py-5 bg_light_blue">
    <div class="container">
      <!-- ヘッダー部分 -->
      <div class="text-center mb-5">
        <div class="bg_blue yellow py-2 px-4 d-inline-block mb-4">
          <p class="fs-3 mb-0 fw-bold">大阪市北区の家を売りたい方必見！</p>
        </div>
        <h2 class="display-4 fw-bold mb-2">
          地域密着・大手から選ぶ<br>
          仲介に強い不動産会社<span class="text-danger display-3 fw-bold">3</span><span class="text-danger fw-bold">選</span>！
        </h2>
      </div>

      <!-- 3つの会社 -->
      <div class="row g-2">
        <!-- 1. 株式会社ルビコン -->
        <div class="col-12 col-lg-4">
          <div class="position-relative bg-white" style="margin-top: 30px;">
            <!-- 会社名 -->
            <div class="bg_blue text-white text-center d-flex align-items-end justify-content-center" style="height: 120px;">
              <h3 class="m-0 fw-bold f25px pb-2"><span class="f18px">株式会社</span><br>ルビコン</h3>
            </div>

            <!-- 上部の黄色いタブ -->
            <div class="bg_yellow text-dark text-center rounded-pill position-absolute d-flex align-items-center justify-content-center" style="top: -45px; left: 0; right: 0; z-index: 10; height: 78px;">
              <div>
                <p class="mb-0 fw-bold f15px">中崎町・天六周辺で高値売却を狙うなら！</p>
                <p class="mb-0 small">大手で取り扱いが難しい物件の<br>ご相談もお任せ！</p>
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
                  <a href="" class="btn bg_sky_blue text-white fw-bold py-2 shadow position-relative">
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
              <h3 class="m-0 fw-bold f25px pb-2">東急リバブル株式会社<br><span class="f18px">梅田センター</span>
              </h3>
            </div>

            <!-- 上部の黄色いタブ -->
            <div class="bg_yellow text-dark text-center rounded-pill position-absolute d-flex align-items-center justify-content-center" style="top: -45px; left: 0; right: 0; z-index: 10; height: 78px;">
              <div>
                <p class="mb-0 fw-bold f15px">大手ならではの信頼と実績！</p>
                <p class="mb-0 small">オンライン対応で</p>
                <p class="mb-0 small">遠方の方も安心</p>
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
                  <a href="" class="btn bg_sky_blue text-white fw-bold py-2 shadow position-relative">
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
              <h3 class="m-0 fw-bold f25px pb-2"><span class="f18px">すみふの仲介ステップ 梅田統括事業所1課</span><br>住友不動産ステップ株式会社</h3>
            </div>

            <!-- 上部の黄色いタブ -->
            <div class="bg_yellow text-dark text-center rounded-pill position-absolute d-flex align-items-center justify-content-center" style="top: -45px; left: 0; right: 0; z-index: 10; height: 78px;">
              <div>
                <p class="mb-1 fw-bold f15px">住友不動産グループの総合力！</p>
                <p class="mb-0 small">専任担当者による一貫対応！</p>
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
                  <a href="" class="btn bg_sky_blue text-white fw-bold py-2 shadow position-relative">
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
      <div class="row g-3">
        <!-- ポイント01 -->
        <div class="col-12 col-lg-4">
          <div class="h-100 bg-white p-4">
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
        <div class="col-12 col-lg-4">
          <div class="h-100 bg-white p-4">
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
              <ul class="list-unstyled">
                <li class="mb-2">• 司法書士・弁護士・税理士などと連携し複雑なケースに対応可能か</li>
                <li>• 相続・共有名義・空き家など、よくある問題を先回りしてサポートできるか</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- ポイント03 -->
        <div class="col-12 col-lg-4">
          <div class="h-100 bg-white p-4">
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
              <ul class="list-unstyled">
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
      <div class="row g-5 mb-5">
        <!-- 地域密着型 -->
        <div class="col-12 col-lg-6">
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
              <li class="mb-2">• 社内システム（AI化など）・オペレーションが整備されている</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- 結論セクション -->
      <div class="bg_yellow text-center rounded-1 py-3 mb-5 col-12 col-lg-8 mx-auto">
        <h4 class="mb-0 fw-bold">結論</h4>
      </div>

      <div class="text-center mb-5">
        <h3 class="fw-bold mb-3">高く売るならまずは</h3>
        <h3 class="fw-bold">
          <span class="red">「地域密着型」</span>に相談がおすすめ！
        </h3>
      </div>

      <!-- チェックリスト -->
      <div class="row justify-content-center">
        <div class="col-12 col-lg-8 rounded-1 bg-white py-4 px-5">
          <div class="list-group list-group-flush">
            <div class="list-group-item border-0 bg-transparent">
              <div class="d-flex align-items-center">
                <picture class="me-2">
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_blue.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_blue.png" loading="lazy" alt="チェックアイコン" class="object-fit-cover w-100" height="28" width="28">
                </picture>
                <p class="m-0 fw-bold">「高く売れる買主に届く」売却戦略が取れる</p>
              </div>
            </div>
            <div class="list-group-item border-0 bg-transparent">
              <div class="d-flex align-items-center">
                <picture class="me-2">
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_blue.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_blue.png" loading="lazy" alt="チェックアイコン" class="object-fit-cover w-100" height="28" width="28">
                </picture>
                <p class="m-0 fw-bold">価格の"根拠説明"が丁寧かつ納得感がある</p>
              </div>
            </div>
            <div class="list-group-item border-0 bg-transparent">
              <div class="d-flex align-items-center">
                <picture class="me-2">
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_blue.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_blue.png" loading="lazy" alt="チェックアイコン" class="object-fit-cover w-100" height="28" width="28">
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
            <div class="justify-content-start ms-3">
              <!-- メインテキスト -->
              <div class="mb-3 mt-5">
                <div class="text-center">
                  <p class="fw-bold d-flex align-items-center justify-content-center mb-0">
                    <span class="bg-warning text-black px-3 py-1 me-3 fw-bold f12px">PR</span>
                    <span class="fs-3">大阪市北区／中崎町・天六周辺の不動産売却なら</span>
                  </p>
                  <p class="mt-0 fs-3 fw-bold">築古・連棟など難物件のご相談も!</p>
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
      <div class="row g-4 mb-5">
        <!-- 仲介（左側） -->
        <div class="col-12 col-lg-6">
          <div class="h-100 border-0">
            <!-- ヘッダー -->
            <div class="bg_sky_blue text-white text-center py-3">
              <h3 class="mb-0 fw-bold fs-4">仲介（おすすめ：高く売りたい人）</h3>
            </div>

            <!-- ボディ -->
            <div class="p-1 text-center bg-white">
              <!-- 売却価格 -->
              <div class="bg_light-gray py-4 mb-1">
                <h5 class="fw-bold mb-2">売却価格</h5>
                <div class="text-center mb-2">
                  <picture>
                    <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_blue.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_blue.png" loading="lazy" alt="チェックアイコン" class="object-fit-cover" height="28" width="28">
                  </picture>
                </div>
                <p class="small text-muted mb-0">市場相場で売れる／高値売却の可能性が高い</p>
              </div>

              <!-- 売却までのスピード -->
              <div class="bg_light-gray py-4 mb-1">
                <h5 class="fw-bold mb-2">売却までのスピード</h5>
                <div class="text-center mb-2">
                  <picture>
                    <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_red.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_red.png" loading="lazy" alt="バツアイコン" class="object-fit-cover" height="28" width="28">
                  </picture>
                </div>
                <p class="small text-muted mb-0">買主探しに時間がかかることも（3ヶ月以上が目安）</p>
              </div>

              <!-- 手間の少なさ -->
              <div class="bg_light-gray py-4 mb-1">
                <h5 class="fw-bold mb-2">手間の少なさ</h5>
                <div class="text-center mb-2">
                  <picture>
                    <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_red.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_red.png" loading="lazy" alt="バツアイコン" class="object-fit-cover" height="28" width="28">
                  </picture>
                </div>
                <p class="small text-muted mb-0">内覧対応や書類準備などの手間がかかる</p>
              </div>

              <!-- 費用 -->
              <div class="bg_light-gray py-4 mb-1">
                <h5 class="fw-bold mb-2">費用</h5>
                <div class="text-center mb-2">
                  <picture>
                    <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_blue.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_blue.png" loading="lazy" alt="チェックアイコン" class="object-fit-cover" height="28" width="28">
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
          </div>
        </div>

        <!-- 買取（右側） -->
        <div class="col-12 col-lg-6">
          <div class="h-100 border-0">
            <!-- ヘッダー -->
            <div class="bg_yellow text-dark text-center py-3">
              <h3 class="mb-0 fw-bold fs-4">買取（おすすめ：早く売りたい人）</h3>
            </div>

            <!-- ボディ -->
            <div class="p-1 text-center bg-white">
              <!-- 売却価格 -->
              <div class="bg_light-gray py-4 mb-1">
                <h5 class="fw-bold mb-2">売却価格</h5>
                <div class="text-center mb-2">
                  <picture>
                    <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_red.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_red.png" loading="lazy" alt="バツアイコン" class="object-fit-cover" height="28" width="28">
                  </picture>
                </div>
                <p class="small text-muted mb-0">相場よりも低くなりがち（再販利益を見込んだ価格設定）</p>
              </div>

              <!-- 売却までのスピード -->
              <div class="bg_light-gray py-4 mb-1">
                <h5 class="fw-bold mb-2">売却までのスピード</h5>
                <div class="text-center mb-2">
                  <picture>
                    <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_blue.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_blue.png" loading="lazy" alt="チェックアイコン" class="object-fit-cover" height="28" width="28">
                  </picture>
                </div>
                <p class="small text-muted mb-0">最短数日〜1週間で現金化可能</p>
              </div>

              <!-- 手間の少なさ -->
              <div class="bg_light-gray py-4 mb-1">
                <h5 class="fw-bold mb-2">手間の少なさ</h5>
                <div class="text-center mb-2">
                  <picture>
                    <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_blue.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_blue.png" loading="lazy" alt="チェックアイコン" class="object-fit-cover" height="28" width="28">
                  </picture>
                </div>
                <p class="small text-muted mb-0">即決・内覧不要・瑕疵担保も免除されるケースが多い</p>
              </div>

              <!-- 費用 -->
              <div class="bg_light-gray py-4 mb-1">
                <h5 class="fw-bold mb-2">費用</h5>
                <div class="text-center mb-2">
                  <picture>
                    <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_blue.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/img/i_check_blue.png" loading="lazy" alt="チェックアイコン" class="object-fit-cover" height="28" width="28">
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
          </div>
        </div>
      </div>

      <!-- 下部のおすすめ説明 -->
      <div class="row g-3">
        <div class="col-12 col-lg-6">
          <div class="bg_red text-white py-3 rounded-3">
            <div class="d-flex align-items-center text-center">
              <div class="flex-grow-1">
                <p class="fw-bold m-0 fs-4">少し時間がかかっても高く売りたい／</p>
                <p class="fw-bold m-0 fs-4">納得感を重視したい人</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="bg_red text-white py-3 rounded-3">
            <div class="d-flex align-items-center text-center">
              <div class="flex-grow-1">
                <p class="fw-bold m-0 fs-4">とにかく早く・確実に現金化したい／</p>
                <p class="fw-bold m-0 fs-4">価格は重視しない人</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="recomend">
    <div class="background-reccomend_bg pt-4 pt-lg-5">
      <div class="container mb-5 pb-5">
        <div class="text-center">
          <div class="bg_blue yellow py-2 px-4 d-inline-block mb-5 speech-box position-relative">
            <p class="fs-3 mb-0 fw-bold">大阪市北区の家を売りたい方必見！</p>
          </div>
          <h2 class="fs-1 fw-bold">
            地域密着・大手から選ぶ<br>
            仲介に強い不動産会社<span class="red display-3 fw-bold">3</span><span class="text-danger fw-bold">選</span>！
          </h2>
        </div>
        <div class="text-end mt-3 me-2">
          <p class="f13px text-secondary"><span class="bg-white">※2025年8月時点の情報です。</span></p>
        </div>
      </div>
    </div>
    <div class="position-relative bg_sky_blue container">
      <div class="bg_yellow text-dark p-2 text-center rounded-pill position-absolute mb-4" style="top: -45px; left: 5%; right: 5%; z-index: 10;">
        <p class="m-0 fw-bold fs-5">中崎町・天六周辺で高値売却を狙うなら！</p>
        <p class="m-0">大手で取り扱いが難しい物件のご相談もお任せ！</p>
      </div>
      <h2 class="text-center text-white mt-5 mb-4 pt-5 pb-4 fw-bold fs-1 ls2 text-shadow_black"><span class="fs-3">株式会社</span>ルビコン</h2>
    </div>

    <!-- 株式会社ルビコンの特徴セクション -->
    <div class="py-5 mb-5">
      <div class="container">
        <!-- セクションタイトル -->
        <div class="mb-5 centerline_heading text-center">
          <h3 class="fw-bold">株式会社ルビコンの特徴</h3>
        </div>

        <!-- 特徴グリッド -->
        <div class="row g-5 mb-5 justify-content-center">
          <!-- 特徴1: 中崎町・天六エリアに特化 -->
          <div class="col-12 col-lg-6 mb-4 mb-lg-0">
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
          <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <div class="bg-white">
              <picture class="mb-3">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/rubi-img03.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/rubi-img03.png" loading="lazy" alt="弁護士・税理士と主業と連携" class="img-fluid object-fit-cover w-100" height="200" width="220">
              </picture>
              <div class="bg_gray py-3 px-3 height-80px d-flex align-items-center">
                <p class="m-0">弁護士・税理士などと主業と連携し、法的に複雑なケースも無料相談可能。</p>
              </div>
            </div>
          </div>

          <!-- 特徴4: 専任担当制で、最初から最後まで同じ担当が対応 -->
          <div class="col-12 col-lg-6 mb-4 mb-lg-0">
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
            <a href="https://www.rubi.co.jp/inquiry.php" class="btn max-w-348 w-100 btn-arrow bg_red white position-relative hover-reverse-oapcity py-2 fw-bold text-center" role="button" target="_blank" rel="nofollow">
              不動産売却について<br>ルビコンにお問い合わせ
              <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
              </picture>
            </a>
            <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-center">
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
        <h3 class="fw-bold">株式会社ルビコンの会社概要</h3>
      </div>
      <div class="mt-5 px-lg-5 mb-3 pb-3">
        <div class="row g-4 align-items-center">
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
          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-center">
            ルビコンの<br>口コミ・評判記事はこちら！
            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
            </picture>
          </a>
        </div>
      </div>
      <div class="mb-5 centerline_heading text-center">
        <h3 class="fw-bold">株式会社ルビコンの口コミ・評判</h3>
      </div>
      <!-- 口コミコンテンツ -->
      <div class="row mb-5">
        <!-- 口コミ01 -->
        <div class="col-12 col-lg-4">
          <div class="bg_light-gray p-4 h-100 position-relative">
            <!-- 口コミテキスト -->
            <div>
              <small class="text-dark">口コミ</small>
            </div>
            <!-- 口コミ番号とアイコン群画像 -->
            <div class="d-flex align-items-start mb-5">
              <div class="fs-2 lh100 fw-bold blue me-1">01</div>
              <div class="w-100">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/22101344.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/22101344.png" loading="lazy" alt="人物アイコン" class="img-fluid object-fit-cover w-100" height="130" width="220">
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
        <div class="col-12 col-lg-4">
          <div class="bg_light_blue p-4 h-100 position-relative">
            <!-- 口コミテキスト -->
            <div>
              <p class="text-dark">口コミ</p>
            </div>
            <!-- 口コミ番号とアイコン群画像 -->
            <div class="d-flex align-items-start mb-5">
              <div class="fs-2 lh100 fw-bold blue me-1">02</div>
              <div class="w-100">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/22101344.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/22101344.png" loading="lazy" alt="人物アイコン" class="img-fluid object-fit-cover w-100" height="130" width="220">
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
              <small class="text-dark">口コミ</small>
            </div>
            <!-- 口コミ番号とアイコン群画像 -->
            <div class="d-flex align-items-start mb-5">
              <div class="fs-2 lh100 fw-bold blue me-1">03</div>
              <div class="w-100">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/22101344.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/22101344.png" loading="lazy" alt="人物アイコン" class="img-fluid object-fit-cover w-100" height="130" width="220">
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
          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-center">
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
          <h3 class="fw-bold">東急リバブル株式会社 梅田センターの特徴</h3>
        </div>

        <!-- 特徴グリッド -->
        <div class="row g-5 mb-5 justify-content-center">
          <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <div class="bg-white">
              <picture class="mb-3">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/livable-img01.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/livable-img01.png" loading="lazy" alt="中崎町・天六エリアに特化" class="img-fluid object-fit-cover w-100" height="200" width="220">
              </picture>
              <div class="bg_gray py-3 px-3 height-80px">
                <p>東証プライム上場グループの安心感と豊富な実績。</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <div class="bg-white">
              <picture class="mb-3">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/livable-img02.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/livable-img02.png" loading="lazy" alt="築古や連棟など難物件にも対応" class="img-fluid object-fit-cover w-100" height="200" width="220">
              </picture>
              <div class="bg_gray py-3 px-3 height-80px">
                <p>全国に226店舗展開（2025年5月25日時点）、大阪市内にも複数拠点あり。</p>
              </div>
            </div>
          </div>

          <!-- 特徴3: 弁護士・税理士と主業と連携し、法的に複雑なケースも無料相談可能 -->
          <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <div class="bg-white">
              <picture class="mb-3">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/livable-img03.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/livable-img03.png" loading="lazy" alt="弁護士・税理士と主業と連携" class="img-fluid object-fit-cover w-100" height="200" width="220">
              </picture>
              <div class="bg_gray py-3 px-3 height-80px">
                <p>ポータルサイトや自社ネットワークなど、多彩な広告手法で早期売却を支援。</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <div class="bg-white">
              <picture class="mb-3">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/livable-img04.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/livable-img04.png" loading="lazy" alt="専任担当制で一貫対応" class="img-fluid object-fit-cover w-100" height="200" width="220">
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
            <a href="https://www.livable.co.jp/branch/umeda/" class="btn max-w-348 w-100 btn-arrow bg_red white position-relative hover-reverse-oapcity py-2 fw-bold text-center" role="button" target="_blank" rel="nofollow">
              不動産売却について<br>東急リバブルにお問い合わせ！
              <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
              </picture>
            </a>
            <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-center">
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
        <h3 class="fw-bold">東急リバブル株式会社 梅田センターの会社概要</h3>
      </div>
      <div class="mt-5 px-lg-5 mb-3 pb-3">
        <div class="row align-items-center">
          <div class="col-lg-6 pe-lg-4">
            <table class="table comparison-table w-100">
              <tbody class="fw-bold">
                <tr>
                  <td class="w35-25 border-dashed-gray pt-4 pb-3 text-nowrap">会社名</td>
                  <td class="border-dashed-gray pt-4 pb-3">東急リバブル株式会社 梅田センター</td>
                </tr>
                <tr>
                  <td class="w35-25 border-dashed-gray pt-4 pb-3 text-nowrap">住所</td>
                  <td class="border-dashed-gray pt-4 pb-3">〒530-0001<br>大阪府大阪市北区梅田1-11-4-152<br>大阪駅前第4ビル1F</td>
                </tr>
                <tr>
                  <td class="w35-25 border-dashed-gray pt-4 pb-3 text-nowrap">電話番号</td>
                  <td class="border-dashed-gray pt-4 pb-3">0120-109-635</td>
                </tr>
                <tr>
                  <td class="w35-25 border-dashed-gray pt-4 pb-3 text-nowrap">公式URL</td>
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
          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-center">
            東急リバブルの<br>口コミ・評判記事はこちら！
            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
            </picture>
          </a>
        </div>
      </div>
      <div class="mb-5 centerline_heading text-center">
        <h3 class="fw-bold">東急リバブル株式会社 梅田センターの口コミ・評判</h3>
      </div>
      <!-- 口コミコンテンツ -->
      <div class="row mb-5">
        <!-- 口コミ01 -->
        <div class="col-12 col-lg-4">
          <div class="bg-light p-4 h-100 position-relative">
            <!-- 口コミテキスト -->
            <div>
              <small class="text-dark">口コミ</small>
            </div>
            <!-- 口コミ番号とアイコン群画像 -->
            <div class="d-flex align-items-start mb-5">
              <div class="fs-2 lh100 fw-bold blue me-1">01</div>
              <div class="w-100">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/22101344.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/22101344.png" loading="lazy" alt="人物アイコン" class="img-fluid object-fit-cover w-100" height="130" width="220">
                </picture>
              </div>
            </div>

            <!-- 口コミ内容 -->
            <div class="small lh-base mb-5">
              <p class="mb-3">最初２社で検討しておりましたが、当方の事情をしっかり汲み取ってくださり、最適な提案をしてくれたことで、取引を決めさせていただきました。</p>
              <p class="mb-0">その後こちらの事情が変わった時も、それに合わせて対応いただき感謝しております。ありがとうございました。</p>
            </div>

            <!-- 引用元 -->
            <div class="position-absolute end-0 bottom-0 ps-4 pb-3 me-4">
              <p class="text-muted">引用元：<a href="https://www.livable.co.jp/branch/umeda/reviews/" target="_blank" rel="nofollow" class="text-darkmb-0">東急リバブル株式会社 梅田センター</a></p>
            </div>
          </div>
        </div>

        <!-- 口コミ02 -->
        <div class="col-12 col-lg-4">
          <div class="bg-primary-subtle p-4 h-100 position-relative">
            <!-- 口コミテキスト -->
            <div>
              <small class="text-dark">口コミ</small>
            </div>
            <!-- 口コミ番号とアイコン群画像 -->
            <div class="d-flex align-items-start mb-5">
              <div class="fs-2 lh100 fw-bold blue me-1">02</div>
              <div class="w-100">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/22101344.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/22101344.png" loading="lazy" alt="人物アイコン" class="img-fluid object-fit-cover w-100" height="130" width="220">
                </picture>
              </div>
            </div>

            <!-- 口コミ内容 -->
            <div class="small lh-base mb-5">
              <p class="mb-3">査定依頼をしてから、契約、引き渡しまで迅速に対応していただき、スムーズに売却することができて感謝しています。</p>
              <p class="mb-0">担当者さんの一つ一つの物件に熱意を以て接する様子に安心感が持てました。ありがとうございました。</p>
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
              <div class="w-100">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/22101344.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/22101344.png" loading="lazy" alt="人物アイコン" class="img-fluid object-fit-cover w-100" height="130" width="220">
                </picture>
              </div>
            </div>

            <!-- 口コミ内容 -->
            <div class="small lh-base mb-5">
              <p class="mb-3">担当者の方が終始丁寧かつ迅速に対応してくださり、安心して取引を進めることができました。不安もありましたが、質問にもすぐ答えてもらえたので助かりました。</p>
              <p class="mb-0">他社とも比較しましたが、提案内容や説明のわかりやすさは東急リバブルさんが一番でした。今後も知人に相談された際には紹介したいと思います。</p>
            </div>

            <!-- 引用元 -->
            <div class="position-absolute end-0 bottom-0 ps-4 pb-3 me-4">
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
          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-center">
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
      <h2 class="text-center text-white mt-5 mb-4 pt-5 pb-4 fw-bold fs-1 ls2 text-shadow_black">すみふの仲介ステップ<br class="d-block d-lg-none"><span class="fs-3">梅田統括事業所1課<br>住友不動産ステップ株式会社</span></h2>
    </div>

    <div class="py-5 mb-5">
      <div class="container">
        <!-- セクションタイトル -->
        <div class="mb-5 centerline_heading text-center">
          <h3 class="fw-bold">すみふの仲介ステップ 梅田統括事業所1課の特徴</h3>
        </div>
        <!-- 特徴グリッド -->
        <div class="row mb-5 justify-content-center">
          <div class="col-12 col-lg-4 mb-4 mb-lg-0">
            <div class="bg-white">
              <picture class="mb-3">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/step-img01.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/step-img01.png" loading="lazy" alt="中崎町・天六エリアに特化" class="img-fluid object-fit-cover w-100" height="200" width="220">
              </picture>
              <div class="bg_gray py-3 px-3 height-80px">
                <p>全国規模のブランド力と50年以上の業界実績。</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 mb-4 mb-lg-0">
            <div class="bg-white">
              <picture class="mb-3">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/step-img02.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/step-img02.png" loading="lazy" alt="築古や連棟など難物件にも対応" class="img-fluid object-fit-cover w-100" height="200" width="220">
              </picture>
              <div class="bg_gray py-3 px-3 height-80px">
                <p>売却サポートから税金・相続までワンストップで対応可能。</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 mb-4 mb-lg-0">
            <div class="bg-white">
              <picture class="mb-3">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/step-img02.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/step-img02.png" loading="lazy" alt="専任担当制で一貫対応" class="img-fluid object-fit-cover w-100" height="200" width="220">
              </picture>
              <div class="bg_gray py-3 px-3 height-80px">
                <p>建物検査や設備保証など、売却後の買主への安心感も支援。</p>
              </div>
            </div>
          </div>
        </div>

        <!-- CTAボタンエリア -->
        <div class="px-lg-5 mt-0 mt-lg-4">
          <div class="d-flex flex-column flex-md-row justify-content-center w-100 px-3 px-lg-5 gap-5">
            <a href="https://www.stepon.co.jp/center/umeda/" class="btn max-w-348 w-100 btn-arrow bg_red white position-relative hover-reverse-oapcity py-2 fw-bold text-center" role="button" target="_blank" rel="nofollow">
              不動産売却について<br>すみふの仲介ステップにお問い合わせ！
              <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-red.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
              </picture>
            </a>
            <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-center">
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
        <h3 class="fw-bold">すみふの仲介ステップ 梅田統括事業所1課の会社概要</h3>
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
          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-center">
            すみふの仲介ステップの<br>口コミ・評判記事はこちら！
            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
              <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
            </picture>
          </a>
        </div>
      </div>
      <div class="mb-5 centerline_heading text-center">
        <h3 class="fw-bold">すみふの仲介ステップの口コミ・評判記事</h3>
      </div>
      <!-- 口コミコンテンツ -->
      <div class="row mb-5">
        <!-- 口コミ01 -->
        <div class="col-12 col-lg-4">
          <div class="bg-light p-4 h-100 position-relative">
            <!-- 口コミテキスト -->
            <div>
              <p class="text-dark">口コミ</p>
            </div>
            <!-- 口コミ番号とアイコン群画像 -->
            <div class="d-flex align-items-start mb-5">
              <div class="fs-2 lh100 fw-bold blue me-1">01</div>
              <div class="w-100">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/22101344.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/22101344.png" loading="lazy" alt="人物アイコン" class="img-fluid object-fit-cover w-100" height="130" width="220">
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
        <div class="col-12 col-lg-4">
          <div class="bg-primary-subtle p-4 h-100 position-relative">
            <!-- 口コミテキスト -->
            <div>
              <p class="text-dark">口コミ</p>
            </div>
            <!-- 口コミ番号とアイコン群画像 -->
            <div class="d-flex align-items-start mb-5">
              <div class="fs-2 lh100 fw-bold blue me-1">02</div>
              <div class="w-100">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/22101344.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/22101344.png" loading="lazy" alt="人物アイコン" class="img-fluid object-fit-cover w-100" height="130" width="220">
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
              <div class="w-100">
                <picture>
                  <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/22101344.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/img/22101344.png" loading="lazy" alt="人物アイコン" class="img-fluid object-fit-cover w-100" height="130" width="220">
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
          <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-center">
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
                  <th class="bg_blue text-white fw-bold py-3">戸建て</th>
                  <th class="bg_blue text-white fw-bold py-3">マンション</th>
                  <th class="bg_blue text-white fw-bold py-3">土地</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center py-4 bg-white">
                    <span class="h2 fw-bold text-danger">5,980</span><span class="fs-5 text-danger fw-bold">万円</span>
                  </td>
                  <td class="text-center py-4 bg_light-gray">
                    <span class="h2 fw-bold text-danger">6,124</span><span class="fs-5 text-danger fw-bold">万円</span>
                  </td>
                  <td class="text-center py-4 bg-white">
                    <span class="h2 fw-bold text-danger">6,775</span><span class="fs-5 text-danger fw-bold">万円</span>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- 引用元 -->
            <div class="text-end mt-3 me-2">
              <p class="f13px text-secondary">引用元：<a href="" target="_blank" class="text-black mb-0">suumo 戸建て/マンション/土地</a></p>
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
            <div class="justify-content-start ms-3">
              <!-- メインテキスト -->
              <div class="mb-3 mt-5">
                <div class="text-center">
                  <p class="fw-bold d-flex align-items-center justify-content-center mb-0">
                    <span class="bg-warning text-black px-3 py-1 me-3 fw-bold f12px">PR</span>
                    <span class="fs-3">大阪市北区／中崎町・天六周辺の不動産売却なら</span>
                  </p>
                  <p class="mt-0 fs-3 fw-bold">築古・連棟など難物件のご相談も!</p>
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
          <div class="accordion-item mb-3 rounded-3 overflow-hidden border-0">
            <h3 class="accordion-header" id="headingOne">
              <button class="accordion-button fs-5 px-4 py-3 black bg_white f-sm-20 faq-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="border-radius:0;">
                <span class="me-3 fw-bold blue">Q</span>不動産を売るのに最適なタイミングはいつですか？
              </button>
            </h3>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
              <div class="accordion-body bg-white px-4 py-3">
                <p>
                  一般的には、春（3～4月）や秋（9～10月）が不動産市場が活発になる傾向があります。また、金利や税制優遇の影響も受けるため、経済動向<br>
                  も確認しておくと安心です。売却理由や住み替えの事情に応じて、時期を調整することが大切です。
                </p>
              </div>
            </div>
          </div>
          <!-- Q2 -->
          <div class="accordion-item mb-3 rounded-3 overflow-hidden border-0">
            <h3 class="accordion-header" id="headingTwo">
              <button class="accordion-button fs-5 px-4 py-3 black bg_white collapsed f-sm-20 faq-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="border-radius:0;">
                <span class="me-3 fw-bold blue">Q</span>まず何から始めればいいですか？
              </button>
            </h3>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
              <div class="accordion-body bg-white fs-5 px-4 py-3">
                査定価格はあくまで目安であり、実際の売却価格とは異なることが多いです。売却時の市場状況や買い手の交渉、物件の状態によって価格が変動するため、査定価格は「売れる可能性のある価格帯」として捉えるのが現実的です。
              </div>
            </div>
          </div>
          <!-- Q3 -->
          <div class="accordion-item mb-3 rounded-3 overflow-hidden border-0">
            <h3 class="accordion-header" id="headingThree">
              <button class="accordion-button fs-5 px-4 py-3 black bg_white collapsed f-sm-20 faq-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="border-radius:0;">
                <span class="me-3 fw-bold blue">Q</span>売却する際に必要な費用はありますか？
              </button>
            </h3>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
              <div class="accordion-body bg-white fs-5 px-4 py-3">
                早ければ1〜3か月で成約に至るケースもありますが、相場より高く設定した場合や築年数が古い物件は、半年以上かかることもあります。売却期間に余裕がある場合は、希望価格に近づけやすくなります。
              </div>
            </div>
          </div>
          <!-- Q4 -->
          <div class="accordion-item mb-3 rounded-3 overflow-hidden border-0">
            <h3 class="accordion-header" id="headingFour">
              <button class="accordion-button fs-5 px-4 py-3 black bg_white collapsed f-sm-20 faq-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="border-radius:0;">
                <span class="me-3 fw-bold blue">Q</span>住みながら売却活動はできますか？
              </button>
            </h3>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
              <div class="accordion-body bg-white fs-5 px-4 py-3">
                仲介は買い手を探して市場で売却する方法で、高く売れる可能性がありますが時間がかかることもあります。一方、買取は業者が直接物件を買い取るため、即現金化できますが価格はやや下がる傾向があります。状況に応じて使い分けることが大切です。
              </div>
            </div>
          </div>
          <!-- Q5 -->
          <div class="accordion-item mb-3 rounded-3 overflow-hidden border-0">
            <h3 class="accordion-header" id="headingFive">
              <button class="accordion-button fs-5 px-4 py-3 black bg_white collapsed f-sm-20 faq-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="border-radius:0;">
                <span class="me-3 fw-bold blue">Q</span>査定価格はそのまま売れる金額ですか？
              </button>
            </h3>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
              <div class="accordion-body bg-white fs-5 px-4 py-3">
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
          <p class="fs-3 mb-0 fw-bold">大阪市北区の</p>
        </div>
        <h2 class="mb-4 mb-lg-5 fs-2 fw-bold">
          <span class="blue fs-1">不動産売却会社</span>一覧
        </h2>
      </div>
      <div class="row mb-5 g-4 box-parent">
        <div class="col-12 col-lg-4 d-flex box-child">
          <div class="box-child-text border_blue_2px w-100">
            <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
              <h3 class="fs-6 fw-bold  m-0 col-11">株式会社ルビコン</h3>
            </div>
            <div class="p-3 f13px">
              <p class="pb-2 mb-2 height-70 height-80-lg">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <dl class="mb-3">
                <dt class="black fw-bold">所在地</dt>
                <dd class="height-40-lg">〒530-0016<br>大阪府大阪市北区中崎3-3-7<br>ロイヤルメゾン中崎町Nビル201</dd>
              </dl>
              <dl class="row">
                <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-6136-3604</span></dt>
                <div class="text-start col-md-7 mt-1 mt-md-2">
                  <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
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
        <div class="col-12 col-lg-4 d-flex box-child">
          <div class="box-child-text border_blue_2px w-100">
            <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
              <h3 class="fs-6 fw-bold  m-0 col-11">東急リバブル株式会社<br>梅田センター</h3>
            </div>
            <div class="p-3 f13px">
              <p class="pb-2 mb-2 height-70 height-80-lg">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <dl class="mb-3">
                <dt class="black fw-bold">所在地</dt>
                <dd class="height-40-lg">〒530-0001<br>大阪府大阪市北区梅田1-11-4-152<br>大阪駅前第4ビル1F</dd>
              </dl>
              <dl class="row">
                <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0120-109-635</span></dt>
                <div class="text-start col-md-7 mt-1 mt-md-2">
                  <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
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
        <div class="col-12 col-lg-4 d-flex box-child">
          <div class="box-child-text border_blue_2px w-100">
            <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
              <h3 class="fs-6 fw-bold  m-0 col-11">すみふの仲介ステップ<br>梅田統括事業所1課</h3>
            </div>
            <div class="p-3 f13px">
              <p class="pb-2 mb-2 height-70 height-80-lg">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <dl class="mb-3">
                <dt class="black fw-bold">所在地</dt>
                <dd class="height-40-lg">〒530-0001<br>大阪府大阪市北区梅田1-1-3-3100<br>大阪駅前第三ビル31F</dd>
              </dl>
              <dl class="row">
                <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0120-051-232</span></dt>
                <div class="text-start col-md-7 mt-1 mt-md-2">
                  <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
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
      <div class="row mb-5 g-4 box-parent">
        <div class="col-12 col-lg-4 d-flex box-child">
          <div class="box-child-text border_blue_2px w-100">
            <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
              <h3 class="fs-6 fw-bold  m-0 col-11">株式会社ルビコン</h3>
            </div>
            <div class="p-3 f13px">
              <p class="pb-2 mb-2 height-70 height-80-lg">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <dl class="mb-3">
                <dt class="black fw-bold">所在地</dt>
                <dd class="height-40-lg">〒530-0016<br>大阪府大阪市北区中崎3-3-7<br>ロイヤルメゾン中崎町Nビル201</dd>
              </dl>
              <dl class="row">
                <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">06-6136-3604</span></dt>
                <div class="text-start col-md-7 mt-1 mt-md-2">
                  <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                    記事で詳しく見る
                    <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                      <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                    </picture>
                  </a>
                </div>
              </dl>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.241708716635!2d139.3258790755913!3d35.67104997259054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60191e6116094331%3A0x5fd46f84d8153c8f!2z5L-h55So5Zyf5Zyw77yI5qCq77yJ!5e0!3m2!1sja!2sjp!4v1758878543652!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 d-flex box-child">
          <div class="box-child-text border_blue_2px w-100">
            <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
              <h3 class="fs-6 fw-bold  m-0 col-11">東急リバブル株式会社<br>梅田センター</h3>
            </div>
            <div class="p-3 f13px">
              <p class="pb-2 mb-2 height-70 height-80-lg">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <dl class="mb-3">
                <dt class="black fw-bold">所在地</dt>
                <dd class="height-40-lg">〒530-0001<br>大阪府大阪市北区梅田1-11-4-152<br>大阪駅前第4ビル1F</dd>
              </dl>
              <dl class="row">
                <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0120-109-635</span></dt>
                <div class="text-start col-md-7 mt-1 mt-md-2">
                  <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                    記事で詳しく見る
                    <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                      <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                    </picture>
                  </a>
                </div>
              </dl>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.241708716635!2d139.3258790755913!3d35.67104997259054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60191e6116094331%3A0x5fd46f84d8153c8f!2z5L-h55So5Zyf5Zyw77yI5qCq77yJ!5e0!3m2!1sja!2sjp!4v1758878543652!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 d-flex box-child">
          <div class="box-child-text border_blue_2px w-100">
            <div class="bg_sky_blue fw-bold text-white px-2 height-70 d-flex align-items-center">
              <h3 class="fs-6 fw-bold  m-0 col-11">すみふの仲介ステップ<br>梅田統括事業所1課</h3>
            </div>
            <div class="p-3 f13px">
              <p class="pb-2 mb-2 height-70 height-80-lg">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              <dl class="mb-3">
                <dt class="black fw-bold">所在地</dt>
                <dd class="height-40-lg">〒530-0001<br>大阪府大阪市北区梅田1-1-3-3100<br>大阪駅前第三ビル31F</dd>
              </dl>
              <dl class="row">
                <dt class="mb-1 position-relative col-md-5 lh-lg"><span class="fw-bold pe-3 position-relative z-2">電話番号</span><br><span class="fw-normal">0120-051-232</span></dt>
                <div class="text-start col-md-7 mt-1 mt-md-2">
                  <a href="" class="btn max-w-348 w-100 btn-arrow bg_sky_blue white position-relative hover-reverse-oapcity py-2 fw-bold text-start text-decoration-none f14px" style="width:180px;">
                    記事で詳しく見る
                    <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                      <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/img/allow-blue.png" class="img-fluid" loading="lazy" alt="アイコン" width="16" height="16">
                    </picture>
                  </a>
                </div>
              </dl>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.241708716635!2d139.3258790755913!3d35.67104997259054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60191e6116094331%3A0x5fd46f84d8153c8f!2z5L-h55So5Zyf5Zyw77yI5qCq77yJ!5e0!3m2!1sja!2sjp!4v1758878543652!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion mb-4" id="subsidyAccordion02">
        <div class="accordion-item  border-0 bg-transparent">
          <p class="d-flex justify-content-center" id="headingSubsidy02">
            <button class="accordion-button collapsed fs-5 custom-accordion-btn custom-accordion-btn02 bg_light_blue" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSubsidy02" aria-expanded="false" aria-controls="collapseSubsidy02">
              もっと見る
            </button>
          </p>
          <div id="collapseSubsidy02" class="accordion-collapse collapse" aria-labelledby="headingSubsidy02" data-bs-parent="#subsidyAccordion02">
            <div class="accordion-body">
              <div class="row mb-5 g-3 g-lg-3 box-parent">
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">株式会社みんなのおうち</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">複数社による不動産査定を一括で比較できるサービスを提供しています。利用者のニーズに合わせて、仲介と買取それぞれの最適な売却方法を提案しています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0062<br>東京都日野市多摩平2-2-1</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-843-1655</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.686035885219!2d139.37916257559075!3d35.660106272593985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e214970be599%3A0xde150383b6dd8e06!2z44OU44K_44OD44OI44OP44Km44K5IOixiueUsOmnheWJjeW6lw!5e0!3m2!1sja!2sjp!4v1758878747506!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">山口不動産株式会社<br>南口店</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">戸建て・マンション・土地の売却や買取に対応し、専門スタッフが売却プランの提案を行います。机上査定・訪問査定の両方に対応し、相談から成約まで丁寧にサポートしています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0053<br>東京都日野市豊田4-35-6 アトラス豊田102</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-581-2103</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.668317762928!2d139.37826232559073!3d35.66054272259383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e214cca765d1%3A0xd490b4263480a86d!2z5bGx5Y-j5LiN5YuV55SjIOixiueUsOmnheWNl-WPo-W6lw!5e0!3m2!1sja!2sjp!4v1758878806175!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">有限会社三幸商事</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産売買のほか、賃貸・管理やリフォームなど幅広い事業を展開しています。物件の査定・仲介・購入サポートに対応しており、複数の分野から不動産活用を提案しています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0062<br>東京都日野市多摩平1-1 ファミーユ京王1F</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-581-1220</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.668317762928!2d139.37826232559073!3d35.66054272259383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e214cbb980ef%3A0x142f3ce71ae60f65!2z5pyJ6ZmQ5Lya56S-5LiJ5bm45ZWG5LqL!5e0!3m2!1sja!2sjp!4v1758878849615!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">株式会社東宝ハウス立川</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売却・購入に対応し、仲介だけでなく買取にも応じています。住宅ローンの相談や資金計画、売却後の住み替えまで一貫してサポートしています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒190-0022<br>東京都立川市錦町2-6-2 ステラNKビル1F</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-524-8890</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.2806399349256!2d139.4118150755925!3d35.694710972582804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e17c804bff69%3A0x4d1697039b6baeca!2z5p2x5a6d44OP44Km44K556uL5bed!5e0!3m2!1sja!2sjp!4v1758878865861!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">株式会社エージェンシー雅</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">戸建て・土地・マンションの売買仲介や買取に対応しています。売却相談から契約、引き渡し後まで一貫してサポートし、迅速な対応と柔軟な提案を心がけています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0011<br>東京都日野市日野本町3-10-3 ケービーエムビル1F</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-589-5255</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.9412254387266!2d139.39195867559155!3d35.678449172588046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e2260cac387f%3A0x88a7b266c8dc6a7f!2z5qCq5byP5Lya56S-44Ko44O844K444Kn44Oz44K344O86ZuF!5e0!3m2!1sja!2sjp!4v1758878875909!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">一建設株式会社<br>日野営業所</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">新築・リフォームに加えて不動産の売却・購入にも対応しています。建築会社としてのノウハウを活かし、建物の魅力や価値を正確に伝える売却活動を行っています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0011<br>東京都日野市日野本町6-1-3 デュオヒルズ日野多摩川1F </dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-586-7066</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.84566634301!2d139.40178297559174!3d35.680801972587425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e223d912f62d%3A0x202ccbceac1e88cb!2z5LiA5bu66Kit77yI5qCq77yJ5pel6YeO5Za25qWt5omA!5e0!3m2!1sja!2sjp!4v1758878886381!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">ネクストイノベーション株式会社</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">土地・建物の売却や買取に対応し、相続や任意売却、住み替えなどの相談にも応じています。相談は無料で、丁寧かつスピーディーな対応を特徴としています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0053<br>東京都日野市豊田4-37-12 グランシェール豊田101</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-610-2822</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d103707.09784568229!2d139.32195659510987!3d35.680773872111295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e2152db471e1%3A0xf9b3c02be433ee10!2z44ON44Kv44K544OI44Kk44OO44OZ44O844K344On44Oz5qCq5byP5Lya56S-!5e0!3m2!1sja!2sjp!4v1758878906762!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">住友不動産ステップ株式会社<br>八王子店営業センター</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">売却・買取・住み替えに対応し、信託銀行グループならではの専門性を活かした提案を行っています。無料査定のほか、税務・法律の相談にも応じています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒192-0082<br>東京都八王子市東町7-3 T-5プレイス6F</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>0120-461-201</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7785551630814!2d139.33702047559063!3d35.657827172594715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60191dd929539695%3A0xef925869f563ce2c!2z5L2P5Y-L5LiN5YuV55Sj44K544OG44OD44OXIOWFq-eOi-WtkOWWtualreOCu-ODs-OCv-ODvA!5e0!3m2!1sja!2sjp!4v1758878917399!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">株式会社フォーラム</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">マンション・戸建て・土地の売買仲介を中心に、不動産の買取や賃貸管理にも対応しています。資金計画や売却活動の流れについても丁寧な説明を行っています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0032<br>東京都日野市三沢2-18-11</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-594-0008</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12967.114296301159!2d139.32929565717254!3d35.657826706702714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e30aca0141ef%3A0xfd9c080139cc0bc3!2z5qCq5byP5Lya56S-44OV44Kp44O844Op44Og!5e0!3m2!1sja!2sjp!4v1758879024234!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">エヌアール株式会社</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">戸建て・マンション・土地の売買仲介や買取に対応しており、住宅ローンや資金計画の相談も可能です。住まい探しから売却まで一人ひとりに寄り添った対応を行っています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0002 東京都日野市新町1-18-3 アネックスビル1F</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-582-5551</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.8916635722385!2d139.39097817559173!3d35.67966947258759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e22656b69503%3A0xd618a1c1a273aa2c!2zTkVYVCBST09N5pel6YeO5bqX!5e0!3m2!1sja!2sjp!4v1758879034051!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">株式会社ライフクリエイト<br>豊田駅前店</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">売買・賃貸の仲介をはじめ、物件の管理やリフォーム相談にも対応しています。住まいに関する幅広いニーズに応える提案力と、丁寧な接客を強みとしています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0053<br>東京都日野市豊田3-40-11 ザ・ヒルズ豊田駅前レジデンス1F-101</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-589-2121</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.743104457172!2d139.37966887559074!3d35.65870047259441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e3e049e577b7%3A0x814570249226cb43!2z44Op44Kk44OV44Kv44Oq44Ko44Kk44OI6LGK55Sw6aeF5YmN5bqX!5e0!3m2!1sja!2sjp!4v1758879044989!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">株式会社福屋不動産販売<br>八王子店</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売却・購入・買取に対応し、無料査定や住み替え相談なども受け付けています。店舗スタッフが物件の特長を把握したうえで、丁寧にサポートしています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒192-0081<br>東京都八王子市横山町22-1 エフ・ティービル八王子5F</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>0120-577-298</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.68745673691!2d139.3357343755907!3d35.66007127259422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60191e7626c7d3cf%3A0xed1931fbd3396608!2zKOagqinnpo_lsYvkuI3li5XnlKPosqnlo7Ig5YWr546L5a2Q5bqX!5e0!3m2!1sja!2sjp!4v1758879058806!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">株式会社マトリックスレジデンシャル</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産売買・買取に加え、リノベーションや収益物件の紹介にも対応しています。不動産に関するさまざまな要望に対し、専門的な視点から提案を行っています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒192-0053<br>東京都八王子市八幡町14-16</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>0120-882-340</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.649137972774!2d139.32609947559078!3d35.66101517259381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60191e7c19a041d3%3A0x57b1db0b673e4dde!2z44K744Oz44OB44Ol44Oq44O8MjEg44Oe44OI44Oq44OD44Kv44K544Os44K444OH44Oz44K344Oj44Or!5e0!3m2!1sja!2sjp!4v1758879071500!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">駅前ハウジング</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">売買・賃貸の仲介に対応しており、売却相談・価格査定・買取にも応じています。地域に根ざした営業を行い、不動産に関する多様なニーズに柔軟に対応しています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0061<br>東京都日野市大坂上1-32-2</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-589-1634</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.91356308844!2d139.39026937559166!3d35.67913027258795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e226f08e59a9%3A0xf62a464ac1b41c1b!2z6aeF5YmN44OP44Km44K444Oz44Kw!5e0!3m2!1sja!2sjp!4v1758879083384!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">株式会社ミネギシ</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産売買や仲介をはじめ、買取・資産運用・任意売却など幅広いサービスに対応しています。物件の特性や状況に応じて、丁寧なサポートと的確な提案を行っています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0031<br>東京都日野市高幡15-12</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-593-4888</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.63315904396!2d139.40997097559088!3d35.66140877259374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e3ae409a3ecd%3A0x79ef4d0ba723131a!2z44Of44ON44Ku44K3!5e0!3m2!1sja!2sjp!4v1758879100858!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">株式会社ハートフルホーム</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">土地・建物の売却や購入に対応し、相談から契約、引き渡しまでをトータルでサポートしています。売主・買主双方の安心を大切にした対応を心がけています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0053<br>東京都日野市豊田3-31-25 ブライトヒル豊田1F</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-843-1881</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d103732.29758655206!2d139.33014459414832!3d35.661380678539544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e4a1d6afc781%3A0x85d2dfda84d7a815!2z5qCq5byP5Lya56S-44OP44O844OI44OV44Or44Ob44O844Og!5e0!3m2!1sja!2sjp!4v1758879114438!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">株式会社インフィニットスペース</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">戸建てやマンション、土地の売却に対応し、買取やリノベーション提案も行っています。建築会社としての知識を活かし、不動産の価値を最大限に引き出しています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0011<br>東京都日野市日野本町2-8-2</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042‑589‑7701</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.0166762220633!2d139.39335777559154!3d35.676591372588646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e22f7e559dc9%3A0x25084fc4b78dc9c0!2z44Kk44Oz44OV44Kj44OL44OD44OI44K544Oa44O844K5!5e0!3m2!1sja!2sjp!4v1758879124347!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">株式会社エステート日野</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">売買仲介・賃貸・管理などに対応し、相続や空き家などの相談も受け付けています。不動産の専門家として、顧客の課題に寄り添った解決策を提案しています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0001 東京都日野市栄町2-10-12 ハイコーポふくしま104</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-582-6050</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.74805460689!2d139.3871787755919!3d35.68320517258659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e1419ae842df%3A0xc5a7a504a580c31a!2z5qCq5byP5Lya56S-IOOCqOOCueODhuODvOODiOaXpemHjg!5e0!3m2!1sja!2sjp!4v1758879133696!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">マイホーム不動産株式会社</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">戸建て・マンション・土地の売却や住み替え相談に対応し、仲介と買取の両方を取り扱っています。無料査定を実施し、スピーディーかつ誠実な対応を大切にしています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒192-0072<br>東京都八王子市南町9-1 ルミエールK1F</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-634-9527</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.740705326882!2d139.32937357559067!3d35.65875957259445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60191fdbcaf8725b%3A0xbab76b0a0dd3278b!2z44Oe44Kk44Ob44O844Og5LiN5YuV55Sj5qCq5byP5Lya56S-IOWFq-eOi-WtkOW4gg!5e0!3m2!1sja!2sjp!4v1758879143870!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">株式会社タウンハウジング東京<br>高幡不動店</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">売買仲介・賃貸・管理を幅広く展開し、住み替えや不動産投資の相談にも対応しています。査定や売却活動に加え、グループ力を活かした多角的なサポートを提供しています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0031<br>東京都日野市高幡3-17 高幡不動駅前ビル1-2F</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042‑599‑0057</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.6057070819697!2d139.41015707559094!3d35.6620849725934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e3ae25ed296b%3A0xfa1ae1787949a004!2z44K_44Km44Oz44OP44Km44K444Oz44KwIOmrmOW5oeS4jeWLleW6lw!5e0!3m2!1sja!2sjp!4v1758879152794!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">株式会社シーディーエム</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">住まいの売却をサポートする専用サービスを展開し、無料査定やスピード買取にも対応しています。仲介と買取を比較しながら、売却に最適なプランを提案しています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0011<br>東京都日野市日野本町4-2-5</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-514-9915</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.919574033044!2d139.39569377559175!3d35.67898227258792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e35ea1c361f9%3A0x771edf6a91657f26!2z44Ko44Kk44OW44Or44ON44OD44OI44Ov44O844Kv5pel6YeO6aeF5YmN5bqX!5e0!3m2!1sja!2sjp!4v1758879164284!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">小田急不動産株式会社<br>町田店</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産売却に関する無料査定や住み替え、買取サービスに対応しています。専属エージェントが売主一人ひとりに寄り添い、丁寧な売却サポートを行っています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒194-0022<br>東京都町田市森野1-22-14 小田急シティビル町田3F</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>0120-091-391</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25964.70575711312!2d139.44172414416204!3d35.563870697986424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018feb2d6469ae1%3A0x3fad65948add9527!2z5bCP55Sw5oCl44Gu5Luy5LuL77yG44Oq44OV44Kp44O844OgIOeUuueUsOW6l--8iOWwj-eUsOaApeS4jeWLleeUo-ODu-Wwj-eUsOaApeODj-OCpuOCuOODs-OCsCDnlLrnlLDlupfvvIk!5e0!3m2!1sja!2sjp!4v1758879178350!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">上野不動産株式会社</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売買・買取・任意売却などに対応し、資金計画や相続、リースバックの相談も可能です。売却後の暮らしを見据えた提案を通じて、安心の取引を支援しています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒190-0182<br>東京都西多摩郡日の出町大字平井213-22</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-588-5923</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207306.79182473547!2d139.36017331217408!3d35.72207129262453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60192230282a911b%3A0x834be1ad3e5cdf7e!2z5LiK6YeO5LiN5YuV55Sj77yI5qCq77yJ!5e0!3m2!1sja!2sjp!4v1758879205078!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">都市住宅サービス株式会社<br>日野本店</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">土地や戸建て・マンションの売買仲介に対応し、住宅ローンやリフォームの相談にも応じています。査定・相談は無料で、地域密着型の細やかなサポートを心がけています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0011<br>東京都日野市日野本町3-11-10 中村興産ビル2F</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-581-8081</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207270.72634925204!2d138.99310313281248!3d35.73592939999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e226403c1cf1%3A0x81f43d478531b914!2z6YO95biC5L2P5a6F44K144O844OT44K577yI5qCq77yJ!5e0!3m2!1sja!2sjp!4v1758879215128!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">Saikyo Home株式会社<br>国立店</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">戸建て・マンション・土地の売却や買取、住み替えに対応しています。ライフプランに沿った売却提案を行い、資金相談やリフォーム提案も含めた総合的なサポートを行っています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒186-0004<br>東京都国立市中1-14-9 ステージ国立1F</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-505-6300</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207270.72634925204!2d138.99310313281248!3d35.73592939999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e226403c1cf1%3A0x81f43d478531b914!2z6YO95biC5L2P5a6F44K144O844OT44K577yI5qCq77yJ!5e0!3m2!1sja!2sjp!4v1758879215128!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">株式会社大力屋</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売買・買取に加え、相続や任意売却の相談にも応じています。無料査定や住み替え支援に対応し、一人ひとりに合わせた売却方法の提案を行っています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0034<br>東京都日野市落川941-1</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>04-593-5111</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.8514351944445!2d139.43058657559064!3d35.65603177259542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e3bbe3e5ac4d%3A0xec79a64d3146f0d3!2z5qCq5byP5Lya56S-IOWkp-WKm-Wxiw!5e0!3m2!1sja!2sjp!4v1758879257116!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">株式会社アイ・エステート</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">土地や建物の売却に対応し、相談から引き渡しまでを一貫してサポートしています。丁寧なヒアリングを通じて、物件の特性を活かした売却活動を行っています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0053 東京都日野市豊田4-33-13 1F</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-508-2990</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51869.6275375049!2d139.391961808115!3d35.65602472930238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e3729bb38cef%3A0x206bcaa679da642d!2z5qCq5byP5Lya56S-44Ki44Kk44O744Ko44K544OG44O844OI!5e0!3m2!1sja!2sjp!4v1758879271696!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">タカラシンコー株式会社</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">売買仲介や不動産の買取、リースバックなどに対応しています。住み替えやローン返済に関する相談も可能で、スムーズな売却につながる提案を心がけています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0016<br>東京都日野市神明4-18-11</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-587-5887</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51867.61218128478!2d139.3124886582031!3d35.65912770000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e23a8fff0ded%3A0x6e92c5f2091e7f28!2z44K_44Kr44Op44K344Oz44Kz44O85qCq5byP5Lya56S-!5e0!3m2!1sja!2sjp!4v1758879282476!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">日野不動産販売株式会社</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">テキストテキストテキストテキストテキスト</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0002<br>東京都日野市新町1-6-6</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-514-9150</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.8103826654524!2d139.38779287559183!3d35.68167067258714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e18a1b5dd0d1%3A0x51b2b97f6b9ab58!2z5pel6YeO5LiN5YuV55Sj6LKp5aOy5qCq5byP5Lya56S-!5e0!3m2!1sja!2sjp!4v1758879292112!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">有限会社アールアンドエス</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">戸建て・マンション・土地の売買や買取に対応し、空き家や相続物件の相談も受け付けています。不動産の状態や希望条件に応じて、柔軟な売却サポートを行っています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0002 東京都日野市新町1-21-1</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-585-2311</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d103705.96876914478!2d139.30796649515295!3d35.68164257182378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e2270289f0c7%3A0xcf0cdbe146335bfd!2z44Ki44O844Or44Ki44Oz44OJ44Ko44K5!5e0!3m2!1sja!2sjp!4v1758879309998!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">株式会社エニーホーム</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産売却の仲介・買取に対応し、住み替えや離婚による売却、空き家などの相談も可能です。相談者の事情に合わせた適切な方法を提案し、売却活動を支援しています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0041<br>東京都日野市南平7-18-11 第二小林ビル302</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-508-2103</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d103705.96876914478!2d139.30796649515295!3d35.68164257182378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e33b34c747a1%3A0x24b03ce7471e9f5b!2z5qCq5byP5Lya56S-44Ko44OL44O844Ob44O844Og!5e0!3m2!1sja!2sjp!4v1758879319054!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">株式会社信誠ハウジング</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産売却に対応するほか、住宅リフォームを中心としたサービスを展開しています。建物の状態をふまえた資産価値の維持・向上を重視し、売却活動をバックアップしています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0062<br>東京都日野市多摩平1-2-3</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-589-4181</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.9064036456953!2d139.38987217559048!3d35.65467757259576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e214a18e1fe1%3A0xbb45ca724d922bd1!2z5qCq5byP5Lya56S-5L-h6Kqg44OP44Km44K444Oz44Kw!5e0!3m2!1sja!2sjp!4v1758879333146!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">理想空間株式会社</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">テキストテキストテキストテキストテキスト</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒190-0002<br>東京都立川市幸町3-17-4 理想空間ビル1F</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-538-1133</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.221244534393!2d139.42732247559368!3d35.72077697257453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e3abfdac3c9f%3A0x72067bfa39adf3b3!2z44K744Oz44OB44Ol44Oq44O8MjHnkIbmg7PnqbrplpM!5e0!3m2!1sja!2sjp!4v1758879346732!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">株式会社高幡ホーム</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">土地・建物の売買に対応し、不動産の査定や売却相談にも応じています。地域密着型の営業姿勢を強みとし、顧客一人ひとりに合わせた対応を行っています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0031<br>東京都日野市高幡1005-8</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-592-8000</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.6839289628933!2d139.4108956755907!3d35.66015817259414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e3af01d4b4ab%3A0x98593bb340c8a381!2z5qCq5byP5Lya56S-6auY5bmh44Ob44O844Og!5e0!3m2!1sja!2sjp!4v1758879356446!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">有限会社京ハウス</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">土地や戸建て、マンションの売却に対応し、仲介と買取の両方を扱っています。売却相談から契約・引き渡しまで一貫してサポートし、丁寧な対応を心がけています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0041<br>東京都日野市南平6-25-5</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-594-3850</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.6839289628933!2d139.4108956755907!3d35.66015817259414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e244b6c462df%3A0x918943e4120c8f25!2z5Lqs44OP44Km44K5!5e0!3m2!1sja!2sjp!4v1758879365006!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">エム・ケー株式会社</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売買や買取を中心に、相続・住み替え・任意売却などの相談にも対応しています。相談内容に応じて最適な売却方法を提案し、安心の取引をサポートしています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0061<br>東京都日野市大坂上1-30-28 MKビル</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-589-0222</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.9217793944567!2d139.3890710755917!3d35.67892797258798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e226dbf66de1%3A0xe3ce60b2c3d0c422!2z44Ko44Og44O744Kx44O877yI5qCq77yJ!5e0!3m2!1sja!2sjp!4v1758879372627!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">有限会社片桐不動産販売</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">土地・建物の売買を主に取り扱い、不動産の無料査定や売却相談にも対応しています。経験に基づいた提案を行い、納得できる不動産取引を支援しています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0011<br>東京都日野市日野本町3-14-17</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-586-9113</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.9217793944567!2d139.3890710755917!3d35.67892797258798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e2261735d585%3A0xd6e0a6b03f5ecac9!2z54mH5qGQ5LiN5YuV55Sj6LKp5aOy!5e0!3m2!1sja!2sjp!4v1758879381648!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">三榮観光開発株式会社</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">不動産の売買・仲介業務を手がけており、物件の査定や契約手続きまで一連の流れをサポートしています。利用者にとって分かりやすく、誠実な対応を大切にしています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0034<br>東京都日野市落川2100-3</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-591-2513</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7733835394056!2d139.42814807559077!3d35.6579545725948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e3743af3f35d%3A0x4d8f6eb05adcc1b9!2z5LiJ5qau6Kaz5YWJ6ZaL55m6KOagqik!5e0!3m2!1sja!2sjp!4v1758879393025!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">株式会社紀ノ国屋</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">テキストテキストテキストテキストテキスト</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0062<br>東京都日野市多摩平1-2-8 司ビル1F</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-581-8281</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51868.37871134203!2d139.3895233081383!3d35.65794752914198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e21362f8f0a7%3A0xab8b018481538cde!2z77yI5qCq77yJ57SA44OO5Zu95bGL!5e0!3m2!1sja!2sjp!4v1758879409494!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4 d-flex box-child">
                  <div class="bg_light_beige overflow-hidden box-child-text ">
                    <div class="bg_dark_green text-white px-2 py-3 height-70">
                      <h3 class="fs-6 text-white m-0 col-11 ">有限会社日野不動産</h3>
                    </div>
                    <div class="p-3 f13px bg_light_beige">
                      <p class="pb-2 mb-2 height-70 height-80-lg">売却・購入の仲介を中心に、物件の価格査定や条件交渉まで幅広く対応しています。顧客の要望に沿った提案を行い、安心して取引できる体制を整えています。</p>
                      <dl class="mb-3">
                        <dt class="black fw-bold">所在地</dt>
                        <dd class="height-40-lg">〒191-0011<br>東京都日野市日野本町4-5-12</dd>
                      </dl>
                      <dl class="mb-3">
                        <dt class="black fw-bold">電話番号</dt>
                        <dd>042-581-2675</dd>
                      </dl>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51866.89848244377!2d139.31035105820317!3d35.660226499999986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e226185cc3f7%3A0x7875f1b2cba772b!2z5pyJ6ZmQ5Lya56S-IOaXpemHjuS4jeWLleeUow!5e0!3m2!1sja!2sjp!4v1758879421447!5m2!1sja!2sjp" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mb-3 text-center p-1 px-3 height-80px">
                      <!-- <a href="/" class="btn bg_blue px-2 py-2 text-white fw-bold max-width-350 w-100 btn-hover-blue position-relative shadow border-radius-0" role="button">
                                            の<br>口コミ・評判記事はこちら
                                            <picture class="position-absolute top-50 translate-middle-y end-0 pe-2">
                                                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.webp">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_icon_yazi_white.png" class="img-fluid" loading="lazy" alt="アイコン" width="20" height="20">
                                            </picture>
                                        </a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center mb-5 col-12 col-lg-8 mx-auto">
        <a href="/"
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
      <div class="text-center mb-2">
        <h2 class="mb-0 fw-bold white fs-1">
          記事一覧
        </h2>
      </div>
      <div class="row mb-5">
        <div class="col-6 col-lg-4 mb-3">
          <div>
            <a href="/">
              <picture>
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_articles_img01.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_articles_img01.png" class="img-fluid rounded-2 object-fit-cover height-150 w-100" loading="lazy" alt="" height="201" width="274">
              </picture>
            </a>
          </div>
          <a class="d-block text-decoration-none black mb-3 small" href="/"><span class="black bg_yellow p-2 position-relative" style="top: -20px;">カテゴリー</span></a>
          <a class="d-block text-decoration-none white height-100 height-80-lg" href="/">テキストテキストテキストテキストテキストテキストテキストテキスト</a>
          <a class="d-block text-decoration-none small text-end white" href="/">公開 2025.1.9 / 更新 2025.1.10</a>
        </div>
        <div class="col-6 col-lg-4 mb-3">
          <div>
            <a href="/">
              <picture>
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_articles_img01.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_articles_img01.png" class="img-fluid rounded-2 object-fit-cover height-150 w-100" loading="lazy" alt="" height="201" width="274">
              </picture>
            </a>
          </div>
          <a class="d-block text-decoration-none black mb-3 small" href="/"><span class="black bg_yellow p-2 position-relative" style="top: -20px;">カテゴリー</span></a>
          <a class="d-block text-decoration-none white height-100 height-80-lg" href="/">テキストテキストテキストテキストテキストテキストテキストテキスト</a>
          <a class="d-block text-decoration-none small text-end white" href="/">公開 2025.1.9 / 更新 2025.1.10</a>
        </div>
        <div class="col-6 col-lg-4 mb-3">
          <div>
            <a href="/">
              <picture>
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/img/s_articles_img01.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/s_articles_img01.png" class="img-fluid rounded-2 object-fit-cover height-150 w-100" loading="lazy" alt="" height="201" width="274">
              </picture>
            </a>
          </div>
          <a class="d-block text-decoration-none black mb-3 small" href="/"><span class="black bg_yellow p-2 position-relative" style="top: -20px;">カテゴリー</span></a>
          <a class="d-block text-decoration-none white height-100 height-80-lg" href="/">テキストテキストテキストテキストテキストテキストテキストテキスト</a>
          <a class="d-block text-decoration-none small text-end white" href="/">公開 2025.1.9 / 更新 2025.1.10</a>
        </div>
      </div>
      <div class="text-center mb-5 col-12 col-lg-8 mx-auto">
        <a href="/"
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
      <div class="p-2 my-4">
        <div class="mb-5 centerline_heading text-center">
          <h3 class="fw-bold">サイトコンテンツタイトル</h3>
        </div>
      </div>

      <ul class="d-flex flex-wrap gap-2 list-unstyled mb-5">
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
      </ul>
      <div class="p-2 my-4">
        <div class="mb-5 centerline_heading text-center">
          <h3 class="fw-bold">サイトコンテンツタイトル</h3>
        </div>
      </div>

      <ul class="d-flex flex-wrap gap-2 list-unstyled mb-5">
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
        <li class="my-2"><a class="text-black text-decoration-none" href="/">サイトコンテンツタイトル /</a></li>
      </ul>
    </div>
  </section>
</main>
<!-- コンテンツここまで -->



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
