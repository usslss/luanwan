<?php
$banner_class = $page . "_banner";

$sql_banner = "SELECT * FROM img WHERE class='{$banner_class}' AND website='{$website}'";
$result = mysqli_query($link, $sql_banner);

while ($row = mysqli_fetch_assoc($result)) {
    $banner_show_url = $row["wap_url"];
    $banner_show_alt = $row["alt"];

}

echo <<< EOT
		<div class="ny-banner">
			<img src="{$banner_show_url}">
		</div>
EOT;
?>
