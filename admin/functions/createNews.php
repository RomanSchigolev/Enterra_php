<?php
$rootPath = $_SERVER['DOCUMENT_ROOT']; // C:/MAMP/htdocs/

require_once("./uploadImage.php");
require_once("./uploadData.php");

if (count($_POST) > 0) {
  $newsTitle = trim($_POST["newsTitle"]);
  $newsContent = trim($_POST["newsContent"]);
  $currentTime = time();

  if (isset($_FILES["newsImage"]) && $_FILES["newsImage"]["tmp_name"] != '') {
    $newsImage = uploadImage($_FILES["newsImage"]);
  } else {
    $newsImage = "default.jpg";
    move_uploaded_file($_FILES["newsImage"]["tmp_name"], "../../uploads/" . $newsImage);
  }
  uploadData($newsTitle, $newsContent, $newsImage, $currentTime);

  header("Location: ../");
}
