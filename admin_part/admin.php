<?php
session_start();
if(!$_SESSION['password']){
    header('Location: login.php');
}
?>
<?php include "../head.php" ?>
    <a href="member.php">Membre</a>
    <a href="gestion_article.php">Article</a>

</body>
</html>