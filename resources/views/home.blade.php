<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk</title>
    <style>
        body {
            background-color: palegoldenrod;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: black;
            margin-top: 40px; 
        }

        .intro-text {
            text-align: center;
            color: #555;
            margin-bottom: 40px;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .product {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 10px;
            text-align: center;
            width: 20%;
            background-color: #ffffff;
            border-radius: 10px;
        }

        .product img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    @include('components.navbar')

    <h1>Temukan berbagai pilihan produk kami di sini!</h1>
    <div class="intro-text">
        <p>Katalog Produk</p>
    </div>

    <div class="product-container">
        @foreach($products as $product)
            <div class="product">
                <img src="{{ asset('storage/fotobunga/' . $product->image) }}" alt=" ">
                <h2>{{ $product->nama }}</h2>
                <p>Harga: Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
