<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <meta charset="UTF-8" />
    <title>Ping Pong Game | CPPSECRETS</title>
    <style>
        .bg {
            background-image: url("floor.jpg");
            height: 100vh;
            width: 100vw;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .navbar {
            display: flex;
            flex-wrap: wrap;
            background-color: white;
            padding: 0px;
            box-shadow: 0px 0px 5px 0px #0000004f;
        }

        #pong {
            border: 8px solid white;
            position: absolute;
            margin: auto;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            border-radius: 3px;
        }

        .box {
            background: linear-gradient(to right, gold, darkorange);
            color: white;
            --width: 150px;
            --height: calc(var(--width) / 3);
            width: var(--width);
            height: var(--height);
            text-align: center;
            line-height: var(--height);
            font-size: calc(var(--height) / 2.5);
            font-family: sans-serif;
            letter-spacing: 0.2em;
            border: 1px solid darkgoldenrod;
            border-radius: 2em;
            transform: perspective(500px) rotateY(-15deg);
            text-shadow: 6px 3px 2px rgba(0, 0, 0, 0.2);
            box-shadow: 2px 0 0 5px rgba(0, 0, 0, 0.2);
            transition: 0.5s;
            position: relative;
            overflow: hidden;
            text-decoration: none;
            left: 10px;
            top: 110px;
        }

        .box:hover {
            transform: perspective(500px) rotateY(15deg);
            text-shadow: -6px 3px 2px rgba(0, 0, 0, 0.2);
            box-shadow: -2px 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .box::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, transparent, white, transparent);
            left: -100%;
            transition: 0.5s;
        }

        .box:hover::before {
            left: 100%;
        }

        .txt {
            text-decoration: none;
            font-weight: 800;
            color: white;
            font-size: 25px;
        }

        .txt:hover {
            color: black;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container">
            <a href="https://cppsecrets.com/"><img src="logo.png" width="160" height="70" /></a>
        </div>
    </nav>
    <div class="bg">
        <canvas id="pong" width="850" height="450"></canvas>
        <div class="box play"><a class="txt" href="index.php">EXIT</a></div>
    </div>
    <script src="pong.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>