<section>
  <div class="container">
    <div class="card mt-5 shadow rounded">
      <div class="card-header">
        <h1>Создание новости</h1>
      </div>
      <div class="card-body">
        <form method="post" action="../admin/functions/createNews.php" class="form" name="form" id="form" enctype="multipart/form-data">
          <div class="form-group form">
            <label for="newsTitle">Заголовок:</label>
            <input type="text" class="form-control" id="newsTitle" name="newsTitle">
          </div>
          <div class="form-group">
            <label for="newsContent">Текст:</label>
            <textarea class="form-control" id="newsContent" name="newsContent" rows="6"></textarea>
          </div>
          <div class="form-group">
            <label for="newsImage">Загрузить изображение:</label>
            <input type="file" class="form-control-file" id="newsImage" name="newsImage">
          </div>
          <button type="submit" class="btn btn-success btn-lg px-5">Создать</button>
        </form>
      </div>
    </div>
  </div>
</section>