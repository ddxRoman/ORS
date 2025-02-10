
<?

$date_today = date("m");
$category_array=[];
$purchase_array=[];
$hashtag_array=[];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="../../css/finance/finance-style.css">
    <title>Document</title>
</head>

<body>
    <a class="header_btn" href="../finance.php">
        <h1>Отчёты</h1>
    </a>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-3">
<h2>Отчёты</h2>
                <ul class="report_list">
                    <a href="../details/reports/Food_reports.php" title="Все расходы на продукты">
                        <li>Расходы на продукты</li>
                    </a>

                    <a href="../details/reports/common_reports.php" title="Все расходы на бытовую химию, подарки, развлечения, проезды и так далее, все кроме продуктов и прочие общие расходы">
                        <li>Расходы на общее дело</li>
                    </a>
                    <a href="../details/reports/pet_reports.php" title="Все расходы на животных">
                        <li>Животные</li>
                    </a>
                    <a href="../details/reports/smoke_reports.php" title="Все расходы на животных">
                        <li>Сигареты</li>
                    </a>
                    <a href="../details/reports/private_reports.php" title="Все личные расходы">
                        <li>Личное</li>
                    </a>
                    <a href="../details/reports/desc_order_reports.php" title="Все расходы от большего к меньшему">
                        <li>По убыванию</li>
                    </a>
                </ul>

            </div>
            <div class="col-3">
                <h2>По категориям</h2>
                <ul>

   <ul>

</ul>
                 </ul>
            </div>
            <div class="col-3">
                <h2>По транзакциям</h2>
                <ul>

   <ul>

</ul>
                </ul>
            </div>
            <div class="col-3">
                <h2>По хештегам</h2>
                <ul>

   <ul>

                </ul>
            </div>
        </div>
    </div>
</body>

</html>