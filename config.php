<?php
    $dbhost = 'localhost';
    $dbname = 'chat';
    $dbuser = 'admin';
    $dbpass = 'Admin1234567890';
    try{
        $db = new PDO("mysql:dbhome=$dbhost;dbname=$dbname;charset=utf8mb4", "$dbuser", "$dbpass");
    }catch( PDOException $e ){
        Echo "Sorry Your Previlages are Denied<br>";
        Echo "Please Contact The Admin68<br>";
        Echo "Error Reason :<br>";
        Echo $e->getMessage();
    }
?>