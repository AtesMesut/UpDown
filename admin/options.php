<?php
include("admin.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
		include("header.php");
	?>
		<title>Genel Ayarlar</title>
<body>
<?php
include("../config.php");
error_reporting(0);

	
	echo "
<section class=\"mbr-section article content12 cid-qPAueMnKnj\" id=\"content12-p\">
     

    <div class=\"container\">
        <div class=\"media-container-row\">
            <div class=\"mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7\">
<form action=\"\" method=\"post\">
				<table align=\"center>\" style=\"width:100%\" name=\"\" border=\"0\">
				  <tr>
					<th style=\"width:30%\">Domain</th>
					<th style=\"width:70%\"><input type=\"text\" style=\"width:100%\" name=\"domain\" value=\"$domain\"></th> 
				  </tr>
				  <tr>
					<th style=\"width:30%\">Klasör (Ana Dizinde)</th>
					<th style=\"width:70%\"><input type=\"text\" style=\"width:100%\" name=\"yol\" value=\"$yol\"></th> 
				  </tr>
				  <tr>
					<td>Site Logo</td>
					<td><input type=\"text\" style=\"width:100%\" name=\"logo\" value=\"$logo\"></td> 
				  </tr>
				  <tr>
					<td>Footer Logo</td>
					<td><input type=\"text\" style=\"width:100%\" name=\"flogo\" value=\"$flogo\"></td> 
				  </tr>
				  <tr>
					<td>Site Başlığı</td>
					<td><input type=\"text\" style=\"width:100%\" name=\"title\" value=\"$title\"></td> 
				  </tr>
				  <tr>
					<td>Site Özet Açıklaması</td>
					<td><textarea style=\"width:100%\" name=\"abstract\">$abstract</textarea></td> 
				  </tr>
				  <tr>
					<td>Site Açıklaması</td>
					<td><textarea style=\"width:100%\" name=\"description\">$description</textarea></td>
				  </tr>
				  <tr>
					<td>Anahtar Kelimeler</td>
					<td><input type=\"text\" style=\"width:100%\" name=\"keywords\" value=\"$keywords\"></td>
				  </tr>

				  <tr>
					<th>Ana Sayfa Başlık</th>
					<th><textarea style=\"width:100%\" name=\"reklamust\">$baslik</textarea></th> 
				  </tr>
				  <tr>
					<td>Ana Sayfa Alt Başlık</td>
					<th><input type=\"text\" style=\"width:100%\" name=\"altbaslik\" value=\"$altbaslik\"></th> 
				  </tr>
				  <tr>
					<td>Download Başlık</td>
					<th><textarea style=\"width:100%\" name=\"reklamust\">$dbaslik</textarea></th> 
				  </tr>
				  <tr>
					<td>Download Alt Başlık</td>
					<th><input type=\"text\" style=\"width:100%\" name=\"daltbaslik\" value=\"$daltbaslik\"></th> 
				  </tr>
	  
				  <tr>
					<th>Facebook</th>
					<th><input type=\"text\" style=\"width:100%\" name=\"facebook\" value=\"$facebook\"></th> 
				  </tr>
				  <tr>
					<td>Twitter</td>
					<th><input type=\"text\" style=\"width:100%\" name=\"twitter\" value=\"$twitter\"></th> 
				  </tr>
				  <tr>
					<td>Twitter</td>
					<th><input type=\"text\" style=\"width:100%\" name=\"instagram\" value=\"$instagram\"></th> 
				  </tr>
				  <tr>
					<td>Google Plus</td>
					<th><input type=\"text\" style=\"width:100%\" name=\"googleplus\" value=\"$googleplus\"></th> 
				  </tr>
				  <tr>
					<td>Behance</td>
					<th><input type=\"text\" style=\"width:100%\" name=\"behance\" value=\"$behance\"></th> 
				  </tr>

				  <tr>
					<th>Üst Reklam</th>
					<td><textarea style=\"width:100%\" name=\"reklamust\">$reklamust</textarea></td>
				  </tr>
				  <tr>
					<td>Alt Reklam</td>
					<td><textarea style=\"width:100%\" name=\"reklamalt\">$reklamalt</textarea></td>
				  </tr>
				  <tr>
					<td></td>
					<th><br><center>
						<input type=\"image\" name=\"guncelle\" src=\"https://dabuttonfactory.com/button.png?t=Ayarlar%C4%B1+G%C3%BCncelle&f=Caviar&ts=18&tc=fff&tshs=2&tshc=666&hp=45&vp=20&w=250&h=45&c=11&bgt=gradient&bgc=15d798&ebgc=38761d&be=1\" value=\"Güncelle\">
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
			  $veri25 = $_POST['yol']; 
			  $veri2 = $_POST['logo']; 
			  $veri3 = $_POST['flogo']; 
			  $veri4 = $_POST['title']; 
			  $veri5 = $_POST['abstract']; 
			  $veri6 = $_POST['description']; 
			  $veri7 = $_POST['keywords']; 
			  $veri8 = $_POST['baslik']; 
			  $veri9 = $_POST['altbaslik']; 
			  $veri10 = $_POST['dbaslik']; 
			  $veri11 = $_POST['daltbaslik']; 
			  $veri18 = $_POST['twitter']; 
			  $veri19 = $_POST['facebook']; 
			  $veri20 = $_POST['instagram']; 
			  $veri21 = $_POST['googleplus']; 
			  $veri22 = $_POST['behance']; 
			  $veri23 = $_POST['reklamust']; 
			  $veri24 = $_POST['reklamalt']; 

			   
			   
			  $dosya = fopen ("../config.php" , 'w');
			  $yaz="<?php
\$domain		=	'$veri1';
\$yol			=	'$veri25';

//site config
\$logo			=	'$veri2';
\$flogo			=	'$veri3';
\$title			=	'$veri4';
\$abstract		=	'$veri5';
\$description	=	'$veri6';
\$keywords		=	'$veri7';

//ana sayfa
\$baslik		=	'$veri8';
\$altbaslik		=	'$veri9';

//indirme sayfası
\$dbaslik		=	'$veri10';
\$daltbaslik	=	'$veri11';

// sosyal ağlarınız
\$twitter		=	'$veri19';
\$facebook		=	'$veri18';
\$instagram		=	'$veri20';
\$googleplus	=	'$veri21';
\$behance		=	'$veri22'; 

//indirme sayfası reklamları
\$reklamust		=	'$veri23';
\$reklamalt		=	'$veri24';

?>";
			  
			  fwrite ( $dosya , $yaz ) ;
			  fclose ($dosya); 
			   
			  if(!dosya) 
			  { 
			  echo '<center><h3><font color=red>Veri Kaydı Başarısız.</font></h3></center>'; 
			  echo '<meta http-equiv="refresh" content="1;URL=admin/options.html">';
			  }else 
			  { 
			  echo '<center><h3><font color=green>Veriler Başarı ile kaydedildi.</font></h3></center>'; 
			  echo '<meta http-equiv="refresh" content="1;URL=admin/options.html">';
			   
			  } 
			   
			  } 
?>