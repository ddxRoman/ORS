@vite(['resources/js/app.js','resources/css/main.css'])
@vite(['resources/css/button.css'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form_addCreeds">
        <form action="{{route('addcreeds-form')}}" method="post" >
        @csrf
            <input  name="name" placeholder="NameSite">
            <input  name="url" placeholder="url">
            <input  name="login" placeholder="Login/email">
            <input  name="password" placeholder="password"><br>
            <button class="add_creeds_btn">Сохранить</button>
        </form>
    </div>

    <div class="edit_creeds">
    <table class="table table-hover">
    <thead>
        <tr>
            <th>Проект</th>


        </tr>
    </thead>
    <tbody>
@foreach($addCreeds as $creeds)
        <tr>
            <th><a href="{{$creeds->URL}}" class="link-dark" target="_blank">{{$creeds->name }}</a> </th>
            <th class="btn_img_creeds">
                <a href="">
                    <img  src="{{ Storage::url('icon/edit-pen.svg') }}" alt="">
                </a>
                <a href="">
                    <img  src="{{ Storage::url('icon/delete.svg') }}" alt="">
                </a>
            </th>

        </tr>
@endforeach
    </tbody>
</table>
    </div>
</body>
</html>