<!DOCTYPE html>
<html lang="en">

@vite(['resources/js/app.js','resources/css/main.css'])
@vite(['resources/css/button.css'])

<body>
    <div class="form_addCreeds">
        <form action="{{route('edit-site', $data->id)}}" method="post" >
        @csrf
            <input  name="name" placeholder="name" value="{{$data->name}}">
            <input  name="URL" placeholder="URL" value="{{$data->URL}}">

            <select name="sites_categorie_id" id="" value="{{$data->sites_categorie_id}}">
                <option value="{{$data->sites_categorie_id}}">{{$data->sites_categorie_id}}</option>
                <option value="Документы">Документы</option>
                <option value="Миски">Миски</option>
                <option value="Сайты">Сайты</option>
                <option value="Папки">Папки</option>
                <option value="Старьё">Старьё</option>
                <option value="Техническое">Техническое</option>
            </select>
            <button class="add_creeds_btn">Изменить</button><br>
        </form>
        <a href="{{route('delete-site', $data->id)}}">
            <button class="delete_site_btn">Удалить</button>
        </a>
        
    </div>
    </div>
</body>

</html>