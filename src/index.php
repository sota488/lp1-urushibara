<?php
$path = realpath(dirname(__FILE__) . '') . "/";
include_once($path.'app_config.php');
include($path.'libs/meta.php');

?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="description" content="artfesta">
<title>学園前アートフェスタ</title>
<link rel="stylesheet" media="all" href="../dist/css/style.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../dist/js/common.min.js"></script> 
</head>



</head>

<body class="top">
<nav>
	<div class="mainnav inner flex-row">
		<div class="logo">
		  <a href=""><img src="../dist/images/logo.jpg" alt=""></a>
		</div>
	<div class="panel">
		<ul class="flex-row">
			<li><a href="#header">NEWS</a></li>
			<li><a href="#sec01">ABOUT</a></li>
			<li><a href="#sec02">ARTIST</a></li>
			<li><a href="#sec03">EVENT</a></li>
			<li><a href="#sec04">REPORTS</a></li>
			<li><a href="#sec05">CONTACT</a></li>
		</ul>
	</div>
</nav>
<div class="sc-banner">
	<img src="../dist/images/sc-banner.jpg" alt="">
	<p class="en-map">AREA MAP</p>
	<p class="ja-map">エリアマップ</p>
</div>


<!-- Header
======================================================================-->
<?php include($path.'libs/header.php'); ?>
<header class="header">
	<div class="header-img">
	<img class="header-main" src="../dist/images/mainlogo.jpg" alt="メインイメージ">
	<img class="event-img" src="../dist/images/eventdeatail.png" alt="イベント日程">
	</div>
</header>



<!-- Wrap
======================================================================-->
<div class="wrap">



	<!-- Main Content
	======================================================================-->
	<main>
	<div class="space"></div>

	</main>



	<!-- Footer
	======================================================================-->
	<?php include($path.'libs/footer.php'); ?>



</div>



<!-- Scripts
======================================================================-->
<?php include($path.'libs/scripts.php'); ?>
</body>
</html>
