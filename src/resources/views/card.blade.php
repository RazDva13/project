<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="https://impulse-store.com.ua/content/uploads/images/snimok-ekrana-2020-11-03-v-12.03.04.png"
             alt="iPhone X 64GB">
        <div class="caption">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->price }}$</p>
            <p>
            <form action="{{ route('cart-add', $product) }}" method="post">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="btn btn-default"
                   role="button">Подробнее</a>
                </p>
                @csrf
            </form>
        </div>
    </div>
</div>
