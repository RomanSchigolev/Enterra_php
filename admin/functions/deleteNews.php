<?php
require("../../root.php");
require_once ROOTPATH . "/config/database.php";

$newsId = $_GET["news_id"];

function deleteNews($newsId)
{
  $pdo = databaseConnect();
  $sql = "DELETE FROM news WHERE news_id = :news_id";
  $stmt = $pdo->prepare($sql);
  if ($stmt->execute(["news_id" => $newsId])) {
    header("Location: ../pageNewsList.php");
  }
}
deleteNews($newsId);
