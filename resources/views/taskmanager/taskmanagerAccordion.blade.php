<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/styleaccordion.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Менеджер Задач</title>
</head>

<body>
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Добавить новую задачу</button>

<div class="offcanvas offcanvas-end " data-bs-scroll="true" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
  </div>
  <div class="offcanvas-body">
<body class="iframe-body">
    <div class="taskadd">
    <form action="../action/addtask.php" method="POST" >
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
       <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <!------------------------------------------------------------------------------------- Вывод таски с статусом актуально ----------------------------------------------------------------->
                    <div class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse" aria-expanded="false" aria-controls="flush-collapse" style="background: linear-gradient(45deg, #c436369a, #d0d7d8, #d0d7d8, #d0d7d8, #c4363667)">
                            <a href="#" target="_blank">
                                <p class="number"> № :</p>
                            </a><!-- Вот тут ссылка на весь экран-->
                            <p class="nametasks"></p>
                            <font class="prioritet-task0 text-right">Backlog</font>
                        </button>
                    </div>
                    <div id="flush-collapse" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
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
                                <pre></pre>

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
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>