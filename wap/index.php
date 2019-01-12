<?php
include_once "../php/connect.php";
$page = "index";
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
		<div class="banner swiper-container">
			<div class="swiper-wrapper">
				<?php include_once "php/index/slider.php";?>
			</div>
			<div class="swiper-pagination"></div>
		</div>
		<script type="text/javascript">
			var swiper = new Swiper('.banner', {
				autoplay: {
					delay: 8000,
					disableOnInteraction: false,
				},
				pagination: {
					el: '.swiper-pagination',
					clickable: true,
				},
				effect: 'fade',
				fadeEffect: {
					crossFade: false,
				}

			});
		</script>

		<div class="index-pro">
			<img src="images/title.png" class="title">
			<div class="layout">
				<?php include_once "php/index/product_class_list.php";?>	
				<?php include_once "php/index/index_product_list.php";?>
			</div>
		</div>

		<!-- product list -->
		<?php include_once "php/index/product_list.php";?>
		<!-- product list end -->	

		<!-- news list -->
		<?php include_once "php/index/news_list.php";?>
		<!-- news list end -->
		
		<!-- footer -->
		<?php include_once "php/footer.php";?>
		<!-- footer end -->

	</body>

</html>

<?php
mysqli_close($link);
?>