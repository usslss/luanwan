<?php
include_once "php/connect.php";
$page="product";

if (isset($_POST["product_id"])){
    $product_id=$_POST["product_id"];
}

if (isset($_GET["product_id"])){
    $product_id=$_GET["product_id"];
}

//本条产品内容
$sql_hot="SELECT * FROM product WHERE product_id='{$product_id}'";
$result=mysqli_query($link, $sql_hot);

while ($row=mysqli_fetch_assoc($result)){
    $show_product_class=$row["product_class"];
	$show_product_title=$row["product_name"];
	$show_product_img_url=$row["product_img_url"];
    $show_product_all=$row["product_all"];
    $show_product_addtime=substr($row["product_addtime"],0,20);
	//伪静态?
	$show_product_url="product_show.php?product_id=".$product_id;
}


//关键词 标题 description
$sql_key="SELECT * FROM page WHERE page_class='{$page}_{$website}'";

$result=mysqli_query($link, $sql_key);

while ($row=mysqli_fetch_assoc($result)){
    $page_title=$row["page_title"];
    $page_keywords=$row["page_keywords"];
    $page_description=$row["page_description"];
}


?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title><?php echo $show_product_title;?> - <?php echo $page_title;?></title>
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

		<div class="content product_content main">
			<div class="pc_left"><img src="<?php echo $show_product_img_url;?>"></div>
			<div class="pc_right">
				<div class="pc_more">
					<p class="p_title"><?php echo $show_product_title;?></p>
					<p class="p_remark"><?php echo $show_product_all;?></p>
				</div>
				<div class="con">
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