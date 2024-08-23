<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jershey Aguinaldo Products List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <h1>Products List</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif

    </div>

    <!-- Optionally add a link to create a new product -->
    <a href="{{ route('product.create') }}" class="btn btn-primary">Create
    </a>

    <!-- Display the products in a table -->
    <table border="1" class="table table-success table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->qty }}</td>
                <td>
                    <a class="btn btn-primary " href="{{route('product.edit', ['product' => $product])}}">Update</a>
                </td>
                <td>
                    <form method="post" action="{{route('product.delete', ['product' => $product])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-primary" />
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No products found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>