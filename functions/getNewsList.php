<?php
require_once ROOTPATH . "/config/database.php";

function getNewsList()
{
  $pdo = databaseConnect();
  $sql = "SELECT * FROM news";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $news = $stmt->fetchAll(PDO::FETCH_OBJ);

  return $news;
}
