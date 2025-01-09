<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <header class="header">
        FasionablyLate
    </header>

    <main>
        <div class="contact-form__heading">
            <h2>Contact</h2>
        </div>
        <div class="contact-form__content">
            <form class="form" action="/confirm" method="post">
            @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="first_name" id="name1" placeholder="例）山田" value="{{ old('first_name') }}" />
                        </div>
                        <div class="form__error">
                            @error('first_name')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="form__input--text">
                            <input type="text" name="last_name" id="name2"placeholder="例）太郎" value="{{ old('last_name') }}"/>
                        </div>
                        <div class="form__error">
                            @error('last_name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="radio" name="gender" id="male" value="男性">
                            <label for="男性">男性</label>
		                <input type="radio" name="gender" id="female" value="女性">
                            <label for="女性">女性</label>
		                <input type="radio" name="gender" id="others" value="その他">
                            <label for="その他">その他</label>
                    </div>
                    <div class="form__error">
                        @error('gender')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" id="email" placeholder="例）test@example.com" value="{{ old('email') }}"/>
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__input--text">
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="tel" name="tel1" id="tel1" placeholder="080" value="{{ old('tel1') }}"/>-
                            </div>
                            <div class="form__error">
                                @error('tel1')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="form__input--text">
                                <input type="tel" name="tel2" id="tel2" placeholder="1234" value="{{ old('tel2') }}" />-
                            </div>
                            <div class="form__error">
                                @error('tel2')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="form__input--text">
                                <input type="tel" name="tel3" id="tel3" placeholder="5678" value="{{ old('tel3') }}" />
                            </div>
                            <div class="form__error">
                                @error('tel3')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" id="address" placeholder="例）東京都千駄ヶ谷1-2-3" value="{{ old('address') }}"/>
                        </div>
                        <div class="form__error">
                            @error('address')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building" id="building" placeholder="例）千駄ヶ谷マンション101" value="{{ old('building') }}"/>
                        </div>
                    </div>
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせの種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <select name="choices">
                                <option value="選択してください" disabled selected>選択してください</option>
                                <option value="商品のお届けについて">商品のお届けについて</option>
                                <option value="商品の交換について">商品の交換について</option>
                                <option value="商品トラブル">商品トラブル</option>
                                <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                                <option value="その他">その他</option>
                            </select>
                        </div>
                        <div class="form__error">
                            @error('choices')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="contents" placeholder="お問い合わせ内容をご記載ください">{{ old('contents') }}</textarea>
                        </div>
                        <div class="form__error">
                            @error('contents')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form__button">
                        <button class="form__button-submit" type="submit">確認画面</button>
                    </div>
                </div>
            </form>
    </main>
</body>
</html>