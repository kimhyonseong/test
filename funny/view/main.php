<?php
    /**
     * Created by PhpStorm.
     * User: KimHyonSeong
     * Date: 2019-01-06
     * Time: 오후 2:01
     */
    session_start();
    ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<header>
    <?php
        if(isset($_SESSION['login']))
        {
            # 로그인 했으면
            include_once 'header/Login_header.php';
        }
        else
        {
            # 로그인 안했으면
            include_once 'header/header.php';
        }
    ?>
</header>
<article>
    <br>
    <form method="get" action="search.php">
        <input type="text" name="KeyWord" placeholder="search"><input type="submit">
    </form>
</article>
</body>
</html>