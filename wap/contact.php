<?php
include_once "../php/connect.php";
$page = "contact";
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
		
		<div class="contact">
			<img src="images/title6.png" class="title">
			<p ><span>加盟热线：400-0570-288</span></p>
			<span>地址：杭州市余杭区姚家路5号蓝都科创园10号</span>
			<img src="images/map.png" class="map">
		</div>
		
		<!-- footer -->
		<?php include_once "php/footer.php";?>
		<!-- footer end -->

	</body>

</html>

<?php
mysqli_close($link);
?>