<?php

// 按时间顺序显示的条数
$news_shownum = 3;

//统计一下新闻条数
$sql_num = "SELECT count(*) FROM news WHERE news_website='{$website}'";
$news_sum = mysqli_fetch_array(mysqli_query($link, $sql_num));

//如果想显示的比实际的多,则只显示实际条数
if ($news_sum[0] < $news_shownum) {
    $news_shownum = $news_sum[0];
}

$sql_news = "SELECT * FROM news WHERE news_website='{$website}' ORDER BY news_addtime DESC LIMIT {$news_shownum}";
$result = mysqli_query($link, $sql_news);
$i = 0;

while (($row = mysqli_fetch_assoc($result)) & ($i < $news_shownum)) {
    $newsarr[$i]["news_id"] = $row["news_id"];
    $newsarr[$i]["news_title"] = $row["news_title"];
    $newsarr[$i]["news_summary"] = $row["news_summary"];
    $newsarr[$i]["news_img_url"] = $row["news_wap_img_url"];
    $newsarr[$i]["news_addtime"] = substr($row["news_addtime"], 5, 5);
    //根据伪静态的定义重写转向url
    $newsarr[$i]["news_url"] = "news_show.php?news_id=" . $row["news_id"];

    $i++;
}

?>
		<div class="index-news">
			<img src="images/title1.png" class="title">
			<ul class="layout">
<?php
for ($i = 0; $i < $news_shownum; $i++) {
    //如果对标题的长度有限制
    //$news_title_short=mb_substr($newsarr[$i]["news_title"],0,22,'utf-8');
	echo <<< EOT
				<li>
					<div class="img">
						<a href="{$newsarr[$i]["news_url"]}"><img src="{$newsarr[$i]["news_img_url"]}"></a>
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
				<div class="clear"></div>
			</ul>
			<a href="news.php" class="more">查看更多</a>
		</div>