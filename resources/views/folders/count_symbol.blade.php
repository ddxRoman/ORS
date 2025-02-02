@vite(['resources/js/app.js','resources/css/main.css'])
@vite(['resources/css/button.css'])

<body class="count_page">
    
    <form action="{{route(('count-form'))}}" method="post">
        @csrf
        <textarea class="count_symbol_form" name="text" id=""></textarea><br>
        <button class="btn_count_text">Посчитать</button>
    </form>
    <h3>Количество символов всего: </h3>
    <h2>Количество символов без пробелов: </h2>
</body>