<?php
require("../../root.php");
require_once ROOTPATH . "/config/database.php";

function editNewsWithImg($newsId, $newsTitle, $newsContent, $newsImage, $newsDate)
{
  $pdo = databaseConnect();
  $sql = "UPDATE news SET news_title=:news_title, news_content=:news_content, news_img=:news_img, news_date=:news_date WHERE news_id=:news_id";
  $fields = ["news_id" => $newsId, "news_title" => $newsTitle, "news_content" => $newsContent, "news_img" => $newsImage, "news_date" => $newsDate];
  $stmt = $pdo->prepare($sql);
  $stmt->execute($fields);
}
