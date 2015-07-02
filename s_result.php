<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html;charset=Shift_JIS" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="stylesheet" href="css.css" type="text/css" />
<title>Earphones</title>
</head>
<body>

<!--ヘッダーここから-->
<a name="top" id="top"></a>
<div id="header">
<!--タイトルロゴここから-->
<div id="header_left2">I ❤ Earphones</div>
<!--タイトルロゴここまで-->
<div id="header_right">
<ul>
<li><a href="sitemap.html">サイトマップ</a></li>
<li><a href="imfomation.html">お問い合わせ</a></li>
</ul>
</div>
<div style="clear:both;"></div>
</div>
<!--ヘッダーここまで-->

<!--ヘッダーメニューここから-->
<div id="menu">
<ul>
<li><a href="top.html">トップページ</a></li>
<li><a href="k_touroku.html">会員登録</a></li>
<li><a href="search.html">商品検索</a></li>
<li><a href="#4">comingsoon...</a></li>
<li><a href="maypage.html">会員情報</a></li>
</ul>
</div>
<div style="clear:both;"></div><!--デザインが崩れるので削除しない事-->
<!--ヘッダーメニューここまで-->

<div id="container"><!--"container"を削除するとデザインが崩れます-->

<div id="main2"><!--デザインが崩れるので削除しない事-->

<!--メインここから-->
<div id="main">

<!--パンくずリストここから-->
<div class="pan"><a href="top.html">トップ</a> > <a href="search.html">検索</a></div>
<!--パンくずリストここまで-->

<!--二列BOXここから-->

<div class="category">
<h2 class="h2_normal">検索結果</h2>
<div class="entry_body">

<div class="box2">
<?php session_start() ?>
<?php	foreach( $_POST[m] as $value ){
		$maker = $_SESSION[$value]; }
		foreach( $_POST[f] as $value ){
		$func = $_SESSION[$value];	}
		foreach ( $_POST[k] as $value ){
		$kakaku = $_SESSION[$value]; }?>
<?php $link = mysqli_connect('localhost', 'root', 'root'); ?>
<?php mysqli_select_db($link,'earphones'); ?>
<?php $sql = "SELECT * FROM goods WHERE categoryid=\".$func.\" and makerid=\".$maker.\" and price=\".$kakaku.\" "; ?>
<?php $result = mysqli_query($link,$sql) ?>
<?php $row = mysqli_fetch_assoc($result) ?>
<?php $sql = "SELECT count(*) FROM goods WHERE categoryid=\"$func\" and makerid=\"$maker\" and price=\"$kakaku\" "; ?>
<?php $result = mysqli_query($link,$sql) ?>
<?php $row2 = mysqli_fetch_assoc($result) ?>


<?php
$cnt = 0; //商品数
$cnt2 = 1; //2列
$htmltext;
if($cnt < 検索結果商品数){
	if($cnt < 2) {
		print "<h3>".$row[goods]."</h3>"; //DBから	?>
		<div class="box-img-left2">
<?php 	$img; //imgの出力 ?>
		<img src="images/250.gif" width="250" height="120" /></div>
		<div class="box2_text">型番<br />
<?php 	//DBから出力処理
		$cnt++; //出力商品数カウント
		$cnt2++;
	}
	$cnt2 = 1;
}
?>

<div class="box-img-left2">
$<img src="images/250.gif" width="250" height="120" /></div>
<div class="box2_text">型番<br />
￥価格</div>
<div class="box-btn2"><a href="#01">＞＞購入＞＞</a></div>
</div>


<br class="clear">

</div>
</div>
<!--二列BOXここまで-->

<div class="modoru"><a href="#top">ページ上に戻る</a></div>

</div>
<!--メインここまで-->

<!--[if !IE]>サイドメニューここから<![endif]-->
<div id="sub">

<div class="category">
<h3>アカウント</h3>
<div class="entry_body">
<div class="sub-btn"><a href="login.html">ログイン</a></div>
<div class="sub-btn"><a href="frst.html">はじめてのお客様</a></div>
</div>
<div class="sub_bottom"></div>
</div>

<div class="category">
<h3>お買い物かご</h3>
<div class="entry_body">
<div class="sub-btn"><a href="cart.html">カートの中を見る</a></div>
</div>
<div class="sub_bottom"></div>
</div>

<div class="category">
<h3>お支払い方法</h3>
<div class="entry_body">
<p>お支払いは、カード決済、銀行振込、代金引換からお選びいただけます。</p>
<p align="right"><a href="#">くわしくはこちら</a></p>
</div>
<div class="sub_bottom"></div>
</div>

<div class="category">
<h3>送料について</h3>
<div class="entry_body">
<p>発送は平中運輸から、<br />
  送料は全国一律500円になります。</p>
</div>
<div class="sub_bottom"></div>
</div>

</div>

<!--[if !IE]>サイドメニューここまで<![endif]-->

<div style="clear:both;"></div><!--デザインが崩れるので削除しない事-->

</div><!--"main2"-->

<div class="category">
<h3>Brand</h3>
<div class="entry_body">
<ul>
<li><a href="#4">Audio-technica</a></li>
<li><a href="#4">SONY</a></li>
<li><a href="#4">Panasonic</a></li>
<li><a href="#4">ELECOM</a></li>
<li><a href="#4">Pioneer</a></li>
</ul>
</div>
<div class="sub_bottom"></div>
</div>

<div class="category">
<h3>機能・特徴</h3>
<div class="entry_body">
<ul>
<li><a href="#4">インナーイヤー</a></li>
<li><a href="#4">カナル型</a></li>
<li><a href="#4">Bluetooth</a></li>
<li><a href="#4">スポーツ</a></li>
<li><a href="#4">ノイズキャンセル</a></li>
</ul>
</div>
<div class="sub_bottom"></div>
</div>

<div class="category">
<h3>coler</h3>
<div class="entry_body">
<ul>
<li><a href="#4">red</a></li>
<li><a href="#4">blue</a></li>
<li><a href="#4">green</a></li>
<li><a href="#4">black</a></li>
<li><a href="#4">white</a></li>
<li><a href="#4">other</a></li>
</ul>
</div>
<div class="sub_bottom"></div>
</div>

<div align="center"><img src="images/188.gif" width="188" height="100" />

</div>
<div class="soto">
<p>&lt;div class=&quot;category&quot;&gt;と<br />
  &lt;div class=&quot;entry_body&quot;&gt;の外にテキストを入れたい時には&lt;div class=&quot;soto&quot;&gt;で囲んでください</p>
</div>

</div><!--"container"-->

<!--フッターここから-->
<div id="footer">
<div id="header_left2">I ❤ Earphones</div>
</div>
<!--フッターここまで-->



</body>
</html>