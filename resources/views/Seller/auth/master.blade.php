<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ثبت نام | کنترل پنل</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/assets/Admin/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/assets/Admin/css/rtl.css">
    <link rel="stylesheet" href="/assets/Admin/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/Admin/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/Admin/css/AdminLTE.css">
    <link rel="stylesheet" href="/assets/Admin/plugins/iCheck/square/blue.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="/assets/Admin/css/dropzone.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="hold-transition register-page">
@include('Seller.auth.section.header')
@yield('content')
@include('Seller.auth.section.footer')
</body>
</html>