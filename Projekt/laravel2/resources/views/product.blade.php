<html>

<head>
    <title>{{ $product->name }}</title>
    <link href="{{ asset('css/product.scss') }}" rel="stylesheet">
</head>
<section class="product">
    <a class="link" href="/login">Login / Sign Up</a>
    <a style="margin-left: 2rem" class="link" href="/warenkorb">Warenkorb</a>
    <div class="product__photo">
        <div class="photo-container">
            <div class="photo-main">
                <img src="{{$product->image}}" alt="{{ $product->name }}">
            </div>
        </div>
    </div>
    <div class="product__info">
        <div class="title">
            <h1>{{ $product->name }}</h1>
            <span>{{ $product->details }}</span>
        </div>
        <div class="price">
            CHF <span>{{ $product->price }}</span>
        </div>
        <div class="description">
            <h3>USAGE</h3>
            <span>{{ $product->manual }}</span>
        </div>
        <button class="buy--btn" href="/addProduct/{{ $product->id }}">ADD TO CART</button>
    </div>
</section>

<footer>
    <p>yes</p>
</footer>
</body>

</html>