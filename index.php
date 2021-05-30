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

<style>
#progressbar {

  border-radius: 13px;
  /* (height of inner div) / 2 + padding */
  with : 10px;
  padding: 3px;
}

#progressbar>div {
  background-color: orange;
  width: 40%;
  /* Adjust with JavaScript */
  height: 20px;
  border-radius: 10px;
}
</style>

<script>
$("form").on("change", ".file-upload-field", function(){ 
    $(this).parent(".file-upload-wrapper").attr("data-text",         $(this).val().replace(/.*(\/|\\)/, '') );
});

function _(el){
	return document.getElementById(el);
}
function uploadFile(){
	var file = _("file1").files[0];
	// alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("file1", file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "file_upload_v4.php");
	ajax.send(formdata);
}
function progressHandler(event){
	_("loaded_n_total").innerHTML = ""+event.loaded+" / "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressbar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% yükleniyor... Lütfen Bekleyin.";
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	_("progressbar").value = 0;
}
function errorHandler(event){
	_("status").innerHTML = "Yüklenemedi";
}
function abortHandler(event){
	_("status").innerHTML = "İptal Edildi";
}
</script>

<script type="text/javascript">
var title = document.title;
var alttitle = "Dosya Yükle";
window.onblur = function () { document.title = alttitle; };
window.onfocus = function () { document.title = title; };
</script>


<section class="mbr-section article content9 cid-qPApnSB1F4" id="content9-5">
        <div class="container">
        <div class="inner-container" style="width: 100%;">
		<center><? echo $reklamust; ?></center>
            <hr class="line" style="width: 75%;">
            <div class="section-text align-center mbr-fonts-style display-7">
			 <center>          
				<form id="upload_form" enctype="multipart/form-data" method="post">
				  <input type="file" name="file1" id="file1"><br>
				  <input type="button" value="Upload File" onclick="uploadFile()"><br><br>
				  <progress id="progressbar" value="0" max="100" style="width:300px;"></progress>
				  <h3 id="status"></h3>
				  <p id="loaded_n_total"></p>
				</form>
			 </center>
			</div>
            <hr class="line" style="width: 75%;">
			<center><? echo $reklamalt; ?></center>
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