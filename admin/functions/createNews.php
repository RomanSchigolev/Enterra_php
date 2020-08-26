<?php
require_once("./uploadImage.php");
require_once("./uploadData.php");
require_once("./uploadDefaultImg.php");

if (count($_POST) > 0) {
  $newsTitle = trim($_POST["newsTitle"]);
  $newsContent = trim($_POST["newsContent"]);
  $currentTime = time();

  if (isset($_FILES["newsImage"]) && $_FILES["newsImage"]["tmp_name"] != '') {
    $newsImage = uploadImage($_FILES["newsImage"]);
  } else {
    $newsImage = uploadDefaultImg(ROOTPATH . "/img/default.jpg");
  }
  uploadData($newsTitle, $newsContent, $newsImage, $currentTime);

  header("Location: ../");
}
