<?php error_reporting(0); ?>
<?php include('admin.php'); ?>

<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="author" content="AtesMesut">
  <meta name="designer" content="AtesMesut" />
  <meta name="copyright" content= " (c) 2018. Mesutates.com">
  <meta name="reply-to" content="admin@mesutates.com" />
  <meta name="distribution" content="Global">
  <meta name="rating" content="General">
  <meta name="robots" content="index, follow">
  <meta name="revisit-after" content="7 days">
  <meta http-equiv="reply-to" content="admin@mesutates.com">
  <meta name="abstract" content="<?php echo $abstract; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="description" content="<?php echo $description; ?>">
  <link rel="stylesheet" href="../assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="../assets/tether/tether.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../assets/dropdown/css/style.css">
  <link rel="stylesheet" href="../assets/socicon/css/styles.css">
  <link rel="stylesheet" href="../assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="../assets/theme/css/style.css">
  <link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="shortcut icon" href="<?php echo $logo; ?>" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link rel="apple-touch-icon" href="<?php echo $logo; ?>">
  
  <meta property="og:url"                content="<?php echo $domain; ?>" />
  <meta property="og:type"               content="article" />
  <meta property="og:title"              content="UpDown.ga - Ücretsiz indir Yükle" />
  <meta property="og:description"        content="Bu bağlantı ile dosyayı hızlı ve kolayca indirebilirsiniz. Beklemek yok sınır yok. Dilediğince yükle ve paylaş." />
  <meta property="og:image"              content="<?php echo $domain; ?>/<?php echo $logo; ?>" />
<link rel="shortcut icon" type="image/png" href="../assets/images/fav.png"/>
      <base href="<?php echo $domain ?>" />

<style>
.sayfala {
	margin-top: 10px;
	color: #000;
} 
.sayfala, li {
	cursor:pointer;
	margin-right: 8px;
	font-size: 12px;
	display: inline-block;
	padding: 5px 9px;
	background-color: #efefef;
	border: 1px solid #ccc;
	border-radius: 3px
} 
.sayfala, li:hover, li.current {
	color: #000;background-color: #c9d2da;
}
</style>
</head>
<body>
  <section class="menu cid-qPAp4E4VID" once="menu" id="menu2-3">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                        <img src="<?php echo $logo; ?>" alt="" title="" style="height: 3.8rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="admin/kontrol.html">
                        Dosyalar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="admin/options.html">
					Genel Ayarlar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="admin/adminoptions.html">
					Admin Ayarları</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="admin/sayacoku.html">
					Sayaç Ayarla</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="admin/logoku.html">
					ip Logları</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="../" target="_blank">
					Siteye Git</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="admin/logout.html">
					Çıkış</a>
                </li>
			</ul>
        </div>
    </nav>
</section>
<br><br>
