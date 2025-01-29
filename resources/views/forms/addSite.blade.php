<!DOCTYPE html>
<html lang="en">

@vite(['resources/js/app.js','resources/css/main.css'])
@vite(['resources/css/button.css'])

<body>
    <div class="form_addCreeds">
        <form action="{{route('add-site-form')}}" method="post" >
        @csrf
            <input  name="name" placeholder="name">
            <input  name="URL" placeholder="URL">
            <select name="sites_categorie_id" id="">
                <option value="Документы">1</option>
                <option value="Миски">2</option>
                <option value="Сайты">3</option>
            </select>
            <button class="add_creeds_btn">Сохранить</button>
        </form>
        
    </div>
    <table class="table table-hover">
        <tr>
            <th>Название</th>
            <th>Папка</th>
        </tr>
        <div class="sitelist">
            @foreach($addSites as $site)
                <tr class="site_table btn_img_edit">
                    <td title="{{$site->URL}}"><a href="{{$site->URL}}">{{$site->name}}</a></td>
                    <td>{{$site->sites_categorie_id}}</td>
                    <td>
                        <a href=""><img class="special_icon" src="{{ Storage::url('icon/edit-site.svg') }}" title="Редактировать"></a>
                    </td>
                </tr>
                @endforeach
    </table>
    </div>
</body>

</html>