<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPos - {{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logoPos.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>
    <div class="layer"></div>
    <div class="page-flex">
        @include('admin.layouts.sidebar')
        <div class="main-wrapper">
            @include('admin.layouts.navbar')
            <main class="main-page" id="skip-target">
                @yield('content')
            </main>
            @include('admin.layouts.footer')
        </div>
    </div>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>
