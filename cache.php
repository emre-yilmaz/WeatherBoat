<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />

<?php

require "Connection.php";

$db = Connection::create();
$dosya=md5("veriler").".html";
$cache= "/Users/ozgekaya/cache/".$dosya;
$sure=20;

if(time() - $sure < filemtime($cache)){
readfile($cache);
}else{

	ob_start();

	$query = $db->query("SELECT * FROM havatahmin", PDO::FETCH_ASSOC);
	if ( $query->rowCount() ){
		foreach( $query as $row ){
			print $row['il']." ";
			print $row['derece']."<br />";
			print $row['durum']."<br />";
		}
	}


	$ac= fopen($cache,"w+");
	fwrite($ac,ob_get_contents());
	fclose($ac);
	ob_end_flush();
}





?>