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
        <h2><span>REPORT</span></h2>
      </div>
    </div>


    <div class="sub__artist02 third-column">
      <div class="inner inner--small flex-row">
			<?php
				// 新着ブログ設置
				$query_args = array(
					'post_type' => 'report',
					'post_per_page' => 9
				);
				$query = new WP_Query( $query_args );
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
				$terms = get_the_terms($post->ID, 'reportcat');
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
