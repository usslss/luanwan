<?php
include_once "php/connect.php";
$page = "index";
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

		<!-- slider -->
		<?php include_once "php/index/slider.php";?>
		<!-- sliker end -->

		<!-- product class list -->
		<?php include_once "php/index/product_class_list.php";?>
		<!-- product class list end -->	

		<!-- index product list -->
		<?php include_once "php/index/index_product_list.php";?>
		<!-- index product list end -->	


		<!-- product list -->
		<?php include_once "php/index/product_list.php";?>
		<!-- product list end -->	

		<!-- news list -->
		<?php include_once "php/index/news_list.php";?>
		<!-- news list end -->

		<!-- footer -->
		<?php include_once "php/footer.php";?>
		<!-- footer end -->
		
		<div class="return_top">
			<a href="javascript:void(0)" title="回到顶部"></a>
		</div>

	</body>

</html>