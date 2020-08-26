<?php
require "../root.php";
require(ROOTPATH . "/functions/getNewsItem.php");
$newsItem = getNewsItem($_GET["news_id"]);
date_default_timezone_set('Asia/Barnaul');
?>

<!doctype html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="../main.css">
  <title>Document</title>
</head>

<body>
  <?php require("./components/header.php") ?>
  <main>
    <section class="section py-5">
      <div class="container">
        <div class="section__title mb-4">
          <h1>Редактирование новости</h1>
        </div>
        <div class="card-body">
          <form method="post" action="../admin/functions/actionEditNews.php" class="form" name="form" id="form" enctype="multipart/form-data">
            <input type="hidden" id="newsId" name="newsId" value="<?= $newsItem->news_id ?>">
            <div class="form-group form__title">
              <label for="newsTitle">Заголовок:</label>
              <input type="text" class="form-control" id="newsTitle" name="newsTitle" value="<?= $newsItem->news_title ?>">
            </div>
            <div class="form-group form__content">
              <label for="newsContent">Текст:</label>
              <textarea class="form-control" id="newsContent" name="newsContent" rows="15"><?= $newsItem->news_content ?></textarea>
            </div>
            <div class="form-group form__old__img">
              <span>Старая картинка:</span>
              <img class="h-auto w-100" src="../uploads/<?= $newsItem->news_img ?>" alt="Old news Image">
            </div>
            <div class="form-group form__file">
              <label for="newsImage">Загрузить новое изображение:</label>
              <input type="file" class="form-control-file" id="newsImage" name="newsImage">
            </div>
            <div class="form__actions d-flex justify-content-between">
              <button type="submit" class="btn btn-success btn-lg px-5" id="formSubmit" name="formSubmit">Готово</button>
              <a href="pageNewsList.php" class="btn btn-secondary btn-lg px-5">Отмена</a>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>
</body>

</html>