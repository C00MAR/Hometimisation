<?php
try {
    $database = new PDO("mysql:host = localhost;dbname=HomeTimisation", "root", "root");
} catch(PDOException $error){
    echo $error;
    die;
}
?>