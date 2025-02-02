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
        

        <form action="{{route('editCreed', $data->id)}}" method="post" >
        @csrf         
            <input  name="name" value="{{$data->name}}" placeholder="NameSite">
            <input  name="url" value="{{$data->URL}}" placeholder="url">
            <input  name="login" value="{{$data->Login}}" placeholder="Login/email">
            <input  name="password" value="{{$data->Password}}" placeholder="password"><br>
            <button class="add_creeds_btn">Сохранить</button>
        </form>
        


    </div>
</body>
</html>