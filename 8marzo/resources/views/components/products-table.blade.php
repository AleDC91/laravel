<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['name'] }}</td>
                {{-- usa il dollaro davanti ai nomi dei metodi del componente a classe! --}}
                <td>{{ $excerpt($product['description'], 10) }}</td>
                <td>{{ $product['price'] / 1000 }} €</td>
            </tr>
        @endforeach
    </tbody>
</table>
