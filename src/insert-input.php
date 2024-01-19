<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1517482-final';
    const USER = 'LAA1517482';
    const PASS = 'Pass0131';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <h2></h2>
        <form action="insert-output.php"method="post">
            爆丸ID<input type="text" name="bakugan_ID"><br>
            爆丸名<input type="text" name="bakugan_name"><br>
            属性<input type="text" name="bakugan_type"><br>
            <button type="submit">登録</button>
        </form>
    </body>
</html>