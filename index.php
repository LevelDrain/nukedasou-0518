<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/common/favicon.ico">
    <link rel="apple-touch-icon" href="./images/common/apple-touch-icon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@MaedaDesignRoom">
    <meta property="og:url" content="https://nukedasou.maeda-design-room.net/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="ぬけだ荘｜前田デザイン室">
    <meta property="og:description" content="これは社会実験だ。現状からぬけだしたい人たちによる、等身大のさらけ出しがここに。"/>
    <meta property="og:image" content="https://nukedasou.maeda-design-room.net/images/common/ogp.png"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description"
          content="これは社会実験だ。現状からぬけだしたい人たちによる、等身大のさらけ出しがここに。オンラインコミュニティ前田デザイン室のメンバーたちによる、１年間のリアルな「ぬけだし」の記録。">
    <title>ぬけだ荘｜前田デザイン室</title>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@500;700;800&family=Noto+Sans+JP:wght@500;700;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- htmlspecialchars -->
<?php
function h($s)
{
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

?>

<!-- Start Header -->
<header class="l-header p-header">
    <div class="l-flex l-container">
        <h1 class="p-header__logo"><a href="#"><span class="screen-reader-txt">ぬけだ荘</span><img
                        src="images/common/nukedasou-logo.png" alt="ぬけだ荘"></a></h1>
        <p class="p-header__maede"><a href="https://whats.maeda-design-room.net/" target="_blank"
                                      rel="noopener noreferrer"><img src="images/common/maede_logo2.png" alt="前田デザイン室"></a>
        </p>
        <nav class="p-header__nav">
            <ul class="l-flex">
                <li class="p-heder__menu"><a href="#what">はじめに</a></li>
                <li class="p-heder__menu"><a href="#greeting">管理人あいさつ</a></li>
                <li class="p-heder__menu"><a href="#residentList">住人名簿</a></li>
                <li class="p-heder__menu"><a href="#activityReport">活動報告</a></li>
                <li class="p-heder__menu">
                    <a href="https://whats.maeda-design-room.net/" target="_blank" rel="noopener noreferrer"><span
                                class="screen-reader-txt">前田デザイン室</span><img src="images/common/maede_logo2.png"
                                                                             alt="前田デザイン室CAMPFIREページへ"></a>
                </li>
                </li>
            </ul>
        </nav>
    </div>
</header>

<!-- Start Main -->
<main class="l-main">
    <!-- Start Mainvisual  -->
    <section class="p-mainVisual">
        <div class="p-mainVisual__img">
            <img class="p-mainVisual__img1" src="images/gif/mv_kemuri.gif" alt="ぬけだ荘">
            <img class="p-mainVisual__img2" src="images/gif/mv_tanuani.gif" alt="タヌ">
        </div>
        <h2 class="p-mainvisual__heading">
            <img class="p-mainVisual__logo" src="images/common/nukedasou-logo.png" alt="ぬけだ荘"><span>へようこそ</span>
        </h2>
    </section>

    <!--Start What's nukedasou-->
    <section class="p-what" id="what">
        <div class="l-container">
            <h2 class="c-title">はじめに。</h2>
            <div class="l-flex--pc">
                <div class="text">
                    <p class="c-heading">ぬけだ荘とは、オンラインコミュニティ前田デザイン室による「社会実験」です。<br>
                        人が何かからぬけだす時は「学ぶ」のではなく誰かを見て「気づく」時ではないか？<br>私たちはそう仮説を立てました。</p>
                    <p class="c-heading">具体的には、現状に不満を抱えるメンバーが集まって、一人一人が自分と向き合い、<br>
                        試行錯誤する過程をさらけ出すことで、1年かけてそれぞれのモヤモヤからぬけだします。</p>
                    <p class="c-heading">さらけ出し、公言することで、同じ経験を持つ人からアドバイスをもらえたり、行動に移しやすくなります。誰かがぬけだしていく様子を見て刺激を受けることが、<br>ぬけだしのきっかけになる人もいるでしょう。
                    </p>
                    <p class="c-heading">今このページを見ているあなたにも、ぬけだしたいことはありませんか？<br>
                        私たちのぬけだしの過程を見ることで、「あなたのぬけだしたいこと」に気付く最初の一歩になれたら嬉しいです。</p>
                </div>
                <div class="p-what__animation">
                    <span id="slide-open-switch"></span>
                    <div class="window-slide-wrap rel">
                        <img class="window-base" width="223px" src="./images/common/window_tanu.png"
                             alt="ぬけだ荘 マスコットたぬき">
                        <div class="window-slide">
                            <img width="117px" src="./images/common/window_slide.png">
                        </div>
                        <div class="window-fence">
                            <img src="./images/common/window_fence.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="l-flex--pc p-what__books">
                <div class="text">
                    <h2 class="c-title">ゴールは書籍化！<br>ぬけだした人全員、著者。</h2>
                    <p class="c-heading">2021年、このぬけだ荘という社会実験の実録を集め、一冊の本にすることを目標にしています。</p>
                    <p class="c-heading">凄い人の輝かしい記録ではなく、何者でもない他人のリアルなぬけだしの記録が、誰かの気付きになり、成長の糧になっていく。<br>
                        その過程にこそ価値がある、と考えています。</p>
                </div>
                <div class="p-what__bookspic">
                    <img src="./images/common/bookimage.png" alt="ぬけだ荘書籍イメージ 「現状から抜け出したい！」">
                    <span style="font-size:11px">※装丁は変更になることがあります。</span>
                </div>
            </div>
            <p><a target="_blank" class="c-button" href="https://note.com/tmaeda/n/ndcd6e41e80de"
                  rel="noopener noreferrer">ぬけだ荘について詳しく</a></p>
        </div><!-- End .l-container -->
    </section><!-- End What's nukedasou-->

    <!-- Start Greeting -->
    <!-- <section class="p-greeting" id="greeting">
      <h2 class="c-title">管理人あいさつ</h2>
      <div class="l-container l-flex--pc">
        <div class="p-greeting__pic"><img src="images/common/greeting_img_pc.png" width="410px" alt="管理人ふじっこ"></div>
        <div class="p-greeting__left">
          <p class="p-greeting__text c-heading">ぬけだ荘へようこそ<br>前田デザイン室ぬけだ荘プロジェクトリーダーを務めます、ふじっこです。</p>
          <p class="p-greeting__text c-heading">ここは、現状を変えたいともがく人たちが暮らすバーチャルシェアハウスです。<br>わたしは管理人という立場で、1年間皆さんの活躍を見守っていきます。</p>
          <p class="p-greeting__text c-heading">おかえり。いってらっしゃい。またね。</p>
          <p class="p-greeting__text c-heading">そんなたわいもない会話をしたり、悩みを打ち明けたり、嬉しい出来事を自慢したり、ときには深夜に隣人を呼び出して弱音を吐いてみたり…<br>
          ひとりじゃ立ち向かえそうにないことも、ここでなら勇気がわいてくる。</p>
          <p class="p-greeting__text c-heading">さぁ、１年後！あなたはどんな姿に化けてここを出ていきたいですか？</p>
          <div class="l-flex">
            <p class="p-greeting__name">管理人 ふじっこ より</p>
            <ul class="c-sns__wrap">
              <li class="c-sns__item"><a target="_blank" href="https://note.com/sugoi_hayasa"><img src="images/common/note_logo.png" alt="noteへ"></a></li>
              <li class="c-sns__item"><a target="_blank" href="https://twitter.com/sugoi_hayasa"><img src="images/common/twitter_logo.png" alt="twitterへ"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End Greeting -->

    <!------ 2021/5/18 ぬけだ荘通信実装 ------>
    <!-- Start Nuke News -->
    <section class="p-nukenews" id="nukenews">
        <div class="l-container">
            <h2 class="c-title">ぬけだ荘通信</h2>
            <p class="c-heading">ぬけだ荘の今をお届け！！<br>
                赤まむしとなまたまご</p>
            <!-- Start .p-nukenews--wrap -->
            <?php
            // CSV読み込み
            $newsfile = 'csv/tsuushin.csv';
            $record = [];
            if (($handle = fopen($newsfile, 'r')) !== false) {
                while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                    $data = str_replace(['\r\n', '\r', '\n'], '\n', $data); //csv改行読み込み変換
                    array_unshift($record, $data); //配列0番目が最新になるようソート
                }
            }
            fclose($handle);
            ?>
            <section class="p-nukenews__wrap">
                <div class="p-nukenews__inner">
                    <div class="p-nukenews__box">
                        <img src="images/banner/<?= h($record[0][1]) ?>" alt="">
                        <p class="p-newsItem__txt"><?= nl2br(h($record[0][2])) ?></p>
                    </div>
                    <div class="p-nukenews__box pc_br">
                        <img src="images/banner/<?= h($record[1][1]) ?>" alt="">
                        <p class="p-newsItem__txt"><?= nl2br(h($record[1][2])) ?></p>
                    </div>
                </div>
            </section>
        </div><!-- End .l-container -->
    </section><!-- End notes-->
    <!------ End 2021/5/18 ぬけだ荘通信実装 ------>

    <!-- Start Resident List -->
    <section class="p-residentList" id="residentList">
        <div class="l-container">
            <h2 class="c-title">住人名簿</h2>
            <p class="c-heading">ぬけだ荘に入居している住人たちの名簿。<br>住人たちは何からぬけだしたいのか。<br class="sp_br">一緒に覗いてみましょう。</p>

            <!-- Start .p-list--wrap -->
            <section class="p-list__wrap">
                <div class="p-list__inner">
                    <?php for ($i = 1; $i < 8; $i++) : //1F〜7Fまでのループ?>
                        <!-- Start .p-list--box 階層ごとのコンテンツ -->
                        <section class="p-list__box">
                            <h3 class="c-toggleButton --pc"><?php echo h($i); ?>F</h3>
                            <label for="<?php echo h($i); ?>F" class="c-toggleButton open"><?php echo h($i); ?>F</label>
                            <input type="radio" id="<?php echo h($i); ?>F" class="js-button_1">
                            <div class="p-listItem js-content_1 stay">
                                <?php
                                $filepath = "csv/list-${i}F.csv"; //ファイルパスの指定
                                if (($f = fopen($filepath, "r")) !== false): //階層ごとのcsvファイルをオープン
                                ?>
                                <?php while ($line = fgetcsv($f)) : //csvの中身を取得、行ごとにループ               ?>

                                <?php if (empty($line[1])) : //空室（名前が未入力）の場合               ?>
                                <?php $vacant = 'p-listItem__box__empty'; //$vacantの定義?>
                                <article class="p-listItem__box <?php echo h($vacant); //クラスを付与?>">

                                    <?php else: //空室では無いとき               ?>
                                    <article class="p-listItem__box">
                                        <?php endif; //空室判定END?>
                                        <div class="l-flex--tab">
                                            <div class="p-listItem__left">
                                                <p class="p-listItem__number"><?php echo h($line[0]); ?>号室</p>
                                                <p class=" p-listItem__icon">
                                                    <!-- noteリンクがあればaタグ出力 -->
                                                    <?php
                                                    $ary = $line[6];
                                                    if (empty($ary)) {
                                                        echo '<img src="images/icon/' . h($line[0]) . '.jpg" alt="">';
                                                    } else {
                                                        $filename = "images/icon/$line[0].jpg";
                                                        if (file_exists($filename)) {
                                                            echo '<a target="_blank" href="' . h($line[6]) . '" rel="noopener noreferrer"><img src="images/icon/' . h($line[0]) . '.jpg" alt="住民のアイコン"></a>';
                                                        } else {
                                                            echo '<a target="_blank" href="' . h($line[6]) . '" rel="noopener noreferrer"><img src="images/icon/default.jpg" alt=""></a>';
                                                        }
                                                    }
                                                    ?>
                                                </p>
                                            </div>
                                            <div class="p-listItem__right">
                                                <p class="p-listItem__name"><?php echo h($line[1]); ?></p>
                                                <p class="p-listItem__job"><?php echo h($line[2]); ?></p>
                                                <ul class="c-sns__wrap">
                                                    <li><a class="c-sns__item" target="_blank"
                                                           href="<?php echo h($line[3]); ?>"
                                                           rel="noopener noreferrer"><img
                                                                    src="images/common/note_logo.png" alt=""></a></li>
                                                    <li><a class="c-sns__item" target="_blank"
                                                           href="<?php echo h($line[4]); ?>"
                                                           rel="noopener noreferrer"><img
                                                                    src="images/common/twitter_logo.png" alt=""></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="p-listItem__comment">
                                            <span>ぬけだし宣言</span><br>
                                            <!-- noteリンクがあればaタグ出力 -->
                                            <?php
                                            $ary = $line[6];
                                            if (empty($ary)) {
                                                echo '『' . h($line[5]) . '』';
                                            } else {
                                                echo '<a target="_blank" href="' . h($line[6]) . '" rel="noopener noreferrer">『' . h($line[5]) . '』</a>';
                                            }
                                            ?>
                                        </p>
                                    </article>
                                    <?php endwhile; //csvファイル内のループ
                                    ?>
                                    <?php fclose($f); ?>
                                    <?php endif; //ファイル有無判定?>

                            </div><!-- End .p-listItem -->
                        </section><!-- End .p-list--box -->

                    <?php endfor;//各階（各csvファイル）のループ?>

                </div><!-- End p-meibo-table -->
        </div><!-- End .l-container -->
    </section><!-- End .p-meibo -->
    </section><!-- End Resident List -->

    <!-- Start Activity Rreport -->
    <section class="p-activityReport" id="activityReport">
        <div class="l-container">
            <h2 class="c-title">活動報告</h2>
            <p class="c-heading"><span class="note-img"><img src="images/common/note.png" alt="note"></span>マガジンで<br
                        class="sp_br">ぬけだ荘の日常を公開しているよ。<br>ちょっとだけ、のぞき見してみない？</p>
            <!-- Start .p-report--wrap -->
            <section class="p-report__wrap">
                <div class="p-report__inner">
                    <div class="l-flex--tab">
                        <article class="p-report__article">
                            <h3 class="c-toggleButton --pc">入居案内</h3>
                            <label for="nyuukyo" class="c-toggleButton open">入居案内</label>
                            <input type="radio" id="nyuukyo" class="js-button_2 open">
                            <div class="p-listItem js-content_2 stay">
                                <iframe class="note-embed" src="https://maeda-design-room.net/embed/notes/n33f94eb95467"
                                        style="border: 0; display: block; max-width: 99%; width: 335px; height:240px; padding: 0px; margin: 10px 0px; position: static; visibility: visible;"></iframe>
                            </div>
                        </article>
                        <article class="p-report__article">
                            <h3 class="c-toggleButton --pc">ぬけだ荘通信</h3>
                            <label for="tsushin" class="c-toggleButton">ぬけだ荘通信</label>
                            <input type="radio" id="tsushin" class="js-button_2">
                            <div class="p-listItem js-content_2">
                                <iframe id="tsushinNote" class="note-embed"
                                        src="https://maeda-design-room.net/embed/notes/n3822e0cd63bb"
                                        style="border: 0; display: block; max-width: 99%; width: 335px; height:240px; padding: 0px; margin: 10px 0px; position: static; visibility: visible;"></iframe>
                            </div>
                        </article>
                        <article class="p-report__article">
                            <h3 class="c-toggleButton --pc">みんなの回覧板</h3>
                            <label for="kairan" class="c-toggleButton">みんなの回覧板</label>
                            <input type="radio" id="kairan" class="js-button_2">
                            <div class="p-listItem js-content_2">
                                <iframe id="kairanNote" class="note-embed"
                                        src="https://note.com/embed/notes/n31f16ca045ab"
                                        style="border: 0; display: block; max-width: 99%; width: 335px; height:240px; padding: 0px; margin: 10px 0px; position: static; visibility: visible;"></iframe>
                            </div>
                        </article>
                    </div>
                    <p><a class="c-button" target="_blank" href="https://maeda-design-room.net/m/m0a31b639e2cc"
                          rel="noopener noreferrer">ぬけだ荘のnoteを読む</a></p>
                </div>
            </section><!-- End .p-report--wrap -->
        </div><!-- End .l-container -->
    </section><!-- End Activity Rreport -->

    <!-- Start Creator -->
    <section class="p-creator">
        <div class="l-container">
            <h2 class="c-title">つくりあげた人たち</h2>
            <div class="p-creator__list">
                <dl>
                    <dt>クリエイティブディレクター</dt>
                    <dd><a target="_blank" href="https://twitter.com/DESIGN_NASU" rel="noopener noreferrer">マエディ（@DESIGN_NASU）</a>
                    </dd>
                </dl>
                <dl>
                    <dt>プロジェクトリーダー</dt>
                    <dd><a target="_blank" href="https://twitter.com/sugoi_hayasa" rel="noopener noreferrer">ふじっこ（@sugoi_hayasa）</a>
                    </dd>
                </dl>
                <dl>
                    <dt>ぬけだ荘代表ロールモデル</dt>
                    <dd><a target="_blank" href="https://twitter.com/ioea822"
                           rel="noopener noreferrer">ももね（@ioea822）</a></dd>
                </dl>
                <dl>
                    <dt>アートディレクター　/　Webチームリーダー</dt>
                    <dd><a target="_blank" href="https://twitter.com/YUCCA_WIWI" rel="noopener noreferrer">YUCCA（@YUCCA_WIWI）</a>
                    </dd>
                </dl>
                <dl>
                    <dt>Webディレクター</dt>
                    <dd><a target="_blank" href="https://twitter.com/HAYATOTAKAN0" rel="noopener noreferrer">はやぶさくん（＠HAYATOTAKAN0）</a>
                    </dd>
                </dl>
                <dl>
                    <dt>ロゴデザイナー</dt>
                    <dd><a target="_blank" href="https://twitter.com/pprnQ" rel="noopener noreferrer">べーさん（@pprnQ）</a>
                    </dd>
                </dl>
                <dl>
                    <dt>デザイナー　/　PR</dt>
                    <dd><a target="_blank" href="https://twitter.com/hiromu2757" rel="noopener noreferrer">ヒロム（@hiromu2757）</a>
                    </dd>
                </dl>
                <dl>
                    <dt>デザイナー　/ アニメーター</dt>
                    <dd><a target="_blank" href="https://twitter.com/24z_oht"
                           rel="noopener noreferrer">おおた（@24z_oht）</a></dd>
                </dl>
                <dl>
                    <dt>管理人イラストレーター</dt>
                    <dd><a target="_blank" href="https://twitter.com/Minimal_28" rel="noopener noreferrer">みこま（@Minimal_28）</a>
                    </dd>
                </dl>
                <dl>
                    <dt>グラフィックレコーダー</dt>
                    <dd><a target="_blank" href="https://twitter.com/ayumi70339135" rel="noopener noreferrer">あゆみ（@ayumi70339135）</a>
                    </dd>
                </dl>
                <dl>
                    <dt>コーディングリーダー</dt>
                    <dd><a target="_blank" href="https://twitter.com/donkeyliveinweb" rel="noopener noreferrer">ろば（@donkeyliveinweb）</a>
                    </dd>
                </dl>
                <dl>
                    <dt>コーダー</dt>
                    <dd>
                        <ul>
                            <li><a target="_blank" href="https://twitter.com/kazu_nori017007" rel="noopener noreferrer">かずちゃん（@kazu_nori017007）</a>
                            </li>
                            <li><a target="_blank" href="https://twitter.com/Minimal_28" rel="noopener noreferrer">みこま（@Minimal_28）</a>
                            </li>
                            <li><a target="_blank" href="https://twitter.com/LinputP" rel="noopener noreferrer">はやし（@LinputP）</a>
                            </li>
                            <li><a target="_blank" href="https://twitter.com/choooose_org_" rel="noopener noreferrer">まっきー（@choooose_org_）</a>
                            </li>
                        </ul>
                    </dd>
                </dl>
                <dl>
                    <dt>ライティングアドバイザー</dt>
                    <dd>
                        <ul>
                            <li><a target="_blank" href="https://twitter.com/sugoi_hayasa" rel="noopener noreferrer">ふじっこ（@sugoi_hayasa）</a>
                            </li>
                            <li><a target="_blank" href="https://twitter.com/ioea822" rel="noopener noreferrer">ももね（@ioea822）</a>
                            </li>
                        </ul>
                    </dd>
                </dl>
                <dl>
                    <dt>ライター</dt>
                    <dd><a target="_blank" href="https://twitter.com/sorlver"
                           rel="noopener noreferrer">saori（@sorlver）</a></dd>
                </dl>
                <dl>
                    <dt>サポートメンバー</dt>
                    <dd>
                        <ul>
                            <li><a target="_blank" href="https://twitter.com/yu_imu" rel="noopener noreferrer">かもゆうこ（@yu_imu）</a>
                            </li>
                            <li><a target="_blank" href="https://twitter.com/hamadaaya914" rel="noopener noreferrer">浜田綾（@hamadaaya914）</a>
                            </li>
                            <li><a target="_blank" href="https://twitter.com/oriasm_c" rel="noopener noreferrer">おり（@oriasm_c）</a>
                            </li>
                            <li><a target="_blank" href="https://twitter.com/hachiblog" rel="noopener noreferrer">はちぼー（@hachiblog）</a>
                            </li>
                        </ul>
                    </dd>
                </dl>
                <dl>
                    <dt>SPECIAL THANKS</dt>
                    <dd>ぬけだ荘記事をさらけ出した住人たち</dd>
                </dl>
            </div>
        </div>
    </section>

</main><!-- End Main -->

<!-- Footer -->
<footer class="l-footer">
    <p class="p-footer__logo"><img src="images/common/maede_logo.png" alt="前田デザイン室"></p>
    <p class="p-footer__address"><small>&copy; 2020 前田デザイン室</small></p>
</footer>

<!-- Script -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="./js/inview.min.js"></script>
<script src="./js/app.js"></script>
</body>
</html>
