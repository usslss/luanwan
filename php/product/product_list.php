<?php
$product_class="一点点";

//单页显示的条数
$product_shownum=6;

//判断跳转的页数

if (isset($_GET["page"])){
    $page_jump=$_GET["page"];
    $product_start=($page_jump-1)*($product_shownum)+1;
} else {
    $page_jump=1;
    $product_start=1;
}


//按照时间顺序搜索 新闻


$sql_new="SELECT * FROM product WHERE product_class='{$product_class}' AND product_website='{$website}' ORDER BY product_addtime DESC ";

$result=mysqli_query($link, $sql_new);
$i=0;



while ($row=mysqli_fetch_assoc($result)){
    
    $productarr[$i]["product_id"] = $row["product_id"];
    $productarr[$i]["product_title"] = $row["product_name"];
    $productarr[$i]["product_summary"] = $row["product_summary"];
    $productarr[$i]["product_img_url"] = $row["product_img_url"];
    $productarr[$i]["product_addtime"] = substr($row["product_addtime"],2,20);
    $productarr[$i]["product_url"] = "product_show.php?product_id=".$row["product_id"];
    
    $i++;
    
    
}
$product_sum=$i;

?>
									
				<div class="tl_r">
					<ul class="productslist">

<?php

for ($i=($product_start-1);(($i<($product_start+$product_shownum-1))&($i<$product_sum));$i++){
    echo <<< EOT
						<li>
							<a rel="group" href="{$productarr[$i]["product_img_url"]}"><img src="{$productarr[$i]["product_img_url"]}" alt="{$productarr[$i]["product_title"]}" /></a><br />
							<span><a>{$productarr[$i]["product_title"]}</a></span> </li>

EOT;

}
?>
					</ul>
					<div id="pages">
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

				$page_max=ceil($product_sum/$product_shownum);
				
				if($page_jump==1){
				    $page_jump_prev=1;
				    $img_url_prev="images/fy-no-left.png";
				    $href_url_prev="javascript:void(0)";
				    $style_prev="cursor:default;";
				    
				    $page_jump_next=$page_jump+1;
				    $img_url_next="images/fy-right.png";
				    $href_url_next="product.php?page=".$page_jump_next;
				    $style_next="";
				} else if($page_jump>=$page_max){
				    $page_jump_prev=$page_jump_next=$page_jump-1;
				    $img_url_prev="images/fy-left.png";
				    $href_url_prev="product.php?page=".$page_jump_prev;
				    $style_prev=";";
				    
				    $page_jump_next=$page_max;
				    $img_url_next="images/fy-no-right.png";
				    $href_url_next="javascript:void(0)";
				    $style_next="cursor:default";
				}else {
				    $page_jump_prev=$page_jump_next=$page_jump-1;
				    $img_url_prev="images/fy-left.png";
				    $href_url_prev="product.php?page=".$page_jump_prev;
				    $style_prev="";
				    
				    $page_jump_next=$page_jump+1;
				    $img_url_next="images/fy-right.png";
				    $href_url_next="product.php?page=".$page_jump_next;
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
								<li><a href='product.php'>首页</a></li>
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
										<option value='product.php?page={$i}' {$page_selected}>{$i}</option>

EOT;

}
?>
										
										
										
									</select>
								</li>								
								<li>
									<a href='<?php echo $href_url_next;?>'>></a>
								</li>
								<li>
									<a href='product.php?page=<?php echo $page_max;?>'>末页</a>
								</li>

								<li><span class="pageinfo">共 <strong><?php echo $page_max;?></strong>页<strong><?php echo $product_sum;?></strong>条</span></li>

							</ul>
						</div>
						
					</div>
				</div>	
		
		
		
		
		
		
		
		
		
		
		
		
		