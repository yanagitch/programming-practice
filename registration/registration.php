<!DOCTYPE html>
<html lang = "ja">

    <head>
        <meta charset = "utf-8">
        <title>アカウント登録</title>
        <link rel = "stylesheet" type = "text/css" href = "registration.css">
    </head>

    <body>
        <header>ナビゲーションバー</header>

        <main>
            <h2>アカウント登録画面</h2>
            <form method = "post" action = "confirm.php">
                <div>
                    <label>名前（姓）</label><br>
                    <input type = "text" pattern= "[\u4E00-\u9FFF\u3040-\u309F-]*" class = "text" size = "35" maxlength = "10" name = "family_name" required
                    value = "<?php if(!empty($_POST['family_name'])){
                        echo $_POST['family_name'];
                    }?>">
                </div>
                <div>
                    <label>名前（名）</label><br>
                    <input type = "text" pattern = "[\u4E00-\u9FFF\u3040-\u309F-]*" class = "text" size = "35" maxlength = "10" name = "last_name"  required
                    value = "<?php if(!empty($_POST['last_name'])){
                        echo $_POST['last_name'];
                    }?>">
                </div>
                <div>
                    <label>カナ（姓）</label><br>
                    <input type = "text" pattern="[\u30A1-\u30F6]*" class = "text" size = "35" maxlength = "10" name = "family_name_kana"  required
                    value = "<?php if(!empty($_POST['family_name_kana'])){
                        echo $_POST['family_name_kana'];
                    }?>">
                </div>
                <div>
                    <label>カナ（名）</label><br>
                    <input type = "text" pattern="[\u30A1-\u30F6]*" class = "text" size = "35" maxlength = "10" name = "last_name_kana"  required
                    value = "<?php if(!empty($_POST['last_name_kana'])){
                        echo $_POST['last_name_kana'];
                    }?>">
                </div>
                <div>
                    <label>メールアドレス</label><br>
                    <input type = "email" pattern="^[0-9A-Za-z]+-+@+$" class = "text" size = "35" maxlength = "100" name = "mail"  required
                    value = "<?php if(!empty($_POST['mail'])){
                        echo $_POST['mail'];
                    }?>">
                </div>
                <div>
                    <label>パスワード</label><br>
                    <input type = "password" pattern="^[0-9A-Za-z]+$" class = "text" size = "35" maxlength = "10" name = "password"  required
                    value = "<?php if(!empty($_POST['password'])){
                        echo $_POST['password'];
                    }?>">
                </div>
                <div>
                    <label>性別</label><br>
                    <input type = "checkbox" class = "checkbox" name = "gender" value = "male" checked = "checked"  required>男
                    <input type = "checkbox" class = "checkbox" name = "gender" value = "female"  required>女
                </div> 
                <div>
                    <label>郵便番号</label>
                    <input type = "text" pattern = "^[0-9A-Za-z]+$" class = "text" size = "25" maxlength = "7" name = "postalcode"  required
                    value = "<?php if(!empty($_POST['postalcode'])){
                        echo $_POST['postalcode'];
                    }?>">
                </div>
                <div>
                    <label>住所（都道府県）</label>
                    <select required name = "prefecture"  required>
                        <option></option> <option>北海道</option>
                        <option>青森県</option> <option>岩手県</option>
                        <option>宮城県</option> <option>秋田県</option>
                        <option>山形県</option> <option>福島県</option>
                        <option>茨城県</option> <option>栃木県</option>
                        <option>群馬県</option> <option>埼玉県</option>
                        <option>千葉県</option> <option>東京都</option>
                        <option>神奈川県</option> <option>新潟県</option>
                        <option>富山県</option> <option>石川県</option>
                        <option>福井県</option> <option>山梨県</option>
                        <option>長野県</option> <option>岐阜県</option>
                        <option>静岡県</option> <option>愛知県</option>
                        <option>三重県</option> <option>滋賀県</option>
                        <option>京都府</option> <option>大阪府</option>
                        <option>兵庫県</option> <option>奈良県</option>
                        <option>和歌山県</option> <option>鳥取県</option>
                        <option>島根県</option> <option>岡山県</option>
                        <option>広島県</option> <option>山口県</option>
                        <option>徳島県</option> <option>香川県</option>
                        <option>愛媛県</option> <option>高知県</option>
                        <option>福岡県</option> <option>佐賀県</option>
                        <option>長崎県</option> <option>熊本県</option>
                        <option>大分県</option> <option>宮崎県</option>
                        <option>鹿児島県</option> <option>沖縄県</option>
                    </select>
                </div>
                    <div>
                        <label>住所（市区町村)</label>
                        <input type = "text" pattern= "" class = "text" size = "35" maxlength = "10" name = "address1"  required
                        value = "<?php if(!empty($_POST['address_1'])){
                        echo $_POST['address_1'];
                    }?>">
                    </div>
                    <div>
                        <label>住所（番地）</label>
                        <input type = "text" pattern = "" class = "text" size = "35" maxlength = "100" name = "address2"  required
                        value = "<?php if(!empty($_POST['address_2'])){
                        echo $_POST['address_2'];
                    }?>">
                    </div>
                    <duv>
                        <label>アカウント権限</label>
                        <select name = "authority"  required>
                            <option>一般</option>
                            <option>管理者</option>
                        </select>
                    </div>
                    <div>
                        <button type = "submit" name = "confirm">確認する</button>
                    </div>
            </form>
        </main>
        <footer>フッター</footer>

    </body>

</html>