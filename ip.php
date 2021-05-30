
<?php
	function ip_adres()  
	{  
		if (!empty($_SERVER['HTTP_CLIENT_IP']))  
		{  
			$ip	= $_SERVER['HTTP_CLIENT_IP'];  
		}  
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){  
			$ip	= $_SERVER['HTTP_X_FORWARDED_FOR'];  
		}  
		else{  
			$ip	= $_SERVER['REMOTE_ADDR'];  
		}  
		return $ip;  
	}  

	$ipcik = ip_adres();
	$tarih = date('d.m.Y H:i:s');
	$browser = getenv('HTTP_USER_AGENT'); // BROWSER: $browser - 
	$referans = $_SERVER['HTTP_REFERER'];

	$kayit = fopen("iplog.txt", "a");
	fputs($kayit, "IP: $ipcik - TARIH: $tarih - REFERANS: $referans \n");
	fclose($kayit);
	echo $ipcik;
?>