<?php

require_once "../../config/database.php";

function uploadData($newsTitle, $newsContent, $newsImage, $newsDate)
{
  $pdo = databaseConnect();
  $sql = "INSERT INTO news(news_title, news_content, news_img, news_date) VALUES(:news_title, :news_content, :news_img, :news_date)";
  $fields = ["news_title" => $newsTitle, "news_content" => $newsContent, "news_img" => $newsImage, "news_date" => $newsDate];
  $stmt = $pdo->prepare($sql);
  $stmt->execute($fields);
}
