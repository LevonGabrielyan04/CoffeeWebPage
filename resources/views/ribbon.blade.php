<head>

</head>
<body>
    <div class="ribbon">
        <div class="ribbon-content">
            <div class = "ribbon-title">Cart</div>
            @foreach ($products as $item)
                <div class = "ribbon-item">
                    <span class = "ribbon-item-name font-syne">{{ $item->name }} - {{ $item->pivot->quantity }}</span>
                </div>
            @endforeach
            <span>Total price: {{$total_price}}$</span>
        </div>
    </div>
</body>