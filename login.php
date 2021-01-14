<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Login</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body style="background-image:url(images/photo_bg.jpg)" >
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo"></h1>
		</div>
		<div class="login-box animated fadeInUp" style="margin-top:80px">
			<div class="box-header">
				<h2>ผู้ดูแล</h2>
                		<form class="form" action="php/check_login.php" method="post">
			</div>
			<label for="username">ชื่อผู้ใช้งาน</label>
			<br/>
			<input type="text" id="username" name="username">
			<br/>
			<label for="password">รหัสผ่าน</label>
			<br/>
			<input type="password" id="password" name="password">
			<br/>
			<button style="width:120px;height:40px;font-size:15px" type="submit">เข้าสู่ระบบ</button>&nbsp;&nbsp;
             <button style="width:120px;height:40px;font-size:15px"  ><a style="color:white;" href="user/index.php?page=0".php" >ยกเลิก</a></button>
  
            </form>
		</div>
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>