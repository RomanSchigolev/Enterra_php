<?php
require("../../root.php");
require_once ROOTPATH . "/config/database.php";

function editNewsWithoutImg($newsId, $newsTitle, $newsContent, $newsDate)
{
  $pdo = databaseConnect();
  $sql = "UPDATE news SET news_title=:news_title, news_content=:news_content, news_date=:news_date WHERE news_id=:news_id";
  $fields = ["news_id" => $newsId, "news_title" => $newsTitle, "news_content" => $newsContent, "news_date" => $newsDate];
  $stmt = $pdo->prepare($sql);
  $stmt->execute($fields);
}
