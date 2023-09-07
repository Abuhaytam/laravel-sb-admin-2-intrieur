<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('https://atlasemploi.com/wp-content/uploads/2022/04/%D9%85%D8%A8%D8%A7%D8%B1%D8%A7%D8%A9-%D9%88%D9%84%D9%88%D8%AC-%D8%B3%D9%84%D9%83-%D8%AA%D9%83%D9%88%D9%8A%D9%86-%D8%A7%D9%84%D8%AA%D9%82%D9%86%D9%8A%D9%8A%D9%86-%D8%A7%D9%84%D9%85%D8%AA%D8%AE%D8%B5%D8%B5%D9%8A%D9%86-%D9%81%D9%8A-%D8%B4%D8%B9%D8%A8%D8%A9-%D8%A3%D8%B4%D8%BA%D8%A7%D9%84-%D8%A7%D9%84%D8%AC%D9%85%D8%A7%D8%B9%D8%A7%D8%AA-%D8%A7%D9%84%D8%AA%D8%B1%D8%A7%D8%A8%D9%8A%D8%A9-2022_royaume-maroc-ministre-interieur-offre-emploi_atlasemploi.com_.jpg') }}" rel="icon" type="image/png">
</head>
<body class="bg-gradient-primary min-vh-100 d-flex justify-content-center align-items-center">

@yield('main-content')

<!-- Scripts -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>
</html>
