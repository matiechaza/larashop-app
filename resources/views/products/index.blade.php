<ul>
    @forelse($products as $product)
        <li>{{ $product->id }}</li>
        <li>{{ $product->name }}</li>
        <li>{{ $product->price }}</li>
    @empty
        No hay productos
    @endforelse
</ul>
