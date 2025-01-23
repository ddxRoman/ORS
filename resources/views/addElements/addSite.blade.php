<!DOCTYPE html>
<html lang="en">

@vite(['resources/js/app.js','resources/css/main.css'])
@vite(['resources/css/button.css'])

<body>
    <div class="form_addCreeds">
        <form action="../action/addsiteList.php" method="post">
            <input type="text" placeholder="URL" name="url">
            <input type="text" placeholder="name" name="name">
            <select name="categories">
                <option value="">Категория</option>

            </select>
            <button class="add_creeds_btn">Добавить</button>
        </form>
    </div>
    <table class="table_addsite">
        <tr>
            <th>id</th>
            <th>Название</th>
            <th class="table_sile" >URL</th>
            <th>Папка</th>
        </tr>
        <div class="sitelist">
                <tr class="site_table">
                    <td></td>
                    <td></td>
                    <td class="table_sile"> <a href="" target="_blank"> <?= $sites[2] ?></a></td>
                    <td></td>
                    <td>
                        <a href=""><img class="icon" src="../file/icons/edit-svgrepo-com.svg" title="Редактировать"></a>
                    </td>
                    <td>
<script type="text/javascript"> 
$("#submit").click(function () { 
    var name = $("#name").val(); 
    var marks = $("#marks").val(); 
    var str = "You Have Entered " 
        + "Name: " + name 
        + " and Marks: " + marks; 
    $("#modal_body").html(str); 
}); 
</script> 
                </tr>
    </table>


    </div>
</body>

</html>