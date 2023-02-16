<?php

#____________________________________________________________________________________________
if (isset($_POST['searchCep'])) {
    $key = "key-api";
    $city = $infoCep['city'];
    $state = $infoCep['state'];

    $url = "https://api.openweathermap.org/data/2.5/weather?q=$city,BR-$state,BRA&appid=$key";
    $weatherData = json_decode(file_get_contents($url), true);

    if (!empty($infoCep['cep'])) {
        $infoWeather = [
            "weatherCondition" => ucfirst($weatherData['weather']['0']['description']),
            "temperature" => $weatherData['main']['temp'] - 273.15,
            "humidity" => $weatherData['main']['humidity'],
            "wind" => round($weatherData['wind']['speed'] + 28 / 4.1)
        ];
    }
}
#____________________________________________________________________________________________

?>