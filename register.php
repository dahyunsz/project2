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
	<title>Project - register</title>
	<script>
		var httpRequest;
		function send() {
			httpRequest = new XMLHttpRequest();
			httpRequest.onreadystatechange = showResult;
			var username = document.getElementById("username").value;
			var url = "check-username.php?username=" + username;
			httpRequest.open("GET", url);
			httpRequest.send();
		}
		function showResult() {
			if (httpRequest.readyState == 4 && httpRequest.status == 200) {
				document.getElementById("result").innerHTML = httpRequest.responseText;
			}
		}
	</script>
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
					<h2>Contact Info</h2>
					<ul class="contact">
						<li>
							<p>
								<span class="home"></span>you can contract direct to admin <em>Maytee saechoa</em>
							</p>
						</li>
						<li>
							<p class="phone">
								Phone: (+20) 000 222 999
							</p>
						</li>
						<li>
							<p class="fax">
								Fax: (+20) 000 222 988
							</p>
						</li>
						<li>
							<p class="mail">
								Email: msaechoa@gmail.com
							</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="main">
				<h1>Resgister New User</h1>
				<form action="insert-register.php" method="post" class="message">
					<label>First Name</label>
					<input type="text" name="firstname" required>
					<label>Last Name</label>
					<input type="text" name="lastname">
					<label>Username</label>
					<input type="text" name="username" id="username" onkeyup="send()" required>
					<p id="result"></p>
					<label>Password</label>
					<input type="password" name="password" placeholder="" required>
					<label>Email Address</label>
					<input type="email" name="email">
					<label>Face picture</label>
					<input type="file" name="user_picture"><br><br>
					<input type="submit" name="submit">
				</form>
			</div>
		</div>
	</div>
	<div id="footer">
		<?php include 'component/footer.php';?>
	</div>
</body>

</html>