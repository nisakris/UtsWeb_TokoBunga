<!DOCTYPE html>
<html>
<head>
    <title>Order Bunga</title>
    <style>
        body {
            background-color: palegoldenrod; 
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .info-box {
            width: 450px; 
            height: 250px;
            margin: 0 auto; 
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            text-align: center; 
            display: flex; 
            flex-direction: column; 
            justify-content: center; 
        }

        h1 {
            color: #333;
            text-align: center;
        }
        p {
            text-align: center;
        }
        ul {
            text-align: left;
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
@include('components.navbar')
    <h1>Silahkan Order Bunga di Toko Bunga Kami</h1>
    <p>Melalui Informasi dibawah:</p>
    <div class="info-box">
        <ul>
            <li><strong>WhatsApp:</strong> +6281000111222</li>
            <li><strong>Instagram:</strong> @toko_bunga</li>
            <li><strong>Shopee Store:</strong> TokoBunga123</li>
            <li><strong>Alamat Toko:</strong> Jl. Bunga Indah No. 123, Kota Anda</li>
        </ul>
    </div>
</body>
</html>
