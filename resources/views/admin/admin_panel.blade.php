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
    <div class = "center">
        <div class = "form_at_center">
            <div>Create a new product</div>
            <form action="{{ route('store') }}" method="POST"  enctype="multipart/form-data" class="real_form">
                @csrf
                <input name = "name" class = "admin_form_input" placeholder="Name">
                <input name = "description" class = "admin_form_input" placeholder="Description">
                <input name = "price" class = "admin_form_input" placeholder="Price">
                <input name = "weight" class = "admin_form_input" placeholder="Package weight">
                <input name = "altitude" class = "admin_form_input" placeholder="Altitude">
                <input name = "processing" class = "admin_form_input" placeholder="Processing">
                <input name = "variety" class = "admin_form_input" placeholder="Variety">
                <input name = "baking" class = "admin_form_input" placeholder="Baking">
                <input name = "grinding" class = "admin_form_input" placeholder="Grinding Type">
                <label for = "image">Image:</label>
                <input name = "image" type="file">
                <button class = "header-button" type="submit">Create</button>
                @if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
    </div>
    @endif
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
            </form>
            
        </div>
    </div>
</div>
</body>