<html lang="el">
<head>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    {{-- @vite('resources/css/app.css') CHBACEL!!! --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
</head>
<body>
    <div class = "main">
        @include('admin.admin_header')
        <div class = "center center_in_see_one">
            <div class = "form_at_center product_card2 user_card-no-border">
                <form action="{{ route('show_product.post') }}" method="POST" class="real_form product_form">
                @csrf
                 <input name = "input" class = "admin_form_input" placeholder="Enter name or Id">
                    <button type = "submit">Search</button>
                 </form>  
                     @if (\Session::has('fail'))
    <div class="alert alert-fail">
            {!! \Session::get('fail') !!}
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-fail">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 
            @if(!empty($product))
            <div class = "box_at_center user_card-no-border ">
            @if(is_iterable($product))
            <div class = "products-main">
                @foreach($product as $item)
                <div class = "product_card">
                    <div class="product_card-image_div">
                        <img class = "product_card-image" src="{{ asset("storage/".$item->image) }}">
                    </div>
                    <div class = "product_card-info">
                        <div class = "product_card-main_text font-syne">{{$item->name}}</div>
                        <div class = "product_card-secondary_text font-syne">{{ $item->description }}</div>
                        <div class = "product_card-price font-syne">${{ $item->price }}</div>
                    </div>
                    <a href = "{{ route('product', ['id' => $item->id]) }}" class = "product_card-link">
                        <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
                    </a>
                </div>
                @endforeach
            </div>
            @else
            <div class = "product_card">
                <div class="product_card-image_div">
                    <img class = "product_card-image" src="{{ asset("storage/".$product->image) }}">
                </div>
                <div class = "product_card-info">
                    <div class = "product_card-main_text font-syne">{{$product->name}}</div>
                    <div class = "product_card-secondary_text font-syne">{{ $product->description }}</div>
                    <div class = "product_card-price font-syne">${{ $product->price }}</div>
                </div>
                <a href = "{{ route('product', ['id' => $item->id]) }}" class = "product_card-link">
                    <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
                </a>
            </div>
            @endif
            
</div>
@endif
</div>
        </div>
    </div>
</body>
</html>