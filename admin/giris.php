<?php
include("admin.php");
session_start();
ob_start();
if(($_POST["user"]==$user) and ($_POST["pass"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
header("Location:kontrol.html");
}else{
echo "
<title>Login Control</title>
<center>
<a href=\"index.html\"><img src=\"../assets/images/updownlogo2.png\"></a>
</center><br><br>
<center><font color=red><br><br><br><b>Kullanıcı Adı veya Şifre Yanlış.<b></font></center>";
header("Refresh: 2; url=index.html");
}
ob_end_flush();
?>
	