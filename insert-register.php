<html>
<head>
    <meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.php" type="text/css">
	<title>Project - insert-database</title>
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
			$con = mysqli_connect('localhost','root','');
			mysqli_select_db($con, 'project');
            $stmt = $pdo->prepare("INSERT INTO user VALUES ('',?, ?, ?, ?, ?, '')");
            $stmt->bindParam(1, $_POST["username"]);
            $stmt->bindParam(2, $_POST["password"]);
            $stmt->bindParam(3, $_POST["firstname"]);
            $stmt->bindParam(4, $_POST["lastname"]);
            $stmt->bindParam(5, $_POST["email"]);
            //$stmt->bindParam(6, $_POST["user_picture"]);
            $stmt->execute();
			if(isset($_POST['submit'])){
				$result = mysqli_query($con, "SELECT MAX(id) FROM user");
				$row = mysqli_fetch_array($result);
				$user_filename = $row[0];
				move_uploaded_file($_FILES['user_picture']['tmp_name'], "user/".$user_filename.".jpg");

			}
            echo "<h1>" . $_POST["firstname"] . " " . $_POST["lastname"] . "</h1>";
        ?>
        <p> ลงทำเบียนสำเร็จแล้ว </p><br>
        <a class="subscribe" href="index.php">กลับสู่หน้าหลัก</a>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
	</div>
	<div id="footer">
		<?php include 'component/footer.php';?>
	</div>
	<script>
		window.document.onload = function(){ 
			console.log($_POST["user_picture"]); 
		}
	</script>
</body>
</html>