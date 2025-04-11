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
    <img class="header-image" src = "https://s3-alpha-sig.figma.com/img/761a/36b3/6ea0b11bf7851be11678f495cd498125?Expires=1744588800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=J0sizeI9nnrb0VQiIbg1XLdPMChAYd0lKLx2DK8KP3DTfz2FDzG6l-UbbUJEn6MJhLgihhUbEICn1diwZzYK28AR4qK4OfLtrrjUgKdajvPem4lqQu20GxOdRK3EAw0zFqF8W5mx8U67oWUTtiy9EW8dZkZs2Po9l6QZVEHTgFWx5DzF~dLYXH2fZNMZs~PEs5X~EOWdNuyWwDEu2Ajvc3su831hIygPEhjiYb59Nd8JR0JkodHDMoaDJPbdJ3~vkHfuW2dnf9u8FOEuT8iVy-A6ufG9dS5W1B1Zzqb9vz43xitpov0wNCbfocz8w3h1M-oNbujajqGKPBlPcJIgnw__">
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
</body>