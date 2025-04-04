<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGly</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css')}}">
    @yield('css')
</head>
<body>
    <div class="app2">
        <header class="header2">
            <h1 class="header2__heading">PiGly</h1>
            @yield('link')
        </header>
        <div class="content">
             @yield('content')
        </div>
    </div>
</body>
</html>