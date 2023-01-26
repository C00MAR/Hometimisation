<?php
    $GetArticle = $database->prepare("SELECT * FROM articles ORDER BY articles_id ASC");
    $GetArticle->execute();
    $AllArticle = $GetArticle->fetchAll(PDO::FETCH_ASSOC);
?>


<section class="blog-page">
    <div class="container">
        <div class="main">
        <div class="TArticle">
            <h1 class="PArticle">
                Nos Articles
            </h1>
            <div class="filter-btn">
                <button class="filterbtn" onclick="filterObjects('all')">Tous</button>
                <button class="filterbtn" onclick="filterObjects('news')">News</button>
                <button class="filterbtn" onclick="filterObjects('econo')">Economie</button>
                <button class="filterbtn" onclick="filterObjects('ecolo')">Ecologie</button>
            </div>
        </div>
            <?php foreach($AllArticle as $post) { ?>
                <div class="boxarticle activearticle <?= $post["articles_theme"]; ?>">
                    <div class="titlebox">
                        <h1 class="titletext">
                            <?= $post["articles_title"]; ?>
                        </h1>
                    </div>
                    <div class="contentbox">
                        <p class="contenttext">
                            <?= $post["articles_content"]; ?>
                        </p>
                    </div>
                    <div class="imgbox">
                        <img src="admin_part/<?= $post["articles_img_link"]; ?>" alt="">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<script>
    filterObjects("all");

    function filterObjects(c){
        var x, i;
        x = document.getElementsByClassName("boxarticle");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++){
            removeClass(x[i], "activearticle");
            if(x[i].className.indexOf(c) > -1) addClass(x[i], "activearticle")
        }
    }

    function addClass(element, name){
        var i, arr1, arr2,
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for(i = 0; i < arr2.length; i++){
            if(arr1.indexOf(arr2[i]) == -1){
                element.className += " " + arr2[i];
            }
        }
    }

    function removeClass(element, name){
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i= 0; i < arr2.length; i++){
            while(arr1.indexOf(arr2[i])  > -1){
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }

    /* DarkMode */

    const dark = document.querySelector('.darkmode-btn');

    dark.addEventListener('click', () => {
        console.log("Boutton cliqué");
        const body = document.body;
        const htmlbg = document.querySelector('.html')
        
        if(body.classList.contains('dark')){
            console.log("Mode changé sur Dark");
                body.classList.add('light');
                body.classList.remove('dark');
                dark.style.transform = "rotate(180deg)"
                dark.style.filter = "invert(1)"


        } else{
            console.log("Mode changé sur Light");
                body.classList.add('dark');
                body.classList.remove('light');
                dark.style.transform = "rotate(0deg)"
                dark.style.filter = "invert(0)"
            }
    })

</script>