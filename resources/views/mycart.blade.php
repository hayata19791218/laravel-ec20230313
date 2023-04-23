<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/mycart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name=”robots” content=”noindex”/>
    <title>マイカート</title>
</head>
<body>
    <div class="mycart-container">
        <div>
            <h1>{{Auth::user()->name}}さんのカートの中身</h1>
            <p class="message">{{ $message ?? '' }}</p>

            @if($my_carts->isNotEmpty())

            <div class="items">
                @foreach($my_carts as $my_cart)
                <div class="item">
                    <p>{{$my_cart->stock->name}}</p>
                    <p>{{ number_format($my_cart->stock->fee)}}円</p>
                    <img src="{{asset('storage/images/'.$my_cart->stock->imgpath)}}" alt="">
                    <form action="{{route('cartdelete')}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="stock_id" value="{{ $my_cart->stock->id }}">
                        <input type="submit" value="カートから削除する" class="delete" onClick="return confirm('本当に削除しますか？');">
                    </form>
                </div>
                @endforeach
            </div>
            <div class="purchase">
                <p>個数 : {{$count}}個</p>
                <p>合計金額 : {{number_format($sum)}}円</p>    
                <form action="/purchase" method="POST">
                    @csrf
                    <input type="submit" value="購入する" id="button">
                </form>
            </div>
            @else
            <p class="empty">カートは空っぽです。</p>
            @endif
            <a href="{{route('shop')}}" class="index">商品一覧へ</a>
        </div>
    </div>
    <script src="{{ asset('js/common.js') }}"></script>
</body>
</html>