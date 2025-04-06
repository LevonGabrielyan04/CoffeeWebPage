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
            <div class = "form_at_center all_users">
                @foreach ($users as $user)
                    <div class = "user_card">
                        <div>Id:&nbsp;{{$user->id  }}</div>
                        <div>Name:&nbsp;{{$user->name  }}</div>
                        <div>Email:&nbsp;{{$user->email  }}</div>
                        <div>Email verified at:&nbsp;{{$user->email_verified_at  }}</div>
                        <div>Created at:&nbsp;{{$user->created_at  }}</div>
                        <div>Updated at:&nbsp;{{$user->updated_at  }}</div>
                        <div>Role:&nbsp;{{$user->role  }}</div>
                        <hr>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>