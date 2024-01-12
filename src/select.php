<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1517482-final';
    const USER = 'LAA1517482';
    const PASS = 'Pass0131';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>music-select(CURD)</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h2>楽曲一覧</h2>
<a href="menu.php">メニューに戻る</a>
<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach ($pdo->query('select * from bakutech') as $row) {
        echo '<tr>';
        echo '<td>', $row['bakugan_ID'], '</td>';
        echo '<td>', $row['bakugan_name'], '</td>';
        echo '<td>', $row['bakugan_type'], '</td>';
        echo '<td>';
        echo '</tr>';
    }
?>
</body>
</html>