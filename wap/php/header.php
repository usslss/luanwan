<?php 

$class_index="";
$class_about="";
$class_join="";
$class_product="";
$class_news="";
$class_store="";
$class_school="";
$class_contact="";

if ($page=='index'){$class_index="active";};
if ($page=='about'){$class_about="active";};
if ($page=='join'){$class_join="active";};
if ($page=='product'){$class_product="active";};
if ($page=='news'){$class_news="active";};
if ($page=='store'){$class_store="active";};
if ($page=='contact'){$class_contact="active";};

?>
<!-- 移动适配JS脚本 -->
<!-- 
	<script type="text/javascript">
    if (window.location.toString().indexOf('pref=padindex') != -1) {
    } else {
        if (/AppleWebKit.*Mobile/i.test(navigator.userAgent) || /\(Android.*Mobile.+\).+Gecko.+Firefox/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))) {
            if (window.location.href.indexOf("?mobile")<0){
                try {
                    if (/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
                        window.location.href="/wap/<?php echo $page;?>";
                    } else if (/iPad/i.test(navigator.userAgent)) {
                        //window.location.href="/wap/"
                    } else {
                        window.location.href="/wap/<?php echo $page;?>"
                    }
                } catch (e) {}
            }
        }
    }
</script>
 --> 
		<header>
			<a class="nav-icon"></a>
			<a href="index.php" class="logo"></a>
		</header>
		<nav>
			<div class="iconc">
				<a class="nav-icon1"></a>
			</div>
			<ul>
				<li class="<?php echo $class_index;?>">
					<a href="index.php">首页</a>
				</li>
				<li class="<?php echo $class_about;?>">
					<a href="about.php">我们</a>
				</li>
				<li class="<?php echo $class_product;?>">
					<a href="product.php">产品</a>
				</li>
				<li class="<?php echo $class_news;?>">
					<a href="news.php">资讯</a>
				</li>
				<li class="<?php echo $class_join;?>">
					<a href="join.php">加盟</a>
				</li>
				<li class="<?php echo $class_contact;?>">
					<a href="contact.php">联系</a>
				</li>
			</ul>
		</nav>
		<script type="text/javascript">
			$(document).ready(function() {
				$(".nav-icon").click(function() {
					$("nav").css("z-index", "100");
					$("nav").css("opacity", "1");

				});
			});
			$(document).ready(function() {
				$(".nav-icon1").click(function() {
					$("nav").css("z-index", "-100");
					$("nav").css("opacity", "0");
				});
			});
		</script>

	