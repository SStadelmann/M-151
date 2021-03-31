<html>

<head>
    <title>Warenkorb</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>

<body>
    <div class="TopBar">
        <a href="/products">Produkte</a>
        <h1>Warenkorb</h1>
        <a href="/checkout">Bezahlen</a>
    </div>
    <div class="ProductsContainer">
        @if ($products)
            @foreach ($products as $product)
            <div class="ProductItem">
                <h1 class="ProductTitle">{{ $product->name }}</h1>
                @if ($product->image)
                <img src="{{ $product->image }}">
                @else
                <i>Kein bild</i>
                @endif
                <div>{{ $product->price }}.-</div>
                <a id="LinkDetail" href="/product/{{ $product->id }}">Details</a>
            </div>
            @endforeach
        @else
            <p>Keine Produkte im Warenkorb</p>
        @endif
    </div>
</body>

</html>