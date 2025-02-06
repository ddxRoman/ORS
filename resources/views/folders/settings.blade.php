@vite(['resources/js/app.js','resources/css/main.css','resources/css/taskmanager.css'])
@vite(['resources/css/button.css'])
    <body>
<div class="header_settings">
    <a href="../../index_admin.php">
    <a href="../../index.php"><button class="btn-return btn btn-primary btn-lg">На главную</button></a> 
</a>
</div>

<div class=" text-center justify-align-center align-center">
  <button class="btn btn-secondary" data-toggle="button" autocomplete="off" onclick="openCity(event, 'Тема')">Тема</button>
  <button class="btn btn-secondary" data-toggle="button" autocomplete="off" onclick="openCity(event, 'Кнопки')">Кнопки</button>
  <button class="btn btn-secondary" data-toggle="button" autocomplete="off" onclick="openCity(event, 'Шрифты')">Шрифты</button>

</div>

<div id="Тема" class="tabcontent text-center">

                
<form action="color.php" name="bg" method="post">
                <table>
<tr>
    <th>Выберете фоновый цвет: </th>
    <th><input name="bg" type="color" value="$fff"><br></th>
</tr>
<tr>
    <th>Выберете цвет текста:</th>
    <th><input name="txtColor" type="color" value="#fff"><br></th>
</tr>
<tr>
    <th>Выберете цвет кнопок:</th>
    <th><input name="btn_color" type="color" value="#fef"><br></th>
</tr>
</table>
    <button class="btn btn-success">Применить</button>
    </form>
</div>

<div id="Кнопки" class="tabcontent text-center">

<h3>Добавление кнопок:</h3>
<form action="" method="post" >
    <input required name="button" type="text" placeholder="Название кнопки">
    <input required type="text" name="url" placeholder="URL кнопки"><br>
    <br>
    <button class="btn btn-success">Добавить</button>
</form>
</div>
<script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
<div id="Шрифты" class="tabcontent text-center">

<h3>Настройки шрифта</h3>
Тут пока ничего нет
</div>

<script src="../../js/bootstrap.bundle.min.js"></script>

<!-- <iframe src="../../index.php" class="settings_frame" frameborder="0"></iframe> -->
<div class="settings_preview">

<div class="lmenu"> 
           <button>Примеры</button>
           <button>Примеры</button>
           <button>Примеры</button>
           <button>Примеры</button>
           <button>Примеры</button>
           <button>Примеры</button>
           <button>Примеры</button>
             </div>
</div>

</body>
<footer class="footer-fluid text-center">
        <h4>
        Bootstrap
    </h4>
    </footer>