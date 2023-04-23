<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>管理画面</title>
</head>
<body>
    @auth
    <div class="toolbar">
        <a href="{{route('shop')}}">商品画面へ</a>
        <a href="{{route('mycart')}}">マイカートへ</a>
        <a href="{{route('productCreate')}}">商品登録へ</a>
    </div>
    @endauth
    <div class="admin-container">
        <h1>商品管理ページ</h1>
        @foreach($stocks as $stock)
        <div class="item">
            <img src="{{asset('storage/images/'.$stock->imgpath)}}" alt="">
            <div>
                <h2>商品名 : {{$stock->name}}</h1>
                <p>商品の説明 : {{$stock->detail}}</p>
                <a href="{{route('edit',['id' => $stock->id])}}" class="edit">編集</a>
                <form class="delete" method="post" action="{{route('delete',['id' => $stock->id])}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onClick="return confirm('本当に削除しますか？');">削除</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>