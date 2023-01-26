<?php

require "./database/connect.php";

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$referal = $_POST['referal'];

$data = [
    "formNom" => $nom,
    "formPrenom" => $prenom,
    "formEmail" => $email,
    "formPassword" => $password,
    "formReferal" => $referal,
];

$sendData = $database->prepare("INSERT INTO users (users_nom, users_prenom, users_email, users_password, users_referal) 
VALUES (:formNom, :formPrenom, :formEmail, :formPassword, :formReferal)");
if ($sendData->execute($data)){
    header("Location: index.php");
    exit;
} else{
    echo "An error occurred while sending";
}?>