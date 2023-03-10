
<!DOCTYPE html>
        <meta charset = "utf-8">
        <title>アカウント登録</title>
        <link rel = "stylesheet" type = "text/css" href = "regist.css">
    </head>

    <body>
        <header>ナビゲーションバー</header>

        <main>
            <h3>アカウント登録画面</h3>
            <form method = "post" action = "regist_confirm.php">
                <div style = "width:50%;">
                    <div style="display:flex; justify-cocntent:space-between;">
                        <label>名前（姓）</label>
                        <input type = "text" pattern= "[\u4E00-\u9FFF\u3040-\u309F]*" class = "text" size = "35" maxlength = "10" name = "family_name"
                        value = "<?php echo $_POST['family_name']?>" required>
                    </div>
                    <div style="display:flex; justify-cocntent:space-between;">
                        <label>名前（名）</label>
                        <input type = "text" pattern = "[\u4E00-\u9FFF\u3040-\u309F]*" class = "text" size = "35" maxlength = "10" name = "last_name"
                        value = "<?php echo $_POST['last_name']; ?>" required>
                    </div>
                    <div style="display:flex; justify-cocntent:space-between;">
                        <label>カナ（姓）</label>
                        <input type = "text" pattern="[\u30A1-\u30F6]*" class = "text" size = "35" maxlength = "10" name = "family_name_kana"
                        value = "<?php echo $_POST['family_name_kana']; ?>" required>
                    </div>
                    <div style="display:flex; justify-cocntent:space-between;">
                        <label>カナ（名）</label>
                        <input type = "text" pattern="[\u30A1-\u30F6]*" class = "text" size = "35" maxlength = "10" name = "last_name_kana"
                        value = "<?php echo $_POST['last_name_kana']; ?>" required>
                    </div>
                    <div style="display:flex; justify-cocntent:space-between;">
                        <label style="margin-right:15px;">メールアドレス</label>
                        <input type = "text"  pattern="[a-zA-Z\0-9\@-]*" class = "email" size = "35" maxlength = "100" name = "mail"
                        value = "<?php echo $_POST['mail']; ?>" required>
                    </div>
                    <div style="display:flex; justify-cocntent:space-between;">
                        <label>パスワード</label>
                        <input type = "password" pattern="[\w]*" class = "text" size = "35" maxlength = "10" name = "password"
                        value = "<?php echo $_POST['password']; ?>" required>
                    </div>
                    <div style="display:flex; justify-cocntent:space-between;">
                        <label class="gender">性別</label>
                       <span>
                         <input type = "radio" class = "radio" name = "gender" value = "0" checked = "checked">男
                         <input type = "radio" class = "radio" name = "gender" value = "1">女
                        </span>
                    </div> 
                    <div style="display:flex; justify-cocntent:space-between;">
                        <label>郵便番号</label>
                        <input type = "text" pattern = "[\d]*" class = "text" size = "25" maxlength = "7" name = "postal_code"
                        value = "<?php echo $_POST['postal_code']; ?>" style="margin-left:43px;" required>
                    </div>
                    <div style="display:flex; justify-cocntent:space-between;">
                        <label>住所（都道府県）</label>
                        <select name = "prefecture" style="margin-left:-20px;" required>
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
                        <div style="display:flex; justify-cocntent:space-between;">
                            <label>住所（市区町村)</label>
                            <input type = "text" pattern = "[０-９\u4E00-\u9FFF\u3040-\u309F-\u30A1-\u30F6-\d ー　]*" class = "text" size = "35" maxlength = "10" name = "address_1"
                            value = "<?php echo $_POST['address_1']; ?>" style="margin-left:-12px;" required>
                        </div>
                        <div style="display:flex; justify-cocntent:space-between;">
                            <label>住所（番地）</label>
                            <input type = "text" pattern = "[０-９\u4E00-\u9FFF\u3040-\u309F-\u30A1-\u30F6-\d ー　]*" class = "text" size = "35" maxlength = "100" name = "address_2"
                            value = "<?php echo $_POST['address_2']; ?>" style="margin-left:9px;" required>
                        </div>
                        <duv style="display:flex; justify-cocntent:space-between;">
                            <label>アカウント権限</label>
                            <select name = "authority" style="margin-left:-7px;">
                                <option value = "0">一般</option>
                                <option value = "1">管理者</option>
                            </select>
                        </div>
                    <div class = "button">
                        <button type = "submit" name = "confirm">確認する</button>
                    </div>
                </div>
            </form>
        </main>
        <footer>フッター</footer>

    </body>

</html>