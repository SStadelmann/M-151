<html>

<head>
    <title>Checkout</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>

<body>
    <div class="TopBar">
        <a href="/products">Produkte</a>
        <h1>Checkout</h1>
        <a href="/cart">Warenkorb</a>
    </div>
    <div class="Topbar">
        <h1>Total: {{ $totalPrice }} CHF</h1>
        <h1>| Anzahl: {{ $totalAmount }}</h1>
    </div>
    <div class="checkoutButton">
        <a href="/sendorder">
            <div class="BuyButton">Bestellen auf Rechnung</div>
        </a>
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
            <div>{{ $product->price }} CHF</div>
            <a id="LinkDetail" href="/product/{{ $product->id }}">Details</a>
        </div>
        @endforeach
        @else
        <p>Keine Produkte im Warenkorb</p>
        @endif
    </div>
</body>

</html>