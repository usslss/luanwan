<?php
include_once "php/connect.php";
$page = "join";
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<?php include_once "php/keywords.php";?>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.slides.min.js"></script>
		<script type="text/javascript" src="js/base.js"></script>
	</head>

	<body>
		<!-- header -->
		<?php include_once "php/header.php";?>
		<!-- header end -->

		<!-- banner -->
		<?php include_once "php/banner.php";?>
		<!-- banner end -->
		<div class="content main join_content">
			<div class="com_title"><img src="picture/img_title_join.png" alt="招商加盟"></div>
			<div class="jc_con">
				<img src="picture/20180408151909_59548.jpg" alt="" /> </div>
		</div>

		<!-- footer -->
		<?php include_once "php/footer.php";?>
		<!-- footer end -->

		<!-- /footer -->
		<div class="return_top">
			<a href="javascript:void(0)" title="回到顶部"></a>
		</div>

	</body>

</html>

<?php
mysqli_close($link);
?>	