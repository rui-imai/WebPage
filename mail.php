<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="NyRZjxko_YmZ7-VP5_TPEfqim6axXU5I4_E7_DJRwks" />
    <meta name="discription" content="Tarra Seaです。意外とネットで調べても 載ってない情報ってありますよね？そんなコンテンツを独自の視点で載せています。コンテンツの内容としては、Java,JavaFXといったプログラミング、セキュリティについて少し、プロテインや筋トレなどのトレーニング、といった幅広く(？)やっています！" />
    <meta name="keywords" content="java,javaFX,トラックボールマウス,プログラミング,プロテイン,筋トレ,TerraSea" />
    <meta name="googlebot" content="all" />
    <script data-ad-client="ca-pub-1307991529737997" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <link rel="shortcut icon" href="image/favicon.png">
    <link rel="StyleSheet" href="CSS/common.css">
    <link rel="StyleSheet" href="CSS/Style.css">
    <link rel="StyleSheet" href="CSS/SmartPhone.css">
    <title>Terra Sea</title>
</head>

<body>
    <div id="wrap">
        <header id="header">
            <a href="https://terrasea.jp/"><img src="image/TerraSea_header.png" class="header_img"></a>
        </header>
        
        <nav>
            <ul>
            <a href="https://terrasea.jp"><li>TOP</li></a>
            <a href="https://terrasea.jp/blog.php"><li>Blog</li></a>
            <a href="https://terrasea.jp/contact.php"><li>問い合わせ</li></a>
            <a href="https://twitter.com/Terra__Sea" target="_blank"><li>Twitter</li></a>
            </ul>
        </nav>
        
        <div class="wrap">
            <div id="contents">
            <div class="midashi">問い合わせフォーム</div>
            <div class="kiji">
            <?php
                mb_language("Japanese");
                mb_internal_encoding("UTF-8");
                session_start();
                $to = 'terrasea.exe@gmail.com';
                $subject = htmlspecialchars($_SESSION['subject']);
                $name = htmlspecialchars($_SESSION['name']);
                $mail = htmlspecialchars($_SESSION['mail']);
                $content = htmlspecialchars($_SESSION['content']);
                $header = "From:$mail";
                $body = "(お名前)"."\n"."$name"."\n\n"
                ."(メールアドレス)"."\n"."$mail"."\n\n"
                ."(題名)"."\n"."$subject"."\n\n"
                ."(お問い合わせ内容)"."\n"."$content"."\n\n";
                ?>
                <?php if((mb_send_mail($to,$subject,$body,$header))) : ?>
                    <p >メールの送信が完了しました。<br>返信まで少々お待ちください。</p>
                <?php else : ?>
                    <p>メールの送信が失敗しました。もう一度お願い致します。</p>
                <?php endif ; ?>
                <a href="https://terrasea.jp/">トップ画面に戻る</a>
                </div>    

                <div style="clear:both;"></div><br><br>
            </div>

            <div id="sidenavi">
                <iframe class="frame_blog" src="php/blog_Side_NewPage.php"></iframe>
                <iframe class="frame_category" src="Category.php" ></iframe>
                <a href="https://twitter.com/Terra__Sea"><div class="twitter_midashi">Twitter @Terra__Sea</div></a>
                <a class="twitter-timeline" href="https://twitter.com/Terra__Sea?ref_src=twsrc%5Etfw" data-border-color="#ff0080" data-height="400px">
                    Tweets by Terra__Sea
                </a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                <br>
            </div>
        </div>
        
        <footer id="footer">
            <br>
            <img src="image/favicon.png" class="footer_img">
            -Terra Sea-<br>
            しがない専門学生2人が独自に書いているブログ<br>
            魚好きのNさんと 筋肉のCさんが書いております。<br><br><br>



        </footer>
    </div>

</body>

</html>