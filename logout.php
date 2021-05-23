<?php
	include "connect.php";
	session_start();
	// ตรวจสอบว่ามีชือใน session หรือไม่ หากไม่มีให้ไปหน้า login อัตโนมัติ
	if (empty($_SESSION["username"]) ) {
		header("location: login.php");
	}
?>
<html>
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.php" type="text/css">
	<title>Project - logout</title>
</head>
<body> 
	<div id="clearance">&nbsp;</div>
	<div id="header">
		<div class="clearfix">
			<div class="logo">
				<?php include 'component/logo.php';?>
			</div>
			<ul class="navigation">
				<?php include 'component/navbar.php';?>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="clearfix">
        <?php
			// ลบ session id ในคุกกี้เครี่องผู้ใช้
			$params = session_get_cookie_params();
			setcookie(
				session_name(), '', time() - 42000,
				$params["path"], $params["domain"],
				$params["secure"], $params["httponly"]
			);
			session_destroy(); // ทําลาย session
		?>
		<h1>ออกจากระบบแล้ว </h1><br>
		<p>หากต้องการเข้าสู่ระบบโปรดคลิก </p><br>
		<a class="more" href="login.php">เข้าสู่ระบบ</a>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
	</div>
	<div id="footer">
		<?php include 'component/footer.php';?>
	</div>
</body>
</html>