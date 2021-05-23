<?php
	include "connect.php";
	session_start();
	// ตรวจสอบว่ามีชื่อใน session หรือไม่ หากไม่มีให้ไปหน้า login อัตโนมัติ
	if (empty($_SESSION["username"]) ) {
		header("location: login.php");
	}
?>
<html>
<head>
	<title>Project - index</title>
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
		<div class="adbox">
			<div class="clearfix">
				<img src="images/mainpic.jpg" alt="Img" height="382" width="594">
				<div class="detail">
					<h1>WELCOME</h1>
					<p>
						machine learning project<br>with Raspberrypi
					</p>
				</div>
			</div>
		</div>
		<div class="highlight">
			<div class="clearfix">
				<div class="testimonial">
					<h2>Raspberrypi detail.</h2>
					<p>
						Example.<br>Example.<br>Example.<br>Example.
					</p>
					<span>-maytee saechoa-</span>
				</div>
				<h1>project scope. </h1>
				<p>
					this project have scope ..... >>
				</p>
			</div>
		</div>
		<div class="featured">
			<h2>Origin and importance.</h2>
			<ul class="clearfix">
				<li>
					<div class="frame1">
						<div class="box">
							<img src="images/camerapic.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>Our Camera</b> This is just a place holder.
					</p>
					<a href="" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="images/doorpicture.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>Our door</b> This is just a place holder.
					</p>
					<a href="" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="images/rasppiboardpic.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>Our board</b> This is just a place holder.
					</p>
					<a href="" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="images/databasepic.jpg" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>Our database</b> This is just a place holder.
					</p>
					<a href="" class="more">Read More</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="footer">
		<?php include 'component/footer.php';?>
	</div>

</body>

</html>