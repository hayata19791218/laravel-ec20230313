<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>購入ありがとうございます</title>
</head>
<body>
    <div class="purchase-container">
        <h1>{{ Auth::user()->name }}さんご購入ありがとうございました</h1>
        <p>ご登録頂いたメールアドレスへ決済情報をお送りしております。お手続き完了次第商品を発送致します。</p>
        <a href="/index">商品一覧へ</a>
    </div>
</body>
</html>