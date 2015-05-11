<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
<?php
$il= "sakarya";
$link ="http://havadurumu.com.tr/havadurumu/".$il;
$parcala= '@<td style="text-align: center;">(.*?)</td>@si'; // 15 günlük hava raporu regex.

$botara=file_get_contents($link);
preg_match_all($parcala,$botara,$ifade);

$parcala2 = '@<td style="text-align: left;">(.*?)</td>@si';
preg_match_all($parcala2,$botara,$ifade2);

$parcala3= '@<td>(.*?)</td>@si';
preg_match_all($parcala3,$botara,$ifade3);

$sayac=0;
for($i=0;$i<30;$i++){

	if($i%2==0){
		$sicaklik[0][$sayac]=$ifade[0][$i];
		$tarih[$sayac]=$ifade3[0][$i];
		$sayac++;
	}
	else{
		$sicaklik[1][$sayac]=$ifade[1][$i];
	}
}

for($i=0; $i<15; $i++){
	echo $tarih[$i]."<br/>"."Gündüz: ".$sicaklik[0][$i]." "."Durum:  ".$ifade2[0][$i]."<br/>"."Gece: ".$sicaklik[1][$i+1]."<br/>"."<br/>";
}

/*
 * $sicaklik[ilk_indis][ikinci_indis]
 * ilk indis :(0,1) 0 gündüz, 1 gece
 * ikinci indis :(0-14) 1-15 arası günlerin sıcaklığı.
 * ---------------------------------
 * $tarih[indis]
 * indis:(0-14) 1-15 arası günlerin tarihi.
 * ---------------------------------
 * $ifade2[0][indis]
 * indis:(0-14) 1-15 arası gunlerin sıcaklık durum bilgisi.
 */


?>