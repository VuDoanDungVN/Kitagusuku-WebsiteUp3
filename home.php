<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<!-- ==============================
    Project:        北中城村 - Responsive HTML Bootstrap 3.3.4
    Version:        1.0
    Author:         https://www.occ.co.jp
    Primary use:    Corporate, Business Themes.
    Email:          vu-doan-dung-2202@occ.co.jp
    Website:        https://www.occ.co.jp
================================== -->
<html lang="en" class="no-js">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>北中城村 - Responsive HTML Bootstrap 3.3.4</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/7bccc10542.js" crossorigin="anonymous"></script>
    <script src="js/lightbox-plus-jquery.js"></script>
    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/lightbox.css">
    <!-- THEME STYLES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="css/layout.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="chat-box.css">
    <!--Link điều chỉnh hộp thoại chat-->
    <link href="css/toggleMenu.css" rel="stylesheet">
    <link rel="stylesheet" href="css/chat.css">
    <link rel="stylesheet" href="style.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<!-- BODY -->

<body>

    <!--========== HEADER ==========-->
    <header class="header navbar-fixed-top">
        <!-- Navbar -->
        <nav class="navbar" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="menu-container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon"></span>
                    </button>

                    <!-- Logo -->
                    <div class="logo">
                        <a class="logo-wrap" href="home.php">
                            <img class="logo-img logo-img-main" src="img/logo1.png" alt="Asentus Logo">
                            <img class="logo-img logo-img-active" src="img/logo2.png" alt="Asentus Logo">
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-collapse">
                    <div class="menu-container">
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="home.php">ホーム</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="#">会社情報</a>
                            </li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="#">事業情報</a>
                            </li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="#">実績情報</a>
                            </li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="#">採用情報</a></li>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="#">個人情報保護</a>
                            </li>
                            <li class="nav-item"><a class="nav-item-child user-top-link" href="#">
                                    <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                                    if (mysqli_num_rows($sql) > 0) {
                                        $row = mysqli_fetch_assoc($sql);
                                    } ?>

                                    <img src="php/images/<?php echo $row['img']; ?>" onclick="toggleMenu()">
                                    <div class="sub-menu-wrap" id="subMenu">
                                        <div class="sub-menu">
                                            <div class="user-info">
                                                <img src="php/images/<?php echo $row['img']; ?>" alt="">
                                                <h4><?php echo $row['fname'] . " " . $row['lname'] ?></h4>
                                            </div>
                                            <hr>
                                            <a href="#" class="sub-menu-link">
                                                <img src="img/setting.png" alt="">
                                                <p>Setting & Privacy</p>
                                                <span>></span>
                                            </a>
                                            <a href="#" class="sub-menu-link">
                                                <img src="img/profile.png" alt="">
                                                <p>Edit Profile</p>
                                                <span>></span>
                                            </a>
                                            <a href="#" class="sub-menu-link">
                                                <img src="img/help.png" alt="">
                                                <p>Help & Support</p>
                                                <span>></span>
                                            </a>
                                            <a class="sub-menu-link" href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">
                                                <img src="img/logout.png" alt="">
                                                <p>Logout</p>
                                                <span>></span>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Navbar Collapse -->
            </div>
        </nav>
        <!-- Navbar -->
    </header>
    <!--========== END HEADER ==========-->

    <!--========== SLIDER ==========-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="container">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <!-- <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> -->
                <!-- <li data-target="#carousel-example-generic" data-slide-to="1"></li> -->
                <!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
            </ol>
        </div>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive" src="img/1920x1080/bgtop1.png" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40" style="color:#fff;">
                            <h1 class="carousel-title">農を活かした健康 <br>
                                福祉の里づくりに向けた推進事業</h1>
                            <p>株式会社ＥＭ研究機構（代表：比嘉新）と北中城村（比嘉孝則村長）は、この度、村が計画 <br>
                                している「農を活かした健康・福祉の里づくりに向けた推進事業」を円滑に進めるため、<br>
                                「推進事業連携協定」を令和４年６月６日（月）に締結いたしました。</p>
                        </div>
                        <a href="https://bit.ly/3va8LMV" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">もっと見る</a>
                    </div>
                </div>
            </div>
            <!-- <div class="item">
                <img class="img-responsive" src="img/1920x1080/02.jpg" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40" style="color:#fff;">
                            <h1 class="carousel-title">農を活かした健康 <br>
                                福祉の里づくりに向けた推進事業</h1>
                            <p>株式会社ＥＭ研究機構（代表：比嘉新）と北中城村（比嘉孝則村長）は、この度、村が計画 <br>
                                している「農を活かした健康・福祉の里づくりに向けた推進事業」を円滑に進めるため、<br>
                                「推進事業連携協定」を令和４年６月６日（月）に締結いたしました。</p>
                        </div>
                        <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">もっと見る</a>
                    </div>
                </div>
            </div> -->
            <!-- <div class="item">
                <img class="img-responsive" src="img/1920x1080/4.png" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h2 class="carousel-title">Hi-Tech Design</h2>
                            <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br /> enim minim estudiat
                                veniam siad venumus dolore</p>
                        </div>
                        <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Explore</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!--========== SLIDER ==========-->

    <!--========== PAGE LAYOUT ==========-->
    <!-- Service -->
    <div class="bg-color-sky-light" data-auto-height="true">
        <div class="content-lg container">
            <div class="row row-space-1 margin-b-2">
                <div class="col-sm-4 sm-margin-b-2">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="fa-solid fa-tractor"></i>
                            </div>
                            <div class="service-info">
                                <h3>農業</h3>
                                <p class="margin-b-5">現代の農業は農薬や化学肥料を使用することで、収量を増大させ、一定の成果を収めてきました。</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 sm-margin-b-2">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="fa-solid fa-cow"></i>
                            </div>
                            <div class="service-info">
                                <h3>畜産</h3>
                                <p class="margin-b-5">畜産業では、悪臭対策、家畜の健康維持、病気発生の軽減などが大きな課題となっています。</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="fa-solid fa-fish"></i>
                            </div>
                            <div class="service-info">
                                <h3>水産</h3>
                                <p class="margin-b-5">水産養殖では限られた区域の中で特定の種の魚介類を養殖するため、生育環境管理が非常に重要な条件である。</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--// end row -->

            <div class="row row-space-1">
                <div class="col-sm-4 sm-margin-b-2">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="fa-solid fa-arrow-up-from-water-pump"></i>
                            </div>
                            <div class="service-info">
                                <h3>水処理</h3>
                                <p class="margin-b-5">EMを河川などに投入することで、生態系ピラミッドの底辺を支える微生物を増やす事が出来ます。</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 sm-margin-b-2">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="fa-solid fa-recycle"></i>
                            </div>
                            <div class="service-info">
                                <h3>ゴミ処理</h3>
                                <p class="margin-b-5">ゴミや下水汚泥にEM・１や活性液を投入すると、微生物相が改善され、腐敗菌が優先している環境から...</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".6s">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="fa-solid fa-building-wheat"></i>
                            </div>
                            <div class="service-info">
                                <h3>建築</h3>
                                <p class="margin-b-5">建築の分野でも、EM技術を活用することにより素材の機能を高めることがわかってきました。</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Service -->

    <!-- Latest news -->
    <div class="content-lg container">
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <h2>新着記事</h2>
                <p></p>
            </div>
        </div>
        <!--// end row -->

        <div class="row">
            <!-- Latest news -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="margin-b-20">
                    <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="img/970x647/01.jpg" alt="Latest Image">
                    </div>
                </div>
                <h4><a href="03586.php">冬の風物詩！読谷村「琉球ランタンフェスティバル」</a> <span class="text-uppercase margin-l-20">News</span></h4>
                <p>沖縄の冬をあたたかく盛り上げようと、中華提灯をメインに手作りランタンオブジェやベトナムランタン、竹灯篭、沖縄ならではの琉球ガラスや、やちむん灯篭など3千個以上のランタンを灯し幻想的な夜を彩ります。
                </p>
                <a class="link" href="03586.html">もっと見る</a>
            </div>
            <!-- End Latest news -->

            <!-- Latest news -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="margin-b-20">
                    <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="img/970x647/06.png" alt="Latest Image">
                    </div>
                </div>
                <h4><a href="03669.php">国家プロジェクトからボランティア活動まで</a> <span class="text-uppercase margin-l-20">News</span>
                </h4>
                <p>EMを使った農業で、環境保全効果を高め、低コストで品質のよい安全な食物を供給すれば人々の健康に寄与できる、EMで環境汚染を拡大リサイクル的に解決すれば同じく資源のむだ遣いをなくし健康にも寄与できる、EMで自然治癒力を強化すればこれも健康に寄与できる。
                </p>
                <a class="link" href="03669.html">もっと見る</a>
            </div>
            <!-- End Latest news -->

            <!-- Latest news -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="margin-b-20">
                    <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="img/970x647/03.jpg" alt="Latest Image">
                    </div>
                </div>
                <h4><a href="#">「美ら島おきなわ文化祭2022」の閉会式が行われました♪</a> <span class="text-uppercase margin-l-20">Design</span>
                </h4>
                <p>「美ら島おきなわ文化祭2022」とは、文化庁・厚生労働省・沖縄県や各市町村等が主催する「第37回国民文化祭」と「第22回全国障害者芸術・文化祭」の統一名称で国内最大の文化の祭典です。</p>
                <a class="link" href="#">もっと見る</a>
            </div>
            <!-- End Latest news -->
        </div>
        <!--// end row -->
    </div>
    <!-- End Latest news -->

    <!-- Testimonials -->
    <div class="content-lg container">
        <div class="row">
            <div class="col-sm-9">
                <h2>阿里山で育ったEMウーロン茶</h2>

                <!-- Swiper Testimonials -->
                <div class="swiper-slider swiper-testimonials">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <blockquote class="blockquote">
                                <div class="margin-b-20">
                                    台湾の中央に位置する山脈、阿里山はお茶の名産地として世界的に有名です。
                                    そこでお茶を栽培しているGuoさんは標高1,150〜1,250mにある1.6ヘクタールの大規模な茶畑で毎年約1,800キロの茶葉を生産しています。
                                </div>
                                <div class="margin-b-20">
                                    Guoさんは長い間、良質とされる化学肥料を使い続けていましたが、期待していたような結果が得られませんでした。ある日、友人からEMを試してみてはどうかと勧められたのをきっかけに、EMを使い始めます。使い続けてから5年の月日が経ちました。
                                </div>
                                <!-- <p><span class="fweight-700 color-link">Joh Milner</span>, Metronic Customer</p> -->
                            </blockquote>
                        </div>
                        <div class="swiper-slide">
                            <blockquote class="blockquote">
                                <div class="margin-b-20">
                                    <h4>効果と結果</h4>

                                    EMを使い始めてから、たくさんの品質の良い茶葉が育ち始めました。
                                    生産量は20～30％増加しました。茶葉の品質は格段に改善され、香りがさらに良くなった上、お茶の煎出回数を増やすことができました。（中国茶は、何度も煎じて味や香りの変化を楽しみます）
                                    <br>

                                    Guoさんの茶葉は、嘉義県梅山郷で開催される高山茶や農業協同組合のコンテストでほぼ毎年優勝しています。
                                </div>
                                <!-- <div class="margin-b-20">
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </div>
                                    <p><span class="fweight-700 color-link">Alex Clarson</span>, Metronic Customer</p> -->
                            </blockquote>
                        </div>
                    </div>
                    <!-- End Swiper Wrapper -->

                    <!-- Pagination -->
                    <div class="swiper-testimonials-pagination"></div>
                </div>
                <!-- End Swiper Testimonials -->
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Testimonials -->

    <!-- Promo Section -->
    <div class="promo-section overflow-h">
        <div class="container">
            <div class="clearfix">
                <div class="ver-center">
                    <div class="ver-center-aligned">
                        <div class="promo-section-col">
                            <h2>農を活かした第一段階工事委託業務</h2>
                            <p>地域再生推進法人(株)ＥＭ研究機構は、農を活かした健康･福祉の里づくりに向けた推進事業の「第一段階整備事業工事委託業務」受託候補者に福山建設(株)･(有)アトリエ･門口ＪＶを特定した。
                            </p>
                            <p>近く契約締結する見通し。契約額は約５億円。業務は、農業生産など一連の作業工程に必要な施設の設計･各種申請･装置製造･建築工事を行うもので、業務期間は2024年度末まで。施設完成後、試運転を経て25年４月頃の供用開始を目指す。
                            </p>
                            <p>第一段階整備事業は、北中城村荻道地内の敷地約3,100㎡に村内近隣施設の食品残渣を活用したバイオガス発電施設を整備。電気や排熱、消化液の供給を通して農産物生産の作業工程を高レベルで循環させ、持続可能なパッケージを構築する。
                            </p>
                            <p>財源は、沖縄振興特定事業推進費補助金を活用。23、24年度は交付金採択決定後に継続契約する。今年度は設備システムと建築基本設計、粗造成、土地整理工事(農場･圃場)を行い、23年度から基礎造成、詳細設計、駐車場とバイオガス設備工事、24年度はバイオガス施設工事、ＩＣＴ太陽光型水耕栽培施設や作業管理ハウス、ゼロウェイストセンターを整備する予定。
                                事業は、北中城村が「農住･農福･食農･農観」連携による健康･福祉の里づくりなどを目的に実施。ＥＭ研究機構が具体的な施設整備などを受託している。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="promo-section-img-right">
            <img class="img-responsive" src="img/1920x1080/4.png" alt="Content Image">
        </div>
    </div>
    <!-- End Promo Section -->

    <!-- Work -->
    <div class="bg-color-sky-light overflow-h">
        <div class="content-lg container">
            <!-- Testimonials -->
            <div class="content-lg container">
                <div class="row">
                    <div class="col-sm-9">
                        <h2>阿里山で育ったEMウーロン茶</h2>

                        <!-- Swiper Testimonials -->
                        <div class="swiper-slider swiper-testimonials">
                            <!-- Swiper Wrapper -->
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <blockquote class="blockquote">
                                        <div class="margin-b-20">
                                            台湾の中央に位置する山脈、阿里山はお茶の名産地として世界的に有名です。
                                            そこでお茶を栽培しているGuoさんは標高1,150〜1,250mにある1.6ヘクタールの大規模な茶畑で毎年約1,800キロの茶葉を生産しています。
                                        </div>
                                        <div class="margin-b-20">
                                            Guoさんは長い間、良質とされる化学肥料を使い続けていましたが、期待していたような結果が得られませんでした。ある日、友人からEMを試してみてはどうかと勧められたのをきっかけに、EMを使い始めます。使い続けてから5年の月日が経ちました。
                                        </div>
                                        <!-- <p><span class="fweight-700 color-link">Joh Milner</span>, Metronic Customer</p> -->
                                    </blockquote>
                                </div>
                                <div class="swiper-slide">
                                    <blockquote class="blockquote">
                                        <div class="margin-b-20">
                                            <h4>効果と結果</h4>

                                            EMを使い始めてから、たくさんの品質の良い茶葉が育ち始めました。
                                            生産量は20～30％増加しました。茶葉の品質は格段に改善され、香りがさらに良くなった上、お茶の煎出回数を増やすことができました。（中国茶は、何度も煎じて味や香りの変化を楽しみます）
                                            <br>

                                            Guoさんの茶葉は、嘉義県梅山郷で開催される高山茶や農業協同組合のコンテストでほぼ毎年優勝しています。
                                        </div>
                                        <!-- <div class="margin-b-20">
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </div>
                                    <p><span class="fweight-700 color-link">Alex Clarson</span>, Metronic Customer</p> -->
                                    </blockquote>
                                </div>
                            </div>

                            <div class="swiper-testimonials-pagination"></div>
                        </div>
                        <!-- End Swiper Testimonials -->
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Testimonials -->
            <!--// end row -->


        </div>
    </div>
    <!-- End Work -->
    <!-- End Swiper Wrapper -->
    <div class="map-google">
        <h2>Gallery Photos</h2>

    </div>
    <div class="gallery-img">
        <div class="gallery-body">
            <a href="img/gallery/1.png" data-lightbox="models" data-title="Caption1">
                <img src="img/gallery/1.png" alt="">
            </a>
            <a href="img/gallery/2.png" data-lightbox="models" data-title="Caption1">
                <img src="img/gallery/2.png" alt="">
            </a>
            <a href="img/gallery/3.png" data-lightbox="models" data-title="Caption1">
                <img src="img/gallery/3.png" alt="">
            </a>
            <a href="img/gallery/4.png" data-lightbox="models" data-title="Caption1">
                <img src="img/gallery/4.png" alt="">
            </a>
            <a href="img/gallery/5.png" data-lightbox="models" data-title="Caption1">
                <img src="img/gallery/5.png" alt="">
            </a>
            <a href="img/gallery/6.png" data-lightbox="models" data-title="Caption1">
                <img src="img/gallery/6.png" alt="">
            </a>
            <a href="img/gallery/7.png" data-lightbox="models" data-title="Caption1">
                <img src="img/gallery/7.png" alt="">
            </a>
            <a href="img/gallery/8.png" data-lightbox="models" data-title="Caption1">
                <img src="img/gallery/8.png" alt="">
            </a>
            <a href="img/gallery/9.png" data-lightbox="models" data-title="Caption1">
                <img src="img/gallery/9.png" alt="">
            </a>
            <a href="img/gallery/10.png" data-lightbox="models" data-title="Caption1">
                <img src="img/gallery/10.png" alt="">
            </a>
        </div>
    </div>
    <!-- Pagination -->
    <!--========== END PAGE LAYOUT ==========-->
    <!-- Google Map -->
    <div class="map-google">
        <h2>Google Maps</h2>
    </div>
    <div class="map height-400">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d376.17026697674254!2d127.70876394136216!3d26.237153525693156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e56bec84e425d1%3A0x285dfcc1318fc43f!2zKOagqilPQ0Mg5pys56S-!5e0!3m2!1svi!2sjp!4v1672030444611!5m2!1svi!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <input type="checkbox" id="click">
    <label for="click">

        <i class="fab fa-facebook-messenger"></i>
        <i class="fas fa-times"></i>
    </label>

    <div class="wrapper">
        <section class="users">
            <header>
                <div class="content">
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                    if (mysqli_num_rows($sql) > 0) {
                        $row = mysqli_fetch_assoc($sql);
                    }
                    ?>
                    <img src="php/images/<?php echo $row['img']; ?>" alt="">
                    <div class="details">
                        <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                        <p><?php echo $row['status']; ?></p>
                    </div>
                </div>
            </header>
            <div class="search">
                <span class="text">Select an user to start chat</span>
                <input type="text" placeholder="Enter name to search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">

            </div>
        </section>
    </div>

    <!--========== FOOTER ==========-->

    <footer class="footer">
        <!-- Links -->
        <div class="footer-seperator">
            <div class="content-lg container">
                <div class="row">
                    <div class="col-sm-2 sm-margin-b-50">
                        <!-- List -->
                        <ul class="list-unstyled footer-list">
                            <li class="footer-list-item"><a class="footer-list-link" href="#">ホーム</a></li>
                            <li class="footer-list-item"><a class="footer-list-link" href="#">会社情報</a></li>
                            <li class="footer-list-item"><a class="footer-list-link" href="#">事業情報</a></li>
                            <li class="footer-list-item"><a class="footer-list-link" href="#">実績情報</a></li>
                            <li class="footer-list-item"><a class="footer-list-link" href="#">採用情報</a></li>
                            <li class="footer-list-item"><a class="footer-list-link" href="#">個人情報保護</a></li>
                        </ul>
                        <!-- End List -->
                    </div>
                    <div class="col-sm-4 sm-margin-b-30">
                        <!-- List -->
                        <ul class="list-unstyled footer-list">
                            <li class="footer-list-item"><a class="footer-list-link" href="#">Twitter</a></li>
                            <li class="footer-list-item"><a class="footer-list-link" href="#">Facebook</a></li>
                            <li class="footer-list-item"><a class="footer-list-link" href="#">Instagram</a></li>
                            <li class="footer-list-item"><a class="footer-list-link" href="#">YouTube</a></li>
                        </ul>
                        <!-- End List -->
                    </div>
                    <div class="col-sm-5 sm-margin-b-30">
                        <form action="#">
                            <h2 class="color-white">私たちにメモを送ってください</h2>

                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Name" name="name" required>
                            <input type="email" class="form-control footer-input margin-b-20" placeholder="Email" name="email" required>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Phone" name="phone" required>
                            <textarea class="form-control footer-input margin-b-30" rows="6" placeholder="Message" name="message" required></textarea>
                            <div class="button-area ">
                                <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">送信</button>
                                <span></span>
                            </div>
                        </form>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Links -->

        <!-- Copyright -->
        <div class="content container">
            <div class="row">
                <div class="col-xs-6">
                    <img class="footer-logo" src="img/logo1.png">
                </div>
                <div class="col-xs-6 text-right">
                    <p class="margin-b-0">北中城村 - Responsive HTML Bootstrap
                        3.3.4</p>
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End Copyright -->
    </footer>
    <!--========== END FOOTER ==========-->

    <!-- Back To Top -->
    <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

    <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <script src="js/message.js"></script>
    <script src="javascript/users.js"></script>
    <!-- <script src="javascript/chat.js"></script> -->
    <!-- CORE PLUGINS -->
    <script src="vendor/jquery.min.js" type="text/javascript"></script>
    <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- PAGE LEVEL PLUGINS -->
    <script src="vendor/jquery.easing.js" type="text/javascript"></script>
    <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
    <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
    <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
    <script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>
    <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="js/layout.min.js" type="text/javascript"></script>
    <script src="js/components/swiper.min.js" type="text/javascript"></script>
    <script src="js/components/wow.min.js" type="text/javascript"></script>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
    <script src="js/toggleMenu.js"></script>
</body>
<!-- END BODY -->

</html>