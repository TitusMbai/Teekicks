@foreach($products as $product)
    <div class="card">
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
        <h3>{{ $product->name }}</h3>
        <p>Category: {{ $product->category->name }}</p>
        <p>Price: ${{ number_format($product->price, 2) }}</p>
        <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <button type="submit">Add to Cart</button>
        </form>
    </div>
@endforeach