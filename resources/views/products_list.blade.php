<html lang="el">
<head>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    {{-- @vite('resources/css/app.css') CHBACEL!!! --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
<div id = "products-main" class = "products-main">
    @foreach($products as $product)
    <div class = "product_card">
        <div class="product_card-image_div">
            <img class = "product_card-image" src="{{ asset("storage/".$product->image) }}">
        </div>
        <div class = "product_card-info">
            <div class = "product_card-main_text font-syne">{{$product->name}}</div>
            <div class = "product_card-secondary_text font-syne">{{ $product->description }}</div>
            <div class = "product_card-price font-syne">${{ $product->price }}</div>
        </div>
        {{-- <a style="" href = "{{ route('product', ['id' => $product->id]) }}" class = "product_card-link">
            <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
        </a> --}}
        <a style="" href = "{{ route('checkout', ['id' => $product->id]) }}" class = "product_card-link">
            <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
        </a>
    </div>
    @endforeach
</div>
</body>
</html>