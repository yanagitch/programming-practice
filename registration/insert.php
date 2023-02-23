<?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname = registration; host = localhost;","root","root");

    $pdo->exec("insert into registration
        (family_name,last_name,family_name_kana,last_name_kana,
        mail,password,gender,postalcode,prefecture,address_1,address_2,authority)
        values('".$_POST['family_name']."','".$_POST['last_name']."',
        '".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."',
        '".$_POST['password']."','".$_POST['gender']."','".$_POST['postalcode']."','".$_POST['prefecture']."',
        '".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authority']."');
    ");

?>

<!DOCTYPE html>
<html lang = "ja">

    <head>
        <meta charset = "utf-8">
        <title>アカウント登録完了画面</title>
        <link rel = "stylesheet" type = "text/css" href = "insert.css">
    </head>

    <body>
        <header>ナビゲーションバー</header>
        <main>
            <h3>アカウント登録完了画面</h3>

            <p>登録完了しました</p>
        
            <form action = "registration.php">
                <button type = "submit">TOPページへ戻る</button>
            </form>
        </main>
        <footer>フッター</footer>
    </body>
</html>
