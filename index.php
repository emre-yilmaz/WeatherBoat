<?php
$il= "Bursa";
$link ="http://havadurumu.com.tr/havadurumu/".$il;
$parcala= '@<td style="text-align: center;">(.*?)</td>@si'; // 15 günlük hava raporu regex.

$botara=file_get_contents($link);
preg_match_all($parcala,$botara,$ifade);


echo "<pre>";
print_r($ifade);
echo "</pre>";




$parcala2 = '@<td style="text-align: left;">(.*?)</td>@si';

preg_match_all($parcala2,$botara,$ifade2);


echo "<br/>";

echo "<pre>";
print_r($ifade2);
echo "</pre>";

$parcala3= '@<td>(.*?)</td>@si';
preg_match_all($parcala3,$botara,$ifade3);

/*
echo "<pre>";
print_r($ifade3);
echo "</pre>";
*/

echo $ifade3[0][0];

//echo "Sehir: ".$il. " Gunduz: ".$ifade[0][0]. " Gece: ".$ifade[0][1]. " Durum: ".$ifade2[0][0];

//echo $ifade[1][1];


?>