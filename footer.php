<section class="cid-qPArQJM3DN" id="footer5-9">
    <div class="container">
        <div class="media-container-row">
            <div class="col-md-3">
                <div class="media-wrap">
                    <a href="index.html">
                       <img src="<?php echo $flogo; ?>" alt="LogoFooter" title="">
                    </a>
					<p class="mbr-text mbr-fonts-style display-7">
						<?php  
						if(!$_COOKIE['sayildi']){ 
							$oku = file_get_contents('sayac.txt');   
							$oku = $oku+1;   
							echo "$oku kez görüntülendi.";  
							file_put_contents('sayac.txt',$oku);   
							setcookie("sayildi",TRUE,time()+86400); 
						} 
						?></p></div>
            </div>
            <div class="col-md-9">
                <p class="mbr-text align-right links mbr-fonts-style display-7">
                    <a href="index.html" class="text-black">ANA SAYFA</a>&nbsp; &nbsp; | &nbsp; &nbsp; 
					<a href="gizlilikpolitikasi.html" class="text-black">GİZLİLİK POLİTİKASI</a>&nbsp; &nbsp; | &nbsp; &nbsp; 
					<a href="kullanimsartlari.html" class="text-black">KULLANIM ŞARTLARI</a>&nbsp; &nbsp; | &nbsp; &nbsp; 
					<a href="destekol.html" class="text-black">DESTEK OL!</a></p>
				<p class="mbr-text align-right links mbr-fonts-style display-7"><font size="2">ip adresiniz : <?php include('ip.php'); ?> olarak alınmış ve kaydedilmiştir.</font></p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-md-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright <?php echo date('Y'); ?> Tüm Hakkı Saklıdır.&nbsp;Theme &amp; Code : <a href="http://www.mesutates.com?ref=<?php echo $domain ?>" target="_blank" class="text-info">AtesMesut</a></p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="<?php echo $twitter; ?>" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="<?php echo $facebook; ?>" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="<?php echo $instagram; ?>" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="<?php echo $googleplus; ?>" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="<?php echo $behance; ?>" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/sociallikes/social-likes.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
	
	
	
	
  </body>
</html>