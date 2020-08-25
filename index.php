<?php
require "./functions/getNewsList.php";
$newsList = getNews();

date_default_timezone_set('Asia/Barnaul');
function date_ru($timestamp, $show_time = false)
{
  if (empty($timestamp)) {
    return '-';
  } else {
    $now   = explode(' ', date('Y n j H i'));
    $value = explode(' ', date('Y n j H i', $timestamp));

    if ($now[0] == $value[0] && $now[1] == $value[1] && $now[2] == $value[2]) {
      return 'Сегодня в ' . $value[3] . ':' . $value[4];
    } else {
      $month = array(
        '', 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня',
        'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'
      );
      $out = $value[2] . ' ' . $month[$value[1]] . ' ' . $value[0];
      if ($show_time) {
        $out .= ' в ' . $value[3] . ':' . $value[4];
      }
      return $out;
    }
  }
}
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
        <div class="section__title mb-5">
          <h1>Список новостей</h1>
        </div>
        <ul class="news__list list-group align-items-center">
          <?php foreach ($newsList as $newsItem) : ?>
            <li class="news__item w-75 mb-5">
              <div class="news__content">
                <div class="news__date mb-3">
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
                  <span class="text-dark"><?= date("d F Y H:i", $newsItem->news_date) ?></span>
                </div>
                <div class="news__img mb-3">
                  <img class="h-auto w-100" src="./uploads/<?= $newsItem->news_img ?>" alt="News Image">
                </div>
                <h2 class="news__title">
                  <a href="./news.php?news_id=<?= $newsItem->news_id ?>" class="news__title__link text-dark"><?= $newsItem->news_title ?></a>
                </h2>
                <p class="news__text"><?= mb_substr($newsItem->news_content, 0, 128, 'UTF-8') . "..." ?></p>
                <div class="news__link">
                  <a href="./news.php?news_id=<?= $newsItem->news_id ?>" class="news__link btn btn-dark">Читать дальше</a>
                </div>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>
  </main>
</body>

</html>