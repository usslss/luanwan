<?php
$news_class="关于我们";

//单页显示的条数
$news_shownum=4;

//判断跳转的页数

if (isset($_GET["page"])){
    $page_jump=$_GET["page"];
    $news_start=($page_jump-1)*($news_shownum)+1;
} else {
    $page_jump=1;
    $news_start=1;
}


//按照时间顺序搜索 新闻


$sql_new="SELECT * FROM news WHERE news_class='{$news_class}' AND news_website='{$website}' ORDER BY news_addtime DESC ";

$result=mysqli_query($link, $sql_new);
$i=0;



while ($row=mysqli_fetch_assoc($result)){
    
    $newsarr[$i]["news_id"] = $row["news_id"];
    $newsarr[$i]["news_title"] = $row["news_title"];
    $newsarr[$i]["news_summary"] = $row["news_summary"];
    $newsarr[$i]["news_img_url"] = $row["news_img_url"];
    $newsarr[$i]["news_addtime"] = substr($row["news_addtime"],2,20);
    $newsarr[$i]["news_url"] = "news_show.php?news_id=".$row["news_id"];
    
    $i++;
    
    
}
$news_sum=$i;

?>
									
<div class="tl_r">	

<?php


for ($i=($news_start-1);(($i<($news_start+$news_shownum-1))&($i<$news_sum));$i++){

    echo <<< EOT
					<dl>
						<a href="{$newsarr[$i]["news_url"]}" title="{$newsarr[$i]["news_title"]}">
							<dt><img src="{$newsarr[$i]["news_img_url"]}" alt="{$newsarr[$i]["news_title"]}" rel="nofollow" width="230" height="120" /></dt>
							<dd>
								<h3>{$newsarr[$i]["news_title"]}</h3>{$newsarr[$i]["news_summary"]} <span>{$newsarr[$i]["news_addtime"]}</span> </dd>
						</a>
					</dl>

EOT;

}
?>
						
					<div id="pages" class="text-c">
						<style type="text/css">
							.dede_pages {}
							
							.dede_pages ul {
								float: left;
								padding: 12px 0px 12px 16px;
							}
							
							.dede_pages ul li {
								float: left;
								font-family: Tahoma;
								line-height: 17px;
								margin-right: 6px;
								border: 1px solid #E9E9E9;
							}
							
							.dede_pages ul li a {
								float: left;
								padding: 2px 4px 2px;
								color: #555;
								display: block;
							}
							
							.dede_pages ul li a:hover {
								color: #690;
								text-decoration: none;
								padding: 2px 4px 2px;
							}
							
							.dede_pages ul li.thisclass,
							.dede_pages ul li.thisclass a,
							.pagebox ul li.thisclass a:hover {
								background-color: #F8F8F8;
								padding: 2px 4px 2px;
								font-weight: bold;
							}
							
							.dede_pages .pageinfo {
								line-height: 21px;
								padding: 12px 10px 12px 16px;
								color: #999;
							}
							
							.dede_pages .pageinfo strong {
								color: #555;
								font-weight: normal;
								margin: 0px 2px;
							}
						</style>
						<div class="dede_pages">
							<ul class="pagelist">
<?php 
				//分页 向前向后按钮

				$page_max=ceil($news_sum/$news_shownum);
				
				if($page_jump==1){
				    $page_jump_prev=1;
				    $img_url_prev="images/fy-no-left.png";
				    $href_url_prev="javascript:void(0)";
				    $style_prev="cursor:default;";
				    
				    $page_jump_next=$page_jump+1;
				    $img_url_next="images/fy-right.png";
				    $href_url_next="{$page}.php?page=".$page_jump_next;
				    $style_next="";
				} else if($page_jump>=$page_max){
				    $page_jump_prev=$page_jump_next=$page_jump-1;
				    $img_url_prev="images/fy-left.png";
				    $href_url_prev="{$page}.php?page=".$page_jump_prev;
				    $style_prev=";";
				    
				    $page_jump_next=$page_max;
				    $img_url_next="images/fy-no-right.png";
				    $href_url_next="javascript:void(0)";
				    $style_next="cursor:default";
				}else {
				    $page_jump_prev=$page_jump_next=$page_jump-1;
				    $img_url_prev="images/fy-left.png";
				    $href_url_prev="{$page}.php?page=".$page_jump_prev;
				    $style_prev="";
				    
				    $page_jump_next=$page_jump+1;
				    $img_url_next="images/fy-right.png";
				    $href_url_next="{$page}.php?page=".$page_jump_next;
				    $style_next="";
				}
				//只有一页的时候
				if($page_max==1){
				    $page_jump_prev=1;
				    $img_url_prev="images/fy-no-left.png";
				    $href_url_prev="javascript:void(0)";
				    $style_prev="cursor:default;";
				    
				    $page_jump_next=1;
				    $img_url_next="images/fy-no-right.png";
				    $href_url_next="javascript:void(0)";
				    $style_next="cursor:default;";
				}
				
				?>							
								<li><a href='<?php echo $page;?>.php'>首页</a></li>
								<li>
									<a href='<?php echo $href_url_prev;?>'><</a>
								</li>
								<li>
									<select name='sldd' style='height:25px;' onchange='location.href=this.options[this.selectedIndex].value;'>									
										
<?php

for ($i=1;$i<=$page_max;$i++){
    $page_selected="";
    if ($i==$page_jump){
        $page_selected="selected";
    }
echo <<< EOT
										<option value='{$page}.php?page={$i}' {$page_selected}>{$i}</option>

EOT;

}
?>
										
										
										
									</select>
								</li>								
								<li>
									<a href='<?php echo $href_url_next;?>'>></a>
								</li>
								<li>
									<a href='<?php echo $page;?>.php?page=<?php echo $page_max;?>'>末页</a>
								</li>

								<li><span class="pageinfo">共 <strong><?php echo $page_max;?></strong>页<strong><?php echo $news_sum;?></strong>条</span></li>

							</ul>
						</div>
						
					</div>
				</div>	