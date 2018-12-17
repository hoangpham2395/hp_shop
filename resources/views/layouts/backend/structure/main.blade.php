<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{getConstant('APP_NAME')}} | Administrator</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @include('layouts.backend.load.css')
    @include('layouts.backend.load.js')
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
    <!-- Header -->
    @include('layouts.backend.structure.navbar')
    <!-- Sidebar -->
    @include('layouts.backend.structure.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer -->
    @include('layouts.backend.structure.footer')
</div>
<!-- ./wrapper -->
</body>
</html>
