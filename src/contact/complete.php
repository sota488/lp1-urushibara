<?php

/**
 * 日本語対策
 */
mb_language('japanese');
mb_internal_encoding('UTF-8');

function data_htmlspecialchars($data) {
	if (is_array($data)) {
			return array_map('data_htmlspecialchars', $data);
	} else {
			return htmlspecialchars($data, ENT_QUOTES);
	}
}


$path = realpath(dirname(__FILE__) . '') . "/../";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// PHPMailerを配置するパスを自身の環境に合わせて修正
require $path . '/libs/PHPMailer/src/Exception.php';
require $path . '/libs/PHPMailer/src/PHPMailer.php';
require $path . '/libs/PHPMailer/src/SMTP.php';

$datas = $_POST;
$mesageBody = 'ーーーーーー□■□　応募内容　□■□ーーーーーー
お名前：'.$datas['name'].' 様
メールアドレス：'.$datas['email'].'
件名：'.$datas['subject'].'
内容：'
.$datas['message'].'
ーーーーーーーーーーーーーーーーーーーーーーーーーーーー';


$mail = new PHPMailer(true);
$mail_admin = new PHPMailer(true);

try {

	# 管理者へ通知メール

	// メールに使用する文字コード定義
	$mail_admin->CharSet = 'UTF-8';

	$mail_admin->setFrom('info@gakuenmae-af.com', '学園アートフェスタ');
	$mail_admin->addAddress('amanojack.design@gmail.com');
	// $mail_admin->addAddress('amanojack.design@gmail.com');

	// 件名文字化け対策 mb_encode_mimeheader
	$mail_admin->Subject = mb_encode_mimeheader('ウェブサイトよりお問い合わせがありました。');
	$mail_admin->Body    = '
ウェブサイトより下記のお問い合わせがありました。
担当者は連絡をお願いいたします。

'.$mesageBody.'
';

	$mail_admin->send();

	# お客様へメール送信
	// メールに使用する文字コード定義
	$mail->CharSet = 'UTF-8';
	$mail->setFrom('info@gakuenmae-af.com', '学園アートフェスタ');
	$mail->addAddress($datas['email'], $datas['name'].'様');

	$mail->Subject = mb_encode_mimeheader('【学園アートフェスタ】ご応募いただきありがとうございます');
	$mail->Body    = '
この度はお問い合わせいただきまして、誠にありがとうございました。

以下の内容でお問い合わせを受付いたしました。


改めて、担当者よりご連絡いたしますので、今しばらくお待ちくださいませ。  
'.$mesageBody.'

ご不明な点、追加のご質問等がございましたら、
下記までご遠慮なくお問い合わせください。
今後ともどうぞよろしくお願い致します。


';

	$mail->send();

	unset($_SESSION['input_datas']);
	unset($_SESSION['csrfToken']);

} catch (Exception $e) {
		echo 'システム管理者へ、以下のメッセージを連絡してください。<br>Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		exit;
}


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
        <p>
          この度はお問い合わせいただきまして、誠にありがとうございました。<br>
  <br>
          以下の内容でお問い合わせを受付いたしました。<br>
  <br>
          内容をもとに、書類選考させていただきます。<br>
          選考結果は改めて、担当者よりご連絡いたしますので、今しばらくお待ちくださいませ。
          <a href="<?php echo APP_URL; ?>" class="commonbtn"><span>トップへ戻る</span></a>
        </p>
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

</body>
</html>
