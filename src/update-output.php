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
    // SQL発行準備 prepareメソッド　作成２
    $sql=$pdo->prepare('update bakutech set bakugan_name=?, bakugan_type=? where bakugan_ID=?');
    if (empty($_POST['bakugan_name'])) {
        echo '爆丸名を入力してください。';
    } else
    if (empty($_POST['bakugan_type'])) {
        echo '属性を入力してください。';
    } else
    //SQLを発行 excuteメソッド　作成３
    if($sql->execute([htmlspecialchars($_POST['bakugan_name']), $_POST['bakugan_type'], $_POST['bakugan_ID']])){
        echo '更新に成功しました。';
    }else{
        echo '更新に失敗しました。';
    }
?>
        <hr>
        <table>
        <tr><th>爆丸ID</th><th>爆丸名</th><th>属性</th></tr>

<?php
foreach ($pdo->query('select * from bakutech') as $row) {
    echo '<tr>';
    echo '<td>', $row['bakugan_ID'], '</td>';
    echo '<td>', $row['bakugan_name'], '</td>';
    echo '<td>', $row['bakugan_type'], '</td>';
    echo '</tr>';
    echo "\n";
}
?>
        </table>
        <button onclick="location.href='menu.php'">メニューへ戻る</button>
    </body>
</html>