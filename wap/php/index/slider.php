<?php
$img_class = "index_slider";

//统计一下本类别图片条数
$sql_num = "SELECT count(*) FROM img WHERE class='{$img_class}' AND website='{$website}'";
$img_sum = mysqli_fetch_array(mysqli_query($link, $sql_num));

$sql_img = "SELECT * FROM img WHERE class='{$img_class}' AND website='{$website}'";
$result = mysqli_query($link, $sql_img);
$i = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $imgArr[$i]["img_url"] = $row["wap_url"];
    //根据伪静态的定义重写转向url
    //$imgArr[$i]["img_href"] = "news_show.php?news_id=".$row["news_id"];
    $i++;
}

?>

<?php
//echo $imgArr[0]["img_url"];
for ($j = 0; $j < $img_sum[0]; $j++) {
    echo <<< EOT
                <div class="swiper-slide">
					<a href=""><img src="{$imgArr[$j]["img_url"]}"></a>
                </div>
                
EOT;

}
?>
