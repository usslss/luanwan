<?php
include_once "php/connect.php";

$sql_link="SELECT * FROM link WHERE link_website='{$website}'";
$result=mysqli_query($link, $sql_link);

$i=1;
$line_show=15;
while ($row=mysqli_fetch_assoc($result)){
    
    $linkArr[$i]["link_name"] = $row["link_name"];
    $linkArr[$i]["link_url"] = $row["link_url"];
    $i++;
    
    
}
$link_sum=$i;

?>

<div class="footer">
			<div class="main">
				<a href="index.html" class="footer_logo" ><img src="picture/logo1.png" ></a>
				<div class="footer_menu">
					<ul class="fm_ul">
						<li>
							<a href="product-show.html">这里不写友情链接吗</a>|</li>
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
