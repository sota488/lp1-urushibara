<?php
$path = realpath(dirname(__FILE__) . '/../../../../');
include $path . '/app_config.php';
include $path . '/libs/meta.php';
?>
</head>

<body class="sub">
<div id="fixbnr"><a href="#"><img src="../images/common/fixed_bnr.png" alt=""></a></div>


<!-- Header
======================================================================-->
<?php include($path.'/libs/header.php'); ?>



<!-- Wrap
======================================================================-->
<div class="wrap">



	<!-- Main Content
	======================================================================-->
	<main>
    <div class="sub__artist01">
      <div class="inner">
        <h2><span>ARTIST</span></h2>
      </div>

      <div class="infiniteslide">
				<div><img src="../images/top/artist01.png" alt="" /></div>
				<div><img src="../images/top/artist02.png" alt="" /></div>
				<div><img src="../images/top/artist03.png" alt="" /></div>
				<div><img src="../images/top/artist04.png" alt="" /></div>
				<div><img src="../images/top/artist05.png" alt="" /></div>
				<div><img src="../images/top/artist06.png" alt="" /></div>
				<div><img src="../images/top/artist07.png" alt="" /></div>
				<div><img src="../images/top/artist08.png" alt="" /></div>
				<div><img src="../images/top/artist09.png" alt="" /></div>
				<div><img src="../images/top/artist10.png" alt="" /></div>
				<div><img src="../images/top/artist11.png" alt="" /></div>
				<div><img src="../images/top/artist12.png" alt="" /></div>
				<div><img src="../images/top/artist13.png" alt="" /></div>
				<div><img src="../images/top/artist14.png" alt="" /></div>
				<div><img src="../images/top/artist15.png" alt="" /></div>
				<div><img src="../images/top/artist16.png" alt="" /></div>
				<div><img src="../images/top/artist17.png" alt="" /></div>
				<div><img src="../images/top/artist18.png" alt="" /></div>
				<div><img src="../images/top/artist19.png" alt="" /></div>
				<div><img src="../images/top/artist20.png" alt="" /></div>
			</div>
      <div class="inner inner--small">
        <p>学園前アートフェスタでは関西を中心に全国から個性豊かな現代アーティストが参加します。<br>
公募部門ではポートフォリオ審査だけでなく、事前展示会を設けて地域住民を含め多くの方からの投票によって選別されます。そのことにより作家を多くの<br class="pc">
方に知ってもらう機会を作るのと同時に、住民もまた現代アートに触れ、作家との交流が生まれ、街の活性化へと導いています。<br>
今季、招聘作家と公募作家からなる 20 名のアーティストたちを紹介します～</p>
      </div>
    </div>

    <div class="sub__artist02">
      <h3>2020のアーティスト一覧</h3>
      <div class="inner inner--small flex-row">
			<?php
				// 新着ブログ設置
				$query_args = array(
					'post_type' => 'artist',
					'post_per_page' => 9
				);
				$query = new WP_Query( $query_args );
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
				$terms = get_the_terms($post->ID, 'artistcat');
			?>
        <a href="<?php echo get_the_permalink(); ?>">
          <figure>
            <div style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
            <figcaption>
              <span><?php echo $terms[0]->name; ?></span>
              <em><?php the_title(); ?></em>
            </figcaption>
          </figure>
        </a>
			<?php
				endwhile;endif;
			?>
      </div>
    </div>
	</main>

	<!-- Footer
	======================================================================-->
	<?php include($path.'/libs/footer.php'); ?>



</div>



<!-- Scripts
======================================================================-->
<?php include($path.'/libs/scripts.php'); ?>
<script src="../js/infinity.min.js"></script>
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
