<?php
/**
 * Created by PhpStorm.
 * User: ozgekaya
 * Date: 6.05.2015
 * Time: 15:50
 */

class Connection {

    public static  function create(){

        $dsn = 'mysql:dbname=havatahmin_bot;host=LOCALHOST';
        $user = 'root';
        $password = '';

        try
        {
            return new PDO($dsn, $user, $password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (PDOException $e) {
            echo 'Bağlantı Sağlanılamadı.: ' . $e->getMessage();
        }

    }

} 