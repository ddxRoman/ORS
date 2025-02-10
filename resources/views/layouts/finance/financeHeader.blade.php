<!DOCTYPE html>
<html lang="en">
@vite(['resources/js/app.js','resources/css/main.css'])
@vite(['resources/css/button.css'])

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image" href="file/icons/Logo/Logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#ff0000" />
    <link rel="manifest" href="JavaScript/manifest.json">
    <link rel="stylesheet" href="../css/finance/finance-style.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <title>Финaнсовый Учёт</title>
</head>

<header class="header_finance">
    <div class="container-fluid">
        <div class="row">
            <div class="col-5">
            <div class="row">
                <div class="col-2">
                <ul class="month_ul_reports">
    <a onchange="this.form.submit()" href="finance.php?month=&year="><li>2024</li></a>
        </ul>
                </div>
                <div class="col-3">
            Общак:
                <br> Рома - 
                <br> Лера - 
                <br>
                <a data-fancybox href="#hidden"><button>Вкинуть</button></a>
            </div>
            </div>
            </div>
            <div class="col-3">
            @if(Request::is('finance'))
                <h1 class="text-center">Расходы финансов</h1>
                @elseif(Request::is('finance/reports'))
                <h1 class="text-center">Отчёты</h1>
                @endif
            </div>
            <div class="col-4 reports_link_block">
            @if(Request::is('finance'))
                <a href="{{route('reports_finance')}}">
                    <button class="common-Filter_btn">Отчёты</button>
                </a>
                @elseif(Request::is('finance/reports'))
                <a href="{{route('finance')}}">
                    <button class="common-Filter_btn">На главную</button>
                </a>
                @endif
            </div>
        </div>
    </div>
</header>
