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
<div class = "header">
    <img class="header-image" src = "img/cropped-Omerta_Logo@3x-1 1.png" alt="Logo" />
        <div class = "header-bar-small-text-bar">
            <h1 class = "header-bar-small-text">Αρχική</h1>
            <h1 class = "header-bar-small-text">Εταιρεία</h1>
            <h1 class = "header-bar-small-text">Roasting</h1>
            <h1 class = "header-bar-small-text">Προϊόντα</h1>
            <h1 class = "header-bar-small-text">Blog</h1>
            <h1 class = "header-bar-small-text">Franchise</h1>
            <a class = "header-bar-small-text" href="{{ route("card.index") }}"><strong>Card</strong></a>
        </div>
        <svg onclick="showdropdown()" id = "header_svg_open" aria-hidden="true" role="presentation" class="header_svg" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M104 333H896C929 333 958 304 958 271S929 208 896 208H104C71 208 42 237 42 271S71 333 104 333ZM104 583H896C929 583 958 554 958 521S929 458 896 458H104C71 458 42 487 42 521S71 583 104 583ZM104 833H896C929 833 958 804 958 771S929 708 896 708H104C71 708 42 737 42 771S71 833 104 833Z"></path></svg>
        <svg onclick="showdropdown()"  id = "header_svg_close" class="header_svg" style="display: none;" aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--close elementor-animation-shrink e-font-icon-svg e-eicon-close" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z"></path></svg>
        {{-- <button class = "header-button">EShop</button> --}}
        @if (Auth::check())
        @if(Auth::user()->role == 'admin')
            <a href="{{ route('admin_panel') }}"><button class = "header-button admin_button"><strong>Admin Panel</strong></button></a>
        @endif
        <form class = "logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button class = "header-button" type="submit">Logout</button>
        </form>
        <a class = "card_icon"><svg fill="#AB2531" width="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 97.623 97.623" xml:space="preserve" stroke="#AB2531"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M78.617,65.562H44.543c-4.919,0-10.185-3.585-11.987-8.163l-13.77-34.953c-0.727-1.846-3.289-3.59-5.273-3.59H3.609 C1.616,18.857,0,17.241,0,15.248c0-1.993,1.616-3.609,3.609-3.609h9.905c4.92,0,10.185,3.585,11.987,8.163l13.77,34.953 c0.727,1.846,3.289,3.59,5.272,3.59h34.074c1.935,0,4.375-1.725,5.02-3.548l6.638-18.758c0.186-0.525,0.139-0.845,0.088-0.918 c-0.052-0.073-0.338-0.223-0.895-0.223H42.474c-1.993,0-3.609-1.616-3.609-3.609c0-1.993,1.616-3.609,3.609-3.609h46.994 c2.843,0,5.317,1.194,6.789,3.275c1.471,2.081,1.771,4.811,0.822,7.491l-6.638,18.758C88.783,61.89,83.589,65.562,78.617,65.562z"></path> </g> <g> <circle cx="35.267" cy="77.964" r="8.02"></circle> </g> <g> <circle cx="86.689" cy="77.964" r="8.02"></circle> </g> <g> <path d="M78.489,43.552H46.612c-0.997,0-1.804-0.808-1.804-1.804c0-0.997,0.808-1.804,1.804-1.804h31.877 c0.997,0,1.804,0.808,1.804,1.804C80.293,42.744,79.486,43.552,78.489,43.552z"></path> </g> <g> <path d="M76.051,52.574H49.864c-0.996,0-1.804-0.808-1.804-1.804c0-0.997,0.808-1.804,1.804-1.804h26.188 c0.997,0,1.804,0.808,1.804,1.804C77.855,51.766,77.048,52.574,76.051,52.574z"></path> </g> </g> </g></svg></a>
        @else
        <a href = "{{ route('register') }}">
            <button class = "header-button">Register</button>
        </a> 
        @endif
    
</div>
        <div id="menu_dropdown" style="display: none;" class = "menu_dropdown">
            <div class = "">Αρχική</div>
            <div class = "">Εταιρεία</div>
            <div class = "">Roasting</div>
            <div class = "">Προϊόντα</div>
            <div class = "">Blog</div>
            <div class = "">Franchise</div>
            <div class = "">Επικοινωνία</div>
        </div>
<div  class="big-image">
<img style="width: 100%;" src="img/hero.png" >
</div>
<div id = "ribbon_header"></div>
@include('headerJS')
</body>