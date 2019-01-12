<?php
include_once "../php/connect.php";
$page = "join";
?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
		<?php include_once "../php/keywords.php";?>
		<link rel="stylesheet" href="css/swiper.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/phone.js"></script>
		<script type="text/javascript" src="js/swiper.min.js"></script>

	</head>

	<body>
		<!-- header -->
		<?php include_once "php/header.php";?>
		<!-- header end -->
		<div class="h120"></div>

		<!-- banner -->
		<?php include_once "php/banner.php";?>
		<!-- banner end -->
		
		<div class="join">
			<img src="images/title5.png" class="title">
			<img src="images/join.jpg">
		</div>

		<!-- footer -->
		<?php include_once "php/footer.php";?>
		<!-- footer end -->

	</body>

</html>

<?php
mysqli_close($link);
?>