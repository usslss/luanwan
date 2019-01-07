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

		<div class="warp t09">
			<div class="main t940">
				<dl>
					<dt>关于我们</dt>
					<dd>
						<a href="about1.html" rel="nofollow">公司简介</a>
					</dd>
					<dd>
						<a href="about2.html" rel="nofollow">企业文化</a>
					</dd>
					<dd>
						<a href="about3.html" rel="nofollow">经营理念</a>
					</dd>
					<dd>
						<a href="about4.html" rel="nofollow">营销网络</a>
					</dd>
				</dl>
				<dl>
					<dt>产品中心</dt>
					<dd>
						<a href="product.html" rel="nofollow">找好茶</a>
					</dd>
					<dd>
						<a href="product.html" rel="nofollow">找奶茶</a>
					</dd>
					<dd>
						<a href="product.html" rel="nofollow">找口感</a>
					</dd>
					<dd>
						<a href="product.html" rel="nofollow">找新鲜</a>
					</dd>
				</dl>
				<dl>
					<dt>投资分析</dt>
					<dd>
						<a href="show.html" rel="nofollow">奶茶店利润</a>
					</dd>
					<dd>
						<a href="show.html" rel="nofollow">奶茶店成本</a>
					</dd>
					<a href="show.html" rel="nofollow" target="_blank">投诉删除</a>
				</dl>
				<dl>
					<dt>加盟中心</dt>
					<dd>
						<a href="show.html" rel="nofollow">一点点奶茶加盟条件</a>
					</dd>
					<dd>
						<a href="show.html" rel="nofollow">一点点奶茶加盟流程</a>
					</dd>
					<dd>
						<a href="show.html" rel="nofollow">一点点奶茶加盟优势</a>
					</dd>
					<dd>
						<a href="show.html" rel="nofollow">一点点奶茶加盟费用</a>
					</dd>
				</dl>
				<dl>
					<dt>商学院</dt>
					<dd>
						<a href="show.html" rel="nofollow">开店指南</a>
					</dd>
					<dd>
						<a href="show.html" rel="nofollow">奶茶店成本控制</a>
					</dd>
					<dd>
						<a href="show.html" rel="nofollow">奶茶店促销</a>
					</dd>
					<dd>
						<a href="show.html" rel="nofollow">外卖服务流程</a>
					</dd>
				</dl>
				<dl>
					<dt>网站地图</dt>
					<dd>
						<a href="">网站地图</a>
					</dd>
					<dd>
						<a href="">XML</a>
					</dd>
					<dd>
						<a href="index.html" rel="nofollow">1点点奶茶官网</a>
					</dd>
					<dd>
						<a href="show.html" rel="nofollow">一点点奶茶菜单</a>
					</dd>
				</dl>
				<div class="link">
					友情链接：
					<?php
				
for ($i=1;$i<$link_sum;$i++){
    if (($i % $line_show)==0){
echo <<< EOT
<a title="{$linkArr[$i]["link_name"]}" href="{$linkArr[$i]["link_url"]}" target="_blank">{$linkArr[$i]["link_name"]}</a><br>

EOT;

}else{
echo <<< EOT
<a title="{$linkArr[$i]["link_name"]}" href="{$linkArr[$i]["link_url"]}" target="_blank">{$linkArr[$i]["link_name"]}</a>

EOT;
}

}


if(($link_sum % $line_show)==0)
{
    
} else{
    echo "<br>";
}

?> 


                               </div>
			</div>
		</div>
		<div class="warp t10"> &copy; 2018 一点点奶茶官网 &middot; 一点点奶茶加盟 版权所有 </div>
<!-- 
<script>(function() {var _53code = document.createElement("script");_53code.src = "https://tb.53kf.com/code/code/10180534/4";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(_53code, s);})();</script>
 -->
