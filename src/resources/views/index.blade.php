<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
    <div class="header__inner">
        <a class="header__logo" href="/">
        FashionablyLate
        </a>
    </div>
    </header>

    <main>
    <div class="contact-form__content">
        <div class="contact-form__heading">
        <h2>Contact</h2>
        </div>
        <form class="form">

        <!-- お名前 -->
        <div class="form__group">
            <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content form__group-content--name">
            <div class="form__input--text">
                <input type="text" name="last_name" placeholder="姓（例：山田）" />
            </div>
            <div class="form__input--text">
                <input type="text" name="first_name" placeholder="名（例：太郎）" />
            </div>
            <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
            </div>
            </div>
        </div>

        <!-- 性別 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <label><input type="radio" name="gender" value="男性"> 男性</label>
                <label><input type="radio" name="gender" value="女性"> 女性</label>
                <label><input type="radio" name="gender" value="その他"> その他</label>
            </div>
        </div>
        
        <!-- メールアドレス -->
        <div class="form__group">
            <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
            <div class="form__input--text">
                <input type="email" name="email" placeholder="例:test@example.com" />
            </div>
            <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
            </div>
            </div>
        </div>

        <!-- 電話番号 -->
        <div class="form__group">
            <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
            <div class="form__input--text">
                <input type="tel" name="tel" placeholder="08012345678" />
            </div>
            <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
            </div>
            </div>
        </div>

        <!-- 住所 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" placeholder="東京都渋谷区千駄ヶ谷1−2−3" />
                </div>
            </div>
        </div>

        <!-- 建物名 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                <input type="text" name="building_name" placeholder="例:千駄ヶ谷マンション101" />
                </div>
            </div>
        </div>

        <!-- お問い合わせの種類 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <select name="contact_type">
                    <option value="">選択してください</option>
                    <option value="商品のお届けについて">商品のお届けについて
                    </option>
                    <option value="商品の交換について">商品の交換について</option>
                    <option value="商品トラブル">商品トラブル</option>
                    <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                    <option value="その他">その他</option>
                </select>
            </div>
        </div>

        <!-- 問合せ内容 -->
        <div class="form__group">
            <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            </div>
            <div class="form__group-content">
            <div class="form__input--textarea">
                <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
        </div>
        </form>
    </div>
    </main>
</body>

</html>

