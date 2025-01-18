<?$current_year=date("Y");?>
<div class="footer">
    <hr class="footer-hr">
<div class="container">
    <div class="row">
        <div class="col-3">   
             <div>
        <? 
        // require_once 'function/weather.php'; 
        ?>
    </div>
</div>
        <div class="col-6">    <div class="refresh"> 
        <p class="ink">
        <img src="{{ Storage::url('logo/Logo-footer.png') }}" alt=""><br>
            ORStudio <br> Оксентий Роман Сергеевич Студио <br> Copyright 2022-<?=$current_year?> </p>
    </div></div>
        <div class="col-3">
        <div id="clock" class="clock"> <!-- Подключение файла с часами происходит через id div остальное подключено через app.js-->
        </div><!-- ЧАСЫ-->
        </div>
    </div>
</div>
</div>