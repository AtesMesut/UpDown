<?php
include("admin.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
		include("header.php");
	?>
	<title>Kayıtları Oku</title>

<section class="mbr-section article content9 cid-qPApnSB1F4" id="content9-5">
        <div class="container">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 75%;">
            <div class="section-text align-center mbr-fonts-style display-7">
<?php  
$Dosya = fopen("../iplog.txt", "r") or exit("Dosya Açılamadı !");
while(!feof($Dosya))
{
  echo fgets($Dosya)."<br />";
}
fclose($Dosya);
}
?>
            <hr class="line" style="width: 75%;">
        </div>
        </div>
</section>