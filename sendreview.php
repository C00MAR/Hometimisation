<?php
require "database/connect.php";
$star = 4;
$titlereview = $_POST['titre'];
$content = $_POST['content'];
$star = $_POST['star'];

$data = [
    'review_name' => "Marc",
    'review_title' => $titlereview,
    'review_comment' => $content,
    'review_star' => $star
];

$reviewsend = $database->prepare("INSERT INTO review (review_name, review_comment, review_star, review_title) 
VALUES (:review_name, :review_comment, :review_star, :review_title)");
if($reviewsend->execute($data)){
    header("Location: product_page.php");
    exit;
} else{
    echo "An error occurred while sending";
}?>