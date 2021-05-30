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
            <hr class="line" style="width: 75%;">
            <div class="section-text align-center mbr-fonts-style display-7">
         <center>
			<?php
				$file= $_GET['dosya'];
				$dosyaadi="$file";
				echo unlink($dosyaadi)?"<font color='green'>Dosya Silme işlemi Başarılı.</font>":"<font color='red'>Dosya Silme Başarısız</font>";
				echo '<meta http-equiv="refresh" content="1;URL=index.php">';

			?>
		 </center>			
					
					</div>
            <hr class="line" style="width: 75%;">
        </div>
        </div>
</section>

<section class="mbr-section article content12 cid-qPApFlvoC0" id="content12-6">
     
<section class="features13 cid-qPArn7peQw" id="features13-7">
    <div class="container">
        <div class="media-container-row container">
            <div class="card col-12 col-md-6 p-5 m-3 align-center col-lg-4">
                <div class="card-img">
                    <img src="assets/images/mbr-720x1080.jpg" alt="" title="">
                </div>
				<h4 class="card-title py-2 mbr-fonts-style display-5"><i class="fa fa-<?php echo $box1icon; ?> fa-3x"></i><br><br>
                <?php echo $box1; ?></h4>
            </div>
            <div class="card col-12 col-md-6 p-5 m-3 align-center col-lg-4">
                <div class="card-img">
                    <img src="assets/images/mbr-1080x1080.jpg" alt="" title="">
                </div>
				<h4 class="card-title py-2 mbr-fonts-style display-5"><i class="fa fa-<?php echo $box2icon; ?> fa-3x"></i><br><br>
                <?php echo $box2; ?></h4>
            </div>
            <div class="card col-12 col-md-6 p-5 m-3 align-center col-lg-4">
                <div class="card-img">
                    <img src="assets/images/mbr-1-720x1080.jpg" alt="" title="">
                </div>
				<h4 class="card-title py-2 mbr-fonts-style display-5"><i class="fa fa-<?php echo $box3icon; ?> fa-3x"></i><br><br>
                <?php echo $box3; ?></h4>
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