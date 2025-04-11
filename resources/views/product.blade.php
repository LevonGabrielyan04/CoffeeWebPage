<html lang="el">
<head>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    {{-- @vite('resources/css/app.css') --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
    <div class = "main">
        @include('header')
        <div class = "path_container">
            <span class = "product_path_first font-syne">Κύριος</span>
            <span class = "proudct_path_slash font-syne">/</span>
            <span class = "product_path_first font-syne">Καφές</span>
            <span class = "proudct_path_slash font-syne">/</span>
            <span class = "product_path_second font-syne">Espresso</span>
        </div>
        <div class = "product_card_big">
            {{-- <img src="img\shop-card.png"> --}}
            <div class = "product_card-container">
            <img class="product_page_image" src="{{ asset("storage/".$product->image) }}">
            <div class = "product_card_text font-syne">
                <div class = "product_card-text-name_and_description font-syne">
                    <div class = "product_card-text-name">{{$product->name}}</div>
                    <div class = "product_card-text-description">{{$product->description  }}</div>
                </div>
                <div class = "product_card_big-price">${{$product->price  }}</div>
                <div class = "unknown_button_div">
                    <div class = "unknown_button_div-text">Συσκευασία</div>
                    <button class = "unknown_button_div-button">{{$product->weight  }}γρ.</button>
                </div>
                <div>
                    <div class = "product_property">Υψόμετρο: </div>
                    <div class = "product_value">{{$product->altitude  }}μ</div>
                </div>
                <div>
                    <div class = "product_property">Επεξεργασία: </div>
                    <div class = "product_value">{{$product->processing  }}</div>
                </div>
                <div>
                    <div class = "product_property">Ποικιλία:</div>
                    <div class = "product_value">{{$product->variety  }}</div>
                </div>
                <div>
                    <div class = "product_property">Ψήσιμο: </div>
                    <div class = "product_value">{{$product->baking  }}</div>
                </div>
                <div>
                    <div class = "product_property">Τύπος άλεσης: </div>
                    <div class = "product_value">{{$product->grinding  }}</div>
                </div>

                <div class = "selected_count">
                    <a onclick="addToCart({{ $product->id}}, {{ Auth::id()  }})" id = "cart_button" class = "add_to_cart_button">Προσθήκη στην κάρτα</a>
                    <div class = "count_bar">
                        <button id = "button_minus" class = "coutn_bar-button" onclick="decrease()" type="button">-</button>
                        <span class = "selected_count_number" id = "selected_count">1</span>
                        <button id = "button_plus" class = "coutn_bar-button" onclick = "increse()" type="button">+</button>
                        <a href = "{{ route('payment', ['id' => $product->id, 'quantity' => '1']) }}" class = "product_card-link">
                            <button class = "font-syne product_card-button">BUY NOW</button>
                        </a>
                    </div>
                </div>
                @if (\Session::has('success'))
                <div class="alert alert-success">
                    {!! \Session::get('success') !!}
                </div>
                @endif
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
                       </ul>
                     @endforeach
                </div>
            @endif
            </div>
        </div>
            </div>
        
            @include('recently_viewed')
        
        @include('footer') 
    <div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        @include('productJS')
        <!-- Initialize Swiper -->
        <script>
          var swiper = new Swiper('.swiper', {
            slidesPerView: 1,
            //direction: getDirection(),
            // navigation: {
            //   nextEl: '.swiper-button-next',
            //   prevEl: '.swiper-button-prev',
            // },
            // on: {
            //   resize: function () {
                //swiper.changeDirection(getDirection());
            //   },
            // },
            breakpoints: {
        0: {
          navigation: {
            enabled: false,
          },
        },
    
        1400: {
          slidesPerView: '4'
        },
    
        800: {
          slidesPerView: '3'
        },
      },
    
    
          });
      
          function getDirection() {
            var windowWidth = window.innerWidth;
            var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';
      
            return direction;
          }
        </script>
</body>