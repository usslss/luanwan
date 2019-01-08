<?php
include_once "php/connect.php";
$page = "about";
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

		<div class="content main about_content">
			<div class="com_title"><img src="picture/img_title_about.png" alt="关于乱丸"></div>
			<div class="ac_con">
				<div class="acc_left">
					乱丸是卤炸个行业的风向标，定位塑造优质、高端小资路线。不盲目扩规模，专业的队伍做专业的事，为市场喜好创新产品。秉承食品安全为首要原则，面对市场竞争，始终保持公正共赢的态度。乱丸系统内杜绝敷衍客户的现象发生，始终带着诚意做每一样产品。尊重市场、顺应潮流，在不断改进和创新的道路上坚持不懈做好品牌。 </div>
				<div class="acc_right"><img src="picture/20180408151817_29585.jpg" alt="" />
					<p>扫一扫&nbsp;&nbsp;关注乱丸</p>
				</div>
			</div>
		</div>

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