<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Product</title>
    
</head>
<body>
    <h1>Create a Product</h1> 

    <!-- Menampilkan error jika ada -->
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <!-- Form untuk membuat produk baru -->
    <form method="post" action="{{ route('product.update', ['product' => $product']) }}">
        @csrf
        @method ('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}" />
        </div>
        <div>
            <label for="qty">Qty</label>
            <input type="text" name="qty" id="qty" placeholder="Qty" value="{{ old('qty') }}" />
        </div> 
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" placeholder="Price" value="{{ old('price') }}" />
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" placeholder="Description" value="{{ old('description') }}" />
        </div>
        <div>
            <input type="submit" value="update" />
        </div>
    </form>
</body>
</html>
