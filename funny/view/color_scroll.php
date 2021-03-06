<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-03
     * Time: 오후 6:35
     */
    session_start();
    ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Color_Scroll</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/header.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <style>
        body {
            margin: 0px;
            font-family: 'Fredericka the Great', cursive;
            font-size: 30px;
        }
        iframe {
            width: 100%; height: 100vh;
            border: none; margin: 0px; scroll-behavior: smooth;
            display: block;
            overflow: scroll;
        }
        .RoundButton {
            background-color: rgba(255,255,255,0.5);
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 50px 50px 50px 50px;
        }
        #Pages {position: fixed; top: 50%; left: 90%;}
        #se1 {position: absolute; top: -90px;}
        #se2 {position: absolute; top: -30px;}
        #se3 {position: absolute; top: 30px;}
        #se4 {position: absolute; top: 90px;}
    </style>
    <script>
        function move(page) {
            var offset = $("#"+page).offset().top;
            $('html,body').animate({scrollTop : offset},500);
        }
    </script>
</head>
<body>
<nav class="fixed_header" style="background-color: rgba(255,255,255,0);">
    <?php
        if(isset($_SESSION['login']))
        {
            include_once 'header/Login_header.php';
        }
        else
        {
            include_once 'header/header.php';
        }
    ?>
</nav>
<div>
    <iframe id="violet" src="../color_page/violet.php" scrolling="auto"></iframe>
    <iframe id="sky" src="../color_page/sky.php" scrolling=""></iframe>
    <iframe id="wine" src="../color_page/wine.php" scrolling=""></iframe>
    <iframe id="black" src="../color_page/black.php" scrolling=""></iframe>
    <div id="Pages" style="position: fixed">
        <div id="se1">
            <input type="button" class="RoundButton" value="1" onclick="move('violet')">
        </div>
        <div id="se2">
            <input type="button" class="RoundButton up" value="2" onclick="move('sky')">
        </div>
        <div id="se3">
            <input type="button" class="RoundButton" value="3" onclick="move('wine')">
        </div>
        <div id="se4">
            <input type="button" class="RoundButton" value="4" onclick="move('black')">
        </div>
    </div>
    <div>
        <h1 id="h1">Hi</h1>
    </div>
</div>
</body>
</html>
