<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
</head>
<body>
    <div class = "main font-syne">
        @include('header')
        <div class = "filters-container card-container">
            <h1>Card</h1>
            <a class = "header-button buy-button" href = "{{ route('payment', ['user_id' => Auth::id()]) }}">Buy all</a>
            @php
                $is_card = true;
            @endphp
            @include('products_list')
        </div>
        @include('footer')
    </div>
</body>