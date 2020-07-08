<!DOCTYPE html>
<head>
	<html lang="ja">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="keywords" content="arduino,arduino ide,arduno ide起動しない,TerraSea"/>
	<meta name="googlebot" content="all" />
	<link rel="shortcut icon" href="../../../image/favicon.png">
	<link rel="StyleSheet" href="../../../CSS/common.css" >
	<link rel="StyleSheet" href="../../../CSS/Style.css">
	<link rel="StyleSheet" href="../../../CSS/SmartPhone.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300|Caveat|Vollkorn&display=swap">
	<title>2020-06-11現在 Arduino IDEが起動しない時の対処法 -Terra Sea-</title>
	<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=css&skin=desert"></script>
	<meta name="twitter:site" content="@terra__sea"/>
	<meta name="twitter:image" content="https://terrasea.jp/images/thumbnail/0016.png"/>
	<meta name="twitter:title" content="Arduino IDEが起動しない時の対処法"/>
	<meta name="twitter:description" content="2020/06/11現在、Arduino IDEが起動されない現象が多発している見たいなので、その対処法を調べてみました。"/>
	<meta name="twitter:card" content="summary">
</head>

<body>
	<div id="wrap">
		<header id="header">
			<a href="https://terrasea.jp/"><img src="../../../image/TerraSea_header.png" class="header_img"></a>
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
			<h2 class="kiji_title">Arduino IDEが起動しない時の対処法</h2>
			
			<div class="date">更新：2020/06/11</div>
			<div class="img_center">
				<img src="images/top.png"　alt="TOP画像" class="img_80">
			</div>

			<div class="midashi"></div>
            <div class="midashi">はじめに</div>
			<div class="kiji">
				2020/06/11現在、Arduino IDEが起動されない現象が多発している見たいなので、その対処法を調べてみました。<br>
			</div><br>
			

			<div class="kiji">
				Arduino IDEをクリックし、ロードが始まるものの、<br>
				Arduino IDEが起動せず、スケッチが開かない人が多発しているみたいですが、<br>
				以下のファイルとフォルダを削除すると、起動することができます。<br>
				<pre class="prettyprint linenums lang-java pre">C:\Users\ユーザ名\AppData\Local\Arduino15\package_index.json
C:\Users\ユーザ名\AppData\Local\Arduino15\cache
</pre>
				<div class="img_center">
					<img src="images/002.png" class="img">
				</div>
				&#040;Arduino IDEをインストールしていない人は
				<a href="https://terrasea.jp/pages/arduino/ide_install/20191029.php" title="Arduino IDEのインストール方法" alt="Arduino IDEインストールについての記事">こちらの記事から</a>&#041;<br><br><br>

				とあるサイトにて、Program Files内のArduinoフォルダの中に<br>
				<div class="img_center">
					<img src="images/001.png" class="img">
				</div>
				portableというフォルダを作り、Arduino IDEを管理者で実行すると起動するとの情報がありますが、<br>
				Arduino IDEは起動しますが、ライブラリが全て使えない状態になりますので、<br>
				あまりオススメしません。<br><br><br>

				<div class="midashi">2020-06-15追記</div>
				事後報告で申し訳ないのですが、Arduino公式がツイートおり、<br>
				<div class="img_center">
				<blockquote class="twitter-tweet"><p lang="en" dir="ltr">📣 UPDATE 📣<br><br>We recently had a problem in our package_index.json that caused an error and prevented the IDE from starting. It has been fixed; however to recover a working installation, you must delete the package_index.json once again and restart the IDE as usual.<br><br>THREAD (1/5)</p>&mdash; Arduino (@arduino) <a href="https://twitter.com/arduino/status/1270721367319539715?ref_src=twsrc%5Etfw">June 10, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
				</div>
				とのことで、package_index.jsonに問題があったようです。<br>
				また、問題は解消されているようなので、一度jsonとchacheを削除することで、<br>
				当分起動しない事象は起こらないようです。<br><br>
			</div>

			<div class="midashi" id="6">今回紹介した商品</div>
            <div class="kiji">
					<iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=qf_sp_asin_til&t=terrasea074-22&m=amazon&o=9&p=8&l=as1&IS2=1&detail=1&asins=B008GRTSV6&linkId=f58e39bb0e50294b10d263bbac0b8fed&bc1=ffffff&lt1=_blank&fc1=333333&lc1=ff0080&bg1=ffffff&f=ifr"></iframe>
					<iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="https://rcm-fe.amazon-adsystem.com/e/cm?ref=qf_sp_asin_til&t=terrasea074-22&m=amazon&o=9&p=8&l=as1&IS2=1&detail=1&asins=B06XF2HZGT&linkId=6fcb7aa3630242ec518d503b5cc637f4&bc1=ffffff&lt1=_blank&fc1=333333&lc1=ff0080&bg1=ffffff&f=ifr"></iframe>
			</div>


			<div class="midashi">関連記事</div>
				<?php
					require_once '../../../php/login.php';
					$link = mysqli_connect($host, $username, $passwd, $dbname);
					if ($link) {
						$thisURL = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
					
						mysqli_set_charset($link, 'utf8');
						$query = 'SELECT category FROM `recent_article` WHERE url = "'.$thisURL.'";';
						
						$result = mysqli_query($link, $query);
						
						$cate;
						while ($row = mysqli_fetch_array($result)) {
							$cate = $row['category'];
						}

						$query = 'SELECT title, url, relation_img FROM `recent_article` WHERE category = "'.$cate.'" ORDER BY id DESC limit 5;';
						$result = mysqli_query($link, $query);

						while ($row = mysqli_fetch_array($result)) {
							$rtitle = $row['title'];
							$rurl = $row['url'];
							$rimg = $row['relation_img'];

							if(strcmp($thisURL, $rurl) != 0){
								print '	<div class="kanren_kiji">
											<a href="'.$rurl.'">
											<img src="'.$rimg.'" alt="関連記事画像" class="kanren_kiji_thumbnail">
											<div class="kanren_kiji_name">'.$rtitle.'</div></a>
										</div><br>';
							}
						}
						mysqli_free_result($result);
						mysqli_close($link);
					}else {
						print 'Error Establishing Database Connection';
					}
				?>
				
				<div style="clear:both;"></div><br><br>
			
			<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">
				Tweet
			</a>
			<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			<div class="go_top_page"><a href="https://terrasea.jp/" title="Terra Sea TOPページに戻る">TOPページに戻る</a></div>
		</div>
		
		<div id="sidenavi">
			<iframe src="../../../php/Side_NewPage.php" class="frame_newpage"></iframe>
			<iframe src="../../../php/blog_Side_NewPage.php" class="frame_blog"></iframe>
			<div class="twitter_midashi">Twitter @Terra__Sea</div>
			<div class="share_link">  
				<a class="twitter-timeline" href="https://twitter.com/Terra__Sea?ref_src=twsrc%5Etfw" data-border-color="#ff0080" data-height="400px">
					Tweets by Terra__Sea
				</a>
				<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>


			<br>
		</div>
		</div>

		<footer id="footer"><br> 
			<img src="../../../image/favicon.png" class="footer_img">
			-Terra Sea-<br>
			しがない専門学生2人が独自に書いているブログ<br>
			魚好きのNさんと 筋肉のCさんが書いております。<br><br><br>   
		</footer>
	</div>
</body>

</html>