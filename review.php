<?php   require "database/connect.php";
        $getreview = $database->prepare("SELECT * FROM review ORDER BY review_id DESC");
        $getreview ->execute();
        $allreview = $getreview->fetchAll(PDO::FETCH_ASSOC) ?>

    <section class="review-page">
        <div class="container">
            <div class="main">
                <div class="titlereview">
                    <h1 class="textreview">
                        Nos Avis
                    </h1>
                </div>
                <?php 
                $limit = 0;
                $name = "Marc";
                foreach($allreview as $review){ ?>
                    <section class="containerreview">
                        <div class="review">
                            <h1 class="username"><?php echo $review["review_name"];?></h1>
                            <h2 class="reviewstar">
                                <?php 
                                for($i = 1; $i <= $review["review_star"]; $i++){
                                    echo("★");
                                }
                                ?>
                            </h2>
                            <h3 class="titlereview"><?php echo $review["review_title"]; ?></h3>
                            <p class="commenttext"><?php echo $review["review_comment"]; ?></p>
                        </div>
                    </section>
                <?php
                $limit++;
                if($limit==3){
                    break;
                }
                } ?>
            </div>
        </div>
    </section>
    <script src="script.js"></script>