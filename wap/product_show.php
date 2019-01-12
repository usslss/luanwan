<?php
include_once "../php/connect.php";
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
	$show_product_img_url=$row["product_wap_img_url"];
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
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
		<title><?php echo $show_product_title;?> - <?php echo $page_title;?></title>
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

		<div class="product-show">
            <h3><?php echo $show_product_title;?></h3>
			<div class="product-banner swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<a href=""><img src="<?php echo $show_product_img_url;?>"></a>
					</div>
				</div>
				
			</div>
			<script type="text/javascript">
				var swiper = new Swiper('.product-banner', {
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
			
			<div class="layout">
				<span class="c">
				<?php echo $show_product_all;?>
				</span>
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