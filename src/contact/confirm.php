<?php
$path = realpath(dirname(__FILE__) . '') . "/../";
include_once($path.'app_config.php');
include($path.'libs/meta.php');
$datas = $_POST;
foreach ($datas as $key => $val) {
  $datas[$key] = htmlspecialchars($val);
}
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
        <h2><span>CONTACT</span></h2>
        <p>コンタクトフォームに関する簡単な説明を書きます。コンタクトフォームに関する簡単な説明を書きます。コンタクトフォームに関する簡単な説明を書きます。コンタクトフォームに関する簡単な説明を書きます。コンタクトフォームに関する簡単な説明を書きます。</p>
      </div>
    </div>

    <div class="contact-body inner">
      <form action="./complete.php" method="post">
        <table>
          <tr>
            <th>お名前</th>
            <td><p><?php echo $datas['name']; ?></p></td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td><p><?php echo $datas['name']; ?></p></td>
          </tr>
          <tr>
            <th>件名</th>
            <td><p><?php echo $datas['subject']; ?></p></td>
          </tr>
          <tr>
            <th>内容</th>
            <td><p><?php echo $datas['message']; ?></p></td>
          </tr>
        </table>
        <?php
          foreach ($datas as $key => $val) {
            echo '<input type="hidden" name="'.$key.'" value="'.$val.'">';
          }
        ?>
        <button><span>確認する</span></button>
      </form>

    </div>
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
