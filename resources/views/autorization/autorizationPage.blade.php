@vite(['resources/js/app.js','resources/css/main.css'])
@vite(['resources/css/button.css'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORS</title>
</head>

<body class="autorization_page_body">
    <section>
        <div class="container-fluid">
            <div style="min-height: 99vh" class="row align-items-center">
                <div class="col-lg-4 col-md-4 col-sm-1 text-center align-items-center">
                <h2 class="auth-page-h2{">Bootstrap</h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-10 text-center align-items-center">
                <a href="https://github.com/ddxRoman">
                <img src="{{ Storage::url('logo/Logo-autoeization.png')}}"  alt="Logo" title="ORStudio"></a>
    <form action="{{route('autorization-form')}}" method="post">
    @csrf
        <input type="text" class="input-fluid" name="login" placeholder="Логин"><br>
        <input type="password" class="input-fluid" name="password" placeholder="Пароль"><br>
<button class="button_autorization" type="submit" >Get to work</button>
@if($errors->any())
    <div class="error-msg-auth">
        <ul>
            @foreach($errors->all() as $error)
            <li>
                {{$error}}
                </li>
                @endforeach

        </ul>
    </div>
    @endif
</form>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-1 text-center align-items-center"></div>
            </div>
        </div>
        <footer></footer>
    </section>