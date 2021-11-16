<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Upcafe" />
	<meta name="author" content="Upcafe" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Upcafe | Admin" />
	<meta property="og:title" content="Upcafe | Admin" />
	<meta property="og:description" content="Upcafe | Admin" />
	<meta property="og:image" content="{{asset('assets/admin/images/screen_area.png')}}" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Upcafe | @yield('title')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="/assets/admin/images/fabicon.png" />

    <link rel="stylesheet" href="/assets/admin/vendor/toastr/css/toastr.min.css">
    <!-- Custom Stylesheet -->
	<link href="/assets/admin/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="/assets/admin/css/style.css" rel="stylesheet">
    <!-- Datatable -->
    <link href="/assets/admin/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="/assets/admin/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div id="wait" style="background-size: 200px;"></div>
    <!-- <div id="preloader">
        <div class="gooey">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
    <div id="app">
        <div id="main-wrapper">
            @include('admin.layouts.header')
            @include('admin.layouts.nav')

            @yield('content')

            <div class="footer">
                <div class="copyright">
                    <p>Copyright &copy;<?=date('Y')?> Upcafe</p>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layouts.script')
    @yield('scripts')
</body>