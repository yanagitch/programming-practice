<!DOCTYPE html>
<html lang = "ja">

    <head>
        <meta charset = "utf-8">
        <title>アカウント登録</title>
        <link rel = "stylesheet" type = "text/css" href = "confirm.css">
    </head>

    <body>
        <header>ナビゲーションバー</header>

        <main>
            <h3>アカウント登録確認画面</h3>
                <div>
                    <label>名前（姓）</label>
                    <?php echo $_POST['family_name']; ?>
                </div>
                <div>
                    <label>名前（名）</label>
                    <?php echo $_POST['last_name']; ?>
                </div>
                <div>
                    <label>カナ（姓）</label>
                    <?php echo $_POST['family_name_kana']; ?>
                </div>
                <div>
                    <label>カナ（名）</label>
                    <?php echo $_POST['last_name_kana']; ?>
                </div>
                <div>
                    <label>メールアドレス</label>
                    <?php echo $_POST['mail']; ?>
                </div>
                <div>
                    <label>パスワード</label>
                    <?php echo $_POST['password']; ?>
                </div>
                <div>
                    <label>性別</label>
                    <?php echo $_POST['gender']; ?>
                </div> 
                <div>
                    <label>郵便番号</label>
                    <?php echo $_POST['postalcode']; ?>
                </div>
                <div>
                    <label>住所（都道府県）</label>
                    <?php echo $_POST['prefecture']; ?>
                </div>
                <div>
                    <label>住所（市区町村)</label>
                    <?php echo $_POST['address_1']; ?>    
                </div>
                 <div>
                    <label>住所（番地）</label>
                    <?php echo $_POST['address_2']; ?>
                </div>
                <div>
                    <label>アカウント権限</label>
                    <?php echo $_POST['authority']; ?>
                </div>

                <form action = "registration.php">
                    <input type = "submit" class = "button1" value = "前に戻る">
                    <input type = "hidden" value = "<?php echo $_POST['family_name']; ?>" name = "family_name">
                    <input type = "hidden" value = "<?php echo $_POST['last_name']; ?>" name = "last_name">
                    <input type = "hidden" value = "<?php echo $_POST['family_name_kana']; ?>" name = "family_name_kana">
                    <input type = "hidden" value = "<?php echo $_POST['last_name_kana']; ?>" name = "last_name_kana">
                    <input type = "hidden" value = "<?php echo $_POST['mail']; ?>" name = "mail">
                    <input type = "hidden" value = "<?php echo $_POST['password']; ?>" name = "password">
                    <input type = "hidden" value = "<?php echo $_POST['gender']; ?>" name = "gender">
                    <input type = "hidden" value = "<?php echo $_POST['postalcode']; ?>" name = "postalcode">
                    <input type = "hidden" value = "<?php echo $_POST['prefecture']; ?>" name = "prefecture">
                    <input type = "hidden" value = "<?php echo $_POST['address_1']; ?>" name = "address_1">
                    <input type = "hidden" value = "<?php echo $_POST['address_2']; ?>" name = "address_2">
                    <input type = "hidden" value = "<?php echo $_POST['authority']; ?>" name = "authority">
                </form>
                <form action = "insert.php" method = "post">
                    <input type = "submit" class = "button2" value = "登録する">
                    <input type = "hidden" value = "<?php echo $_POST['family_name']; ?>" name = "family_name">
                    <input type = "hidden" value = "<?php echo $_POST['last_name']; ?>" name = "last_name">
                    <input type = "hidden" value = "<?php echo $_POST['family_name_kana']; ?>" name = "family_name_kana">
                    <input type = "hidden" value = "<?php echo $_POST['last_name_kana']; ?>" name = "last_name_kana">
                    <input type = "hidden" value = "<?php echo $_POST['mail']; ?>" name = "mail">
                    <input type = "hidden" value = "<?php echo $_POST['password']; ?>" name = "password">
                    <input type = "hidden" value = "<?php echo $_POST['gender']; ?>" name = "gender">
                    <input type = "hidden" value = "<?php echo $_POST['postalcode']; ?>" name = "postalcode">
                    <input type = "hidden" value = "<?php echo $_POST['prefecture']; ?>" name = "prefecture">
                    <input type = "hidden" value = "<?php echo $_POST['address_1']; ?>" name = "address_1">
                    <input type = "hidden" value = "<?php echo $_POST['address_2']; ?>" name = "address_2">
                    <input type = "hidden" value = "<?php echo $_POST['authority']; ?>" name = "authority">
                </form>
        </main>
        <footer>フッター</footer>

    </body>

</html>