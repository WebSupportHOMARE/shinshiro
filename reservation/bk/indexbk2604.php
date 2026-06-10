<?php require_once('../../include/function.php'); ?>

<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website:http://ogp.me/ns/website#">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no,address=no,email=no">
	
    <!-- *** 公開時にno外す *** -->
    <meta name="robots" content="index,follow">
    
    <title>施設見学・体験申し込み｜ヨガ＆ジム アイレクス・ライト＋24 新城</title>
    <meta name="keywords" content="">
    <meta name="description" content="ついに新城市にアイレクス・ライト＋24 新城がオープンいたします！アイレクス・ライト＋24は女性やシニアに優しい24時間ジムをコンセプトとし、最新のマシンジムに上質な照明と音響システムを採用したスタジオ、多彩なアイテムでお客様のニーズに応えます。LINEお友だち追加キャンペーンを実施中！最新情報をいち早くお届けいたします♪">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://www.ilex-light.com/shinshiro/reservation/">

    <!-- ogp -->
    <meta property="og:type" content="website"> 
    <meta property="og:title" content="施設見学・体験申し込み｜ヨガ＆ジム アイレクス・ライト＋24 新城">
    <meta property="og:site_name" content="施設見学・体験申し込み｜ヨガ＆ジム アイレクス・ライト＋24 新城">
    <meta property="og:description" content="ついに新城市にアイレクス・ライト＋24 新城がオープンいたします！アイレクス・ライト＋24は女性やシニアに優しい24時間ジムをコンセプトとし、最新のマシンジムに上質な照明と音響システムを採用したスタジオ、多彩なアイテムでお客様のニーズに応えます。LINEお友だち追加キャンペーンを実施中！最新情報をいち早くお届けいたします♪">
    <meta property="og:url" content="https://www.ilex-light.com/shinshiro/reservation/">
    <meta property="og:image" content="https://www.ilex-light.com/shinshiro/shared/img/img_top_ogp.jpg">
    <meta property="og:locale" content="ja_JP" />

    <!-- favicon -->
    <link rel="shortcut icon" href="../../favicon.ico" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@4.1.1/dist/css/yakuhanjp.css">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="shared/css/shared.css?<?php echo date('Ymd-Hi'); ?>">

	
<? include '../../inc/head-gtm.php'; ?>
</head>

<body>
<? include '../../inc/body-gtm.php'; ?>


<div id="wrapper" class="home">

    <header>
        <div class="header-top">
        <div class="container flex">

            <!-- 店舗ロゴ -->
            <h1 class="tac">
            <a href="../">
                <picture>
                <img src="shared/img/logo_top-header_01.svg" alt="アイレクス・ライト＋24 新城">
                </picture>
            </a>
            </h1>

        </div>
        </div>

    </header>

    <main>
      <div id="form">
          <section>
            <h2 class="tac"><strong>RESERVATION</strong><span>施設見学・体験申し込み</span></h2>

                <div class="contact form">

                  <form method="post" action="mail.php">	

                      <ul>
                          <li>
                            <span class="ttl">お申し込み内容<span class="required">必須</span></span>
                            <fieldset class="radiocheck">
                              <label><input class="radio" type="radio" name="お申し込み内容" value="見学申し込み" checked/>見学申し込み</label>
                              <label><input class="radio" type="radio" name="お申し込み内容" value="1回体験利用"/>1回体験利用（<s>1,000円</s>⇒ 0円 ）</label>
                            </fieldset>
                          </li>
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
                                  <span class="ttl">電話番号<span class="required">必須</span></span>
                                  <input type="tel" name="電話番号" placeholder="例:000-000-0000"/>
                              </label>
                          </li>

                          <li>
                              <label>
                                  <span class="ttl">メールアドレス<span class="required">必須</span></span>
                                  <input type="email" name="Email" placeholder="例：example@ilex-sports.com"/>
                              </label>
                          </li>

                          <li id="date-form">
                              <label>
                                  <span class="ttl">ご見学希望日</span>
                                  <input type="text" id="date" name="ご見学希望日" value="" placeholder="カレンダーから選択してください">
                              </label>
                              <small>※毎週木曜日はスタッフ不在曜日のため見学を実施しておりません。</small>
                          </li>

                            <li>
                                <label>
                                <span class="ttl">ご見学希望時間</span>
                                <select name="ご見学希望時間">
                                </select>
                                </label>
                            </li>
                            
                            <li>
                                <label>
                                    <span class="ttl">運動を始めようと思ったきっかけをお聞かせください</span>
                                    <select name="運動を始めようと思ったきっかけをお聞かせください">
                                        <option value="選択肢からお選びください">選択肢からお選びください</option>
                                        <option value="筋トレでかっこいいカラダを手に入れたい！">筋トレでかっこいいカラダを手に入れたい！</option>
                                        <option value="とにかく体重を落としたい！">とにかく体重を落としたい！</option>
                                        <option value="ヨガやストレッチでリラックスしたい！">ヨガやストレッチでリラックスしたい！</option>
                                        <option value="気分転換に汗をかきたい！">気分転換に汗をかきたい！</option>
                                        <option value="健康増進や予防のために運動したい！">健康増進や予防のために運動したい！</option>
                                        <option value="当日話を聞いて欲しい！">当日話を聞いて欲しい！</option>
                                        <option value="その他">その他</option>
                                    </select>
                                </label>
                            </li>
                            
                          <li>
                              <label>
                                  <span class="ttl">備考欄</span>
                                  <div class="TextareaWrapper">
                                  <textarea id="textarea" class="Textarea" maxlength="300" name="備考欄" placeholder=""  ></textarea>
                                  <div class="CharCounter" id="charCounter">0 / 300</div>
                                  </div>
                              </label>
                              <small>※営業メールの送信はご遠慮ください。<br>※お問い合わせの対応はスタッフ在館時間のみとなります。</small>
                          </li>
                      
                      </ul>
                      

                      <p class="submit"><input class="btn" type="submit" value="» 入力内容のご確認へ «"></p>

                  </form>

                </div>

                
                <p class="form-text">お客様がご入力された個人情報は、ご質問・ご意見への対応目的のみにて使用させていただき、その他の目的では一切使用いたしません。<br>
                    また、個人情報の取り扱いに関しましては、<a class="privacy" href="https://www.ilex-sports.com/privacy/" target="_blank">個人情報保護方針</a>をご参照ください。
                    </p>


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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- カレンダー選択 -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css">

<script src="shared/js/common.js"></script>

<!-- 備考欄文字数制限 -->
<script>
const textarea = document.getElementById("textarea")
const maxLength = textarea.getAttribute("maxlength")
const charCounter = document.getElementById("charCounter")
charCounter.textContent = `0 / ${maxLength}`
textarea.addEventListener("input", () => {
    const currentLength = textarea.value.length
    charCounter.textContent = `${currentLength} / ${maxLength}`

    if (currentLength > maxLength) {
    charCounter.style.color = "red"
    } else {
    charCounter.style.removeProperty("color")
    }
})
</script>

</body>

</html>