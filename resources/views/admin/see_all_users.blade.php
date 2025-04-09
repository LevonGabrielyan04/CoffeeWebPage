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
        <div class = "center">
            <div class = "form_at_center all_users">
                <h1>All Users</h1>
                <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
                @foreach ($users as $user)
                <tr>
                        <td>{{$user->name  }}</td>
                        <td>{{$user->email  }}</td>
                        <td>{{$user->role  }}</td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>