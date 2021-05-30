<?php include('header.php'); ?>

<section class="mbr-section content4 cid-qPAp6wI7MX" id="content4-4">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-6">
				<h2 class="card-title align-center pb-3 mbr-fonts-style display-2">
                   <a href="index.html"><?php echo $baslik; ?></a></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"><?php echo $altbaslik; ?></h3>
            <div class="mbr-figure pt-2">
            </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content9 cid-qPApnSB1F4" id="content9-5">
        <div class="container">
        <div class="inner-container" style="width: 100%;">
		<center><? echo $reklamust; ?></center>
		<br>
            <hr class="line" style="width: 75%;">
            <div class="section-text align-center mbr-fonts-style display-7">
         <center>  
	<div class='col-12 col-md-8'>
	<div class='mbr-section-btn align-center'>		 
<?php

$dosya	=	$_GET["file"];
$boyut	=	filesize($dosya);
$mb		=	round($boyut/1024/1024,2);
$adine	=	substr($dosya, 13,);
$downet	=	substr($dosya, 8,);
  
if (file_exists($dosya)) {
    echo "<a class='btn btn-primary display-4' href='download/$dosya' download><span class='mbri-download mbr-iconfont mbr-iconfont-btn'></span>Dosyayı İndir!</a>
	</div>
	</div>";
	echo "Dosya ismi : $adine<br>
		  Dosya boyutu : $mb MB<br>";
	echo "<font size=2><textarea name=\"indirme\" onclick=\"this.focus();this.select()\" readonly=\"readonly\" rows=\"1\" cols=\"60\">$domain/indir-$downet</textarea></font>";


} else {

    echo "<meta http-equiv=\"refresh\" content=\"4;URL=index.html\">";
    echo "<h3><font color=red>Dosya Silinmiş / Bulunamıyor.</font></h3><h4><a href=index.html>Yeni Dosya Yükle</a></h4><br>";
}

						if(!$_COOKIE['sayildi']){ 
							$adin	=	$dosya;
							$oku = file_get_contents("downsay/$adine.txt");   
							$oku = $oku+1;   
							echo "<font size=2><br>Bu Sayfa $oku kez görüntülendi.</font>";  
							file_put_contents("downsay/$adine.txt",$oku);   
							setcookie("sayildi",TRUE,time()+86400); 
						} 
	?>
              <br><hr class="line" style="width: 75%;">
			  <br>
			<center><? echo $reklamalt; ?></center>
		</center>			
			</div>

			
        </div>
        </div>
</section>


<section class="cid-qPArHNjksf" id="social-buttons3-8">
    <div class="container">
        <div class="media-container-row">
            <div class="col-md-8 align-center">
                <h2 class="pb-3 mbr-section-title mbr-fonts-style display-2">
                    Bizi Sosyal Medyada Paylaşın!</h2>
                <div>
                    <div class="mbr-social-likes">
                        <span class="btn btn-social socicon-bg-facebook facebook mx-2" title="Share link on Facebook">
                            <i class="socicon socicon-facebook"></i>
                        </span>
                        <span class="btn btn-social twitter socicon-bg-twitter mx-2" title="Share link on Twitter">
                            <i class="socicon socicon-twitter"></i>
                        </span>
                        <span class="btn btn-social plusone socicon-bg-googleplus mx-2" title="Share link on Google+">
                            <i class="socicon socicon-googleplus"></i>
                        </span>
                        <span class="btn btn-social vkontakte socicon-bg-vkontakte mx-2" title="Share link on VKontakte">
                            <i class="socicon socicon-vkontakte"></i>
                        </span>
                        <span class="btn btn-social odnoklassniki socicon-bg-odnoklassniki mx-2" title="Share link on Odnoklassniki">
                            <i class="socicon socicon-odnoklassniki"></i>
                        </span>
                        <span class="btn btn-social pinterest socicon-bg-pinterest mx-2" title="Share link on Pinterest">
                            <i class="socicon socicon-pinterest"></i>
                        </span>
                        <span class="btn btn-social mailru socicon-bg-mail mx-2" title="Share link on Mailru">
                            <i class="socicon socicon-mail"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>