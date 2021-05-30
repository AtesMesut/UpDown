<?php
include("admin.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
		include("header.php");
	?>
	
	<title>Sayaç Değeri</title>
<body>
<?php
error_reporting(0);
	echo "
<section class=\"mbr-section article content12 cid-qPAueMnKnj\" id=\"content12-p\">
     

    <div class=\"container\">
        <div class=\"media-container-row\">
            <div class=\"mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7\">
	
	<form action=\"\" method=\"post\">

				<table align=\"center>\" style=\"width:100%\" border=\"0\">
				  <tr>
					<th style=\"width:30%\">Sayaç Değerini gir</th>
					<th style=\"width:70%\"><input type=\"text\" style=\"width:100%\" name=\"say\" value=\"$say\"></th> 
				  </tr>
				  <tr>
					<td></td>
					<th><br><center>
						<input type=\"image\" name=\"guncelle\" src=\"https://dabuttonfactory.com/button.png?t=Admin+Ayarlar%C4%B1n%C4%B1+G%C3%BCncelle&f=Caviar&ts=18&tc=fff&tshs=2&tshc=666&hp=45&vp=20&w=250&h=45&c=11&bgt=gradient&bgc=0ff&ebgc=0b5394&be=1\" value=\"Güncelle\">
					</center></th> 
				  </tr>
				</table>
							</form>
	";

}
?>

						<?php  
						if(!$_COOKIE['sayildi']){ 
							$oku = file_get_contents('../sayac.txt');   
							$oku = $oku;   
							echo "$oku Şuanki değer.<br> bu görüntüleme kaydedilmez.";  
							file_put_contents('../sayac.txt',$oku);   
							setcookie("sayildi",TRUE,time()+86400); 
						} 
						?>

            </div>
        </div>
    </div>
</section>
<?php  
					  
			  if($_POST) { 
				  
			  $veri1 = $_POST['say']; 

			  $dosya = fopen ("../sayac.txt" , 'w');
			  $yaz="$veri1";
			  
			  fwrite ( $dosya , $yaz ) ;
			  fclose ($dosya); 
			   
			  if(!dosya) 
			  { 
			  echo '<center><h3><font color=red>Veri Kaydı Başarısız.</font></h3></center>';
			  echo '<meta http-equiv="refresh" content="1;URL=admin/sayacoku.html">';
			  }else 
			  { 
			  echo '<center><h3><font color=green>Veriler Başarı ile kaydedildi.</font></h3></center>'; 
			  echo '<meta http-equiv="refresh" content="1;URL=admin/sayacoku.html">';
			  } 
			   
			  } 
			  
?>