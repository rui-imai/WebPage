<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="NyRZjxko_YmZ7-VP5_TPEfqim6axXU5I4_E7_DJRwks" />
    <meta name="discription" content="Tarra Seaです。意外とネットで調べても 載ってない情報ってありますよね？そんなコンテンツを独自の視点で載せています。コンテンツの内容としては、Java,JavaFXといったプログラミング、セキュリティについて少し、プロテインや筋トレなどのトレーニング、といった幅広く(？)やっています！" />
    <meta name="keywords" content="java,javaFX,fxml,TerraSea,プログラミング,プロテイン,筋トレ" />
    <link rel="shortcut icon" href="../image/favicon.png">
    <link rel="StyleSheet" href="../CSS/NewPage.css">
    <title>Terra Sea</title>
</head>

<body>
    <div class="sidenavi_midashi">カテゴリ別記事一覧</div><br>
    <?php
        require_once 'php/login.php';
        
        $link = mysqli_connect($host, $username, $passwd, $dbname);
        
        if ($link) {
        
            mysqli_set_charset($link, 'utf8');
        
            $query = "SELECT category AS 'カテゴリー', count(category) AS '結果' FROM `recent_article` group by category order by category asc";
        
            $result = mysqli_query($link, $query); 
        
    ?>
    <div class="category_link">
    <?php
            while ($row = mysqli_fetch_array($result)) {
                ?>
                
                <?php
                print '<a href="https://terrasea.jp/Category2.php?category='.$row['カテゴリー'].'" target="_parent" title="カテゴリ別記事一覧&quot;'.$row['カテゴリー'].'&quot;">&bull;'.$row['カテゴリー'].'('.$row['結果'].')<a><br>';
            }            
    ?>
    </div>
            
    <?php
        mysqli_free_result($result);
        
        mysqli_close($link);
        
        } else {
            print 'Error Establishing Database Connection';
        }
    ?>
</body>