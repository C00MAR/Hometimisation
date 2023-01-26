<?php
session_start();
if(isset($_POST['next'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['password'])){
        $default_admin_pseudo = "root";
        $default_admin_pasword = "root";

        $pseudo_fill = htmlspecialchars($_POST["pseudo"]);
        $password_fill = htmlspecialchars($_POST["password"]);
        
        if($pseudo_fill == $default_admin_pseudo AND $password_fill == $default_admin_pasword){
            $_SESSION['password'] = $password_fill;
            header('Location: admin_part/admin.php');
        }else{
            echo "Pseudo or Password Incorrect";
        }
    }else{
        echo "Please fill all input";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" class="pseudo" name="pseudo" autocomplete="off" >
        <br>
        <input type="password" class="password" name="password">
        <br><br>
        <input type="submit" name="next"  class="next">
    </form>
</body>
</html>