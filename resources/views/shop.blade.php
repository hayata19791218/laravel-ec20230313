<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="{{ asset('css/shop.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/reset.css') }}" rel="stylesheet" type="text/css">
        <meta name=”robots” content=”noindex”/>
        <title>商品一覧</title>
    </head>
    <body>
        @can('admin')
        <div class="toolbar">
            <a href="{{route('admin')}}">商品管理画面へ</a>
            <a href="{{route('mycart')}}">マイカートへ</a>
            <a href="{{route('productCreate')}}">商品登録へ</a>
        </div>
        @endcan
        <div class="shop-container">
            <h1>商品一覧</h1>
            <div class="item-container">
                @foreach($stocks as $stock)
                <div class="item">
                    <p>{{$stock->name}}<br>{{$stock->fee}}円</p>
                    <div><img src="{{asset('storage/images/'.$stock->imgpath)}}" alt=""></div>
                    <p>{{$stock->detail}}</p>
                    <form action="{{route('addmycart')}}" method="post" class="form">
                        @csrf
                        <input type="hidden" name="stock_id" value="{{$stock->id}}">
                        <input type="submit" value="カートに入れる" class="addcart">
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>






