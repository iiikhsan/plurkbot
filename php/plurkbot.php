<?php
require('php-plurk-api/plurk_api.php');
$api_key = 'b3LSmyXgymdyL64KUTdBjui2nkqvIry6';
$username = 'plurkbot';
$password = 'password.100';
$depan = 'XKCD today:  ';
$buka = file_get_contents("xkcd.txt");
$pesan = $depan.$buka; 
$plurk = new plurk_api();
$plurk->login($api_key, $username, $password);
$message = $pesan;
$plurk->add_plurk('en', ':', $message);
?>
