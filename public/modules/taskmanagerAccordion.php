<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/taskmanager.css') }}">
  <title>Taskmanager</title>
</head>

<body class="taskmanager_body">

  <button class="btn_add_task" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Добавить новую задачу</button>
  <div class="offcanvas offcanvas-end " data-bs-scroll="true" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
    </div>
    <div class="offcanvas-body">

      <body class="iframe-body">
        <h4>Надо делать, пилить, шоп нормально было</h4>
        <div class="taskadd">
          <form action="" method="POST">
            <input required type="text" name="name" placeholder="Введите название">


            <select name="prioritet">
              <option value="0">Backlog </option>
              <option value=" 1">Надо сделать</option>
              <option value=" 2">Нет знаний </option>
            </select>
            <br>
            <label>Суть задачи:</label><br>
            <textarea required type="text" name="body"></textarea><br>
            <button type="submit">Сохранить</button>
          </form>
        </div>
    </div>
  </div>

  <? for ($i = 0; $i < 5; $i++) { ?>
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h5 class="accordion-header" id="heading<?= $i ?>">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $i ?>" aria-expanded="false" aria-controls="collapse<?= $i ?>">
            Accordion Item <?= $i ?>
          </button>
        </h5>
        <div id="collapse<?= $i ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $i ?>" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <form action="" method="post" name="form"> <!-- форма с селектами-->
              <select name="currency" onchange="this.form.submit()">
                <? //if ($product[3] == 0) { 
                ?> <!-- Проверяем если статус задачи 1 то выводим Селект где первая запись Активный  -->
                <option value="0">Актуально</option>
                <option value="1">Выполнено</option>
                <option value="2">Не актуально</option>
                <? //}
                ?>
              </select>
              <a href=""><img width="16px" height="16px" title="Редактировать" src="../file/icons/edit.png"></a> <!-- Кнопка редактировать -->
              <select name="priority" onchange="this.form.submit()"><!-- Селект с сортировкой Статусов задач, выглядит как хуйня, надо переделать что бы тут был запрос и с запроса шел этот статус-->
                <option value="0">Backlog</option>
                <option value="1">Надо сделать</option>
                <option value="2">Нет знаний</option>
              </select>
              <form action="" method="post" name="real_delete">
                <a href=""><img src="/file/icons/delete.png" width="16px" height="16px"></a>
              </form>
            </form>
            <div class="accordion__content">
              <pre>
        <strong>This is the first item's accordion body.</strong> It is shown by default, until lorem55 the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
        </pre>

              <a href="" target="_blank"><img class="pictures-in-tasks" src=""></a>
            </div>
            <a title="Профиль автора" href="" target="_blank">
              <font class="owner">
              </font>
            </a>
            <font class="creation_date"><b>Создано:</b></font>
            <div class="comments-block">
              <a title="Профиль автора" href="" target="_blank">
                <font class="owner-comment"> </font>
              </a>
              <div class="block-add-comments">
                <form action="../action/addComents.php" method="post" enctype="multipart/form-data">
                  <textarea class="add-comments" name="contant"></textarea><br>
                  <input type="file" name="picture"><br>
                  <input type="hidden" name="id_task" value="">
                  <button>Добавить</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    <? } ?>

    </div>
</body>

</html>