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
    <link href="css/layout.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/comment.css" type="text/css" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" />
    <!--Social Share-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Code để điều chỉnh chat-->
    <link rel="stylesheet" href="css/chat.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/toggleMenu.css">

</head>
<!-- END HEAD -->

<!-- BODY -->

<body>
    <!--Comment Fb Pics : Start-->

    <!--Comment Fb Pics : End-->
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

    <!--========== PARALLAX ==========-->
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/bgtop1.png">
        <div class="parallax-content container">
            <h2 class="carousel-title">News </h2>
            <!-- <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br /> enim minim estudiat veniam siad
                venumus dolore</p> -->
        </div>
    </div>
    <!--========== PARALLAX ==========-->

    <!--========== PAGE LAYOUT ==========-->

    <!-- General Questions -->
    <div class="icon-bar">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="google"><i class="fa fa-google"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
    </div>
    <div class="content-lg container">
        <div class="row margin-b-20">
            <div class="col-sm-6">
                <h2>読谷村の「むら咲むら」で開催中の「琉球ランタンフェスティバル」</h2>
                <p>日付 :2022年12月27日 </p>
                <p><a href="#">Admin | </a> </p>
                <i class="fa-solid fa-eye"></i>
                <p id="count">0</p>
                <p>Views</p>
                <br>
                <!-- <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="500" data-layout="standard" data-action="like" data-size="small" data-share="false"></div> -->
                <span class="fb-like" style="margin: 10px 0px 0px 10px;"></span>
                <hr>
            </div>
        </div>
        <!--// end row -->

        <div class="row">
            <div class="col-sm-7 sm-margin-b-50">
                <div class="margin-b-30">
                    <p>「琉球ランタンフェスティバル」は、琉球王朝時代の街並みを再現した「体験王国むら咲むら」が開催している毎年恒例の人気イベント。
                        沖縄の冬をあたたかく盛り上げようと、中華提灯をメインに手作りランタンオブジェやベトナムランタン、竹灯篭、沖縄ならではの琉球ガラスや、やちむん灯篭など3千個以上のランタンを灯し幻想的な夜を彩ります。
                        開催期間は、2023年3月26日（日）まで。冬の沖縄観光におすすめの幻想的な夜のスポットです。</p>
                </div>
                <p>「琉球ランタンフェスティバル」が開催されている読谷村へは、那覇空港から車で約60分ほど。せっかく行くなら、
                    読谷村の魅力を味わい尽くしたいですよね！今回は定番の人気スポットから、地元の人が愛するスポットまで、
                    「琉球ランタンフェスティバル」の前後に行きたい、近隣のおすすめスポットを５つご紹介します。
                    「琉球ランタンフェスティバル」が開催されている読谷村へは、那覇空港から車で約60分ほど。せっかく行くなら、
                    読谷村の魅力を味わい尽くしたいですよね！今回は定番の人気スポットから、地元の人が愛するスポットまで、
                    「琉球ランタンフェスティバル」の前後に行きたい、近隣のおすすめスポットを５つご紹介します。
                </p>

            </div>

            <div class="col-sm-4 col-sm-offset-1">
                <div class="gallery-img">
                    <div class="gallery-body blog-img">
                        <a href="img/970x647/01.jpg" data-lightbox="models" data-title="読谷村の「むら咲むら」で開催中の「琉球ランタンフェスティバル」">
                            <img style="border-radius: 5px;" src="img/970x647/01.jpg" alt="">
                        </a>
                        <span style="text-align: center;font-size: 10px;color: rgb(51, 51, 51);">読谷村の「むら咲むら」で開催中の「琉球ランタンフェスティバル」</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="margin-b-30">
                    <p>読谷村は、世界遺産の「座喜味城跡」や琉球芸能には必須の「三線」の始祖「赤犬子(アカインコ)」生誕の地でもあります。特産品には紅イモがあり、
                        紅イモを使ったスイーツなども。その他、伝統工芸品として「読谷山花織(ゆんたんざはなうい)」という織物や「読谷山焼(ゆんたんじゃやき)」という焼き物(やちむん)もあります。
                    </p>
                </div>
                <p>「イルミーバンタ海辺の夜あかり」は、国内最大級の海カフェ「星野リゾート　バンタカフェ」で開催されているイベント。
                    日中のバンタカフェとは違った、幻想的な空間を楽しむことができます。またイルミネーション期間中には、ジャズライブやマルシェなどのイベントも開催されます。開催期間は、2023年1月31日（火）まで。冬の沖縄観光におすすめのスポットです。
                </p>

            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End General Questions -->
    <hr>
    <!--Form Comment : Start-->
    <div id="fb-root">
        <div class="fb-comments" data-href="https://static.mychouchou.life" data-width="1265" data-numposts="5"></div>
    </div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="6cnyYJ6f"></script>
    <!-- <div class="container1">
        <form method="post" data-blog-id="{{id}}" onsubmit="return addComment()">
          <label for="fname">お名前 :</label>
          <input type="text" id="fname" name="name" placeholder="Your name..">
      
          <label for="lname">メール :</label>
          <input type="text" id="lname" name="email" placeholder="Your email..">
      
          <label for="subject">案件 :</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      
          <input type="submit" value="Comment">
        </form>
      </div> -->
    <!--Form Comment : End-->
    <hr>
    <!--========== END PAGE LAYOUT ==========-->
    <!-- Our Exceptional Solutions -->
    <div class="content-lg container">
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <h2>Last Post</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
            </div>
        </div>
        <!--// end row -->
        <!--// end row -->

        <div class="row">
            <!-- Our Exceptional Solutions -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="margin-b-20">
                    <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="img/970x647/04.png" alt="Our Exceptional Solutions Image">
                    </div>
                </div>
                <h4><a href="#">地域に寄り添った循環型社会を目指して</a> <span class="text-uppercase margin-l-20">News</span></h4>
                <p>2013年、沖縄県北中城村では植物残渣の減量化と循環型社会形成を目指して「北中城村植物ごみ資源化ヤード」を設置しました。2020年7月からEM研究機構が...</p>
                <a class="link" href="#">もっと見る</a>
            </div>
            <!-- End Our Exceptional Solutions -->

            <!-- Our Exceptional Solutions -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="margin-b-20">
                    <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="img/970x647/05.png" alt="Our Exceptional Solutions Image">
                    </div>
                </div>
                <h4><a href="#">EMで健康な体を取り戻す</a> <span class="text-uppercase margin-l-20">News</span></h4>
                <p>Maxima Stables（馬小屋）はモスクワの20ｋｍ北に位置するMaxima Parkの一角にあります。モダンな雰囲気が漂う絵にかいたような風景で、日常の喧騒から離れてゆったりと休暇...</p>
                <a class="link" href="#">もっと見る</a>
            </div>
            <!-- End Our Exceptional Solutions -->

            <!-- Our Exceptional Solutions -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="margin-b-20">
                    <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="img/970x647/03.jpg" alt="Our Exceptional Solutions Image">
                    </div>
                </div>
                <h4><a href="#">よりよい地域を作るリサイクルセンター</a> <span class="text-uppercase margin-l-20">News</span></h4>
                <p>タイのノンタブリー県パッククレット、ポブスック地区のリサイクルセンターをご紹介します。</p>
                <a class="link" href="#">もっと見る</a>
            </div>
            <!-- End Our Exceptional Solutions -->
        </div>
        <!--// end row -->
    </div>
    <!-- End Our Exceptional Solutions -->
    <!--Code hiển thị hộp thoại chat : Start-->
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
    <!--Code hiển thị hộp thoại chat : End-->
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
    <!--Count Vistor-->
    <script src="js/countVistor.js"></script>
</body>
<!-- END BODY -->

</html>