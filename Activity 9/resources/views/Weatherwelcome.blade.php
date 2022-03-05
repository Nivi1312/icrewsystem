<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Welcome</title>
</head>
<body style="background-color:grey;">
    <div class="container">
        <h3 class="display-2 d-flex justify-content-center">Welcome</h3>
        <br>
        <h1 class="d-flex justify-content-center">Enter your mail id below to get weather report of 5 big cties every 10 minutes</h1>
        <br>
        <form action="/sendweather" method="POST">
            @csrf
            <label for="email" class="form-label d-flex justify-content-center"><h2>Enter your Email address</h2> </label>
            <br>
            <input type="email" class="form-control d-flex justify-content-center" placeholder="Enter your email" name="email" required>
            <br>
            <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-dark">Get Weather report</button>
            </div>
        </form>
    </div>
</body>
</html>
