<?php
    $mysql  = new mysqli('localhost','root','','Accounts');
    $mysql->query('SET NAMES "utf8"');
    if  ($mysql->connect_error){
        echo '<pre> Ошибка подключения :'. $mysql->connect_errno .'</pre>';
        $mysql->close();
        die();
    }
?>