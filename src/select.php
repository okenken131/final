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
    <title>爆丸課題</title>
</head>
<body>
<h2>爆丸一覧</h2>
<a href="menu.php">メニューに戻る</a><br>
<table>
<tr><th>爆丸ID</th><th>　爆丸名　</th><th>属性</th></tr>
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
</table>
</body>
</html>