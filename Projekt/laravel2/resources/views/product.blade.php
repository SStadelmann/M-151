<html>
<head>
    <title>{{ $product->name }}</title>
    <link href="{{ asset('css/product.scss') }}" rel="stylesheet">
</head>
    <section class="product">
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
            <td>{{ $product->manual }}</td>
		</div>
		<button class="buy--btn">ADD TO CART</button>
	</div>
</section>

<footer>
	<p>yes</p>
</footer>
</body>
</html>