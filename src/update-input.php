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
		<link rel="stylesheet" href="style.css">
		<title></title>
	</head>
	<body>
		<div class="th0">爆丸ID</div>
		<div class="th1">爆丸名</div>
		<div class="th2">属性</div>
<?php
    $pdo=new PDO($connect, USER, PASS);

	foreach ($pdo->query('select * from bakutech') as $row) {
		echo '<form action="update-output.php" method="post">';
		//商品ID　作成３
		echo '<input type="hidden" name="ID" value="', $row['bakugan_ID'], '">';
		echo '<div class="td0">', $row['bakugan_ID'], '</div>';
		echo '<div class="td1">';
		//商品名　作成４
		echo '<input type="text" name="name" value="', $row['bakugan_name'],'">';
		echo '</div> ';
		echo '<div class="td1">';
		//価格　作成５
		echo '<input type="text" name="type" value="', $row['bakugan_type'],'">';
		echo '</div> ';
		//更新ボタン　作成６
		echo '<div class="td2"><input type="submit" value="更新"></div>';
		echo '</form>';
		echo "\n";
	}
?>

    </body>
</html>