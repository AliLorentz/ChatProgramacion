<?php
 $server = 'localhost';
 $username = 'root';
 $password = '';
 $database = 'social';
 try{
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
 }catch(PDOException $e){
    die('Coneection Failed:'.$e->getMessage());
 }
?>