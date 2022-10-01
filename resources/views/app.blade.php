<!DOCTYPE html>
<html class="color-header headercolor4">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">



    @routes
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @inertiaHead
</head>

<body>
    @inertia
    {{-- <!-- Bootstrap JS -->
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/metismenu/js/metisMenu.min.js"></script> --}}
    {{-- <script src="{{ asset('assets') }}/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script> --}}
    <!--app JS-->

</html>
