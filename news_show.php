<?php
include_once "php/connect.php";
$page = "news";

if (isset($_POST["news_id"])) {
    $news_id = $_POST["news_id"];
}

if (isset($_GET["news_id"])) {
    $news_id = $_GET["news_id"];
}

//本条新闻内容
$sql_hot = "SELECT * FROM news WHERE news_id='{$news_id}'";
$result = mysqli_query($link, $sql_hot);

while ($row = mysqli_fetch_assoc($result)) {
    $show_news_class = $row["news_class"];
    $show_news_title = $row["news_title"];
    $show_news_click = $row["news_click"];
    $show_news_all = $row["news_all"];
    $show_news_addtime = substr($row["news_addtime"], 0, 20);
    //伪静态?
    $show_news_url = "news_show.php?news_id=" . $news_id;
}

//关键词 标题 description
$sql_key = "SELECT * FROM page WHERE page_class='{$page}_{$website}'";

$result = mysqli_query($link, $sql_key);

while ($row = mysqli_fetch_assoc($result)) {
    $page_title = $row["page_title"];
    $page_keywords = $row["page_keywords"];
    $page_description = $row["page_description"];
}
//点击数+1
$show_news_click = $show_news_click + 1;
$sql_click = "UPDATE news SET news_click={$show_news_click} WHERE news_id='{$news_id}'";

$result = mysqli_query($link, $sql_click);


?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title><?php echo $page_title;?> - <?php echo $show_news_title;?></title>
		<meta name="keywords" content="<?php echo $page_keywords;?>" />
		<meta name="description" content="<?php echo $page_description;?>">	
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
		<div class="content main news_content">
			<div class="nc_content">
				<p class="p_title"><?php echo $show_news_title;?></p>
				<div class="con">
				<?php echo $show_news_all;?>
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