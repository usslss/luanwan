<?php
include_once "../php/connect.php";
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

//上一条新闻
$sql_prev="SELECT * FROM news WHERE news_id<{$news_id} AND news_website='{$website}' ORDER BY news_id DESC LIMIT 1";
$result=mysqli_query($link, $sql_prev);
while ($row=mysqli_fetch_assoc($result)){
    $prev_news_id=$row["news_id"];
    //$prev_news_url="news_show_".$row["news_id"].".html";
    $prev_news_url="news_show.php?news_id=".$row["news_id"];
    $prev_news_title='< '.mb_substr($row["news_title"],0,10,"utf-8");
}
if ((isset($prev_news_id)==false)){
    $prev_news_id="无内容";
    $prev_news_url="#";
    $prev_news_title="没有了";
}


//下一条新闻
$sql_next="SELECT * FROM news WHERE news_id>{$news_id} AND news_website='{$website}' ORDER BY news_id ASC LIMIT 1";
$result=mysqli_query($link, $sql_next);
while ($row=mysqli_fetch_assoc($result)){
    $next_news_id=$row["news_id"];
    //$next_news_url="news_show_".$row["news_id"].".html";
    $next_news_url="news_show.php?news_id=".$row["news_id"];
    $next_news_title=mb_substr($row["news_title"],0,8,"utf-8").' >';
}

if ((isset($next_news_id)==false)){
    $next_news_id="无内容";
    $next_news_url="#";
    $next_news_title="没有了";
}

?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
		<title><?php echo $show_news_title;?> - <?php echo $page_title;?></title>
		<meta name="keywords" content="<?php echo $page_keywords;?>" />
		<meta name="description" content="<?php echo $page_description;?>">
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
		
		<div class="news-show">
			<div class="layout">
				<img src="images/title1.png" class="title">
				<h3><?php echo $show_news_title;?></h3>
				<?php echo $show_news_all;?>
            </div>
            <div class="nextc">
            	<a href="<?php echo $prev_news_url;?>"><?php echo $prev_news_title;?></a>
            	<a href="<?php echo $next_news_url;?>"><?php echo $next_news_title;?></a>
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