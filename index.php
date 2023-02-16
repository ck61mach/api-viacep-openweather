<?php
include "./backend/functions/viacep.php";
include "./backend/functions/openweather.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHPWork | ViaCEP & OpenWeather</title>
        <link rel="shortcut icon" href="./api.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./resources/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="./public/css/error-validate.css">
        <link rel="stylesheet" href="./public/css/remove-arrows-number.css">
    </head>
    <body class="bg-dark">
        <div class="container w-50 mt-5">
            <div class="container-fluid w-100 text-light">
                <h1>ViaCEP & OpenWeather</h1>
                <p>Inform the cep of street and receive weather forecasts<br>related to the indicated place.</p>
            </div>
            <div class="container-fluid">
                <form action="<?php echo $_SERVER['PHP)_SELF']; ?>" method="post">
                    <div class="form-group d-flex gap-2 justify-content-left">
                        <input class="form-control w-25" type="text" name="captureCep" placeholder="XXXXX-XXX" minlength="1" maxlength="9">
                        <button class="btn btn-primary" name="searchCep">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid mt-3 w-50 mx-auto">
                    <div class="col mb-3">
                        <ul class="list-group shadow w-50">
                            <li class="list-group-item"><b>Street:</b> <?php echo $infoCep['street']; ?></li>
                            <li class="list-group-item"><b>Neighborhood:</b> <?php echo $infoCep['neighborhood']; ?></li>
                            <li class="list-group-item"><b>City:</b> <?php echo $infoCep['city']; ?></li>
                            <li class="list-group-item"><b>State:</b> <?php echo $infoCep['state']; ?></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="list-group shadow w-50">
                            <li class="list-group-item"><b>Weather Condition:</b><?php echo $infoWeather['weatherCondition']; ?></li>
                            <li class="list-group-item"><b>Temperature:</b> <?php echo $infoWeather['temperature']; ?>℃</li>
                            <li class="list-group-item"><b>Humidity:</b> <?php echo $infoWeather['humidity']; ?>%</li>
                            <li class="list-group-item"><b>Wind:</b> <?php echo $infoWeather['wind']; ?> m/s</li>
                        </ul>
                    </div>
                </div>

        <script src="./resources/jquery/jquery-3.6.3.js"></script>
        <script src="./resources/jquery/jquery.validate.js"></script>
        <script src="./public/js/validateCep.js"></script>
    </body>
</html>