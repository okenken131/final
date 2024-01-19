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
        <h2>爆丸登録</h2>
    <?php
        $pdo=new PDO($connect, USER, PASS);
        $sql=$pdo->prepare('insert into bakutech(bakugan_ID,bakugan_name,bakugan_type) values (?, ?, ?)');
        if(!preg_match('/^\d+$/',$_POST['bakugan_ID'])){
            echo '番号を整数で入力してください。';
        }else if(empty($_POST['bakugan_name'])){
            echo '選手名を入力してください。';
        }else if(empty($_POST['bakugan_type'])){
            echo 'チーム名を入力してください。';
        }else if($sql->execute([ $_POST['bakugan_ID'], $_POST['bakugan_name'], $_POST['bakugan_type'] ]) ){
            echo '<font color="red">追加に成功しました。</font>';
        }else{
            echo '<font color="red">追加に失敗しました。</font>';
        }
    ?>
        <br><hr><br>
        <table>
            <tr><th>爆丸ID<th>爆丸名</th><th>属性</th></tr>
            <?php
                foreach($pdo->query('select * from bakutech') as $row){
                    echo '<tr>';
                    echo '<td>',$row['bakugan_ID'],'</td>';
                    echo '<td>',$row['bakugan_name'],'</td>';
                    echo '<td>',$row['bakugan_type'],'</td>';
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