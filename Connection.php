<?php
/**
 * Created by PhpStorm.
 * User: ozgekaya
 * Date: 6.05.2015
 * Time: 15:50
 */

class Connection {

    public static  function create(){

        $dsn = 'mysql:dbname=havatahmin_bot;host=LOCALHOST;charset=utf8';
        $user = 'root';
        $password = '';

        try
        {
            return new PDO($dsn, $user, $password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND => "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'"]);
        } catch (PDOException $e) {
            echo 'Bağlantı Sağlanılamadı.: ' . $e->getMessage();
        }


    }

} 