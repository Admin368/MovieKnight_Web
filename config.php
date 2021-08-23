<?php
    // $dbhost = 'localhost';
    // $dbname = 'chat';
    // $dbuser = 'admin';
    // $dbpass = 'Admin1234567890';
    $dbhost = 'localhost';
    $dbname = 'movizo';
    $dbuser = 'root';
    $dbpass = '';
    
    try{
        $db = new PDO("mysql:dbhome=$dbhost;dbname=$dbname;charset=utf8mb4", "$dbuser", "$dbpass");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch( PDOException $e ){
        Echo "Sorry Your Previlages are Denied<br>";
        Echo "Please Contact The Admin68<br>";
        Echo "Error Reason :<br>";
        Echo $e->getMessage();
    }
?>