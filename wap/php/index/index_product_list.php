<?php
//产品类别
$sql_product = "SELECT * FROM img WHERE class='index_product_class' AND website='{$website}'LIMIT 2";
$result = mysqli_query($link, $sql_product);
$i = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $productClassArr[$i]["class_name"] = $row["name"];
    $productClassArr[$i]["class_en_name"] = $row["en_name"];
    $productClassArr[$i]["class_alt"] = $row["alt"];
    $productClassArr[$i]["class_img_url"] = $row["url"];
    //根据伪静态的定义重写转向url
    $productClassArr[$i]["class_url"] = "product.php?class=" . $row["name"];

    $i++;
}

//产品
$sql_product = "SELECT * FROM product WHERE product_website='{$website}'";
$result = mysqli_query($link, $sql_product);
$j = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $productArr[$j]["product_id"] = $row["product_id"];
    $productArr[$j]["product_name"] = $row["product_name"];
    $productArr[$j]["product_img_url"] = $row["product_wap_img_url"];
    //根据伪静态的定义重写转向url
    $productArr[$j]["product_url"] = "product_show.php?product_id=" . $row["product_id"];

    $j++;
}
?>
				<ul class="list2">
<?php

for ($i = 0; $i < 6; $i++) {
    //如果对标题的长度有限制
    //$product_title_short=mb_substr($productClassArr[$i]["product_title"],0,22,'utf-8');
    echo <<< EOT
					<li>
						<a href="{$productArr[$i]["product_url"]}">
							<img src="{$productArr[$i]["product_img_url"]}">
							<p>{$productArr[$i]["product_name"]}</p>
						</a>
					</li>
EOT;

}
?>
					<div class="clear"></div>
				</ul>