<?php
$connection_str = "mysql:host=localhost;dbname=mahara_tech";
$user = "root";
$pass = "";


try{
    $con = new PDO($connection_str,$user,$pass);
}
catch (PDOException $e)
{
    exit($e -> getMessage());
}
