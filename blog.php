<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="NyRZjxko_YmZ7-VP5_TPEfqim6axXU5I4_E7_DJRwks" />
    <meta name="discription" content="Tarra Seaです。意外とネットで調べても 載ってない情報ってありますよね？そんなコンテンツを独自の視点で載せています。コンテンツの内容としては、Java,JavaFXといったプログラミング、セキュリティについて少し、プロテインや筋トレなどのトレーニング、といった幅広く(？)やっています！" />
    <meta name="keywords" content="java,javaFX,トラックボールマウス,プログラミング,プロテイン,筋トレ,TerraSea"/>
    <meta name="googlebot" content="all" />
    <script data-ad-client="ca-pub-1307991529737997" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <link rel="shortcut icon" href="image/favicon.png">
    <link rel="StyleSheet" href="blog_CSS/index.css">
    <title>Terra Sea -Blog-</title>
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
                <div class="midashi">Terra Seaへようこそ</div>
                <div class="kiji">
                    TerraSeaです！僕たちは、プログラミングをメインに(一応)やってます。<br>
                    現在、ライター・デザイナー含め、2人の専門学生が運営してるサイトとなります&#033;<br>
                    本編のTerraSea.jpよりちょっとゆるめは記事を配信していきます&#033;<br><br>
                    <!-- 各ライター・デザイナーのプロフィールは<a href="profile.html" target="_blank">こちら！</a><br>-->
                <!--我々のTwitterは<a href="https://twitter.com/Terra__Sea" target="_blank">こちら</a>--><br><br>
                </div>
                </div>

                <div class="midashi">最新のブログ記事</div>
                <?php
                    require_once 'login.php';
                    
                    $link = mysqli_connect($host, $username, $passwd, $dbname);
                    
                    if ($link) {
                    
                        mysqli_set_charset($link, 'utf8');
                    
                        $query = 'SELECT id,url,title,thumbnail,split_date FROM `blog` ORDER BY id DESC limit 5' ;
                    
                        $result = mysqli_query($link, $query);
                        

                        while ($row = mysqli_fetch_array($result)) {
                            print  '<div class="index_kiji">
                                    <a href="'.$row['url'].'" title="'.$row['title'].'&#045;TerraSea&#045;">
                                    <img src="'.$row['thumbnail'].'" class="index_kiji_thumbnail">
                                    <div class="index_kiji_name">'.$row['title'].'<br>
                                    更新日:'.$row['split_date'].'</div></a></div><br>';
                        }
                        mysqli_free_result($result);
                        mysqli_close($link);
                    } else {
                        print 'Error Establishing Database Connection';
                    }
                ?> 
                <br>
                <div class="kiji"><strong>
                    より技術的な話はこちらへ&darr;<br>
                    <a href="https://terrasea.jp" taeget="_blank" style="color:#FFF;"><span class="link_buttom">&#034;terrasea.jp&#034;へ&#033;</span></a><br>
                </strong></div>
                <br>

                <div style="clear:both;"></div><br><br>
                <!--<div class="kiji">
                    過去のアーカイブは<a href="archive.php">こちら</a>
                </div><br>-->
            </div>

            <div id="sidenavi">
                <iframe src="../../../php/Side_NewPage2.php" class="frame_newpage"></iframe>
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