<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Ipos,Kasir,Resto,Pos,Pembayaran,Toko,Penjualan,Pengeluaran,Pemasukan,Laporan,Penjualan,Restoran">
    <meta name="author" content="DPos">
    <meta name="keywords"
        content="dpos, kasir, resto, pos, pembayaran, toko, penjualan, pengeluaran, pemasukan, laporan">

    <title>DPos - {{ $title }}</title>

    {{--  <!-- <script src="../assets/js/color-modes.js"></script> -->  --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendors/core/core.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/logoPos.png') }}" />
    <style>
        .icon-aksi {
            width: 24px;
            height: 24px;
        }
    </style>
</head>

<body style="background-color: #F6FBFD;">
    <div class="main-wrapper">
        @include('admin.layouts.sidebar')>
        <div class="page-wrapper">
            @include('admin.layouts.navbar')
            <div class="page-content">
                @yield('content')
            </div>
            @include('admin.layouts.footer')
        </div>
    </div>

    <script src="{{ asset('assets/vendors/core/core.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net/dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('ssets/vendors/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
</body>

</html>
