<html>
<head>
	<title>Project - check-login</title>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.php" type="text/css">
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
            include "connect.php";
            session_start();
            $stmt = $pdo->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
            $stmt->bindParam(1, $_POST["username"]);
            $stmt->bindParam(2, $_POST["password"]);
            $stmt->execute();
            $row = $stmt->fetch();
        ?>
		<?php if(!empty($row)) : ?>
			<?php session_regenerate_id(); ?>
			<?php  $_SESSION["firstname"] = $row["firstname"]; ?>
			<?php  $_SESSION["lastname"] = $row["lastname"]; ?>
			<?php  $_SESSION["username"] = $row["username"]; ?>
			<h1>สวัสดี <?php echo $_SESSION["firstname"] ?> <?php echo $_SESSION["lastname"] ?></h1>
			<p>เข้าสู่ระบบสําเร็จ</p><br>
			<a class="subscribe" href='index.php'>เข้าสู่หน้าหลัก</a>
		<?php else : ?>
			<h1>login ไม่สำเร็จ</h1>
			<p> username หรือ password ไม่ถูกต้อง</p>
			<a class="subscribe" href='login.php'>เข้าสู่ระบบอีกครั้ง</a>
		<?php endif; ?>

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
	</div>
	<div id="footer">
		<?php include 'component/footer.php';?>
	</div>
</body>
</html>