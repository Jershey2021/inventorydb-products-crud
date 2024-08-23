<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jershey Aguinaldo Create Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <h1>Create New Product</h1>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input class="form-control" type="text" name="product_name" placeholder="Product Name" />
        </div>
        <div>
            <label>Quantity</label>
            <input type="number" name="qty" placeholder="Qty" />
        </div>
        <div>
            <input class="btn btn-success" type="submit" placeholder="CREATE" />
        </div>
    </form>
</body>

</html>