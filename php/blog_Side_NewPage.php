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
    <div class="sidenavi_midashi">最近のブログ記事</div><br>
    <?php
        require_once 'login.php';
        
        $link = mysqli_connect($host, $username, $passwd, $dbname);
        
        if ($link) {
        
            mysqli_set_charset($link, 'utf8');
        
            $query = 'SELECT url, title FROM `blog` ORDER BY date DESC LIMIT 5';
        
            $result = mysqli_query($link, $query);
        
            while ($row = mysqli_fetch_array($result)) {
                print '<a href="'.$row['url'].'"  target="_parent" title="'.$row['title'].'&#045;TerraSea&#045;">・'.$row['title'].'</a><br><br>';
            }
        
            mysqli_free_result($result);
        
            mysqli_close($link);
        
        } else {
            print 'Error Establishing Database Connection';
        }
    ?>
</body>