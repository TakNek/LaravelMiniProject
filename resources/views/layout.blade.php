<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    @yield('content')
    <ul>
        <li><a href="http:/contact">Nous Contacter</a></li>
        <li><a href="http:/about">About us</a></li>
        <li><a href="http:/">Home</a></li>
        <li><a href="http:/project">Projects</a></li>
    </ul>
</body>
</html>