<head>

</head>
<body>
    <div class="ribbon font-syne">
        <div class="ribbon-content">
            <div class = "ribbon-title">Cart</div>
            @foreach ($products as $item)
                <div class = "ribbon-item">
                    <img class = "ribbon-item-image" src="{{ asset('storage/' . $item->image) }}" alt="Product Image" />
                    <span class = "ribbon-item-name font-syne">{{ $item->name }} | {{ $item->pivot->quantity }} items</span>
                <hr style = "width: 100%; background-color:white;">
                </div>
            @endforeach
            <span>Total price: {{$total_price}}$</span>
        </div>
    </div>
</body>