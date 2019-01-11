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
//底部产品展示
$product_show_max = 12; //最多显示产品数
$sql_class = "SELECT * FROM product WHERE product_website='{$website}' LIMIT {$product_show_max}";
$result = mysqli_query($link, $sql_class);
$i = 0;

while ($row = mysqli_fetch_assoc($result)) {
	$footerProuctArr[$i]["product_id"] = $row["product_id"];
	$footerProuctArr[$i]["product_name"] = $row["product_name"];
	//伪静态?
	$footerProuctArr[$i]["product_url"] = "product_show.php?product_id=".$row["product_id"];
    $i++;
}
if ($i<$product_show_max){
$product_show_max=$i;
}

?>

<div class="footer">
			<div class="main">
				<a href="index.php" class="footer_logo" ><img src="picture/logo1.png" ></a>
				<div class="footer_menu">
					<ul class="fm_ul">
<?php

for ($i = 0; $i < $product_show_max; $i++) {
	if((($i+1)%4)==0){
		echo <<< EOT
		<li><a href="{$footerProuctArr[$i]["product_url"]}">{$footerProuctArr[$i]["product_name"]}</a></li>
EOT;
	}else{	
		echo <<< EOT
						<li><a href="{$footerProuctArr[$i]["product_url"]}">{$footerProuctArr[$i]["product_name"]}</a>|</li>
EOT;

	}



}
?>
					</ul>
					<div class="fm_copyright">Copyright © 2019 杭州奇思妙想品牌管理有限公司&nbsp;浙ICP备18045295号

					</div>
				</div>
			</div>
		</div>
