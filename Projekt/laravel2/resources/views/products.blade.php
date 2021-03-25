<html>

<head>
    <title>Alle Produkte</title>
    <link href="{{ asset('css/products.scss') }}" rel="stylesheet">
</head>

<body>
    <h2>Our Products</h2>
    <a class="link" href="/login">Login / Sign Up</a>
    <div class="display-products">
        @foreach ($products as $product)
        <article>
            <a class="info" href="/product/{{ $product->productId }}">
                <img src="{{ $product->image }}" style=" height:100px; padding: 1.5em 3.1em;"/>
                <h3 class="info">{{ $product->name }}</h3>
                <h4 class="info">CHF {{ $product->price }}</h4>
            </a>
            <button class="buy--btn ">ADD TO CART</button>
</article>
                @endforeach
    <div>
</body>

</html>