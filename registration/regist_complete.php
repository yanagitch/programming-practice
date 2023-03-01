<?php

    $_POST['gender']=(int) $_POST['gender']; 
    $_POST['postal_code']=(int) $_POST['postal_code'];
    $_POST['authority']=(int) $_POST['authority'];
    $_POST['password']=password_hash($_POST['password'],PASSWORD_DEFAULT);


    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=registration;host=localhost;","root","root");

    $pdo->exec("insert into registration (family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority)
    values('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".$_POST['password']."','".$_POST['gender']."',
    '".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authority']."');");

    var_dump ($_POST);
?>

<!DOCTYPE html>
<html lang = "ja">

    <head>
        <meta charset ="utf-8">
        <title>アカウント登録完了画面</title>
        <link rel="stylesheet" type="text/css" href="regist_complete.css">
    </head>

    <body>
        <header>ナビゲーションバー</header>
        <main>
            <h3>アカウント登録完了画面</h3>

            <p>登録完了しました</p>
        
            <input type="button" onclick="location.href='./d.i.blog.html'" value="TOPページへ戻る">
        </main>
        <footer>フッター</footer>
    </body>
</html>
