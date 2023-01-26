<?php
session_start();
if(!$_SESSION['password']){
    header('Location: login.php');
}
?>
<?php include "../head.php" ?>
<?php
if(isset($_POST['send'])){
    if(!empty($_POST['title']) AND !empty($_POST['content'])){
        $dataImage = [
            'img_link' => 'img-blog/' .$_FILES["img_blog"]["name"],
            'img_file' => $_FILES["img_blog"]["tmp_name"]
        ];
        $data = [
            "title" => htmlspecialchars($_POST['title']),
            "content" => nl2br($_POST['content']),
            "img_link" => $dataImage['img_link'],
            "theme" => $_POST['theme']
        ];
        move_uploaded_file($dataImage['img_file'], $dataImage['img_link']);

        $insertArticle = $database->prepare('INSERT INTO articles (articles_title, articles_content, articles_img_link, articles_theme) VALUES(:title, :content, :img_link ,:theme)');
        $insertArticle->execute($data);

        echo "Article was send";
    }else{
        echo "Need to fill all Input";
    }
}
?>
<script>
    tinymce.init({
    selector: '#content_blog'
    });
</script>
<form method="POST" action="" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Titre de l'article">
    <br>
    <textarea name="content" id="content_blog" placeholder="Contenu de l'article"></textarea>
    <br>
    <select name="theme" id="themearticle">
        <option value="all">Choisir un thème</option>
        <option value="econo">Economie</option>
        <option value="news">News</option>
        <option value="ecolo">Ecologie</option>
    </select>
    <br>
    <input type="file" accept="image/png, image/jpg" name="img_blog">
    <br><br><br>
    <button type="submit" name="send">Envoyer L'article</button>
</form>
</body> 
</html> 
