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

		<div class="index_product">
			<div class="main">
				<a href="product.html" class="a_more">MORE</a>
				<ul class="ip_ul">

					<li class="li1">
						<a href="product-show.html"><img src="picture/thumb_180408043100333195641.jpg" alt="招牌炸龙虾"><span>招牌炸龙虾</span></a>
					</li>
					<li class="li1">
						<a href="product-show.html"><img src="picture/thumb_180408042946522891396.jpg" alt="黄金三角骨"><span>黄金三角骨</span></a>
					</li>
					<li class="li0 li_last">
						<a href="product.html" class="a"><img src="picture/img_product1.jpg" alt="卤味123系列"></a>
						<a href="product.html" class="a"><img src="picture/img_product2.jpg" alt="卤味系列"></a>
					</li>
					<li class="li2 ">
						<a href="product-show.html"><img src="picture/thumb_1804080429311083113717.jpg" alt="黄金鸡翅尖"><span>黄金鸡翅尖</span></a>
					</li>
					<li class="li2 ">
						<a href="product-show.html"><img src="picture/thumb_1804080429121951529687.jpg" alt="黄金炸鸡爪"><span>黄金炸鸡爪</span></a>
					</li>
					<li class="li2 ">
						<a href="product-show.html"><img src="picture/thumb_180408042542873406893.jpg" alt="秘卤鸡翅尖"><span>秘卤鸡翅尖</span></a>
					</li>
					<li class="li2 li_last">
						<a href="product-show.html"><img src="picture/thumb_1804080409131333928165.jpg" alt="香辣卤鸡爪"><span>香辣卤鸡爪</span></a>
					</li>
				</ul>
			</div>
		</div>

		<!-- product list -->
		<?php include_once "php/index/product_list.php";?>
		<!-- product list end -->	

		<div class="index_news">
			<div class="main p_title">
				<img src="picture/img_title2.png">
			</div>

			<div class="main row">
				<div class="clearfix">
					<a href="news.html" class="a_more">MORE</a>
				</div>

				<dl class="in_dl col-md-4">
					<dt><a href="news-show.html" title="怎么才能装修好卤炸小吃店铺"><img src="picture/thumb_20181224151738_59856.jpg" alt="怎么才能装修好卤炸小吃店铺"></a></dt>
					<dd>
						<a href="news-show.html" title="怎么才能装修好卤炸小吃店铺">怎么才能装修好卤炸小吃店铺</a>
					</dd>
					<dd class="dd1">一家店铺的装修代表着店铺的门面，可以给消费者带来好的印象，一家装修好的卤炸小吃店更是可以影响着我们生意的好坏，更是能影响一家店铺的转化率，今…...</dd>
				</dl>
				<dl class="in_dl col-md-4">
					<dt><a href="news-show.html" title="卤炸小吃市场解析"><img src="picture/thumb_20181221135653_42398.jpg" alt="卤炸小吃市场解析"></a></dt>
					<dd>
						<a href="news-show.html" title="卤炸小吃市场解析">卤炸小吃市场解析</a>
					</dd>
					<dd class="dd1">现在市场上的炸卤小吃越来越多，有人就问了味道怎么样？生意好吗？未来的发展趋势是什么样子的？等等一些问题，今天乱丸帮你一一解答。 …...
					</dd>
				</dl>
				<dl class="in_dl col-md-4">
					<dt><a href="news-show.html" title="卤味如何选择好的品牌"><img src="picture/thumb_20181217144418_50179.jpg" alt="卤味如何选择好的品牌"></a></dt>
					<dd>
						<a href="news-show.html" title="卤味如何选择好的品牌">卤味如何选择好的品牌</a>
					</dd>
					<dd class="dd1">卤味作为传统的美味食物一直不断的丰富着我们的生活，也是当前餐饮市场上发展前景比较好的特色小吃，作为创业者，选择卤味产品作为项目是最好的选择，…...</dd>
				</dl>
			</div>
		</div>

		<!-- footer -->
		<div class="footer">
			<div class="main">
				<a href="index.html" class="footer_logo" ><img src="picture/logo1.png" ></a>
				<div class="footer_menu">
					<ul class="fm_ul">
						<li>
							<a href="product-show.html">招牌炸龙虾</a>|</li>
						<li>
							<a href="product-show.html">黄金三角骨</a>|</li>
						<li>
							<a href="product-show.html">黄金鸡翅尖</a>|</li>
						<li>
							<a href="product-show.html">黄金炸鸡爪</a>
						</li>
						<li>
							<a href="product-show.html">秘卤鸡翅尖</a>|</li>
						<li>
							<a href="product-show.html">香辣卤鸡爪</a>|</li>
						<li>
							<a href="product-show.html">酥滑炸鱼块</a>|</li>
						<li>
							<a href="product-show.html">招牌炸鱼尾</a>
						</li>
						<li>
							<a href="product-show.html">黄金炸鸭舌</a>|</li>
						<li>
							<a href="product-show.html">乱丸卤鸡爪</a>|</li>
						<li>
							<a href="product-show.html">秘卤炸鸡爪</a>
						</li>
					</ul>
					<div class="fm_copyright">乱丸&nbsp;&nbsp;浙ICP备18045295号&nbsp;&nbsp;Copyright(C) 2018 all rights reserved&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					</div>
				</div>
			</div>
		</div>

		<!-- /footer -->
		<div class="return_top">
			<a href="javascript:void(0)" title="回到顶部"></a>
		</div>

	</body>

</html>