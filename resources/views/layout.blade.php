<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
    <style>
        .is-terminedxd
        {
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    @yield('content')
    <ul>
        <li><a href="http:/contact">Nous Contacter</a></li>
        <li><a href="http:/about">About us</a></li>
        <li><a href="http:/">Home</a></li>
        <li><a href="http:/projects">Projects</a></li>
    </ul>
</body>
</html>