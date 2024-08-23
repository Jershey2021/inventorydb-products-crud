<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jershey Aguinaldo Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <h1>Edit Product</h1>
    <form method="post" action="{{ route('product.update', ['product' => $product]) }}">
        @csrf
        @method('PUT')
        <!-- Change this line to PUT -->
        <div>
            <label class="form-label">Edit Product</label>
            <input class="form-control" type="text" name="product_name" placeholder="Product Name"
                value="{{ $product->product_name }}" />
        </div>
        <div>
            <label class="form-label">Quantity</label>
            <input class="form-control" type="number" name="qty" placeholder="Qty" value="{{ $product->qty }}" />
        </div>
        <div>
            <input class="btn btn-success" type="submit" value="UPDATE" />
        </div>
    </form>
</body>

</html>