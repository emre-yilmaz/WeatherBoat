
<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
<?php
include "pdo.php";
include "Connection.php";

$iller = array('Adana', 'Adıyaman', 'Afyon', 'Ağrı', 'Amasya', 'Ankara', 'Antalya', 'Artvin',
	'Aydın', 'Balıkesir', 'Bilecik', 'Bingöl', 'Bitlis', 'Bolu', 'Burdur', 'Bursa', 'Çanakkale',
	'Çankırı', 'Çorum', 'Denizli', 'Diyarbakır', 'Edirne', 'Elazığ', 'Erzincan', 'Erzurum', 'Eskişehir',
	'Gaziantep', 'Giresun', 'Gümüşhane', 'Hakkari', 'Hatay', 'Isparta', 'Mersin', 'İstanbul', 'İzmir',
	'Kars', 'Kastamonu', 'Kayseri', 'Kırklareli', 'Kırşehir', 'Kocaeli', 'Konya', 'Kütahya', 'Malatya',
	'Manisa', 'Kahramanmaraş', 'Mardin', 'Muğla', 'Muş', 'Nevşehir', 'Niğde', 'Ordu', 'Rize', 'Sakarya',
	'Samsun', 'Siirt', 'Sinop', 'Sivas', 'Tekirdağ', 'Tokat', 'Trabzon', 'Tunceli', 'Şanlıurfa', 'Uşak',
	'Van', 'Yozgat', 'Zonguldak', 'Aksaray', 'Bayburt', 'Karaman', 'Kırıkkale', 'Batman', 'Şırnak',
	'Bartın', 'Ardahan', 'Iğdır', 'Yalova', 'Karabük', 'Kilis', 'Osmaniye', 'Düzce');

foreach($iller as $il) {

	$veri_al= file_get_contents('http://www.havadurumu.com.tr/havadurumu/' .$il. '');

	preg_match_all('@<span class="cur_temp">\s+(.*)</span>@iu', $veri_al,$veri_derece);

	preg_match_all('@<img src="/icons/(.*?)" alt="(.*?)" title="(.*?)">@si',$veri_al, $veri_durum);


	$derece= $veri_derece[1][0];
	$durum = $veri_durum[2][0];

	$bot = new bot();
	$bot->veritabani_ekle($il,$derece,$durum);

}

//$il = "Istanbul";





//var_dump($veri_derece); die;



/*
echo "<pre>";
    print_r($veri_durum);
echo "</pre>";
*/

/*
echo $derece." ";
echo $durum;
*/





?>