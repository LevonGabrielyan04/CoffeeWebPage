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
@if($product_in_history != "no history")
<div class = "recently_viewed">
    <div class = "recently_viewed-span font-syne">Δοκιμάστε επίσης</div>
    <div class = "recently_viewed-products">
    <div class="swiper">
    <div class="swiper-wrapper">
        
        @foreach ($product_in_history as $item)
        <div class="swiper-slide">
            <div class = "product_card">
            <div class="product_card-image_div">
                <img class = "product_card-image" src="{{ asset("storage/".$item->image) }}">
            </div>
            <div class = "product_card-info">
                <div class = "product_card-main_text font-syne">{{ $item->name }}</div>
                <div class = "product_card-secondary_text font-syne">{{mb_substr($item->description , 0, 100)."..."}}</div>
                <div class = "product_card-price font-syne">{{ $item->price}}</div>
            </div>
            <a href = "{{ route('product', ['id' => $item->id]) }}" class = "product_card-link">
                <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
            </a>
        </div>
        
    </div>
        @endforeach
        
    </div>
        <!-- Add Pagination -->
        <!-- <div class="swiper-pagination"></div> -->
        <!-- Add Arrows -->
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
      </div>
    </div>
</div>

@include('local_javascripts.recently_viewed')
@endif
</body>
</html>