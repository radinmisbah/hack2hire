<?php

$host = "localhost";
$dbName = "fms";
$username = "manager";
$pswd = "mgr123";

try {

    $db = new PDO ("mysql:host=$host;dbname=$dbName", $username,$pswd);

    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"Database connected <br>";

}catch (PDOExcepyion $e){
    echo "Connectio Failed:".$e->getMessage();
}
?>