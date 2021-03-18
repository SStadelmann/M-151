<html>

<head>
    <title>Alle Produkte</title>
    <link href="{{ asset('css/products.scss') }}" rel="stylesheet">
</head>

<body>
    <h2>Our Products</h2>
    <a href="/">
    <div class="display-products">
        @foreach ($products as $product)
        <article>
            <a href="/product/{{ $product->productId }}">
                <img src="{{ $product->image }}" style="width: 150px; padding: 1.5em 3.1em;"/>
                <h3>{{ $product->name }}</h3>
                <h4>CHF {{ $product->price }}</h4>
            </a>
            <button class="buy--btn ">ADD TO CART</button>
</article>
                @endforeach
    <div>
</body>

</html>