<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method='post' action={{route('product.update', ['product' => $product])}}>
        @csrf
        @method('put')
    <div>
        <label for="name">Name</label>
        <input type="text" name='name' placeholder='Enter a name' value={{$product->name}}>
    </div>
    <div>
        <label for="qty">Qty</label>
        <input type="text" name='qty' placeholder='Quantity' value={{$product->qty}}>
    </div>
    <div>
        <label for="name">Price</label>
        <input type="text" name='price' placeholder='Enter price' value={{$product->price}}>
    </div>
    <div>
        <label for="name">Description</label>
        <input type="text" name='description' placeholder='Enter a name' value={{$product->description}}>
    </div>
    <div>
        <input type="submit" value='Update'>
    </div>

    </form>
</body>
</html>