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
            <form action="mail.php" method="post">
                <?php
                    $name = $_POST['name'];
                    $mail = $_POST['mail'];
                    $subject = $_POST['subject'];
                    $content = $_POST['content'];
                    
                    if($content == null && $name ==null){
                        print'名前と内容が入力されていません。<br>名前と内容を入力してください。<br>';
                        print'<button type="button" onclick="history.back()" class="form_button">戻る</button>';
                    }else if($name ==null){
                        print'名前が入力されていません。<br>名前を入力してください。<br>';
                        print'<button type="button" onclick="history.back()" class="form_button">戻る</button>';
                    } else if($mail == null){
                        print'メールアドレスが入力されていません。<br>メールアドレスを入力してください。<br>';
                        print'<button type="button" onclick="history.back()" class="form_button">戻る</button>';
                    } else if($content == null){
                        print'内容が入力されていません。<br>内容を入力してください。<br>';
                        print'<button type="button" onclick="history.back()" class="form_button">戻る</button>';

                    }else{
                    ?>
                        <h2>確認画面</h2>
                        <table border="0" >
                        <tr>
                            <td>名前</td>
                            <td><?php print$name; ?></td>
                        </tr>
                        <tr>
                            <td>メールアドレス</td>
                            <td><?php print $mail;?></td>
                        </tr>
                        <tr>
                            <td>題名</td>
                            <td><?php print $subject; ?></td>
                        </tr>
                        <tr>
                            <td>問い合わせ内容</td>
                            <td><?php print $content; ?></td>
                        </tr>
                        </table>
                        <input type="submit" value="送信" class="form_button">
                        <button type="button" onclick="history.back()" class="form_button">戻る</button>
                    </form>
                    <!-- POSTの中身をSESSIONへ受け渡す -->
                    <?php
                    session_start() ;
                    $_SESSION["name"] = $_POST["name"];
                    $_SESSION["mail"] = $_POST["mail"];
                    $_SESSION["subject"] = $_POST["subject"];
                    $_SESSION["content"] = $_POST["content"];
                    }
                    ?>
                    </div>
                    
                <br>
                <br>

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