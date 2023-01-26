<?php
session_start();
if(!$_SESSION['password']){
    header('Location: login.php');
}
?>
<?php include "../head.php" ?>
    <?php
        $GetUsers = $database -> query('SELECT * FROM users');
        while($users = $GetUsers->fetch()){
            ?>
            <p><?= $users['users_prenom']; ?> <a href="ban.php?id=<?= $users['users_id']; ?>">Ban Membre</a></p>
            <?php
        }
    ?>
</body> 
</html> 