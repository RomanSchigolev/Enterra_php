<?php
require("../../root.php");
require(ROOTPATH . "/functions/getNewsItem.php");
$newsItem = getNewsItem($_POST["newsId"]);

require_once("./editNewsWithoutImg.php");
require_once("./editNewsWithImg.php");
require_once("./rewriteImage.php");

if (isset($_POST['formSubmit'])) {
  $newsId = $_POST["newsId"];
  $newsTitle = trim($_POST["newsTitle"]);
  $newsContent = trim($_POST["newsContent"]);
  $currentTime = time();

  $imgSize = $_FILES['newsImage']['size'];
  $oldImage = $newsItem->news_img;

  if ($imgSize !== 0) {
    $newsImage = rewriteImage($oldImage, $_FILES["newsImage"]);
    editNewsWithImg($newsId, $newsTitle, $newsContent, $newsImage, $currentTime);
    header("Location: ../pageNewsList.php");
  } else {
    editNewsWithoutImg($newsId, $newsTitle, $newsContent, $currentTime);
    header("Location: ../pageNewsList.php");
  }
}
