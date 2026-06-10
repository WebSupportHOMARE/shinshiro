<?php require_once('../include/function.php'); ?>

<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website:http://ogp.me/ns/website#">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no,address=no,email=no">
	
    <!-- *** 公開時にno外す *** -->
    <meta name="robots" content="index,follow">
    
    <title>WEB入会完了｜ヨガ＆ジム アイレクス・ライト＋24 新城</title>
    <meta name="keywords" content="">
    <meta name="description" content="ついに新城市にアイレクス・ライト＋24 新城がオープンいたします！アイレクス・ライト＋24は女性やシニアに優しい24時間ジムをコンセプトとし、最新のマシンジムに上質な照明と音響システムを採用したスタジオ、多彩なアイテムでお客様のニーズに応えます。LINEお友だち追加キャンペーンを実施中！最新情報をいち早くお届けいたします♪">
    <meta name="robots" content="noindex,nofollow">
    <link rel="canonical" href="https://www.ilex-light.com/shinshiro/complete.php">

    <!-- ogp -->
    <meta property="og:type" content="website"> 
    <meta property="og:title" content="WEB入会完了｜ヨガ＆ジム アイレクス・ライト＋24 新城">
    <meta property="og:site_name" content="WEB入会完了｜ヨガ＆ジム アイレクス・ライト＋24 新城">
    <meta property="og:description" content="ついに新城市にアイレクス・ライト＋24 新城がオープンいたします！アイレクス・ライト＋24は女性やシニアに優しい24時間ジムをコンセプトとし、最新のマシンジムに上質な照明と音響システムを採用したスタジオ、多彩なアイテムでお客様のニーズに応えます。LINEお友だち追加キャンペーンを実施中！最新情報をいち早くお届けいたします♪">
    <meta property="og:url" content="https://www.ilex-light.com/shinshiro/complete.php">
    <meta property="og:image" content="https://www.ilex-light.com/shinshiro/shared/img/img_top_ogp2510.jpg">
    <meta property="og:locale" content="ja_JP" />

    <!-- favicon -->
    <link rel="shortcut icon" href="../favicon.ico" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@4.1.1/dist/css/yakuhanjp.css">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="shared/css/complete/shared.css?<?php echo date('Ymd-Hi'); ?>">

	
<? include '../inc/head-gtm.php'; ?>
</head>

<body>
<? include '../inc/body-gtm.php'; ?>


<div id="wrapper" class="home">

    <header>
        <div class="header-top">
        <div class="container flex">

            <!-- 店舗ロゴ -->
            <h1 class="tac">
            <a href="../">
                <picture>
                <img src="contact/shared/img/logo_top-header_01.svg" alt="アイレクス・ライト＋24 新城">
                </picture>
            </a>
            </h1>

        </div>
        </div>

    </header>

    <main>
        <!--フォーム-->
        <div id="form2511">
            <section>
            <h2 class="tac">WEB入会ありがとうございます。<br>続いて、本登録手続きの<br class="pcNone">来館予約が必要になります。</h2>

                
                <? include '../inc/text/newyear.php'; ?>
                <p class="form-text tac">店舗手続き後、会員証をお渡ししご利用開始となります。<br>店舗手続き希望日時は下記よりご予約ください。<br><small>※手続きは15分程度です。<br>※スタッフ在館時間内で承ります。</small></p>

                
                <div class="open">
                    <p class="form-text">【手続き受付時間】<br>月～水・金　10:00〜14:00／18:00〜21:00／18:00〜22:00<br>土・日・祝　10:00〜16:00</p>
                </div>



                <form method="post" action="mail.php">	

                <ul>
                    <li>
                        <label>
                            <span class="ttl">お名前<span class="required">必須</span></span>
                            <input type="text" name="お名前" placeholder="例:山田 花子"/>
                        </label>
                    </li>
                    <li>
                        <label>
                            <span class="ttl">カナ<span class="required">必須</span></span>
                            <input type="text" name="カナ" placeholder="例:ヤマダ ハナコ"/>
                        </label>
                    </li>                    
                    <li>
                        <label>
                            <span class="ttl">メールアドレス<span class="required">必須</span></span>
                            <input type="" name="Email" placeholder="例：example@ilex-sports.com"/>
                        </label>
                    </li>
                    <li>
                        <label>
                            <span class="ttl">ご来館希望日<span class="required">必須</span></span>
                            <input type="text" id="date" name="ご来館希望日" placeholder="カレンダーから選択してください" class="input">
                        </label>
                        <p><small>※毎週木曜日はスタッフ終日不在のため選択いただけません。<br>
                        ※お申込後の来館希望日や日時の変更は、お電話やお問合せフォームからのご連絡で変更可能です。<br>
                        ※予約状況によって、お待ちいただく場合や日時の変更をお願いする場合がございます。</small></p>
                    </li>
                    <li>
                        <label>
                            <span class="ttl">ご来館希望時間</span>
                            <select name="ご来館希望時間">
                            </select>
                        </label>
                    </li>
                </ul>

                <p class="tac"><input class="btn submit " type="submit" value="入力内容のご確認へ"></p>





            </section>
        </div>
    </main>

    <footer>

        <!-- Googlemap -->
        <p class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1636.0616097737202!2d137.49502121691899!3d34.90335715710575!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601b35216eaa5611%3A0x9a61f0ebb575887d!2z44Oo44Ks77yG44K444OgIOOCouOCpOODrOOCr-OCueODu-ODqeOCpOODiCsyNCDmlrDln44!5e0!3m2!1sja!2sjp!4v1756186493014!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </p>
        <!-- リンク -->
        <ul class="link flex">
            <li><a href="https://www.ilex-sports.com/company/">企業情報</a></li>
            <li><a href="https://www.ilex-sports.com/privacy/">個人情報保護方針</a></li>
            <li><a href="https://www.ilex-sports.com/recruit/">採用情報</a></li>  
        </ul>

        <!-- コピーライト -->
        <p class="copyright"><small>Copyright &copy; <?php echo date('Y'); ?> ILEX SPORTS LIFE INC.<span class="pc"> All Rights Reserved.</span></small></p>

    </footer>

</div>


    <!-- *** JS *** -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- カレンダー選択 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css">

	<script src="shared/js/complete.js"></script>

</body>

</html>