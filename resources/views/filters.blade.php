<html lang="el">
<head>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    {{-- @vite('resources/css/app.css') CHBACEL!!! --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  
</head>
<body onload="index_onload()">
<div class = "filters-container">
    <div class = "filters">
        <div class = "filter-main-span">
            <span >Φίλτρα</span>
        </div>
        <div class = "real-filter-container">
            <div class = "filter1">
            <div class = "filter1-dropdown">
                <span class = "filter-1-secondary-span">Κατηγορία</span>
                <svg xmlns="http://www.w3.org/2000/svg" style="cursor: pointer;" id="filter_dropdown_btn" onclick="filter_dropdown()" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M6 9L12 15L18 9" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
            </div>
            <div class = "filter1-lines-container" id = "filter1_container">
                @foreach ($categories as $item)
                <div class = "filter1-line" style = "margin-top: 12px;">
                    <div class = "filter1-line-left-part">
                        <input id = "{{ $item->name }}_input" class = "filter1-checkbox" type="checkbox" onchange="checkbox('{{ $item->name }}')">
                        <span class = "filter1-text">{{ $item->name }}</span>
                    </div>
                     <span class = "filter1-line-right-part filter1-text"></span>{{--Item count --}}
                </div>
                @endforeach
            </div>
            </div>
            <!-- <div class = "filter2">
                <span class = "filter-1-secondary-span">Είδος</span>
                <div class = "filter1-lines-container">
                    <div class = "filter1-line" style = "margin-top: 12px;">
                        <div class = "filter1-line-left-part">
                            <input class = "filter1-checkbox" type="checkbox">
                            <span class = "filter1-text">Ελληνικός</span>
                        </div>
                        <span class = "filter1-line-right-part filter1-text">12</span>
                    </div>
                    <div class = "filter1-line">
                        <div class = "filter1-line-left-part">
                            <input class = "filter1-checkbox" type="checkbox">
                            <span class = "filter1-text">Φίλτρου</span>
                        </div>
                        <span class = "filter1-line-right-part filter1-text">14</span>
                    </div>
                    <div class = "filter1-line">
                        <div class = "filter1-line-left-part">
                            <input class = "filter1-checkbox" type="checkbox">
                            <span class = "filter1-text">Espresso</span>
                        </div>
                        <span class = "filter1-line-right-part filter1-text">7</span>
                    </div>
                    <div class = "filter1-line">
                        <div class = "filter1-line-left-part">
                            <input class = "filter1-checkbox" type="checkbox">
                            <span class = "filter1-text">Bio</span>
                        </div>
                        <span class = "filter1-line-right-part filter1-text">9</span>
                    </div>
                    <div class = "filter1-line">
                        <div class = "filter1-line-left-part">
                            <input class = "filter1-checkbox" type="checkbox">
                            <span class = "filter1-text">Capsules</span>
                        </div>
                        <span class = "filter1-line-right-part filter1-text">15</span>
                    </div>
                </div>
            </div> -->
            <div class = "price-filter">
                <span class = "span-in-price-filter">Εύρος τιμής</span>
                <div class = "real-price-filter">
                    <div class = price-input-div>
                        <span class = "secondary_span_in_price">From</span>
                        <input id = "price_from" class = "price-input" onchange="filter_by_price()" value="10$">
                    </div>
                    <div class = price-input-div>
                        <span class = "secondary_span_in_price">To</span>
                        <input id = "price_to" class = "price-input" onchange="filter_by_price()"  value="50$">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class = "container">
        <div class = "filter-navbar">
            <div class = "filter-navbar-left">
                <div class = "filter-navbar-left">
                    <div class = "filter-div">Εφαρμοσμένο φίλτρο</div>
                    @foreach ($categories as $item)
                    <div id = "{{ $item->name }}" style="display: none;" class = "filter-selection">
                        <div name="value" class = "font-syne">{{ $item->name }}</div>
                        <svg style="cursor:pointer" onclick="checkbox('{{ $item->name }}')" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M6.75824 17.2426L12.0009 12M12.0009 12L17.2435 6.75739M12.0009 12L6.75824 6.75739M12.0009 12L17.2435 17.2426" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class = "filter-navbar-right font-syne">
                <div class = "filter-div" style="width: fit-content !important;">Ταξινόμηση κατά</div>
                <!-- <div class = "filter-selection">
                    <div class = "font-syne">Δημοτικότητα</div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M6 9L12 15L18 9" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                </div> -->
                <div style="position: relative;">
                    <button class = "sorting_button font-syne" type="button" onclick="show_sorting_dropdown()">Δημοτικότητα<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M6 9L12 15L18 9" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></button>
                    <div id="sorting_dropdown" style="display: none;" class="sorting_dropdown">
                        <div id="sort_by_price_div" onclick="do_some_magic('sorting_svg1','sort_by_price_div')" class="sorting_dropdown-element">sort by price &nbsp;<svg id="sorting_svg1" style="width: 25px;filter: invert(20%) sepia(52%) saturate(2387%) hue-rotate(329deg) brightness(102%) contrast(102%);" data-name="1-Arrow Up" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="m26.71 10.29-10-10a1 1 0 0 0-1.41 0l-10 10 1.41 1.41L15 3.41V32h2V3.41l8.29 8.29z"/></svg></div>
                        <div id="sort_by_date_div" onclick="do_some_magic('sorting_svg2','sort_by_date_div')" class="sorting_dropdown-element">sort by date&nbsp;<svg id="sorting_svg2"  style="width: 25px;filter: invert(20%) sepia(52%) saturate(2387%) hue-rotate(329deg) brightness(102%) contrast(102%);" data-name="1-Arrow Up" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="m26.71 10.29-10-10a1 1 0 0 0-1.41 0l-10 10 1.41 1.41L15 3.41V32h2V3.41l8.29 8.29z"/></svg></div>
                    </div>
                </div>
            </div>
        </div>
        @include('products_list')
        <div class = "products-navigation">
            <a id = "previous" href = {{ route('user_index',['page' => '' ]) }}>
                <button class = "products-navigation-button font-syne">Προηγούμενος</button>
            </a>
            <span class = "pages_bar">
            <a href = "{{ route('user_index',['page' => 1 ]) }}" class = "pages_bar-link  pages_bar-link_selected font-syne">1</a>
                @for ($i = 2;$i<= min(3, $page_count);$i++)
                    <a href = "{{ route('user_index',['page' => $i ]) }}" class = "pages_bar-link font-syne">{{ $i }}</a>
                @endfor
                @if($page_count > 6)
                    <span class = "pages_bar-dots">...</span>
                @endif
                @for ($i = max($page_count - 2,4);$i<=$page_count;$i++)
                    <a href = "{{ route('user_index',['page' => $i ]) }}" class = "pages_bar-link font-syne">{{ $i }}</a>
                @endfor
            </span>
            <a id = "next" href = {{ route('user_index',['page' => '2' ]) }}>
                <button class = "products-navigation-button font-syne">Επόμενος</button>
            </a>
        </div>
    </div>
</div>
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>