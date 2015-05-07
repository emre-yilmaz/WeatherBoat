
<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
<?php
include "pdo.php";
include "Connection.php";


$il = "samsun";

$veri_al= file_get_contents('http://www.havadurumu.com.tr/havadurumu/' .$il. '');

preg_match_all('@<span class="cur_temp">\s+(.*)</span>@iu', $veri_al,$veri_derece);

preg_match_all('@<img src="/icons/(.*?)" alt="(.*?)" title="(.*?)">@si',$veri_al, $veri_durum);




$derece= $veri_derece[1][0];
$durum = $veri_durum[2][0];
//var_dump($veri_derece); die;



/*
echo "<pre>";
    print_r($veri_durum);
echo "</pre>";
*/

/*
echo $veri_derece[1][0];
echo $veri_durum[2][0];

*/




$bot = new bot();
$bot->veritabani_ekle($il,$veri_derece[0][0],$veri_durum[2][0]);


?>