<?php
include_once "php/connect.php";
$page = "news";
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

		<!-- news -->
		<?php include_once "php/banner.php";?>
		
		<div class="content main news_content">
			<div class="com_title"><img src="picture/img_title_news.png" alt="新闻资讯"></div>
			<?php include_once "php/news/news_list.php";?>

		</div>

		<!-- footer -->
		<?php include_once "php/footer.php";?>
		<!-- footer end -->

		<div class="return_top">
			<a href="javascript:void(0)" title="回到顶部"></a>
		</div>

	</body>

</html>