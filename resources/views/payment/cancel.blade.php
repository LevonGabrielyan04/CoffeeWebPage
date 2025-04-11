<html lang="el">
<head>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    {{-- @vite('resources/css/app.css') CHBACEL!!! --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
    <div class = "payment_successful_container open-sans">
        <div class = "payment_successful_main">
            <div class = "payment_successful_texts">
                <span class="payment_brand_name">Omerta Coffee</span>
                <span class = "payment_message">Payment canceled!</span>
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
                       </ul>
                     @endforeach
                </div>
            @endif
            </div>
            <div class = "payment_successful_bottom_div">
                <?xml version="1.0" ?><svg style="width:150px;" id="Layer_1" style="enable-background:new 0 0 612 792;" version="1.1" viewBox="0 0 612 792" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
                    .st0{fill:#E44061;}
                </style><g><path class="st0" d="M562,396c0-141.4-114.6-256-256-256S50,254.6,50,396s114.6,256,256,256S562,537.4,562,396L562,396z M356.8,396   L475,514.2L424.2,565L306,446.8L187.8,565L137,514.2L255.2,396L137,277.8l50.8-50.8L306,345.2L424.2,227l50.8,50.8L356.8,396   L356.8,396z"/></g></svg>
                <a class = "link_in_success_page" href="{{ route('user_index') }}">Return to products page</a>
            </div>
        </div>
    </div>
</body>