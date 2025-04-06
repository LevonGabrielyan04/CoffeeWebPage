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
    <div class = "main">
        @include('admin.admin_header')
        <div class = "center center_in_see_one">
            <div class = "form_at_center">
                <form action="{{ route('show_product.post') }}" method="POST" class="real_form">
                @csrf
                 <input name = "input" class = "admin_form_input" placeholder="Enter name, email or Id">
                    <button type = "submit">Search</button>
                 </form>  
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
            @endforeach
        </ul>
    </div>
@endif 
            @if(!empty($product))
            <div class = "box_at_center user_card-no-border">
            @if(is_iterable(session('product')))
            @foreach ($product as $item)
            <div class = "user_card">
                            <div>Id:&nbsp;{{$item->id  }}</div>
                            <div>Name:&nbsp;{{$item->name  }}</div>
                            <div>Email:&nbsp;{{$item->email  }}</div>
                            <div>Email verified at:&nbsp;{{$item->email_verified_at  }}</div>
                            <div>Created at:&nbsp;{{$item->created_at  }}</div>
                            <div>Updated at:&nbsp;{{$item->updated_at  }}</div>
                            <div>Role:&nbsp;{{$item->role  }}</div>
                            <hr>
                        </div>
            @endforeach
            @else
            <div class = "user_card">
                        <div>Id:&nbsp;{{$product->id  }}</div>
                        <div>Name:&nbsp;{{$product->name  }}</div>
                        <div>Email:&nbsp;{{$product->email  }}</div>
                        <div>Email verified at:&nbsp;{{$product->email_verified_at  }}</div>
                        <div>Created at:&nbsp;{{$product->created_at  }}</div>
                        <div>Updated at:&nbsp;{{$product->updated_at  }}</div>
                        <div>Role:&nbsp;{{$product->role  }}</div>
                    </div>
            @endif
            
</div>
@endif
</div>
        </div>
    </div>
</body>
</html>