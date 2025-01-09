<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
</head>

<body>
    <main>
        <div class="thanks__content">
            <div class="thanks__heading">
                <h2>お問い合わせありがとうございました</h2>
            </div>
            <div class="thanks__background-text">
                <h1>Thank you
            </div>
        </div>
        <form class="return__button" action="/index" method="post">
        @csrf
            <button class="return__button-submit" type="submit">HOME</button>
        </form>
    </main>
</body>
</html>