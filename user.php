<?php
	include "connect.php";
	session_start();
	// ตรวจสอบว่ามีชือใน session หรือไม่ หากไม่มีให้ไปหน้า login อัตโนมัติ
	if (empty($_SESSION["username"]) ) {
		header("location: login.php");
	}
?>
<?php
	include "connect.php";
    $stmt = $pdo->prepare("SELECT * FROM user where username=? and id=?");
	$stmt->bindParam(1, $_GET["username"]);
	$stmt->bindParam(2, $_GET["id"]);
    $stmt->execute();
	$row = $stmt->fetch();
?>
<html>
<head>
	<title>Project - User</title>
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
			<div class="sidebar">
				<div>
					<h2>User profile</h2>
					<br>
					<div class="box">
						<img src="user/<?=$row["id"]?>.jpg" alt="Img" height="160" width="160">
					</div>
				</div>
				<div>
					<h2>Detail</h2>
					<p>
						<span><?=$row["firstname"]." ".$row["lastname"]?></span>
					</p>
				</div>
				<a class="more" href="user-list.php">กลับ</a>
			</div>
			<div class="main">
				<h1><?=$row["firstname"]." ".$row["lastname"]?></h1>
				<div class="section">
					<h2>History</h2>
					<ul>
						<li>
							<?php include 'feature/getStatus.php';?>  
						</li>
						<!-- <li>
							<p>
								<b>unknow</b> example example example example example example example example example
								example example example example example example example example example example example
							</p>
						</li> -->
					</ul>
				</div>
				<!-- <div class="section">
					<h2></h2>
					<ul>
						<li>
							<p>
								<b>unknow</b> example example example example example example example example example
								example example example example example example example example example example example
							</p>
						</li>
					</ul>
				</div> -->
				<div class="section last-child">

				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<?php include 'component/footer.php';?>
	</div>
</body>

</html>