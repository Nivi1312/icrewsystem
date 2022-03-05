<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
</head>
<body>
    <h1>Todays Weather Report</h1>
    <h3>Chennai : {{$weather_report['chennai_weather']}}</h3><br>
    <h3>Mumbai : {{$weather_report['mumbai_weather']}}</h3><br>
    <h3>Delhi : {{$weather_report['delhi_weather']}}</h3><br>
    <h3>Bangalore : {{$weather_report['bangalore_weather']}}</h3><br>
    <h3>Kolkata : {{$weather_report['kolkata_weather']}}</h3>
</body>
</html>
