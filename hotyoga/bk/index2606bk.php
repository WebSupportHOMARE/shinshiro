<?php require_once('../../include/function.php'); ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no,address=no,email=no">

    
    <title>ホットヨガ無料体験受付中！ | ヨガ＆ジム アイレクス・ライト+24 新城</title>
    <meta name="keywords" content="">
    <meta name="description" content="新城のアイレクス・ライト+24で、スタイリッシュな空間で行う少人数制ホットヨガの無料体験を実施中！少人数制だから初めての方も安心です♪さらに入会キャンペーンも実施中。">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://www.ilex-light.com/<?php echo $dir; ?>hotyoga/">

    <!-- ogp -->
    <meta property="og:type" content="website"> 
    <meta property="og:title" content="ホットヨガ無料体験受付中！ | ヨガ＆ジム アイレクス・ライト+24 新城">
    <meta property="og:site_name" content="ホットヨガ無料体験受付中！ | ヨガ＆ジム アイレクス・ライト+24 新城">
    <meta property="og:description" content="新城のアイレクス・ライト+24で、スタイリッシュな空間で行う少人数制ホットヨガの無料体験を実施中！少人数制だから初めての方も安心です♪さらに入会キャンペーンも実施中。">
    <meta property="og:url" content="https://www.ilex-light.com/<?php echo $dir; ?>hotyoga/">

    <!-- favicon -->
    <link rel="shortcut icon" href="../../favicon.ico" />
    
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11.2.6/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11.2.6/swiper.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@4.1.1/dist/css/yakuhanjp.css">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="shared/css/shared.css?<?php echo date('Ymd-Hi'); ?>">

	
    <? include '../../inc/head-gtm.php'; ?>
</head>

