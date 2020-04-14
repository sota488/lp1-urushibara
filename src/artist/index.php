<?php
$path = realpath(dirname(__FILE__) . '') . "/../";
include_once($path.'app_config.php');
include($path.'libs/meta.php');

?>
</head>

<body class="sub">
<div id="fixbnr"><a href="#"><img src="../images/common/fixed_bnr.png" alt=""></a></div>


<!-- Header
======================================================================-->
<?php include($path.'libs/header.php'); ?>



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
				<div><a href=""><img src="../images/top/artist01.png" alt="" /></a></div>
				<div><a href=""><img src="../images/top/artist01.png" alt="" /></a></div>
				<div><a href=""><img src="../images/top/artist01.png" alt="" /></a></div>
				<div><a href=""><img src="../images/top/artist01.png" alt="" /></a></div>
				<div><a href=""><img src="../images/top/artist01.png" alt="" /></a></div>
				<div><a href=""><img src="../images/top/artist01.png" alt="" /></a></div>
				<div><a href=""><img src="../images/top/artist01.png" alt="" /></a></div>
				<div><a href=""><img src="../images/top/artist01.png" alt="" /></a></div>
				<div><a href=""><img src="../images/top/artist01.png" alt="" /></a></div>
			</div>
      <div class="inner inner--small">
        <p>アーティスト一覧に誘導するコメントが入ります。アーティスト一覧に誘導するコメントが入ります。アーティスト一覧に誘導するコメントが入ります。アーティスト一覧に誘導するコメントが入ります。アーティスト一覧に誘導するコメントが入ります。アーティスト一覧に誘導するコメントが入ります。アーティスト一覧に誘導するコメントが入ります。アーティスト一覧に誘導するコメントが入ります。アーティスト一覧に誘導するコメントが入ります。アーティスト一覧に誘導するコメントが入ります。</p>
      </div>
    </div>

    <div class="sub__artist02">
      <h3>2020のアーティスト一覧</h3>
      <div class="inner inner--small flex-row">
        <a href="./detail.php">
          <figure>
            <div style="background-image:url(https://via.placeholder.com/805x500)"></div>
            <figcaption>
              <span>開催場所A</span>
              <em>アーティスト名がこちらにはいります。</em>
            </figcaption>
          </figure>
        </a>
        <a href="./detail.php">
          <figure>
            <div style="background-image:url(https://via.placeholder.com/805x500)"></div>
            <figcaption>
              <span>開催場所A</span>
              <em>アーティスト名がこちらにはいります。</em>
            </figcaption>
          </figure>
        </a>
        <a href="./detail.php">
          <figure>
            <div style="background-image:url(https://via.placeholder.com/805x500)"></div>
            <figcaption>
              <span>開催場所A</span>
              <em>アーティスト名がこちらにはいります。</em>
            </figcaption>
          </figure>
        </a>
        <a href="./detail.php">
          <figure>
            <div style="background-image:url(https://via.placeholder.com/805x500)"></div>
            <figcaption>
              <span>開催場所A</span>
              <em>アーティスト名がこちらにはいります。</em>
            </figcaption>
          </figure>
        </a>
        <a href="./detail.php">
          <figure>
            <div style="background-image:url(https://via.placeholder.com/805x500)"></div>
            <figcaption>
              <span>開催場所A</span>
              <em>アーティスト名がこちらにはいります。</em>
            </figcaption>
          </figure>
        </a>
        <a href="./detail.php">
          <figure>
            <div style="background-image:url(https://via.placeholder.com/805x500)"></div>
            <figcaption>
              <span>開催場所A</span>
              <em>アーティスト名がこちらにはいります。</em>
            </figcaption>
          </figure>
        </a>
        <a href="./detail.php">
          <figure>
            <div style="background-image:url(https://via.placeholder.com/805x500)"></div>
            <figcaption>
              <span>開催場所A</span>
              <em>アーティスト名がこちらにはいります。</em>
            </figcaption>
          </figure>
        </a>
        <a href="./detail.php">
          <figure>
            <div style="background-image:url(https://via.placeholder.com/805x500)"></div>
            <figcaption>
              <span>開催場所A</span>
              <em>アーティスト名がこちらにはいります。</em>
            </figcaption>
          </figure>
        </a>
        <a href="./detail.php">
          <figure>
            <div style="background-image:url(https://via.placeholder.com/805x500)"></div>
            <figcaption>
              <span>開催場所A</span>
              <em>アーティスト名がこちらにはいります。</em>
            </figcaption>
          </figure>
        </a>
        <a href="./detail.php">
          <figure>
            <div style="background-image:url(https://via.placeholder.com/805x500)"></div>
            <figcaption>
              <span>開催場所A</span>
              <em>アーティスト名がこちらにはいります。</em>
            </figcaption>
          </figure>
        </a>
      </div>
    </div>
	</main>

	<!-- Footer
	======================================================================-->
	<?php include($path.'libs/footer.php'); ?>



</div>



<!-- Scripts
======================================================================-->
<?php include($path.'libs/scripts.php'); ?>
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
