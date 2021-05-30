<?php
/*
 * Silinecek dosyaların bulunduğu dizin
 */
$dir = "uploads/";
/* 
 * Dizindeki tüm dosyalara işlem uygulanır 
 */
foreach (glob($dir."*") as $file) {
/* 
 * 1 gün = 24 saat = 86400 saniye (bir günden eski tüm dosyaları siler 
 */
if(time() - filectime($file) > 864000){
unlink($file);
}
}