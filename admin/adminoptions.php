<?php
include("admin.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
		include("header.php");
	?>
	
		<title>Admin Ayarları</title>
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
					<th style=\"width:30%\">Domain</th>
					<th style=\"width:70%\"><input type=\"text\" style=\"width:100%\" name=\"domain\" value=\"$domain\"></th> 
				  </tr>
				  <tr>
					<th style=\"width:30%\">Klasör ( ../ ile yaz)</th>
					<th style=\"width:70%\"><input type=\"text\" style=\"width:100%\" name=\"yol\" value=\"$yol\"></th> 
				  </tr>
				  <tr><th><hr></th><th><hr></th></tr>
				  <tr>
					<th style=\"width:30%\">Kullanıcı Adı</th>
					<th style=\"width:70%\"><input type=\"text\" style=\"width:100%\" name=\"user\" value=\"$user\"></th> 
				  </tr>
				  <tr>
					<th style=\"width:30%\">Şifre</th>
					<th style=\"width:70%\"><input type=\"text\" style=\"width:100%\" name=\"pass\" value=\"$pass\"></th> 
				  </tr>
				  <tr>
					<td></td>
					<th><br><center>
						<input type=\"image\" name=\"guncelle\" src=\"https://dabuttonfactory.com/button.png?t=Admin+Ayarlar%C4%B1n%C4%B1+G%C3%BCncelle&f=Caviar&ts=18&tc=fff&tshs=2&tshc=666&hp=45&vp=20&w=250&h=45&c=11&bgt=gradient&bgc=0ff&ebgc=0b5394&be=1\" value=\"Güncelle\">
					</center></th> 
				  </tr>
				</table>
							</form>
							
            </div>
        </div>
    </div>
</section>
	";

}
?>




<?php  
					  
			  if($_POST) { 
				  
			  $veri1 = $_POST['domain']; 
			  $veri2 = $_POST['yol']; 
			  $veri3 = $_POST['user']; 
			  $veri4 = $_POST['pass']; 


			  $dosya = fopen ("admin.php" , 'w');
			  $yaz="<?php
\$domain			=	'$veri1';
\$yol			=	'$veri2';

//Admin config
\$user			=	'$veri3';
\$pass			=	'$veri4';
?>";
			  
			  fwrite ( $dosya , $yaz ) ;
			  fclose ($dosya); 
			   
			  if(!dosya) 
			  { 
			  echo '<center><h3><font color=red>Veri Kaydı Başarısız.</font></h3></center>';
			  echo '<meta http-equiv="refresh" content="1;URL=admin/adminoptions.html">';
			  }else 
			  { 
			  echo '<center><h3><font color=green>Veriler Başarı ile kaydedildi.</font></h3></center>'; 
			  echo '<meta http-equiv="refresh" content="1;URL=admin/adminoptions.html">';
			  } 
			   
			  } 
			  
?>