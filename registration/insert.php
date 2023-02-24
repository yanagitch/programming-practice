<?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname = registration; host = localhost;","root","root");

    $pdo->exec("insert into registration
        (id,family_name,last_name,family_name_kana,last_name_kana,
        mail,password,gender,postal_code,prefecture,address_1,address_2,authority,delete_flag,registered_time,update_time)
        values('".$_POST['']."','".$_POST['family_name']."','".$_POST['last_name']."',
        '".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."',
        '".$_POST['password']."','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['prefecture']."',
        '".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authority']."','".$_POST['']."','".$_POST['']."','".$_POST['']."');
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
