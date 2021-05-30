<?php
include("admin.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
		include("header.php");
	?>
	<title>Dosya Kontrol</title>
<?php


	echo "<br>
	<hr class=\"line\" style=\"width: 75%;\"><center>";



$sayfa = isset($_GET["sayfa"]) ? (int) $_GET["sayfa"] : 1;
if(empty($sayfa)) { $sayfa = 1; }
if($sayfa < 1) $sayfa = 1;
$dizin = glob("$yol/*.*", GLOB_BRACE); // Okunacak dizin ve dosya türleri

$sayfabasi_kayit = 20; // sayfa başı gösterilecek kayıt sayısı
$x = 5; //geçerli sayfanın Önceki Sonraki seçimleri arasında görünmesini istediğiniz adet sayfa butonu
$link = "admin/kontrol.html?sayfa=";
natsort($dizin); // Dizin Sıralama kuralı diğer sıralama kuralları için https://www.html.net/manual/tr/array.sorting.html

$toplamkayit = count($dizin);
$toplamsayfa = ceil($toplamkayit / $sayfabasi_kayit);
if($sayfa > $toplamsayfa) { $sayfa = 1; }
$baslangic = ($sayfa-1)*$sayfabasi_kayit;
$dizinliste = array();

if($dizin){ //$dizin false veya boş değilse  
    $dizinliste = ($toplamkayit > $sayfabasi_kayit) ? array_slice($dizin,$baslangic,$sayfabasi_kayit) : $dizin;
} else {
	echo "<font color=red>Bu dizinde dosya bulunamadı!</font>";
}

foreach ($dizinliste as $dosyayolu) { // $dizinliste'ye alınan dosyaları sayfaya yazdırıyoruz
    $dosyaadi = basename($dosyayolu); // Dosya yolundan sadece dosya ismi almak için
    echo '<a href="'.$yol.'/'.$dosyaadi.'"  target="_blank">'.$dosyaadi.'</a> <a name="">-</a> <a target="_blank" href="'.$domain.'/sil-'.$dosyaadi.'">Sil</a><br>';
}
    echo '<br><hr class=\"line\" style=\"width: 75%;\"><br>';
	
//  « İlk  Önceki 1 [2] 3 4 Sonraki Son » butonları oluşturan kodlar
$sayfala = "";
if($toplamkayit > $sayfabasi_kayit) {
	if($sayfa > 1){
		$onceki = $sayfa-1;
		$sayfala .="<li><a href=\"".$link."1\">&laquo; İlk</a></li>";
		$sayfala .="<li><a href=\"".$link.$onceki."\">Önceki</a></li>";
	}
	if($sayfa==1){ $sayfala .="<li><a class=\"current\"> 1 </a></li>"; }
	elseif($sayfa-$x < 2){ $sayfala .="<li><a href=\"".$link."1\"> 1 </a></li>"; }   
	if($sayfa-$x > 2){ $i = $sayfa-$x; }else{ $i = 2; } 
	if($sayfa-$x-10 > 0){ $sayfala .="<li><a class=\"current\" href=\"".$link.($sayfa-$x-10)."\">[".($sayfa-$x-10)."]</a></li>"; }
	for($i; $i<=$sayfa+$x; $i++) { 
		if($i==$sayfa){ $sayfala .="<li><a class=\"current\"> $i </a></li>"; }else{ $sayfala .="<li><a href=\"".$link.$i."\"> $i </a></li>"; }
		if($i==$toplamsayfa) break; 
	} 
	if($sayfa+$x+10 < $toplamsayfa){ $sayfala .="<li><a class=\"current\" href=\"".$link.($sayfa+$x+10)."\">[".($sayfa+$x+10)."]</a></li>"; }
	if($sayfa < $toplamsayfa){
		$sonraki = $sayfa+1; $sayfala .="<li><a href=\"".$link.$sonraki."\">Sonraki</a></li>";
		$sayfala .="<li><a href=\"".$link.$toplamsayfa."\">Son &raquo;</a></li>";
	} 
}
echo $sayfala;
echo "<br><br>$toplamkayit Dosya Bulundu<br>";
echo "Toplam ".$toplamsayfa." sayfa, şu anda ".$sayfa.". Sayfadasiniz..";
}
?>