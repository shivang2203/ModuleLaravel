<!doctype html>
<html>
<head>

    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="{{ asset('/public/css/style.css') }}">
</head>
<body>
    <div id="app">
<!-- -----------------Header Start----------------- -->
@include('partials.user-header')
<!-- -----------------Header End----------------- -->
        <main class="py-4 m-5">
            <div class="row">
                <!-- -----------------Sidemenu Start----------------- -->
                @include('partials.user-sidebar')
                <!-- -----------------Sidemenu End----------------- -->
                <!-- -----------------Main End----------------- -->
                @yield('content')
                <!-- -----------------Main End----------------- -->
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="assest/js/script.js"></script>
</body>
</html>
