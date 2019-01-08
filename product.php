<?php
include_once "php/connect.php";
$page = "product";
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

		<!-- product -->
		<?php include_once "php/banner.php";?>
		
		<div class="content product_content main">
			<div class="com_title"><img src="picture/img_title_product.png" alt="产品展示"></div>
			<?php include_once "php/product/product_nav.php";?>		
			<?php include_once "php/product/product_list.php";?>
		</div>
		<!-- product end -->

		<!-- footer -->
		<?php include_once "php/footer.php";?>
		<!-- footer end -->

		<div class="return_top">
			<a href="javascript:void(0)" title="回到顶部"></a>
		</div>

	</body>

</html>

<?php
mysqli_close($link);
?>