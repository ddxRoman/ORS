<?

$select_year='2025';
$monthget='02';

$today=date('d');
$budget=0;

$date_today = date("Y-m-d");
$month_list = array(
    "1" => "Январь",
    "2" => "Февраль",
    "3" => "Март",
    "4" => "Апрель",
    "5" => "Май",
    "6" => "Июнь",
    "7" => "Июль",
    "8" => "Август",
    "9" => "Сентябрь",
    "10" => "Октябрь",
    "11" => "Ноябрь",
    "12" => "Декабрь",
);

$date_today = date("Y-m-d");
?>
    <div class="month_line">
        <ul class="month_ul_reports">
        <?
foreach($month_list as $month_lists) { 
            $key = array_search ($month_lists, $month_list);
if (($monthget==$key) || (date('m')==$key && $i==0 && $monthget<date('m'))){ 
    $i=1;
    ?>
    <a class="current_month" onchange="this.form.submit()" href="finance.php?month=<?=$key?>&year=<?=$select_year?>"><li><?=$month_lists?></li></a> <?
    }else{ 
    ?><a onchange="this.form.submit()" href="finance.php?month=<?=$key?>&year=<?=$select_year?>"><li><?=$month_lists?></li></a><?
}
            }?>
        </ul>
    </div>

<main>
        <div class="container-fluid body-finance-page">
            <div class="row">
                <div class="col-12">
                    <form action="operation/add-pay.php" method="post">
                        <input required name="date" type="date" value="<?= $date_today ?>" autofocus/>
                        <select required name="category" id="" >
                            <option value="Продукты">Продукты</option>
                            <option value="Общие расходы" title="Общие расходы - расходы которые касаются Праздников, прогулок, платежей, являются не регулярными и не стабильными">Общие расходы</option>
                            <option value="Бытовые расходы" title="Бытовые расходы - расходы которые касаются общих мероприятий и явялются ежемесячными или регулярными" >Бытовые расходы</option>
                            <option value="Собака">Собака</option>
                            <option value="Развлечения">Развлечения</option>
                            <option value="Сигареты">Сигареты</option>
                            <option value="Кошка">Кошка</option>
                            <option value="Личное">Личное</option>
                            <option value="Здоровье">Здоровье</option>
                        </select>
                        <input name="coast" placeholder="Сумма" type="number">
                        <input name="purchase" placeholder="Покупка" type="text">
                        <select name="payer" id="">
                            <option value="Рома">Рома</option>
                            <option value="Лера">Лера</option>
                            <option value="Общее">Общее</option>
                        </select>
                        <input name="hashtag" type="text" placeholder="Хештэг">
                        <br>
                        <button>Добавить</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-6 table-block">
                    <table class="table table-bordered">
                        <tr>
                            <th></th>
                            <th>Дата</th>
                            <th>Категория</th>
                            <th>Транзакция</th>
                            <th>Сумма</th>
                            <th>Плательщик</th>
                            <th>Хештег</th>
                        </tr>
                        <?
                        $total = 0;

                        ?>
                                <tr>
                                    <td>
                                        <a href="operation/edit_operation_form.php?id">
                                            <img src="../file/icons/edit_for_finance.svg" class="icon_edit_finance" alt="">
                                        </a>
                                    </td>
                                    <td><a href="details/date.php?id" target="details">
                                        
                                        </a>
                                    </td>
                                    <td><a href="details/category.php?id" target="details">
                                        
                                        </a>
                                    </td>
                                    <td><a href="details/purchase.php?id" title="" target="details">
                                       
                                        </a>
                                    </td>
                                    <td><a href="details/coast.php?id=" target="details">
                                             руб.
                                        </a>
                                    </td>
                                    <td><a href="details/payer.php?id" target="details">

                                        </a>
                                    </td>
                                    <td><a href="details/hashtag.php?id" target="details">
                                                                         </a>
                                    </td>
                                </tr>

                        <tr>
                            <td colspan="4" style="text-align:right">ИТОГО:</td>

                            <td><?= $total ?> руб.</td>
                        </tr>
                    </table>
                   <div class="total_coast">
                       <?= $total ?> руб.
                   </div>
                </div>
                <div class="col-6 ">
                    <iframe name="details" src="mail.ru" class="finance_operation_frame" frameborder="0">

                    </iframe>
                </div>
            </div>
        </div>
    </main>