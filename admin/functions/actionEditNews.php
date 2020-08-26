<?php
require_once("./editNewsWithoutImg.php");
require_once("./editNewsWithImg.php");
require_once("./test_img.php");


if (isset($_POST['formSubmit'])) {
  $newsId = $_POST["newsId"];
  $newsTitle = trim($_POST["newsTitle"]);
  $newsContent = trim($_POST["newsContent"]);
  $currentTime = time();

  $imgSize = $_FILES['newsImage']['size'];
  $img_url = $_FILES['newsImage']['name'];
  $tmp_name_img = $_FILES['newsImage']['tmp_name'];

  if ($imgSize !== 0) {
    $newsImage = ROOTPATH . "/img/default.jpg";
    echo pathinfo(basename($newsImage), PATHINFO_FILENAME);
    // update_news_with_img($id, $title, $img_url, $tmp_name_img, $size_img, $old_img_url, $date, $url, $html);
    // header("Location: ../pageNewsList.php");
  } else {
    editNewsWithoutImg($newsId, $newsTitle, $newsContent, $currentTime);
    header("Location: ../pageNewsList.php");
  }
}
