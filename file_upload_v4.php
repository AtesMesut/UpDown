<?php include "config.php"; ?>
<center>
<?php
	// Verileri alma
	$sayi = rand(1111,99999);
	$fileName = $_FILES["file1"]["name"]; // Dosya adı
	$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // PHP tmp klasöründeki dosya
	$fileType = $_FILES["file1"]["type"]; // Dosya türü
	$fileSize = $_FILES["file1"]["size"]; // Bayt cinsinden dosya boyutu
	$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true

		// Türkçe karakter sorunu
		function replace_tr($text) {
		$text = trim($text);
		$search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ',',','æ','Æ','-','_');
		$replace = array('C','c','G','g','i','I','O','o','S','s','U','u','','','','','','');
		$new_text = str_replace($search,$replace,$text);
		return $new_text;
		}

		$biten 			= $fileName;
		$trsiz_biten	= replace_tr($biten);
		$randombitti	= "$sayi".$trsiz_biten;

		if (!$fileTmpLoc) { // dosya seçilmemişse
			echo "HATA: Önce dosyayı seçin.";
			exit();
		}
		
	if(move_uploaded_file($fileTmpLoc, "$yol/$randombitti")){

		echo "<br><font size=2>";	
		echo "$trsiz_biten İndirme Linki<br><textarea name=\"indirme\" onclick=\"this.focus();this.select()\" readonly=\"readonly\" rows=\"1\" cols=\"60\">$domain/indir-$randombitti</textarea><br>";	
		echo "$trsiz_biten Direk Link<br><textarea onclick=\"this.focus();this.select()\" readonly=\"readonly\" rows=\"1\" cols=\"60\">$domain/goster/$randombitti</textarea><br>";	
		echo "$trsiz_biten HTML Link<br><textarea onclick=\"this.focus();this.select()\" readonly=\"readonly\" rows=\"3\" cols=\"60\"><a href=\"$domain/indir-$randombitti\" target=\"_blank\">$trsiz_biten indir</a></textarea><br>";	
		echo "$trsiz_biten BBCODE Link<br><textarea onclick=\"this.focus();this.select()\" readonly=\"readonly\" rows=\"3\" cols=\"60\">[url=$domain/indir-$randombitti/]$trsiz_biten indir![/url]</textarea><br>";
		echo "<br>
					<a href='$domain/sil-$randombitti'><img src='https://dabuttonfactory.com/button.png?t=Sil&f=Open+Sans-Bold&ts=15&tc=fff&tshs=1&tshc=000&hp=45&vp=20&w=200&h=30&c=11&bgt=gradient&bgc=f00&ebgc=c00&be=1&shs=1&shc=999&sho=sw'></a>

                    <div class='mbr-social-likes'>
                        <span class='btn btn-social socicon-bg-facebook facebook mx-2' title='Facebook ile Paylaş'>
                            <a target='_blank' href='http://wwww.facebook.com/sharer.php?u=$domain/goster/$randombitti'><i class='socicon socicon-facebook'></i></a>
                        </span>
                        <span class='btn btn-social twitter socicon-bg-twitter mx-2' title='Twitter ile Paylaş'>
                            <a target='_blank' href='https://twitter.com/share?url=$domain/goster/$randombitti'><i class='socicon socicon-twitter'></i></a>
                        </span>
                        <span class='btn btn-social plusone socicon-bg-googleplus mx-2' title='Google+  ile Paylaş'>
                            <a target='_blank' href='https://plus.google.com/share?url=$domain/goster/$randombitti'><i class='socicon socicon-googleplus'></i></a>
                        </span>
                        <span class='btn btn-social pinterest socicon-bg-pinterest mx-2' title='Pinterest ile Paylaş'>
                            <a target='_blank' href='https://www.pinterest.com/pin/create/button/?url=$domain/goster/$randombitti'><i class='socicon socicon-pinterest'></i></a>
                        </span>
                        <span class='btn btn-social whatsapp socicon-bg-whatsapp mx-2' title='Whatsapp ile Paylaş'>
                            <a target='_blank' href='whatsapp://send?text=$domain/goster/$randombitti'><i class='socicon socicon-whatsapp'></i></a>
                        </span>
                    </div>

</font>

";	
		
		}
		else {
			echo "move_uploaded_file function failed";
				}


?>

</center>