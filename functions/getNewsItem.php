<?php
require_once ROOTPATH . "/config/database.php";

function getNewsItem($newsId)
{
  $pdo = databaseConnect();
  $sql = "SELECT * FROM news WHERE news_id = :news_id";
  $field = ["news_id" => $newsId];
  $stmt = $pdo->prepare($sql);
  $stmt->execute($field);
  $newsItem = $stmt->fetch(PDO::FETCH_OBJ);

  return $newsItem;
}
