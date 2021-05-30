<?php
session_start();
ob_start();
session_destroy();
echo "<center>
<img src=\"../assets/images/updownlogo2.png\">
<br><br><h3>Çıkış Yaptınız.<br><br>Site Ana Sayfasına Yönlendiriliyorsunuz.</h3></center>";
header("Refresh: 3; url=../");
ob_end_flush();
?>
	<title>Çıktınız</title>