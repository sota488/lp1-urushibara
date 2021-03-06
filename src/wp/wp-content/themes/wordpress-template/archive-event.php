<?php
$path = realpath(dirname(__FILE__) . '') . "/../../../../";
include_once($path.'app_config.php');
include($path.'/libs/meta.php');
$getterms = get_terms('eventcat', array('hide_empty' => false));
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
        <h2><span>EVENT</span></h2>
        <div class="sub__eventmain">
          <div class="flex-row">
            <div>
              <h3>学園前×芸術</h3>
              <p>
              アーティストと交流が生まれる子供を主な対象としたワークショップ、地域住民の作品展、児童・生徒による学園前ホールでの演奏会を開催します。また大和文華館での中高生による『野点』や中野美術館でのコンサートなど近隣施設と連携しながら来場者に気軽に文化芸術に触れていただき楽しんでいただけるように色々な企画を用意しています。大人、学生、子供たち、世代を超えて街全体で「学園前アートフェスタ」を盛り上げます。
              </p>
            </div>
            <div>
              <div style="background-image: url(../images/event/event.jpg);"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="sub__artist02">
      <h3>2020年のイベント開催情報</h3>
      <div class="category">
        <ul>
          <li><a href=".">ALL</a></li>
          <?php
            for ($i=0; $i < count($getterms); $i++) { 
              echo '<li><a href="'.APP_URL.'eventcat/'.$getterms[$i]->slug.'">'.$getterms[$i]->name.'</a></li>';
            }
          ?>
        </ul>
      </div>
      <div class="inner inner--small flex-row">
			<?php
				// 新着ブログ設置
				$query_args = array(
					'post_type' => 'event',
					'post_per_page' => 9
				);
				$query = new WP_Query( $query_args );
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
				$terms = get_the_terms($post->ID, 'eventcat');
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
