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
    <div class = "main admin_panel_main">
        @include('admin.admin_header')
        
        <div class = "center center_in_see_one">
            <div class = "form_at_center form_in_one_user">
                <h1>Create category</h1>
                <form action="{{ route('category.post') }}" method="POST" class="real_form">
                @csrf
                <label>Category name:</label>
                 <input name = "name" class = "admin_form_input admin_form_big_input" placeholder="Coffee">
                    <button class = "header-button" type = "submit">Create</button>
                 </form>  
                     @if (\Session::has('fail'))
    <div class="alert alert-fail">
            {!! \Session::get('fail') !!}
    </div>
    @endif
    @if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
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
            
</div>
        </div>
    </div>
</body>
</html>