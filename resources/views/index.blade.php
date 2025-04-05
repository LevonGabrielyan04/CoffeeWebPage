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
    <div class = "main">
        @include('header')
    <div class="products">
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
                        <div class = "filter1-line" style = "margin-top: 12px;">
                            <div class = "filter1-line-left-part">
                                <input id = "Καφές_input" class = "filter1-checkbox" type="checkbox" onchange="checkbox('Καφές')">
                                <span class = "filter1-text">Καφές</span>
                            </div>
                            <span class = "filter1-line-right-part filter1-text">5</span>
                        </div>
                        <div class = "filter1-line">
                            <div class = "filter1-line-left-part">
                                <input id = "Αξεσουάρ_input" class = "filter1-checkbox" type="checkbox" onchange="checkbox('Αξεσουάρ')">
                                <span class = "filter1-text">Αξεσουάρ</span>
                            </div>
                            <span class = "filter1-line-right-part filter1-text">12</span>
                        </div>
                        <div class = "filter1-line">
                            <div class = "filter1-line-left-part">
                                <input id = "Άλλα_input" class = "filter1-checkbox" type="checkbox" onchange="checkbox('Άλλα')">
                                <span class = "filter1-text">Άλλα</span>
                            </div>
                            <span class = "filter1-line-right-part filter1-text">10</span>
                        </div>
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
                                <input class = "price-input" value="10$">
                            </div>
                            <div class = price-input-div>
                                <span class = "secondary_span_in_price">To</span>
                                <input class = "price-input" value="50$">
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
                            <div id = "Καφές" style="display: none;" class = "filter-selection">
                                <div name="value" class = "font-syne">Καφές</div>
                                <svg style="cursor:pointer" onclick="checkbox('Καφές')" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6.75824 17.2426L12.0009 12M12.0009 12L17.2435 6.75739M12.0009 12L6.75824 6.75739M12.0009 12L17.2435 17.2426" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </div>
                            <div id = "Αξεσουάρ" style="display: none;" class = "filter-selection">
                                <div name="value"  class = "font-syne">Αξεσουάρ</div>
                                <svg style="cursor:pointer" onclick="checkbox('Αξεσουάρ')" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6.75824 17.2426L12.0009 12M12.0009 12L17.2435 6.75739M12.0009 12L6.75824 6.75739M12.0009 12L17.2435 17.2426" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </div>
                            <div id = "Άλλα" style="display: none;" class = "filter-selection">
                                <div name="value"  class = "font-syne">Άλλα</div>
                                <svg style="cursor:pointer" onclick="checkbox('Άλλα')" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6.75824 17.2426L12.0009 12M12.0009 12L17.2435 6.75739M12.0009 12L6.75824 6.75739M12.0009 12L17.2435 17.2426" stroke="#727272" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </div>
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
                <div class = "products-main">
                <div class = "product_card">
                    <div class="product_card-image_div">
                        <img class = "product_card-image" src="img/watercolor_illustration_of_several_types_of_coffee_photos_are_realistically_textured_with_soft_shad_3fohtx0dd3g5mfh8znui_1 1 (1).png">
                        <img class = "product_card-second_image" src = "https://s3-alpha-sig.figma.com/img/d84f/3b2c/f3dc12a19e1805e47c9780083f887426?Expires=1744588800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=DwjDfJiLorohHDLC1A08QYVfhg5sSxCECq5LapKPopSMIXUHc~laoLwPii9dzSnN4NlkYDys-ONIuHkinUrjxLNSkiM1B-UpLt9MXfw6mQhCWOF5bYUHw2693pmCZ4MW~-VWdiZdMpZBkSoUhot5ufvw3gh~CQNFBi8cBlOgZ985dP~JN-BZQy-x76i5EgMu~J45BOsihIM4QZp2S-um1Z0O3IHKL-IW0r9CEU7xHAYD6OR9QuvCJNdCXIoBARs7p2Pb4xibuhRh6fyDMpVWjQfDLudknEiBAl81WlkxDcUXdYrfrjvEXegMF-rl3M6S82rGSmaVO-ZF7v9GNgmdVQ__">
                    </div>
                    <div class = "product_card-info">
                        <div class = "product_card-main_text font-syne">Ποιότητα προϊόντος</div>
                        <div class = "product_card-secondary_text font-syne">Lorem ipsum dolor sit amet consectetur. Tellus diam etiam dignissim.</div>
                        <div class = "product_card-price font-syne">$12</div>
                    </div>
                    <a href = "{{ route('product') }}" class = "product_card-link">
                        <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
                    </a>
                </div>
                <div class = "product_card">
                    <div class="product_card-image_div">
                        <img class = "product_card-image" src="img/watercolor_illustration_of_several_types_of_coffee_photos_are_realistically_textured_with_soft_shad_3fohtx0dd3g5mfh8znui_1 1 (1).png">
                        <img class = "product_card-second_image" src = "https://s3-alpha-sig.figma.com/img/d84f/3b2c/f3dc12a19e1805e47c9780083f887426?Expires=1744588800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=DwjDfJiLorohHDLC1A08QYVfhg5sSxCECq5LapKPopSMIXUHc~laoLwPii9dzSnN4NlkYDys-ONIuHkinUrjxLNSkiM1B-UpLt9MXfw6mQhCWOF5bYUHw2693pmCZ4MW~-VWdiZdMpZBkSoUhot5ufvw3gh~CQNFBi8cBlOgZ985dP~JN-BZQy-x76i5EgMu~J45BOsihIM4QZp2S-um1Z0O3IHKL-IW0r9CEU7xHAYD6OR9QuvCJNdCXIoBARs7p2Pb4xibuhRh6fyDMpVWjQfDLudknEiBAl81WlkxDcUXdYrfrjvEXegMF-rl3M6S82rGSmaVO-ZF7v9GNgmdVQ__">
                    </div>
                    <div class = "product_card-info">
                        <div class = "product_card-main_text font-syne">Ποιότητα προϊόντος</div>
                        <div class = "product_card-secondary_text font-syne">Lorem ipsum dolor sit amet consectetur. Tellus diam etiam dignissim.</div>
                        <div class = "product_card-price font-syne">$12</div>
                    </div>
                                        <a href = "{{ route('product') }}" class = "product_card-link">
                        <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
                    </a>
                </div>
                <div class = "product_card">
                    <div class="product_card-image_div">
                        <img class = "product_card-image" src="img/watercolor_illustration_of_several_types_of_coffee_photos_are_realistically_textured_with_soft_shad_3fohtx0dd3g5mfh8znui_1 1 (1).png">
                        <img class = "product_card-second_image" src = "https://s3-alpha-sig.figma.com/img/d84f/3b2c/f3dc12a19e1805e47c9780083f887426?Expires=1744588800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=DwjDfJiLorohHDLC1A08QYVfhg5sSxCECq5LapKPopSMIXUHc~laoLwPii9dzSnN4NlkYDys-ONIuHkinUrjxLNSkiM1B-UpLt9MXfw6mQhCWOF5bYUHw2693pmCZ4MW~-VWdiZdMpZBkSoUhot5ufvw3gh~CQNFBi8cBlOgZ985dP~JN-BZQy-x76i5EgMu~J45BOsihIM4QZp2S-um1Z0O3IHKL-IW0r9CEU7xHAYD6OR9QuvCJNdCXIoBARs7p2Pb4xibuhRh6fyDMpVWjQfDLudknEiBAl81WlkxDcUXdYrfrjvEXegMF-rl3M6S82rGSmaVO-ZF7v9GNgmdVQ__">
                    </div>
                    <div class = "product_card-info">
                        <div class = "product_card-main_text font-syne">Ποιότητα προϊόντος</div>
                        <div class = "product_card-secondary_text font-syne">Lorem ipsum dolor sit amet consectetur. Tellus diam etiam dignissim.</div>
                        <div class = "product_card-price font-syne">$12</div>
                    </div>
                                        <a href = "{{ route('product') }}" class = "product_card-link">
                        <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
                    </a>
                </div>
                <div class = "product_card">
                    <div class="product_card-image_div">
                        <img class = "product_card-image" src="img/watercolor_illustration_of_several_types_of_coffee_photos_are_realistically_textured_with_soft_shad_3fohtx0dd3g5mfh8znui_1 1 (1).png">
                        <img class = "product_card-second_image" src = "https://s3-alpha-sig.figma.com/img/d84f/3b2c/f3dc12a19e1805e47c9780083f887426?Expires=1744588800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=DwjDfJiLorohHDLC1A08QYVfhg5sSxCECq5LapKPopSMIXUHc~laoLwPii9dzSnN4NlkYDys-ONIuHkinUrjxLNSkiM1B-UpLt9MXfw6mQhCWOF5bYUHw2693pmCZ4MW~-VWdiZdMpZBkSoUhot5ufvw3gh~CQNFBi8cBlOgZ985dP~JN-BZQy-x76i5EgMu~J45BOsihIM4QZp2S-um1Z0O3IHKL-IW0r9CEU7xHAYD6OR9QuvCJNdCXIoBARs7p2Pb4xibuhRh6fyDMpVWjQfDLudknEiBAl81WlkxDcUXdYrfrjvEXegMF-rl3M6S82rGSmaVO-ZF7v9GNgmdVQ__">
                    </div>
                    <div class = "product_card-info">
                        <div class = "product_card-main_text font-syne">Ποιότητα προϊόντος</div>
                        <div class = "product_card-secondary_text font-syne">Lorem ipsum dolor sit amet consectetur. Tellus diam etiam dignissim.</div>
                        <div class = "product_card-price font-syne">$12</div>
                    </div>
                                        <a href = "{{ route('product') }}" class = "product_card-link">
                        <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
                    </a>
                </div>
                <div class = "product_card">
                    <div class="product_card-image_div">
                        <img class = "product_card-image" src="img/watercolor_illustration_of_several_types_of_coffee_photos_are_realistically_textured_with_soft_shad_3fohtx0dd3g5mfh8znui_1 1 (1).png">
                        <img class = "product_card-second_image" src = "https://s3-alpha-sig.figma.com/img/d84f/3b2c/f3dc12a19e1805e47c9780083f887426?Expires=1744588800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=DwjDfJiLorohHDLC1A08QYVfhg5sSxCECq5LapKPopSMIXUHc~laoLwPii9dzSnN4NlkYDys-ONIuHkinUrjxLNSkiM1B-UpLt9MXfw6mQhCWOF5bYUHw2693pmCZ4MW~-VWdiZdMpZBkSoUhot5ufvw3gh~CQNFBi8cBlOgZ985dP~JN-BZQy-x76i5EgMu~J45BOsihIM4QZp2S-um1Z0O3IHKL-IW0r9CEU7xHAYD6OR9QuvCJNdCXIoBARs7p2Pb4xibuhRh6fyDMpVWjQfDLudknEiBAl81WlkxDcUXdYrfrjvEXegMF-rl3M6S82rGSmaVO-ZF7v9GNgmdVQ__">
                    </div>
                    <div class = "product_card-info">
                        <div class = "product_card-main_text font-syne">Ποιότητα προϊόντος</div>
                        <div class = "product_card-secondary_text font-syne">Lorem ipsum dolor sit amet consectetur. Tellus diam etiam dignissim.</div>
                        <div class = "product_card-price font-syne">$12</div>
                    </div>
                                        <a href = "{{ route('product') }}" class = "product_card-link">
                        <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
                    </a>
                </div>
                <div class = "product_card">
                    <div class="product_card-image_div">
                        <img class = "product_card-image" src="img/watercolor_illustration_of_several_types_of_coffee_photos_are_realistically_textured_with_soft_shad_3fohtx0dd3g5mfh8znui_1 1 (1).png">
                        <img class = "product_card-second_image" src = "https://s3-alpha-sig.figma.com/img/d84f/3b2c/f3dc12a19e1805e47c9780083f887426?Expires=1744588800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=DwjDfJiLorohHDLC1A08QYVfhg5sSxCECq5LapKPopSMIXUHc~laoLwPii9dzSnN4NlkYDys-ONIuHkinUrjxLNSkiM1B-UpLt9MXfw6mQhCWOF5bYUHw2693pmCZ4MW~-VWdiZdMpZBkSoUhot5ufvw3gh~CQNFBi8cBlOgZ985dP~JN-BZQy-x76i5EgMu~J45BOsihIM4QZp2S-um1Z0O3IHKL-IW0r9CEU7xHAYD6OR9QuvCJNdCXIoBARs7p2Pb4xibuhRh6fyDMpVWjQfDLudknEiBAl81WlkxDcUXdYrfrjvEXegMF-rl3M6S82rGSmaVO-ZF7v9GNgmdVQ__">
                    </div>
                    <div class = "product_card-info">
                        <div class = "product_card-main_text font-syne">Ποιότητα προϊόντος</div>
                        <div class = "product_card-secondary_text font-syne">Lorem ipsum dolor sit amet consectetur. Tellus diam etiam dignissim.</div>
                        <div class = "product_card-price font-syne">$12</div>
                    </div>
                                        <a href = "{{ route('product') }}" class = "product_card-link">
                        <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
                    </a>
                </div>
                <div class = "product_card">
                    <div class="product_card-image_div">
                        <img class = "product_card-image" src="img/watercolor_illustration_of_several_types_of_coffee_photos_are_realistically_textured_with_soft_shad_3fohtx0dd3g5mfh8znui_1 1 (1).png">
                        <img class = "product_card-second_image" src = "https://s3-alpha-sig.figma.com/img/d84f/3b2c/f3dc12a19e1805e47c9780083f887426?Expires=1744588800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=DwjDfJiLorohHDLC1A08QYVfhg5sSxCECq5LapKPopSMIXUHc~laoLwPii9dzSnN4NlkYDys-ONIuHkinUrjxLNSkiM1B-UpLt9MXfw6mQhCWOF5bYUHw2693pmCZ4MW~-VWdiZdMpZBkSoUhot5ufvw3gh~CQNFBi8cBlOgZ985dP~JN-BZQy-x76i5EgMu~J45BOsihIM4QZp2S-um1Z0O3IHKL-IW0r9CEU7xHAYD6OR9QuvCJNdCXIoBARs7p2Pb4xibuhRh6fyDMpVWjQfDLudknEiBAl81WlkxDcUXdYrfrjvEXegMF-rl3M6S82rGSmaVO-ZF7v9GNgmdVQ__">
                    </div>
                    <div class = "product_card-info">
                        <div class = "product_card-main_text font-syne">Ποιότητα προϊόντος</div>
                        <div class = "product_card-secondary_text font-syne">Lorem ipsum dolor sit amet consectetur. Tellus diam etiam dignissim.</div>
                        <div class = "product_card-price font-syne">$12</div>
                    </div>
                                        <a href = "{{ route('product') }}" class = "product_card-link">
                        <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
                    </a>
                </div>
                <div class = "product_card">
                    <div class="product_card-image_div">
                        <img class = "product_card-image" src="img/watercolor_illustration_of_several_types_of_coffee_photos_are_realistically_textured_with_soft_shad_3fohtx0dd3g5mfh8znui_1 1 (1).png">
                        <img class = "product_card-second_image" src = "https://s3-alpha-sig.figma.com/img/d84f/3b2c/f3dc12a19e1805e47c9780083f887426?Expires=1744588800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=DwjDfJiLorohHDLC1A08QYVfhg5sSxCECq5LapKPopSMIXUHc~laoLwPii9dzSnN4NlkYDys-ONIuHkinUrjxLNSkiM1B-UpLt9MXfw6mQhCWOF5bYUHw2693pmCZ4MW~-VWdiZdMpZBkSoUhot5ufvw3gh~CQNFBi8cBlOgZ985dP~JN-BZQy-x76i5EgMu~J45BOsihIM4QZp2S-um1Z0O3IHKL-IW0r9CEU7xHAYD6OR9QuvCJNdCXIoBARs7p2Pb4xibuhRh6fyDMpVWjQfDLudknEiBAl81WlkxDcUXdYrfrjvEXegMF-rl3M6S82rGSmaVO-ZF7v9GNgmdVQ__">
                    </div>
                    <div class = "product_card-info">
                        <div class = "product_card-main_text font-syne">Ποιότητα προϊόντος</div>
                        <div class = "product_card-secondary_text font-syne">Lorem ipsum dolor sit amet consectetur. Tellus diam etiam dignissim.</div>
                        <div class = "product_card-price font-syne">$12</div>
                    </div>
                                        <a href = "{{ route('product') }}" class = "product_card-link">
                        <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
                    </a>
                </div>
                <div class = "product_card">
                    <div class="product_card-image_div">
                        <img class = "product_card-image" src="img/watercolor_illustration_of_several_types_of_coffee_photos_are_realistically_textured_with_soft_shad_3fohtx0dd3g5mfh8znui_1 1 (1).png">
                        <img class = "product_card-second_image" src = "https://s3-alpha-sig.figma.com/img/d84f/3b2c/f3dc12a19e1805e47c9780083f887426?Expires=1744588800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=DwjDfJiLorohHDLC1A08QYVfhg5sSxCECq5LapKPopSMIXUHc~laoLwPii9dzSnN4NlkYDys-ONIuHkinUrjxLNSkiM1B-UpLt9MXfw6mQhCWOF5bYUHw2693pmCZ4MW~-VWdiZdMpZBkSoUhot5ufvw3gh~CQNFBi8cBlOgZ985dP~JN-BZQy-x76i5EgMu~J45BOsihIM4QZp2S-um1Z0O3IHKL-IW0r9CEU7xHAYD6OR9QuvCJNdCXIoBARs7p2Pb4xibuhRh6fyDMpVWjQfDLudknEiBAl81WlkxDcUXdYrfrjvEXegMF-rl3M6S82rGSmaVO-ZF7v9GNgmdVQ__">
                    </div>
                    <div class = "product_card-info">
                        <div class = "product_card-main_text font-syne">Ποιότητα προϊόντος</div>
                        <div class = "product_card-secondary_text font-syne">Lorem ipsum dolor sit amet consectetur. Tellus diam etiam dignissim.</div>
                        <div class = "product_card-price font-syne">$12</div>
                    </div>
                                        <a href = "{{ route('product') }}" class = "product_card-link">
                        <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
                    </a>
                </div>
                </div>
                <div class = "products-navigation">
                    <button class = "products-navigation-button font-syne">Προηγούμενος</button>
                    <span class = "pages_bar">
                        <a class = "pages_bar-link_selected font-syne">1</a>
                        <a class = "pages_bar-link font-syne">2</a>
                        <a class = "pages_bar-link font-syne">3</a>
                        <span class = "pages_bar-dots">...</span>
                        <a class = "pages_bar-link font-syne">8</a>
                        <a class = "pages_bar-link font-syne">9</a>
                        <a class = "pages_bar-link font-syne">10</a>
                    </span>
                    <button class = "products-navigation-button font-syne">Επόμενος</button>
                </div>
            </div>
        </div>
        <div class = "recently_viewed">
            <div class = "recently_viewed-span font-syne">Δοκιμάστε επίσης</div>
            <div class = "recently_viewed-products">
            <div class="swiper">
            <div class="swiper-wrapper">    
                <div class="swiper-slide"><div class = "product_card">
                    <div class="product_card-image_div">
                        <img class = "product_card-image" src="img/watercolor_illustration_of_several_types_of_coffee_photos_are_realistically_textured_with_soft_shad_3fohtx0dd3g5mfh8znui_1 1 (1).png">
                        <img class = "product_card-second_image" src = "https://s3-alpha-sig.figma.com/img/d84f/3b2c/f3dc12a19e1805e47c9780083f887426?Expires=1744588800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=DwjDfJiLorohHDLC1A08QYVfhg5sSxCECq5LapKPopSMIXUHc~laoLwPii9dzSnN4NlkYDys-ONIuHkinUrjxLNSkiM1B-UpLt9MXfw6mQhCWOF5bYUHw2693pmCZ4MW~-VWdiZdMpZBkSoUhot5ufvw3gh~CQNFBi8cBlOgZ985dP~JN-BZQy-x76i5EgMu~J45BOsihIM4QZp2S-um1Z0O3IHKL-IW0r9CEU7xHAYD6OR9QuvCJNdCXIoBARs7p2Pb4xibuhRh6fyDMpVWjQfDLudknEiBAl81WlkxDcUXdYrfrjvEXegMF-rl3M6S82rGSmaVO-ZF7v9GNgmdVQ__">
                    </div>
                    <div class = "product_card-info">
                        <div class = "product_card-main_text font-syne">Ποιότητα προϊόντος</div>
                        <div class = "product_card-secondary_text font-syne">Lorem ipsum dolor sit amet consectetur. Tellus diam etiam dignissim.</div>
                        <div class = "product_card-price font-syne">$12</div>
                    </div>
                    <a href = "{{ route('product') }}" class = "product_card-link">
                        <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
                    </a>
                </div></div>
                <div class="swiper-slide"><div class = "product_card">
                    <div class="product_card-image_div">
                        <img class = "product_card-image" src="img/watercolor_illustration_of_several_types_of_coffee_photos_are_realistically_textured_with_soft_shad_3fohtx0dd3g5mfh8znui_1 1 (1).png">
                        <img class = "product_card-second_image" src = "https://s3-alpha-sig.figma.com/img/d84f/3b2c/f3dc12a19e1805e47c9780083f887426?Expires=1744588800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=DwjDfJiLorohHDLC1A08QYVfhg5sSxCECq5LapKPopSMIXUHc~laoLwPii9dzSnN4NlkYDys-ONIuHkinUrjxLNSkiM1B-UpLt9MXfw6mQhCWOF5bYUHw2693pmCZ4MW~-VWdiZdMpZBkSoUhot5ufvw3gh~CQNFBi8cBlOgZ985dP~JN-BZQy-x76i5EgMu~J45BOsihIM4QZp2S-um1Z0O3IHKL-IW0r9CEU7xHAYD6OR9QuvCJNdCXIoBARs7p2Pb4xibuhRh6fyDMpVWjQfDLudknEiBAl81WlkxDcUXdYrfrjvEXegMF-rl3M6S82rGSmaVO-ZF7v9GNgmdVQ__">
                    </div>
                    <div class = "product_card-info">
                        <div class = "product_card-main_text font-syne">Ποιότητα προϊόντος</div>
                        <div class = "product_card-secondary_text font-syne">Lorem ipsum dolor sit amet consectetur. Tellus diam etiam dignissim.</div>
                        <div class = "product_card-price font-syne">$12</div>
                    </div>
                                        <a href = "{{ route('product') }}" class = "product_card-link">
                        <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
                    </a>
                </div></div>
                <div class="swiper-slide"><div class = "product_card">
                    <div class="product_card-image_div">
                        <img class = "product_card-image" src="img/watercolor_illustration_of_several_types_of_coffee_photos_are_realistically_textured_with_soft_shad_3fohtx0dd3g5mfh8znui_1 1 (1).png">
                        <img class = "product_card-second_image" src = "https://s3-alpha-sig.figma.com/img/d84f/3b2c/f3dc12a19e1805e47c9780083f887426?Expires=1744588800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=DwjDfJiLorohHDLC1A08QYVfhg5sSxCECq5LapKPopSMIXUHc~laoLwPii9dzSnN4NlkYDys-ONIuHkinUrjxLNSkiM1B-UpLt9MXfw6mQhCWOF5bYUHw2693pmCZ4MW~-VWdiZdMpZBkSoUhot5ufvw3gh~CQNFBi8cBlOgZ985dP~JN-BZQy-x76i5EgMu~J45BOsihIM4QZp2S-um1Z0O3IHKL-IW0r9CEU7xHAYD6OR9QuvCJNdCXIoBARs7p2Pb4xibuhRh6fyDMpVWjQfDLudknEiBAl81WlkxDcUXdYrfrjvEXegMF-rl3M6S82rGSmaVO-ZF7v9GNgmdVQ__">
                    </div>
                    <div class = "product_card-info">
                        <div class = "product_card-main_text font-syne">Ποιότητα προϊόντος</div>
                        <div class = "product_card-secondary_text font-syne">Lorem ipsum dolor sit amet consectetur. Tellus diam etiam dignissim.</div>
                        <div class = "product_card-price font-syne">$12</div>
                    </div>
                                        <a href = "{{ route('product') }}" class = "product_card-link">
                        <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
                    </a>
                </div></div>
                <div class="swiper-slide"><div class = "product_card">
                    <div class="product_card-image_div">
                        <img class = "product_card-image" src="img/watercolor_illustration_of_several_types_of_coffee_photos_are_realistically_textured_with_soft_shad_3fohtx0dd3g5mfh8znui_1 1 (1).png">
                        <img class = "product_card-second_image" src = "https://s3-alpha-sig.figma.com/img/d84f/3b2c/f3dc12a19e1805e47c9780083f887426?Expires=1744588800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=DwjDfJiLorohHDLC1A08QYVfhg5sSxCECq5LapKPopSMIXUHc~laoLwPii9dzSnN4NlkYDys-ONIuHkinUrjxLNSkiM1B-UpLt9MXfw6mQhCWOF5bYUHw2693pmCZ4MW~-VWdiZdMpZBkSoUhot5ufvw3gh~CQNFBi8cBlOgZ985dP~JN-BZQy-x76i5EgMu~J45BOsihIM4QZp2S-um1Z0O3IHKL-IW0r9CEU7xHAYD6OR9QuvCJNdCXIoBARs7p2Pb4xibuhRh6fyDMpVWjQfDLudknEiBAl81WlkxDcUXdYrfrjvEXegMF-rl3M6S82rGSmaVO-ZF7v9GNgmdVQ__">
                    </div>
                    <div class = "product_card-info">
                        <div class = "product_card-main_text font-syne">Ποιότητα προϊόντος</div>
                        <div class = "product_card-secondary_text font-syne">Lorem ipsum dolor sit amet consectetur. Tellus diam etiam dignissim.</div>
                        <div class = "product_card-price font-syne">$12</div>
                    </div>
                                        <a href = "{{ route('product') }}" class = "product_card-link">
                        <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
                    </a>
                </div></div>
                <div class="swiper-slide"><div class = "product_card">
                    <div class="product_card-image_div">
                        <img class = "product_card-image" src="img/watercolor_illustration_of_several_types_of_coffee_photos_are_realistically_textured_with_soft_shad_3fohtx0dd3g5mfh8znui_1 1 (1).png">
                        <img class = "product_card-second_image" src = "https://s3-alpha-sig.figma.com/img/d84f/3b2c/f3dc12a19e1805e47c9780083f887426?Expires=1744588800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=DwjDfJiLorohHDLC1A08QYVfhg5sSxCECq5LapKPopSMIXUHc~laoLwPii9dzSnN4NlkYDys-ONIuHkinUrjxLNSkiM1B-UpLt9MXfw6mQhCWOF5bYUHw2693pmCZ4MW~-VWdiZdMpZBkSoUhot5ufvw3gh~CQNFBi8cBlOgZ985dP~JN-BZQy-x76i5EgMu~J45BOsihIM4QZp2S-um1Z0O3IHKL-IW0r9CEU7xHAYD6OR9QuvCJNdCXIoBARs7p2Pb4xibuhRh6fyDMpVWjQfDLudknEiBAl81WlkxDcUXdYrfrjvEXegMF-rl3M6S82rGSmaVO-ZF7v9GNgmdVQ__">
                    </div>
                    <div class = "product_card-info">
                        <div class = "product_card-main_text font-syne">Ποιότητα προϊόντος</div>
                        <div class = "product_card-secondary_text font-syne">Lorem ipsum dolor sit amet consectetur. Tellus diam etiam dignissim.</div>
                        <div class = "product_card-price font-syne">$12</div>
                    </div>
                                        <a href = "{{ route('product') }}" class = "product_card-link">
                        <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
                    </a>
                </div></div>
                <div class="swiper-slide"><div class = "product_card">
                    <div class="product_card-image_div">
                        <img class = "product_card-image" src="img/watercolor_illustration_of_several_types_of_coffee_photos_are_realistically_textured_with_soft_shad_3fohtx0dd3g5mfh8znui_1 1 (1).png">
                        <img class = "product_card-second_image" src = "https://s3-alpha-sig.figma.com/img/d84f/3b2c/f3dc12a19e1805e47c9780083f887426?Expires=1744588800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=DwjDfJiLorohHDLC1A08QYVfhg5sSxCECq5LapKPopSMIXUHc~laoLwPii9dzSnN4NlkYDys-ONIuHkinUrjxLNSkiM1B-UpLt9MXfw6mQhCWOF5bYUHw2693pmCZ4MW~-VWdiZdMpZBkSoUhot5ufvw3gh~CQNFBi8cBlOgZ985dP~JN-BZQy-x76i5EgMu~J45BOsihIM4QZp2S-um1Z0O3IHKL-IW0r9CEU7xHAYD6OR9QuvCJNdCXIoBARs7p2Pb4xibuhRh6fyDMpVWjQfDLudknEiBAl81WlkxDcUXdYrfrjvEXegMF-rl3M6S82rGSmaVO-ZF7v9GNgmdVQ__">
                    </div>
                    <div class = "product_card-info">
                        <div class = "product_card-main_text font-syne">Ποιότητα προϊόντος</div>
                        <div class = "product_card-secondary_text font-syne">Lorem ipsum dolor sit amet consectetur. Tellus diam etiam dignissim.</div>
                        <div class = "product_card-price font-syne">$12</div>
                    </div>
                                        <a href = "{{ route('product') }}" class = "product_card-link">
                        <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
                    </a>
                </div></div>
                <div class="swiper-slide"><div class = "product_card">
                    <div class="product_card-image_div">
                        <img class = "product_card-image" src="img/watercolor_illustration_of_several_types_of_coffee_photos_are_realistically_textured_with_soft_shad_3fohtx0dd3g5mfh8znui_1 1 (1).png">
                        <img class = "product_card-second_image" src = "https://s3-alpha-sig.figma.com/img/d84f/3b2c/f3dc12a19e1805e47c9780083f887426?Expires=1744588800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=DwjDfJiLorohHDLC1A08QYVfhg5sSxCECq5LapKPopSMIXUHc~laoLwPii9dzSnN4NlkYDys-ONIuHkinUrjxLNSkiM1B-UpLt9MXfw6mQhCWOF5bYUHw2693pmCZ4MW~-VWdiZdMpZBkSoUhot5ufvw3gh~CQNFBi8cBlOgZ985dP~JN-BZQy-x76i5EgMu~J45BOsihIM4QZp2S-um1Z0O3IHKL-IW0r9CEU7xHAYD6OR9QuvCJNdCXIoBARs7p2Pb4xibuhRh6fyDMpVWjQfDLudknEiBAl81WlkxDcUXdYrfrjvEXegMF-rl3M6S82rGSmaVO-ZF7v9GNgmdVQ__">
                    </div>
                    <div class = "product_card-info">
                        <div class = "product_card-main_text font-syne">Ποιότητα προϊόντος</div>
                        <div class = "product_card-secondary_text font-syne">Lorem ipsum dolor sit amet consectetur. Tellus diam etiam dignissim.</div>
                        <div class = "product_card-price font-syne">$12</div>
                    </div>
                                        <a href = "{{ route('product') }}" class = "product_card-link">
                        <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
                    </a>
                </div></div>
                <div class="swiper-slide"><div class = "product_card">
                    <div class="product_card-image_div">
                        <img class = "product_card-image" src="img/watercolor_illustration_of_several_types_of_coffee_photos_are_realistically_textured_with_soft_shad_3fohtx0dd3g5mfh8znui_1 1 (1).png">
                        <img class = "product_card-second_image" src = "https://s3-alpha-sig.figma.com/img/d84f/3b2c/f3dc12a19e1805e47c9780083f887426?Expires=1744588800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=DwjDfJiLorohHDLC1A08QYVfhg5sSxCECq5LapKPopSMIXUHc~laoLwPii9dzSnN4NlkYDys-ONIuHkinUrjxLNSkiM1B-UpLt9MXfw6mQhCWOF5bYUHw2693pmCZ4MW~-VWdiZdMpZBkSoUhot5ufvw3gh~CQNFBi8cBlOgZ985dP~JN-BZQy-x76i5EgMu~J45BOsihIM4QZp2S-um1Z0O3IHKL-IW0r9CEU7xHAYD6OR9QuvCJNdCXIoBARs7p2Pb4xibuhRh6fyDMpVWjQfDLudknEiBAl81WlkxDcUXdYrfrjvEXegMF-rl3M6S82rGSmaVO-ZF7v9GNgmdVQ__">
                    </div>
                    <div class = "product_card-info">
                        <div class = "product_card-main_text font-syne">Ποιότητα προϊόντος</div>
                        <div class = "product_card-secondary_text font-syne">Lorem ipsum dolor sit amet consectetur. Tellus diam etiam dignissim.</div>
                        <div class = "product_card-price font-syne">$12</div>
                    </div>
                                        <a href = "{{ route('product') }}" class = "product_card-link">
                        <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
                    </a>
                </div></div>
                <div class="swiper-slide"><div class = "product_card">
                    <div class="product_card-image_div">
                        <img class = "product_card-image" src="img/watercolor_illustration_of_several_types_of_coffee_photos_are_realistically_textured_with_soft_shad_3fohtx0dd3g5mfh8znui_1 1 (1).png">
                        <img class = "product_card-second_image" src = "https://s3-alpha-sig.figma.com/img/d84f/3b2c/f3dc12a19e1805e47c9780083f887426?Expires=1744588800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=DwjDfJiLorohHDLC1A08QYVfhg5sSxCECq5LapKPopSMIXUHc~laoLwPii9dzSnN4NlkYDys-ONIuHkinUrjxLNSkiM1B-UpLt9MXfw6mQhCWOF5bYUHw2693pmCZ4MW~-VWdiZdMpZBkSoUhot5ufvw3gh~CQNFBi8cBlOgZ985dP~JN-BZQy-x76i5EgMu~J45BOsihIM4QZp2S-um1Z0O3IHKL-IW0r9CEU7xHAYD6OR9QuvCJNdCXIoBARs7p2Pb4xibuhRh6fyDMpVWjQfDLudknEiBAl81WlkxDcUXdYrfrjvEXegMF-rl3M6S82rGSmaVO-ZF7v9GNgmdVQ__">
                    </div>
                    <div class = "product_card-info">
                        <div class = "product_card-main_text font-syne">Ποιότητα προϊόντος</div>
                        <div class = "product_card-secondary_text font-syne">Lorem ipsum dolor sit amet consectetur. Tellus diam etiam dignissim.</div>
                        <div class = "product_card-price font-syne">$12</div>
                    </div>
                                        <a href = "{{ route('product') }}" class = "product_card-link">
                        <button class = "font-syne product_card-button">Προσθήκη στην κάρτα</button>
                    </a>
                </div></div>
            </div>
                <!-- Add Pagination -->
                <!-- <div class="swiper-pagination"></div> -->
                <!-- Add Arrows -->
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
              </div>
            </div>
        </div>
    </div>
    @include('footer')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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
    <script>
        function checkbox(selection){
            var items = document.getElementsByName('value');
            for(let item of items){
                if(item.innerHTML.localeCompare(selection) == 0){
                    if(document.getElementById(selection).style.display === "none"){
                        document.getElementById(selection).style.display = "flex";
                    }
                    else{
                        document.getElementById(selection).style.display = "none";
                        document.getElementById(selection + "_input").checked = false;
                    }
                }
            }
        }

        function filter_dropdown(){
            var div = document.getElementById("filter1_container");
            var svg = document.getElementById("filter_dropdown_btn");
            if(div.style.display !== "none"){
                div.style.display = "none";
                svg.style.transform = 'rotate(180deg)';
            }
            else{
                div.style.display = "initial";
                svg.style.transform = 'initial';
            }
        }

        function do_some_magic(svg_id,div_id){
            spin_the_svg(svg_id);
            add_plus_to_div(div_id);
        }

        function spin_the_svg(id){
            var svg = document.getElementById(id);
            if(svg.style.transform == 'rotate(180deg)'){
                svg.style.transform = 'initial';
            }
            else{
                svg.style.transform = 'rotate(180deg)';
            }
        }

        function add_plus_to_div(id){
            var the_div = document.getElementById(id);
            var all_divs = document.getElementsByClassName('sorting_dropdown-element');
            for(let div of all_divs){
                if(div.innerHTML[0] == '+'){
                    div.innerHTML = div.innerHTML.slice(1);
                }
            }
            the_div.innerHTML = '+' + the_div.innerHTML;
        }

        function show_sorting_dropdown(){
            var div = document.getElementById("sorting_dropdown");

            if(div.style.display == "none"){
                div.style.display = "block";
            }
            else{
                div.style.display = "none";
            }
        }

        function showdropdown(){
            var div = document.getElementById("menu_dropdown");
            var svg_open = document.getElementById("header_svg_open");
            var svg_close = document.getElementById("header_svg_close");
            let width = screen.width;

if(div.style.display == "none"){
    div.style.display = "flex";
    svg_close.style.display = "initial";
    svg_open.style.display = "none";
}
else{
    div.style.display = "none";
    svg_close.style.display = "none";
    svg_open.style.display = "initial";
}
        }
    </script>
</body>
</html>