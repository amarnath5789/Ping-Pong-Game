<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <meta charset="UTF-8" />
    <title>Ping Pong Game | CPPSECRETS</title>
    <style>
        body {
            background: no-repeat url("floor.jpg");
        }

        .navbar {
            display: flex;
            flex-wrap: wrap;
            background-color: white;
            padding: 4px;
            box-shadow: 0px 0px 5px 0px #0000004f;
        }

        #pong{
            border: 8px solid white;
            position: absolute;
            margin: auto;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container">
            <a href="https://cppsecrets.com/"><img src="logo.png" width="160" height="70" /></a>
        </div>
    </nav>
    <canvas id="pong" width="850" height="450"></canvas>
    <script src="pong.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>