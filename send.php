<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>무료상담신청</title>
</head>
<body>
 <?php
	$mailTo		=	"implant2800@naver.com";
	// 받는사람 메일 주소;
	$mailFrom	=	"admin@doctors2828.co.kr";	
	// 보내는사람 메일주소 
	$name = $_POST['name'] ;
	$mailSubject = "무료상담 신청입니다.";
	$mailContent = '보낸사람 : '.$_POST['name'].'<br>'
	.'전화번호 : '.$_POST['phone1'].'-'.$_POST['phone2'].'-'.$_POST['phone3'].'<br>';

	$mailHeader = "From: $mailFrom\r\n";
	$mailHeader .= "MIME-Version: 1.0\r\n";
	$mailHeader .= "Content-type: text/html; charset=euc-kr\r\n";

	$mailResult = mail ($mailTo, $mailSubject,     
	$mailContent, $mailHeader,'-f'.$mailFrom);
	
	if (true == $mailResult) { ?>
	<script>
	alert ("메일이 발송되었습니다.\n빠른 시일안에 답변드리겠습니다.");
	location.href='/';
	</script>
	<?php } else { ?>
	<script>
	alert ("메일 발송이 실패했습니다.\n빠른 시일안에 답변드리겠습니다.");
	location.href='/';
	</script>
	<?php } ?>
</body>
</html>