<?php
include_once "../php/connect.php";

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

		<footer>
			<a href="index.html" class="foot-logo"><img src="images/logo2.png"></a>
			<p>乱丸  浙ICP备18045295号  Copyright(C) 2018 all rights reserved   </p>
		</footer>


