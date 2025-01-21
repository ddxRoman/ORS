<?php
$apiKey = "72f259ba4f74e5a8d0cbdcebe3a564bd";
$cityId = "542420";
$apiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=ru&units=metric&APPID=" . $apiKey;
$crequest = curl_init();

curl_setopt($crequest, CURLOPT_HEADER, 0);
curl_setopt($crequest, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($crequest, CURLOPT_URL, $apiUrl);
curl_setopt($crequest, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($crequest, CURLOPT_VERBOSE, 0);
curl_setopt($crequest, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($crequest);

curl_close($crequest);
$data = json_decode($response);
$currentTime = time();
?>
    <?php 
            $temp = $data->main->temp_max;
            $temp = (int)$temp;
            if($data->weather[0]->description=="облачно с прояснениями"){ // Облачность
                ?> <img src="../storage/weather-icon/partly_cloudy.png" width="30px"><?
            }else{ 
                if($data->weather[0]->description=="гроза") { 
                ?><img src="../storage/weather-icon/Storm.png" width="30px"><?
                
                }   else{if($data->weather[0]->description=="переменная облачность"){
                    ?> <img src="../storage/weather-icon/partly cloudy.png" width="30px"><?
                }else{if($data->weather[0]->description=="ясно"){
                    ?> <img src="../storage/weather-icon/Sun.png" width="30px"><?
                }else{
                    if($data->weather[0]->description=="небольшая облачность"){
                        ?> <img src="../storage/weather-icon/littlBigCloud.png" width="30px"><?
                } else  if($data->weather[0]->description=="небольшой проливной дождь"){
                    ?> <img src="../storage/weather-icon/small_rain.png" width="30px"><?
                }
                else if($data->weather[0]->description=="небольшой дождь"){
                    ?> <img src="../storage/weather-icon/small_rain.png" width="30px"><?
                }
                else if($data->weather[0]->description=="пасмурно"){
                    ?> <img src="../storage/weather-icon/cloud.png" width="30px"><?
                }
                else 
                
            echo ucwords($data->weather[0]->description); 
                }
            }
        } 
    }
            ?>
        <font class="temperature"><?php echo $temp; ?>°C </font> <br><!-- Температура -->
   <font class="other_parameters"><img src="../storage/weather-icon/wett.png" width="20px"> <?php echo $data->main->humidity; ?> % <!-- Влажность -->
    <img src="../storage/weather-icon/wind.png" width="20px"><?php echo $data->wind->speed; ?> м/с<br><!-- Скорость ветра --></font>