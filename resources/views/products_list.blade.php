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
        {{-- @if(isset($is_card))
        <a class = "delete_link" href = "{{ route('delete.from.card',['product_id' => $product->id]) }}"><svg style = "width: 50px; height:50px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="800px" width="800px" version="1.1" id="Layer_1" viewBox="0 0 330 330" xml:space="preserve">
            <g id="XMLID_6_">
                <g id="XMLID_11_">
                    <path d="M240,121.076H30V275c0,8.284,6.716,15,15,15h60h37.596c19.246,24.348,49.031,40,82.404,40c57.897,0,105-47.103,105-105    C330,172.195,290.816,128.377,240,121.076z M225,300c-41.355,0-75-33.645-75-75s33.645-75,75-75s75,33.645,75,75    S266.355,300,225,300z"/>
                </g>
                <g id="XMLID_18_">
                    <path d="M240,90h15c8.284,0,15-6.716,15-15s-6.716-15-15-15h-30h-15V15c0-8.284-6.716-15-15-15H75c-8.284,0-15,6.716-15,15v45H45    H15C6.716,60,0,66.716,0,75s6.716,15,15,15h15H240z M90,30h90v30h-15h-60H90V30z"/>
                </g>
                <g id="XMLID_23_">
                    <path d="M256.819,193.181c-5.857-5.858-15.355-5.858-21.213,0L225,203.787l-10.606-10.606c-5.857-5.858-15.355-5.858-21.213,0    c-5.858,5.858-5.858,15.355,0,21.213L203.787,225l-10.606,10.606c-5.858,5.858-5.858,15.355,0,21.213    c2.929,2.929,6.768,4.394,10.606,4.394c3.839,0,7.678-1.465,10.607-4.394L225,246.213l10.606,10.606    c2.929,2.929,6.768,4.394,10.607,4.394c3.839,0,7.678-1.465,10.606-4.394c5.858-5.858,5.858-15.355,0-21.213L246.213,225    l10.606-10.606C262.678,208.535,262.678,199.039,256.819,193.181z"/>
                </g>
            </g>
            </svg></a>
            @endif --}}
            <div class="product_card-image_div">
            <img class = "product_card-image" src="{{ asset("storage/".$product->image) }}">
        
        </div>
        <div class = "product_card-info">
            <div class = "product_card-main_text font-syne">{{$product->name}}</div>
            <div class = "product_card-secondary_text font-syne">{{ $product->description }}</div>
            <div class = "product_card-price font-syne">${{ $product->price }}</div>
        </div>
        <a style="" href = "{{ route('product', ['id' => $product->id]) }}" class = "product_card-link">
            <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
        </a>
        @if(isset($is_card))
        <div class = "links_in_card">
            <a href = "{{ route('delete.from.card',['product_id' => $product->id]) }}" class = "font-syne product_card-button">Delete</a>
            <a href = "{{ route('payment', ['id' => $product->id, 'quantity' => $product->pivot->quantity]) }}"  class = "font-syne product_card-button">Buy ({{$product->pivot->quantity}})</a>
        </div>
        @endif
    </div>
    @endforeach
    @if(isset($is_card) && $products->isEmpty())
        <h2 style = "text-align: center">Card is empty</h2>
    @endif
</div>
</body>
</html>