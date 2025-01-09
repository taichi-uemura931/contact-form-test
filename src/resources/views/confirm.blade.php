<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>
<body>
    <header class="header">
        FasionablyLate
    </header>

    <main>
        <div class="confirm__heading">
            <h2>Confirm</h2>
        </div>
        <div class="confirm__content">
            <form class="form">
            @csrf
                <div class="confirm-table">
                    <table class="confirm-table__inner">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お名前</th>
                            <td class="confirm-table__text">
                                <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
                                <input type="text" name="last_name" value="{{ $contact['last_name'] }}"  readonly/>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">性別</th>
                            <td class="confirm-table__text">
                                <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">メールアドレス</th>
                            <td class="confirm-table__text">
                                <input type="text" name="email" value="{{ $contact['email'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">電話番号</th>
                            <td class="confirm-table__text">
                                <input type="text" name="tel1" value="{{ $contact['tel1'] }}"  readonly/>
                                <input type="text" name="tel2" value="{{ $contact['tel2'] }}" readonly />
                                <input type="text" name="tel3" value="{{ $contact['tel3'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">住所</th>
                            <td class="confirm-table__text">
                                <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">建物名</th>
                            <td class="confirm-table__text">
                                <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせの種類</th>
                            <td class="confirm-table__text">
                                <input type="text" name="choices" value="{{ $contact['choices'] }}"  readonly/>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせ内容</th>
                            <td class="confirm-table__text">
                                <input type="text" name="contents" value="{{ $contact['contents'] }}"  readonly/>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
            <form class="form__button" action="/confirm/thanks" method="post">
            @csrf
                <button class="form__button-submit" type="submit">送信</button>
            </form>
            <form class="correct__button" action="/confirm/index" method="post">
            @csrf
                <button class="correct__button-submit" type="submit" >修正</button>
            </form>
        </div>
    </main>
</body>
</html>