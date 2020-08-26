<?php
require_once "./root.php";
require ROOTPATH . "/functions/getNewsItem.php";
$newsItem = getNewsItem($_GET["news_id"]);
?>

<!doctype html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
  <title>Пользователь - Список новостей</title>
</head>

<body>
  <?php include "./components/header.php" ?>
  <main>
    <section class="section py-5">
      <div class="container">
        <div class="news__content">
          <div class="news__date mb-2">
            <svg class="news__date__icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
              <g>
                <g>
                  <path d="M452,40h-24V0h-40v40H124V0H84v40H60C26.916,40,0,66.916,0,100v352c0,33.084,26.916,60,60,60h392
			c33.084,0,60-26.916,60-60V100C512,66.916,485.084,40,452,40z M472,452c0,11.028-8.972,20-20,20H60c-11.028,0-20-8.972-20-20V188
			h432V452z M472,148H40v-48c0-11.028,8.972-20,20-20h24v40h40V80h264v40h40V80h24c11.028,0,20,8.972,20,20V148z" />
                </g>
              </g>
              <g>
                <g>
                  <rect x="76" y="230" width="40" height="40" />
                </g>
              </g>
              <g>
                <g>
                  <rect x="156" y="230" width="40" height="40" />
                </g>
              </g>
              <g>
                <g>
                  <rect x="236" y="230" width="40" height="40" />
                </g>
              </g>
              <g>
                <g>
                  <rect x="316" y="230" width="40" height="40" />
                </g>
              </g>
              <g>
                <g>
                  <rect x="396" y="230" width="40" height="40" />
                </g>
              </g>
              <g>
                <g>
                  <rect x="76" y="310" width="40" height="40" />
                </g>
              </g>
              <g>
                <g>
                  <rect x="156" y="310" width="40" height="40" />
                </g>
              </g>
              <g>
                <g>
                  <rect x="236" y="310" width="40" height="40" />
                </g>
              </g>
              <g>
                <g>
                  <rect x="316" y="310" width="40" height="40" />
                </g>
              </g>
              <g>
                <g>
                  <rect x="76" y="390" width="40" height="40" />
                </g>
              </g>
              <g>
                <g>
                  <rect x="156" y="390" width="40" height="40" />
                </g>
              </g>
              <g>
                <g>
                  <rect x="236" y="390" width="40" height="40" />
                </g>
              </g>
              <g>
                <g>
                  <rect x="316" y="390" width="40" height="40" />
                </g>
              </g>
              <g>
                <g>
                  <rect x="396" y="310" width="40" height="40" />
                </g>
            </svg>
            <span class="text-dark">25 августа 2020 20:34</span>
          </div>
          <h2 class="news__title mb-3"><?= $newsItem->news_title ?></h2>
          <div class="news__img mb-3">
            <img class="h-auto w-100" src="./uploads/<?= $newsItem->news_img ?>" alt="News Image">
          </div>
          <p class="news__text"><?= $newsItem->news_content ?></p>
        </div>
      </div>
    </section>
  </main>
</body>

</html>