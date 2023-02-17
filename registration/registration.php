<!DOCTYPE html>
<html lang = "ja">

    <head>
        <meta charset = "utf-8">
        <title>アカウント登録</title>
        <link rel = "stylesheet" type = "text/css" href = "registration.css">
    </head>

    <body>
        <header>
        </header>

        <main>
            <h2>アカウント登録画面</h2>
            <form method = "post" action = "insert.php">
                <div>
                    <label>名前（姓）</label><br>
                    <input type = "text" class = "text" size = "35" maxlength = "10" name = "surname">
                </div>
                <div>
                    <label>名前（名）</label><br>
                    <input type = "text" class = "text" size = "35" maxlength = "10" name = "name">
                </div>
                <div>
                    <label>カナ（姓）</label><br>
                    <input type = "text" class = "text" size = "35" maxlength = "10" name = "kana_surname">
                </div>
                <div>
                    <label>カナ（名）</label><br>
                    <input type = "text" class = "text" size = "35" maxlength = "10" name = "kana_name">
                </div>
                <div>
                    <label>メールアドレス</label><br>
                    <input type = "text" class = "text" size = "35" maxlength = "100" name = "mail">
                </div>
                <div>
                    <label>パスワード</label><br>
                    <input type = "text" class = "text" size = "35" maxlength = "10" name = "password">
                </div>
                <div>
                    <label>性別</label><br>
                    <input type = "checkbox" class = "checkbox" name = "sex" value = "male" checked = "checked">男
                    <input type = "checkbox" class = "checkbox" name = "sex" value = "female">女
                </div> 
                <div>
                    <label>郵便番号</label>
                    <input type = "text" class = "text" size = "25" maxlength = "7" name = "postcode">
                </div>


                    




    </body>

</html>