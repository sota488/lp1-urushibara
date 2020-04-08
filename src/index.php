<?php
$path = realpath(dirname(__FILE__) . '') . "/";
include_once($path.'app_config.php');
include($path.'libs/meta.php');

?>
</head>

<body class="top">
<div id="fixbnr"><a href="#"><img src="./images/common/fixed_bnr.png" alt=""></a></div>


<!-- Header
======================================================================-->
<?php include($path.'libs/header.php'); ?>



<!-- Wrap
======================================================================-->
<div class="wrap">



	<!-- Main Content
	======================================================================-->
	<main>

		<section id="main">
			<div id="main__image" style="background-image: url(./images/top/main.jpg);">
				<div id="main__cap"><img src="./images/top/main_cap.png" alt=""></div>
				<div id="main__scroll">
					<a href="#">SCROLL</a>
				</div>
			</div>
		</section>

		<section id="sec01">
			<div class="inner">
				<div class="flex-row">
					<div>
						<a href="#">開催概要</a>
					</div>
					<div>
						<a href="#">募集要項</a>
					</div>
				</div>
			</div>
		</section>
		
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
