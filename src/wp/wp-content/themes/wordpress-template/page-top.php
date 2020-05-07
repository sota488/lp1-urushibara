<?php
/*
Template Name: トップページ
*/
?>

<?php
$path = realpath(dirname(__FILE__) . '/../../../../');
include $path . '/app_config.php';
include $path . '/libs/meta.php';
?>
</head>

<body class="top">
<div id="fixbnr"><a href="#"><img src="./images/common/fixed_bnr.png" alt=""></a></div>


<!-- Header
======================================================================-->
<?php include($path.'/libs/header.php'); ?>



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
						<a href="./pdf/gaf_boshu_2020.pdf" target="_blank">募集要項</a>
					</div>
				</div>
			</div>
		</section>


		<section id="sec02">
			<div class="inner">
				<h2 class="title">NEWS</h2>
				<?php
					// 新着ブログ設置
					$query_args = array(
						'post_type' => 'news',
						'post_per_pages' => 3
					);
					$query = new WP_Query( $query_args );
					if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
					$terms = get_the_terms($post->ID, 'newscat');
				?>
					<ul>
						<li><?php the_time('Y.m.d'); ?></li>
						<li><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></li>
					</ul>
				<?php
					endwhile;endif;
					wp_reset_query();
				?>
				<a href="./news">MORE</a>
			</div>
		</section>


		<section id="sec03">
			<div class="inner">
				<h2 class="title">ABOUT <a href="./about">MORE</a></h2>
				<p>「学園前アートフェスタ」は、近鉄学園前駅周辺に広がる展示エリアを巡る周遊型の現代アート展です。学園前地域の活性化を図り、その魅力を再発見し、これから先も発展していく「街育」の一環として2015年に始まりました。広報活動から会場設営、会期中のスタッフをすべて住民が担っている住民主体のアートプロジェクトです。公募展の選考は、2019年から審査委員と地域住民投票により入選者を決定しており、若い世代のアーティストの飛躍を応援しています。</p>
			</div>
		</section>
		

		<section id="sec04">
			<div class="inner">
				<h2 class="title">ARTIST <a href="./artist">MORE</a></h2>
			</div>
			<div class="infiniteslide">
				<div><a href="./artist"><img src="./images/top/artist01.png" alt="" /></a></div>
				<div><a href="./artist"><img src="./images/top/artist02.png" alt="" /></a></div>
				<div><a href="./artist"><img src="./images/top/artist03.png" alt="" /></a></div>
				<div><a href="./artist"><img src="./images/top/artist04.png" alt="" /></a></div>
				<div><a href="./artist"><img src="./images/top/artist05.png" alt="" /></a></div>
				<div><a href="./artist"><img src="./images/top/artist06.png" alt="" /></a></div>
				<div><a href="./artist"><img src="./images/top/artist07.png" alt="" /></a></div>
				<div><a href="./artist"><img src="./images/top/artist08.png" alt="" /></a></div>
				<div><a href="./artist"><img src="./images/top/artist09.png" alt="" /></a></div>
				<div><a href="./artist"><img src="./images/top/artist10.png" alt="" /></a></div>
				<div><a href="./artist"><img src="./images/top/artist11.png" alt="" /></a></div>
				<div><a href="./artist"><img src="./images/top/artist12.png" alt="" /></a></div>
				<div><a href="./artist"><img src="./images/top/artist13.png" alt="" /></a></div>
				<div><a href="./artist"><img src="./images/top/artist14.png" alt="" /></a></div>
				<div><a href="./artist"><img src="./images/top/artist15.png" alt="" /></a></div>
				<div><a href="./artist"><img src="./images/top/artist16.png" alt="" /></a></div>
				<div><a href="./artist"><img src="./images/top/artist17.png" alt="" /></a></div>
				<div><a href="./artist"><img src="./images/top/artist18.png" alt="" /></a></div>
				<div><a href="./artist"><img src="./images/top/artist19.png" alt="" /></a></div>
				<div><a href="./artist"><img src="./images/top/artist20.png" alt="" /></a></div>
			</div>
			<p>
				学園前アートフェスタでは関西を中心に全国から個性豊かな現代アーティストが参加します。<br>
				公募部門ではポートフォリオ審査だけでなく、事前展示会を設けて地域住民を含め多くの方からの投票によって選別されます。そのことにより作家を多くの<br class="pc">
				方に知ってもらう機会を作るのと同時に、住民もまた現代アートに触れ、作家との交流が生まれ、街の活性化へと導いています。<br>
				今季、招聘作家と公募作家からなる 20 名のアーティストたちを紹介します～
			</p>
		</section>


		<section id="sec05">
			<div class="inner">
				<h2 class="title">EVENT <a href="./event">MORE</a></h2>
				<p>現代アート展を軸に様々なイベントを企画・開催します。</p>
				<div class="flex-row">
					<?php
						// 新着ブログ設置
						$query_args = array(
							'post_type' => 'event',
							'post_per_pages' => 3
						);
						$query = new WP_Query( $query_args );
						if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
						$terms = get_the_terms($post->ID, 'eventcat');
					?>
						<a href="<?php echo get_the_permalink(); ?>">
							<figure>
								<div style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
								<figcaption>
									<div><span><?php echo $terms[0]->name ?></span><em><?php the_time('Y.m.d'); ?></em></div>
									<p><?php the_title(); ?></p>
								</figcaption>
							</figure>
						</a>

					<?php
						endwhile;endif;
						wp_reset_query();
					?>
				</div>
			</div>
		</section>


		<section id="sec06">
			<div class="inner">
				<div>
					<h3>REPORTS</h3>
					<p>
						「学園前アートフェスタ」は、アートディレクターとテーマが毎年変わります。<br>
						絵画、彫刻、写真、インスタレーションなど様々な表現手法による現代美術家が集まり、展示会場も由緒ある建物から、空き家、屋外と変化に富んでいます。
					</p>
					<a href="./report/">過去のアートフェスタの様子を見る</a>
				</div>
			</div>
		</section>
	</main>



	<!-- Footer
	======================================================================-->
	<?php include($path.'/libs/footer.php'); ?>



</div>



<!-- Scripts
======================================================================-->
<?php include($path.'/libs/scripts.php'); ?>
<script src="./js/infinity.min.js"></script>
<script>
$(function(){
	$('.infiniteslide').infiniteslide({
		'speed': 50,
		'direction': 'left', //choose  up/down/left/right
		'pauseonhover': false, //if true,stop onmouseover
		'responsive': false, //width/height recalculation on window resize. child element's width/height define %/vw/vh,this set true.
	});
});
</script>
</body>
</html>
