<?php

require_once "./config/database.php";

function getNews()
{
  $pdo = databaseConnect();
  $sql = "SELECT * FROM news";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $news = $stmt->fetchAll(PDO::FETCH_OBJ);

  return $news;
}
