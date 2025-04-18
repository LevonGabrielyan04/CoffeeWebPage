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
        <a class = "card_icon"><svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 902.86 902.86" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M671.504,577.829l110.485-432.609H902.86v-68H729.174L703.128,179.2L0,178.697l74.753,399.129h596.751V577.829z M685.766,247.188l-67.077,262.64H131.199L81.928,246.756L685.766,247.188z"></path> <path d="M578.418,825.641c59.961,0,108.743-48.783,108.743-108.744s-48.782-108.742-108.743-108.742H168.717 c-59.961,0-108.744,48.781-108.744,108.742s48.782,108.744,108.744,108.744c59.962,0,108.743-48.783,108.743-108.744 c0-14.4-2.821-28.152-7.927-40.742h208.069c-5.107,12.59-7.928,26.342-7.928,40.742 C469.675,776.858,518.457,825.641,578.418,825.641z M209.46,716.897c0,22.467-18.277,40.744-40.743,40.744 c-22.466,0-40.744-18.277-40.744-40.744c0-22.465,18.277-40.742,40.744-40.742C191.183,676.155,209.46,694.432,209.46,716.897z M619.162,716.897c0,22.467-18.277,40.744-40.743,40.744s-40.743-18.277-40.743-40.744c0-22.465,18.277-40.742,40.743-40.742 S619.162,694.432,619.162,716.897z"></path> </g> </g> </g></svg></a>
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