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
<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('delete from bakutech where bakugan_ID=?');
    if ($sql->execute([$_GET['id']])){
        echo '削除に成功しました。';
    }else{
        echo '削除に失敗しました。';
    }

?>
    <br><hr><br>
	<table>
    <tr><th>爆丸ID</th><th>爆丸名</th><th>属性</th></tr>
<?php
    foreach ($pdo->query('select * from bakutech') as $row) {
        echo '<tr>';
        echo '<td>',$row['bakugan_ID'], '</td>';
        echo '<td>',$row['bakugan_name'], '</td>';
        echo '<td>',$row['bakugan_type'], '</td>';
        echo '</tr>';
        echo "\n";
    }
?> 
</table>
    <form action="menu.php" method="post">
        <button type="submit">メニューへ戻る</button>
    </form>
    </body>
</html>