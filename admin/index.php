<?php

$_ra = '1234567890ABCDEFGHIJKLMNOPUQRSTUVWXYZ';
$_rastgele = substr(str_shuffle($_ra), 0, 6);

?>

<!DOCTYPE html>
<html >
<head>
	<title>Admin Giriş (<?php echo $_rastgele; ?>)</title>
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
  <link rel="stylesheet" href="<?php echo $domain; ?>/assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="<?php echo $domain; ?>/assets/tether/tether.min.css">
  <link rel="stylesheet" href="<?php echo $domain; ?>/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $domain; ?>/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="<?php echo $domain; ?>/assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="<?php echo $domain; ?>/assets/dropdown/css/style.css">
  <link rel="stylesheet" href="<?php echo $domain; ?>/assets/socicon/css/styles.css">
  <link rel="stylesheet" href="<?php echo $domain; ?>/assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="<?php echo $domain; ?>/assets/theme/css/style.css">
  <link rel="stylesheet" href="<?php echo $domain; ?>/assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="shortcut icon" href="<?php echo $logo; ?>" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link rel="apple-touch-icon" href="<?php echo $logo; ?>">
</head>

<body>

<form action="giris.html" method="POST">
<table align="center">
<center>
<a href="index.html"><img src="../assets/images/updownlogo2.png"></a>
</center><br><br>
<tr>
<label><td>Kullanici Adı </td>
<td><input type="text" name="user"></td></label>
</tr>
<tr>
<label>
<td>Şifre </td>
<td><input type="password" name="pass"></td>
</label>
</tr>
<tr>
<td></td>
<label><td><input type="submit" value="Giriş Yap">
</td></label>
</tr>
</table>
</form>


<br><br><br>


<?php


echo "<h5><center>Key : $_rastgele</center></h5>"; // 9fUaZHqIF0ywn1VYkUBTcMO


?>
</body>
</html>