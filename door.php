<html>
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.php" type="text/css">
    <title>Project - door</title>
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
					<h2>DOOR</h2>
					<br>
					<div class="box">
						<img src="images/doorpicture.jpg" alt="Img" height="250" width="250">
					</div>
				</div>
				<div>
					<h2>Detail</h2>
					<p>
						<!-- example example example example example example example example example example example example<br>  -->
						<span>- computer science door -</span>
					</p>
				</div>
			</div>
			<div class="main">
				<h1>ประวัติการ log in เข้าใช้ประตู</h1>
				<div class="section">
					<h2>History</h2>
					<ul>
						<li id=doorList>
<?php //-------------------------------------------------------pagging-------------------------------------------------------- ?>
						<?php
						// connect to database
						$con = mysqli_connect('localhost','root','');
						mysqli_select_db($con, 'project');

						// define how many results you want per page
						$results_per_page = 5; 

						// find out the number of results stored in database
						$sql='SELECT * FROM door';
						$result = mysqli_query($con, $sql);
						$number_of_results = mysqli_num_rows($result);

						// determine number of total pages available
						$number_of_pages = ceil($number_of_results/$results_per_page);

						// determine which page number visitor is currently on
						if (!isset($_GET['page'])) {
						$page = 1;
						} else {
						$page = $_GET['page'];
						}

						// determine the sql LIMIT starting number for the results on the displaying page
						$this_page_first_result = ($page-1)*$results_per_page;

						// retrieve selected results from database and display them on page
						$sql='SELECT * FROM door LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
						$result = mysqli_query($con, $sql);

						while($row = mysqli_fetch_array($result)) {
							echo '
							<p>
								<img src="door/'.$row["id"].'.jpg" alt="Img" height="160" width="160">
								<span style="color:blue;"> name : </span>'.$row["firstname"].' <br>
								<span style="color:blue;"> date : </span>'.$row["day"].'-'.$row["month"].'-'.$row["year"].'
								<span style="color:blue;"> time : </span>'.$row["hour"].':'.$row["minute"].':'.$row["second"].' <br>
								<span style="color:blue;"> status : </span> <span style="color:green;">'.$row["status"].'</span>
							</p>
							';
						}
						// display the links to the pages
						for ($page=1;$page<=$number_of_pages;$page++) {
							echo '<a class=pagging href="door.php?page=' . $page . '">' . $page . '</a> ';
						}

						?>

<?php //-------------------------------------------------------------------------------------------------------------------------------------- ?>
	
						</li>
					</ul>
				</div>
			
			</div>
		</div>
	</div>
	<div id="footer">
		<?php include 'component/footer.php';?>
	</div>
</body>
</html>