<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Salesight Owner</title>

    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owner-sidebar.css') }}">
</head>
<body>

    <div class="layout-wrapper">

        @include('sidebar.owner-sidebar')

        <main class="main-content">
            @yield('content')
        </main>

    </div>

</body>
</html>