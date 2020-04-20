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
        <h2><span>CONTACT</span></h2>
        <p>コンタクトフォームに関する簡単な説明を書きます。コンタクトフォームに関する簡単な説明を書きます。コンタクトフォームに関する簡単な説明を書きます。コンタクトフォームに関する簡単な説明を書きます。コンタクトフォームに関する簡単な説明を書きます。</p>
      </div>
    </div>

    <div class="contact-body inner">
      <form action="./confirm.php" method="post">
        <table>
          <tr>
            <th>お名前 <sup>※</sup></th>
            <td><input type="text" name="name" class="s" required></td>
          </tr>
          <tr>
            <th>メールアドレス <sup>※</sup></th>
            <td><input type="text" name="email" required></td>
          </tr>
          <tr>
            <th>メールアドレス確認 <sup>※</sup></th>
            <td><input type="text" name="reemail" required></td>
          </tr>
          <tr>
            <th>件名</th>
            <td><input type="text" name="subject"></td>
          </tr>
          <tr>
            <th>内容</th>
            <td><textarea name="message" id=""></textarea></td>
          </tr>
        </table>
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
<script>
$(function() {
  $('form').submit(function() {
    if($('input[name="email"]').val() != $('input[name="reemail"]').val()) {
      alert('メールアドレスが間違っています');
      return false;
    }
  });
})
</script>
</body>
</html>
