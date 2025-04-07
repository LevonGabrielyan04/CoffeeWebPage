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

@include('local_javascripts.recently_viewed')
</body>
</html>