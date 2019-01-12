<?php
include_once "../php/connect.php";
$page = "about";
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
		
		<div class="ny-banner">
			<img src="images/banner_about.jpg">
		</div>
		
		<div class="about">
			<div class="layout">
				<img src="images/title2.png" class="title">
				<p>乱丸是卤炸行业的风向标，定位塑造优质、高端小资路线。不盲目扩规模，专业的队伍做专业的事，为市场喜好创新产品。秉承食品安全为首要原则，面对市场竞争，始终保持公正共赢的态度。乱丸系统内杜绝敷衍客户的现象发生，始终带着诚意
做每一样产品。尊重市场、顺应潮流，在不断改进和创新的道路上坚持不懈做好品牌。</p>
                <dl>
                	<dt>
                		<img src="images/ewm.png">
                	</dt>
                	<dd>
                		扫一扫，关注乱丸
                	</dd>
                </dl>
			</div>
		</div>

		
		
		
		
		<!-- footer -->
		<?php include_once "php/footer.php";?>
		<!-- footer end -->

	</body>

</html>

<?php
mysqli_close($link);
?>