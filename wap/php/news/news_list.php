<?php

//单页显示的条数
$news_shownum = 4;
$page_shownum = $news_shownum;
//判断跳转的页数

if (isset($_GET["page"])) {
    $page_jump = $_GET["page"];
    $news_start = ($page_jump - 1) * ($news_shownum) + 1;
} else {
    $page_jump = 1;
    $news_start = 1;
}


//按照时间顺序搜索 新闻

$sql_new = "SELECT * FROM news WHERE news_website='{$website}' ORDER BY news_addtime DESC ";

$result = mysqli_query($link, $sql_new);
$i = 0;

while ($row = mysqli_fetch_assoc($result)) {

    $newsarr[$i]["news_id"] = $row["news_id"];
    $newsarr[$i]["news_title"] = $row["news_title"];
    $newsarr[$i]["news_summary"] = $row["news_summary"];
    $newsarr[$i]["news_img_url"] = $row["news_wap_img_url"];
    $newsarr[$i]["news_url"] = "news_show.php?news_id=" . $row["news_id"];

    $i++;

}
$news_sum = $i;

?>
				<ul>
<?php

for ($i = ($news_start - 1); (($i < ($news_start + $news_shownum - 1)) & ($i < $news_sum)); $i++) {

    echo <<< EOT
					<li>
						<div class="img">
							<a href="{$newsarr[$i]["news_url"]}">
								<img src="{$newsarr[$i]["news_img_url"]}">
							</a>
						</div>
						<div class="word">
							<a href="{$newsarr[$i]["news_url"]}">
								<h3>{$newsarr[$i]["news_title"]}</h3>
								<p>{$newsarr[$i]["news_summary"]}</p>
							</a>
						</div>
					</li>

EOT;

}
?>
				</ul>

				<div class="fy">
					<a class="prev" href="<?php echo "news.php?page=1"; ?>">首页</a>
<?php
//分页 向前向后按钮
$page_max = ceil($news_sum / $page_shownum);

for ($i = 1; $i <= $page_max; $i++) {

	if ($i == $page_jump) {
		echo '<a href="javascript:void(0)" class="active">'.$i.'</a>';
	} else {
		echo <<< EOT
					<a class="pages" href="news.php?page=$i">$i</a>		
EOT;
	}
}
?>
					<a href="<?php echo "news.php?page=" . $page_max; ?>" class="next">尾页</a>
				</div>			