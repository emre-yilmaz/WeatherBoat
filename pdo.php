<?php

class bot
{

    function veritabani_ekle($il, $derece, $durum)
    {

        /*
        $Ad=$_POST['ad'];
        $Soyad=$_POST['soyad'];
        $Sehir=$_POST['sehir'];
        $Tel=$_POST['tel'];
        $Yorum=$_POST['yorum'];
        */

        if (isset($derece)) { //veri geldi ise sisteme giriyoruz
            //mysqle bağlanıyoruz
            $db = Connection::create();
            $query = $db->prepare("INSERT INTO havatahmin SET
              il  = ?,
              derece = ?,
              durum = ?");
            $insert = $query->execute(array(
                $il, $derece, $durum
            ));
            if ($insert) {
                print "insert işlemi başarılı!";
            } else {
                echo "yanlis bisi var";
            }


        }
    }

}


?>