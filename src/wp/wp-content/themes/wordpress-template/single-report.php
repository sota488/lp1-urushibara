<?php
$path = realpath(dirname(__FILE__) . '/../../../../');
include $path . '/app_config.php';
include $path . '/libs/meta.php';
if (have_posts()):
  while (have_posts()): the_post();
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
    <div class="sub__detail-title">
      <div class="inner">
        <h2><span>REPORT</span></h2>
      </div>
    </div>
    <div class="sub__postcontent">
      <div class="inner inner--small">
        <h3><?php the_title(); ?></h3>
        <?php
				$terms = get_the_terms($post->ID, 'reportcat');
        ?>
        <div class="sub__postcontent__label">
        <?php
          for ($i=0; $i < count($terms); $i++) { 
            echo '<span>'.$terms[$i]->name.'</span>';
          }
        ?>
        </div>

        <div class="sub__postcontent__content">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
          <?php
            the_content();
          ?>
        </div>
        <div class="sub__postcontent__pager flex-row">
          <?php 
            $prev_post = get_previous_post();
            if( !empty( $prev_post ) ) {
              $url = get_permalink( $prev_post->ID );
              echo '<a href="'.$url.'">
              < BACK
              </a>';
            }else{
              echo '<a href="#"></a>';
            }
          ?>
          <?php
            $next_post = get_next_post();
            if( !empty( $next_post ) ) {
              $url = get_permalink( $next_post->ID );
              echo '<a href="'.$url.'">
              NEXT >
              </a>';
            }else{
              echo '<a href="#"></a>';
            }
          ?>

        </div>
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
</body>
</html>
<?php
endwhile;endif;
?>