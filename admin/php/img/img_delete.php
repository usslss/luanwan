<?php
include_once("../connect.php");
//待加入对输入值的判断 和非中文的鉴定 重复文件的判断       数据库性死亡

$id=$_POST["id"];


$sql = "DELETE FROM img WHERE id = {$id}";


$sqlfinish = mysqli_query($link,$sql);

mysqli_close($link);




?>