<body>
    <? include '../../inc/body-gtm.php'; ?>


    <header>
        <div class="headerInner">
            <div>
                <p class="logo"><a href="../"><img src="shared/img/logo_top-header_01.svg" alt="アイレクス・ライト＋24"></a></p>
            </div>
            <div>
                <button type="button" class="hamburger">
                    <span></span>
                    <p class="robot button-text">MENU</p>
                </button>
                <div>
                    <nav class="nav">
                        <ul class="nav__list">
                            <li class="nav__item"><a href="#programSec">レッスン内容について<i class="arrow"></i></a></li>
                            <li class="nav__item"><a href="#reasonSec">ホットヨガが選ばれる理由<i class="arrow"></i></a></li>
                            <li class="nav__item"><a href="#pickSec">アイレクス・ライトの<br class="pcNone">雰囲気をチェック！<i class="arrow"></i></a></li>
                            <li class="nav__item"><a href="#priceSec">料金プランについて<i class="arrow"></i></a></li>
                            <li class="nav__item"><a href="#faqSec">よくあるご質問<i class="arrow"></i></a></li>
                            <li class="nav__item"><a href="#campaign">お得なキャンペーン実施中<i class="arrow"></i></a></li>
                            <li class="nav__item"><a href="#storeSec">店舗情報について<i class="arrow"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div>
            
            <!--MV-->
            <section id="mvSec">
                <div>
                    <h1><img src="shared/img/img_top_mv_01.jpg" alt="スタイリッシュな空間で少人数制ホットヨガ体験"></h1>
                    <p class="btn poyopoyo"><a href="#formSec"><img src="shared/img/btn_top_try_02.png" alt="まずは気軽にお試し♪0円体験の予約をする"></a></p>
                </div>
            </section>

            <nav class="top_nav">
                <ul class="top_nav_list">
                    <li class="top_nav_item"><a href="#programSec">#レッスン内容</a></li>
                    <li class="top_nav_item"><a href="#pickSec">#施設について</a></li>
                    <li class="top_nav_item"><a href="#priceSec">#料金プラン</a></li>
                    <li class="top_nav_item"><a href="#storeSec">#アクセス</a></li>
                    <li class="top_nav_item"><a href="#faqSec">#よくあるご質問</a></li>
                </ul>
            </nav>

            <!--★体験コンテンツ-->
            <div class="try mgt30 mgb30">
                <p><img src="shared/img/img_top_try_02.jpg" alt="初めての方大歓迎！0円体験レッスン受付中！"></p>
                <p class="btn poyopoyo"><a href="#formSec"><img src="shared/img/btn_top_try_02.png" alt="まずは気軽にお試し♪0円体験の予約をする"></a></p>
            </div>

            <!--★キャンペーンコンテンツ-->
            <div class="campaign">
                <p class="text mgb20 wow animate__animated animate__lightSpeedInRight   "><img src="shared/img/ttl_top-campaign_01.svg" alt="さらに入会で、お得なキャンペーンも！"></p>
                <?php
                    if (strtotime(date('Y-m-d H:i')) < strtotime('2026-5-18 00:00')) 
                    {echo '<p><img src="http://www.ilex-light.com/light-cms/wp-content/uploads/2026/04/0741516bc0a5349e6306c293ed7dc768.png" alt="Early Summerキャンペーン"></p>';}  
                    if (strtotime(date('Y-m-d H:i')) > strtotime('2026-5-18 00:00')) 
                    {echo '<p><img src="http://www.ilex-light.com/light-cms/wp-content/uploads/2026/05/c3b891445afb34e7f32a521a7ba67559.png" alt="Early Summerキャンペーン"></p>';}  
                ?>
            </div>

            <nav id="menu">
                <li><a href="#programSec"><img src="shared/img/btn_top-menu_02.svg" alt="レッスン内容について"></a></li>
                <li><a href="#reasonSec"><img src="shared/img/btn_top-menu_01.svg" alt="ホットヨガが選ばれる理由"></a></li>
                <li><a href="#pickSec"><img src="shared/img/btn_top-menu_03.svg" alt="アイレクス・ライトならヨガレッスン以外も！"></a></li>
                <li><a href="#storeSec"><img src="shared/img/btn_top-menu_04.svg" alt="アイレクス・ライト店舗情報について"></a></li>
            </nav>

            <!--こんなお悩みありませんか？-->
            <section id="worriesSec" class="worries">
                <div class="sectionInner">
                    <div class="worries_contents">
                        <div>
                            <h2><img src="shared/img/ttl_top-worries_01.svg" alt="こんなお悩みありませんか？"></h2>
                            <p><img src="shared/img/img_top-worries_01.svg" alt="悩み一覧"></p>
                        </div>
                        <div>
                            <h3 class="wow animate__animated animate__fadeInDown"><img src="shared/img/ttl_top-worries_02.svg" alt="ホットヨガで解決してみませんか？"></h3>
                        </div>
                    </div>
                </div>
            </section>

            <!--★体験コンテンツ-->
            <div class="try mgt30 mgb30">
                <p><img src="shared/img/img_top_try_02.jpg" alt="初めての方大歓迎！0円体験レッスン受付中！"></p>
                <p class="btn poyopoyo"><a href="#formSec"><img src="shared/img/btn_top_try_02.png" alt="まずは気軽にお試し♪0円体験の予約をする"></a></p>
            </div>

            <!--初心者にやさしく通いやすい-->
            <section id="beginnerSec">
                <p><img src="shared/img/img_top_beginner_01.jpg" alt="アイレクス・ライト会員様65%がヨガ初心者です"></p>
                <h2 class="wow animate__animated animate__fadeInDown"><img src="shared/img/ttl_top_beginner_01.png" alt="アイレクス・ライトは初心者にやさしく通いやすい"></h2>
                <p class="btn poyopoyo"><a href="#formSec"><img src="shared/img/btn_top_try_02.png" alt="まずは気軽にお試し♪0円体験の予約をする"></a></p>
            </section>

            <!--選ばれる理由-->
            <section id="reasonSec" class="reason">
                <div class="sectionInner">
                    <h2><img src="shared/img/ttl_top-reason_01.svg" alt="ホットヨガが選ばれる理由"></h2>
                </div>
                    <div>
                        <div class="reason_contents">
                            <picture><img src="shared/img/photo_top_reason_02.jpg" alt="ヨガのポーズをする女性"></picture>
                            <div class="sectionInner">
                                <h3><img src="shared/img/ttl_top_reason-text_01.svg" alt="たっぷり発汗して、脂肪燃焼！"></h3>
                                <ul>
                                    <li>カラダのバランスや、歪みを整えることで、しなやかで美しいボディラインをつくります。</li>
                                    <li>腸や内臓にやさしく刺激を与えるヨガポーズ。消化能力アップや便秘解消につながります。</li>
                                </ul>
                            </div>
                        </div>
                        <div class="reason_contents">
                            <picture><img src="shared/img/photo_top_reason_01.jpg" alt="ヨガのポーズをする女性"></picture>
                            <div class="sectionInner">
                                <h3><img src="shared/img/ttl_top_reason-text_02.svg" alt="手軽に運動習慣を始められる。"></h3>
                                <ul>
                                    <li>カラダに気持ちのいい動きでゆっくりと運動ができるので続けやすい！</li>
                                    <li>汗をかくことで爽快な気分になり、気持ちも前向きになっていきます。</li>
                                </ul>
                            </div>
                        </div>                        

                    </div>
                </div>
            </section>


            <!--★体験コンテンツ-->
            <div class="try mgt30">
                <p><img src="shared/img/img_top_try_02.jpg" alt="初めての方大歓迎！0円体験レッスン受付中！"></p>
                <p class="btn poyopoyo"><a href="#formSec"><img src="shared/img/btn_top_try_02.png" alt="まずは気軽にお試し♪0円体験の予約をする"></a></p>
            </div>


            <!--ホットヨガによる効果-->
            <section id="effectSec"> 
                <div class="sectionInner">
                    <h2><img src="shared/img/ttl_top-effect_01.svg" alt="ホットヨガによる効果"></h2>
                    <ul>
                        <li class="wow animate__animated animate__fadeInDown"><img src="shared/img/img_top_effect_01.jpg" alt="基礎代謝の向上"></li>
                        <li class="wow animate__animated animate__fadeInDown"><img src="shared/img/img_top_effect_02.jpg" alt="自律神経を整える"></li>
                        <li class="wow animate__animated animate__fadeInDown"><img src="shared/img/img_top_effect_03.jpg" alt="内臓の働きを活性化"></li>
                        <li class="wow animate__animated animate__fadeInDown"><img src="shared/img/img_top_effect_04.jpg" alt="免疫力を高め健康増進"></li>
                        <li class="wow animate__animated animate__fadeInDown"><img src="shared/img/img_top_effect_05.jpg" alt="姿勢の改善"></li>
                        <li class="wow animate__animated animate__fadeInDown"><img src="shared/img/img_top_effect_06.jpg" alt="汗をかくことで美肌効果"></li>
                    </ul>
                </div>
            </section>

            <!--会員様の声-->
            <section id="voiceSec">
                <div class="sectionInner">
                    <h2><img src="shared/img/ttl_top_voice_01.svg" alt="会員様の声"></h2>
                    <p class="ico"><img src="shared/img/ico_top_voice_01.svg" alt="女性のアイコン"></p>
                    <dl>
                        <dt class="tac">H・N様／20代<br>（ジム経験あり／ホットヨガ未経験）</dt>
                        <dd>普段は運動をしてもあまり汗をかけず、スッキリ感を味わうことができなかったんですけど、ホットヨガのレッスンは照明の<strong>雰囲気も良く、気持ちよく汗をかくことができました。</strong>これからも継続していきたいです。</dd>
                    </dl>
                </div>
            </section>


            <!--★体験コンテンツ-->
            <div class="try mgt30">
                <p><img src="shared/img/img_top_try_02.jpg" alt="初めての方大歓迎！0円体験レッスン受付中！"></p>
                <p class="btn poyopoyo"><a href="#formSec"><img src="shared/img/btn_top_try_02.png" alt="まずは気軽にお試し♪0円体験の予約をする"></a></p>
            </div>

            <!--写真で雰囲気をチェック-->
            <section id="pickSec" class="pick">
                <div class="sectionInner">
                    <h2><img src="shared/img/ttl_top-facility_01.svg" alt="雰囲気を写真でチェック"></h2>
                    <ul class="facility">
                        <li class="wow animate__animated animate__fadeInDown"><img src="shared/img/photo_top-facility_01.jpg" alt="フロント写真"></li>
                        <li class="wow animate__animated animate__fadeInDown"><img src="shared/img/photo_top-facility_02.jpg" alt="ヨガスタジオ"></li>
                        <li class="wow animate__animated animate__fadeInDown"><img src="shared/img/photo_top-facility_03.jpg" alt="シャワールーム"></li>
                        <li class="wow animate__animated animate__fadeInDown"><img src="shared/img/photo_top-facility_04.jpg" alt="メイクルーム"></li>
                        <li class="wow animate__animated animate__fadeInDown"><img src="shared/img/photo_top-facility_05.jpg" alt="ロッカー"></li>
                        <li class="wow animate__animated animate__fadeInDown"><img src="shared/img/photo_top-facility_06.jpg" alt="サイン"></li>
                    </ul>

                    <div class="pick_contents">
                        <h3><img src="shared/img/ttl_top-pickup_01.svg" alt="さらに、アイレクス、ライトならヨガレッスン以外も利用できる！"></h3>
                        <ul>
                            <li class="wow animate__animated animate__fadeInLeft"><img src="shared/img/photo_top-pickup_01.jpg" alt="ランニングマシンや高機能な筋トレマシンを豊富にラインナップ"></li>
                            <li class="wow animate__animated animate__fadeInRight"><img src="shared/img/photo_top-pickup_02.jpg" alt="ジムエリア内にはストレッチエリアも！"></li>
                        </ul>
                        <small>※店舗により設備は異なります。</small>
                    </div>

                    <div>
                        <h3 class="wow animate__animated animate__fadeInDown"><img src="shared/img/ttl_top-trainer_01.svg" alt="そして、アイレクス・ライトは安心＆丁寧なトレーナーサポート運動方法をご案内します！"></h3>
                        <p><img src="shared/img/photo_top-trainer_01.jpg?2603" alt="アイレクス・ライト＋24 トレーナー"></p>
                    </div>

                    <p class="btn poyopoyo"><a href="#formSec"><img src="shared/img/btn_top_try_02.png" alt="まずは気軽にお試し♪0円体験の予約をする"></a></p>

                </div>
            </section>


            <!--★体験コンテンツ-->
            <div class="try mgb30">
                <p><img src="shared/img/img_top_try_02.jpg" alt="初めての方大歓迎！0円体験レッスン受付中！"></p>
                <p class="btn poyopoyo"><a href="#formSec"><img src="shared/img/btn_top_try_02.png" alt="まずは気軽にお試し♪0円体験の予約をする"></a></p>
            </div>

            <!--★キャンペーンコンテンツ-->
            <div class="campaign" id="campaign">
                <p class="text  mgb20 wow animate__animated animate__lightSpeedInRight"><img src="shared/img/ttl_top-campaign_01.svg" alt="さらに入会で、お得なキャンペーンも！"></p>
                <?php
                    if (strtotime(date('Y-m-d H:i')) < strtotime('2026-5-18 00:00')) 
                    {echo '<p><img src="http://www.ilex-light.com/light-cms/wp-content/uploads/2026/04/0741516bc0a5349e6306c293ed7dc768.png" alt="Early Summerキャンペーン"></p>';}  
                    if (strtotime(date('Y-m-d H:i')) > strtotime('2026-5-18 00:00')) 
                    {echo '<p><img src="http://www.ilex-light.com/light-cms/wp-content/uploads/2026/05/c3b891445afb34e7f32a521a7ba67559.png" alt="Early Summerキャンペーン"></p>';}  
                ?>
            </div>

            <!--料金プランについて-->
            <section id="priceSec">
                <div class="sectionInner">
                    <h2><img src="shared/img/ttl_top-price_01.svg" alt="料金プランについて"></h2>
                    <p><img src="shared/img/img_top_price_04.svg" alt="レギュラー会員 7,800円（税込8,580円）"></p>
                </div>
            </section>

            <!--よくあるご質問-->
            <section id="faqSec">
                <div class="sectionInner">
                    <h2><img src="shared/img/ttl_top-faq_01.svg" alt="よくあるご質問"></h2>

                    <div>
                        <input id="block-01" type="checkbox" class="toggle">
                        <label class="Label wow animate__animated animate__fadeInDown" for="block-01">レッスン時の服装や持ち物について</label>
                        <div class="content">
                            <p>運動ができる服装（身体を締め付けないもの）、替えの下着、水分補給用の飲み物（500ml以上）、フェイスタオル、バスタオルをお持ちください。</p>
                        </div>

                        <input id="block-02" type="checkbox" class="toggle">
                        <label class="Label wow animate__animated animate__fadeInDown" for="block-02">身体がかたいですが、<br class="pcNone">大丈夫ですか？</label>
                        <div class="content">
                            <p>身体がかたくても無理なくできる難易度の低いレッスンもありますので、まずは難易度が低いレッスンに参加することをおすすめします。</p>
                        </div>

                        <input id="block-03" type="checkbox" class="toggle">
                        <label class="Label wow animate__animated animate__fadeInDown" for="block-03">体験レッスンの<br class="pcNone">来館時間・所要時間について</label>
                        <div class="content">
                            <p>レッスン開始30分前を目安にご来館ください。館内などをご案内後、レッスン開始10分前にスタジオにご入場いただきます。体験レッスンは45分間です。</p>
                        </div>

                        <input id="block-04" type="checkbox" class="toggle">
                        <label class="Label wow animate__animated animate__fadeInDown" for="block-04">スタジオや施設を見学することは<br class="pcNone">可能ですか？</label>
                        <div class="content">
                            <p>もちろん可能です！事前に各店舗のホームページの「見学・お問い合わせフォーム」、またはお電話にてご連絡ください。</p>
                        </div>  
                        
                        <input id="block-05" type="checkbox" class="toggle">
                        <label class="Label wow animate__animated animate__fadeInDown" for="block-05">どのような年代の方が<br class="pcNone">通っていますか？</label>
                        <div class="content">
                            <p>20代～50代までの幅広い年代層の方にご利用いただいています。目的に合わせた豊富なレッスンプログラムをご用意しておりますので、どなたでも安心してご参加いただけます。</p>
                        </div>                          
                    </div>


                </div>
            </section>



            <!--店舗情報-->
            <section id="storeSec">
                <div class="sectionInner">
                    <p class="logo">
                        <img src="shared/img/logo_top-header_01.svg" alt="アイレクス・ライト＋24 ロゴ">
                    </p>
                    <h2 class="tac">アイレクス・ライト＋24 新城</h2>
                    <picture><img src="shared/img/photo_top_info_shinshiro.png" alt="アイレクス・ライト＋24 新城 ヨガスタジオ"></picture>

                    <div>
                        <dl>
                            <dt>営業時間</dt>
                            <dd>24時間</dd>
                            <dt>スタッフ在館時間</dt>
                            <dd>月～水・金 10:00～15:00 18:00～22:00<br>土・日・祝 10:00～17:00<small>※木曜日は終日不在</small></dd>
                            <dt>住所</dt>
                            <dd>〒441-1375<br>愛知県新城市字的場22-1</dd>
                        </dl>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.1422516767934!2d137.4966045!3d34.902879500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601b35216eaa5611%3A0x9a61f0ebb575887d!2z44Ki44Kk44Os44Kv44K544O744Op44Kk44OIKzI0IOaWsOWfjg!5e0!3m2!1sja!2sjp!4v1774229840561!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="btn tac">
                            <a href="https://www.ilex-light.com/shinshiro/">
                                <img src="shared/img/btn_top-_btn-info_01.png" alt="店舗情報について詳しくはこちら">
                            </a>
                        </p>
                    </div>

                </div>
            </section>

            <!--フォーム箇所-->
            <section id="formSec"> 
                <div class="sectionInner">

                    <form  method="post" action="mail.php">

                        <!--<div class="form-item">
                            <div class="select-box">
                                <div>
                                    <label for="name" class="label-title">体験希望レッスン</label>
                                </div>
                                <select name="体験希望レッスン">
                                    <option name="お選びください">お選びください</option>
                                    <option value="ILEX至福の睡眠ヨガ" name="ILEX至福の睡眠ヨガ">ILEX至福の睡眠ヨガ</option>
                                    <option value="ILEXリンパデトックスヨガ" name="ILEXリンパデトックスヨガ">ILEXリンパデトックスヨガ</option>
                                    <option value="ILEX肩こりリラックスヨガ" name="ILEX肩こりリラックスヨガ">ILEX肩こりリラックスヨガ</option>                                    <option value="ILEX骨盤調整ヨガ" name="ILEX骨盤調整ヨガ">ILEX骨盤調整ヨガ</option>
                                    <option value="ILEXアロマリラックスヨガ" name="ILEXアロマリラックスヨガ">ILEXアロマリラックスヨガ</option>
                                    <option value="ILEXピーチヒップヨガ" name="ILEXピーチヒップヨガ">ILEXピーチヒップヨガ</option>
                                    <option value="ILEX美ボディフローヨガ" name="ILEX美ボディフローヨガ">ILEX美ボディフローヨガ</option>
                                    <option value="ILEXmorningヨガ" name="ILEXmorningヨガ">ILEXmorningヨガ</option>
                                </select>
                            </div>
                        </div>-->           

                        <div class="form-item">
                            <label for="name" class="label-title">お名前<span class="req">必須</span></label>
                            <input class="form-item-text" type="text" name="お名前" id="name"  value="" placeholder="例：山田 花子">
                        </div>

                        <div class="form-item">
                            <label for="name" class="label-title">カナ<span class="req">必須</span></label>
                            <input class="form-item-text" type="text" name="カナ" id="name2"  value="" placeholder="例：ヤマダ ハナコ">
                        </div>   

                        <div class="form-item">
                            <label for="tel" class="label-title">電話番号<span class="req">必須</span></label>
                            <input class="form-item-text" type="tel" name="電話番号" id="tel"  value="" placeholder="例：000-000-0000">
                        </div class="form-item">

                        <div class="form-item">
                            <label for="mail" class="label-title">メールアドレス<span class="req">必須</span></label>
                            <input class="form-item-text" type="mail" name="Email" id="mail"  value="" placeholder="例：example@ilex-sports.co.jp">
                        </div>

                        <div class="form-item">
                            <label for="date" class="label-title">体験希望日</label>
                            <input class="form-item-text" type="text" id="date" name="体験希望日" value="" placeholder="カレンダーから選択してください">
                        </div>

                        <div class="form-item">
                            <label for="name" class="label-title">体験希望時間</label>
                            <input class="form-item-text" type="text" name="体験希望時間" id="time"  value="" placeholder="例：17:00">
                        </div>


                        <div class="form-item">
                            <label>
                                <span class="ttl">運動を始めようと思ったきっかけをお聞かせください</span>
                                <select name="運動を始めようと思ったきっかけをお聞かせください">
                                    <option value="選択肢からお選びください">選択肢からお選びください</option>
                                    <option value="とにかく体重を落としたい！">とにかく体重を落としたい！</option>
                                    <option value="ヨガやストレッチでリラックスしたい！">ヨガやストレッチでリラックスしたい！</option>
                                    <option value="気分転換に汗をかきたい！">気分転換に汗をかきたい！</option>
                                    <option value="健康増進や予防のために運動したい！">健康増進や予防のために運動したい！</option>
                                    <option value="当日話を聞いて欲しい！">当日話を聞いて欲しい！</option>
                                    <option value="その他">その他</option>
                                </select>
                            </label>
                        </div>

                        <div class="form-item">
                            <label for="qa" class="label-title">備考欄</label>
                            <textarea type="text" id="qa" name="備考欄" value="" placeholder=""></textarea>
                        </div>

                        <div class="submit poyopoyo"><input value="この内容で送信する &rarr;" type="submit"></div>

                    </form>                    

                </div>
            </section>
        </div>
    </main>


    <footer>
        <div>
            <div class="read_contents">
                <p class="logo"><img src="shared/img/logo_top-footter_01.svg" alt="アイレクス・ライト＋24 ロゴ"></p>
                <p class="text">ホットヨガスタジオと24時間利用できるジムエリアを併設した施設です。 初めての方でもお気軽にご利用いただけるよう、無理のない温度湿度環境でソフトホットヨガを行います。 ジムエリアは、忙しい方でもご利用いただけるよう24時間営業しています。最新かつ高品質な筋トレマシンを各種取り揃え、体力レベルや目的に合わせてご利用いただけます。スタッフ在館時間には、スタッフがマシンの使用方法はもちろん、お客様一人ひとりに合った運動プログラムの提案も行います。 </p>
            </div>

            <ul>
                <li><a href="https://www.ilex-sports.com/company/">企業情報</a></li>
                <li><a href="https://www.ilex-sports.com/privacy/">個人情報保護方針</a></li>
                <li><a href="https://ilex-sports.jp/recruit/">採用情報</a></li>
            </ul>
            <p class="copy tac">Copyright &copy; <?php echo date("Y") ?> ILEX SPORTS LIFE INC. All Rights Reserved.</p>
        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11.2.6/swiper-bundle.min.js"></script>

    <!-- カレンダー選択 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css">

    <script src="shared/js/wow.min.js"></script>
    <script src="shared/js/shared.js"></script>


</body>
</html>