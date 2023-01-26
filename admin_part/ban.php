<?php
session_start();
include "../database/connect.php";
if(isset($_GET['id'])AND !empty($_GET['id'])){
    $GetID = $_GET['id'];
    $GetUsers = $database->prepare('SELECT * FROM users WHERE users_id = ?');
    $GetUsers->execute(array($GetID));
    if($GetUsers->rowCount() > 0){
        
        if($GetID > 0){
        $BanUser = $database->prepare('DELETE FROM users WHERE users_id = ?');
        $BanUser->execute(array($GetID));
        }else{
            echo "Admin Can't be ban";
        }

        header('Location: member.php');

    }else{
        echo "No User Find";
    }
}else{
    echo "No ID Find";
}