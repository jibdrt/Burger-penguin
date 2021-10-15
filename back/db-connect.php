<?php
$servername='localhost';
$dbname='backoffice';
$username='root';
$password='';
try {
    $db = new PDO ("mysql:host=$servername; dbname=$dbname",$username,$password);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*     echo 'success'; */
} catch (PDOException $e) {
    echo 'connexion failed'.$e->getMessage();
}