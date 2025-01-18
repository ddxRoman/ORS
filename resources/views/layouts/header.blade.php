<!DOCTYPE html>
<html lang="en">
@vite(['resources/js/app.js','resources/css/main.css'])
@vite(['resources/css/button.css'])
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORS</title>
</head>

<body class="all-page">
    <div class="wrapper">
        <header>
            <div class="header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-3">
                            <div class="my_life_with_wife">
                                <?php
                                $now = new DateTime(); // текущее время на сервере
                                $date = DateTime::createFromFormat("Y-m-d", '2022-10-28'); // задаем дату в любом формате
                                $interval = $now->diff($date); // получаем разницу в виде объекта DateInterval
                                if ($interval->y > 0) {
                                    $days = $interval->days;
                                } else {
                                    echo "тут вапще щотчык не сработал";
                                }

                                ?> <p class="count_married"><?= $days ?> Дней </p>

                                <?php
                                $now = new DateTime(); // текущее время на сервере
                                $date = DateTime::createFromFormat("Y-m-d", '2022-07-02'); // задаем дату в любом формате
                                $interval = $now->diff($date); // получаем разницу в виде объекта DateInterval
                                if ($interval->y > 0) {
                                    $days = $interval->days;
                                } else {
                                    echo "тут вапще щотчык не сработал";
                                }

                                ?> <p class="count_married"><?= $days ?> Дней </p>


                            </div>
                        </div>
                        <div class="col-6">
                            <div class="center_section_header">
                                <!--  Просто кнопка на Хелпер -->
                                @if(Request::is('/'))
                                <a href="{{route('admin')}}" target="_self">
                                    <!--  Просто кнопка на Админка -->
                                    <button class="center-section-header_button">Админка</button>
                                </a><!--  Просто кнопка на Админку-->
        @endif
        @if(Request::is('admin'))
        <a href="{{route('home')}}" target="_self">
                    <!--  Просто кнопка на Хелпер -->
                    <button class="center-section-header_button">Панель</button>
                </a><!--  Просто кнопка на Хелпер --> 
        @endif
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="right-section-profile">
                                <!-- Правый верхний блок с профилем-->
                                Данные о пользователе
                                <?
                                // require_once "action/profileindex.php"; 
                                ?>
                                <!-- Просто подключение другого файла в этот блок-->
                            </div><!-- Правый верхний блок с профилем-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('header')
        @if(Request::is('/'))
        <div class="MisPanel">
            <a href="action/users/settings.php"><button class="mis-panel-button">Настройки</button></a>
            <a href="https://meet.google.com/" target="_blank"><button class="mis-panel-button">Meet</button></a>
            <a href="https://mail.google.com" target="_blank"><button class="mis-panel-button">Почта</button></a>
            <a href="https://topvisor.com/projects/" target="_blank"><button class="mis-panel-button"><b>TOP</b><i>visor</i></button></a>
            <a href="https://jira.bizonoff-dev.net/secure/Dashboard.jspa" target="_blank"><button class="mis-panel-button">Наша Жира</button></a>
            <!-- <a href="folders/CsdTasks.php" target="_blank"><button>Задачи</button></a> -->
            <a href="folders/countsymbolForm.php" target="1"><button class="mis-panel-button">Подсчёт</button></a>
            <a href="folders/creeds.php" target="1"><button class="mis-panel-button">Доступы</button></a>
           </div><!-- Тут заканчивается МИС панель-->
        <hr class="misPanel-hr"><!-- ХРка полоска -->
@elseif(Request::is('admin'))
<div class="MisPanel">
            <!-- Тут начинает МИС панель.-->
            <a href="folders/addcreeds.php" target="1"><button class="mis-panel-button">Доступы</button></a>
            <a href="folders/addsiteForm.php" target="1"><button class="mis-panel-button">Добавить сайт</button></a>
            <a href="https://s2.hostiman.ru/phpmyadmin/index.php"><button class="mis-panel-button">База Данных</button></a>
            <a href="https://my.hostiman.ru/cabinet/services/shared/files/245637"><button class="mis-panel-button">Менеджер файлов</button></a>
            <a href="folders/TgBotForm.php" target="1"><button class="mis-panel-button">Бот</button></a>
            <a href="{{route('finance')}}" target="_blank"><button class="mis-panel-button">Финансы</button></a>
           </div>
           @endif
    </div>
</body>

</html>