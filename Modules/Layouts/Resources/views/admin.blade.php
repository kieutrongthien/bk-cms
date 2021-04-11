<!DOCTYPE html>
<html lang="en">

<head>

	<title>{{config('app.name')}}</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- Favicon icon -->
	<link rel="icon" href="{{asset('themes/admin/assets/images/favicon.png')}}" type="image/x-icon">
	<link rel="stylesheet" href="{{asset('themes/admin/assets/fonts/fontawesome/css/fontawesome-all.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('themes/admin/assets/plugins/animation/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('themes/admin/assets/css/style.css')}}">
</head>
<body>
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->

    @include('layouts::components.admin.navigations')
    @include('layouts::components.admin.header')

	<!-- [ Main Content ] start -->
	<div class="pcoded-main-container">
		<div class="pcoded-wrapper">
			<div class="pcoded-content">
				<div class="pcoded-inner-content">
					<div class="main-body">
						<div class="page-wrapper">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- [ Main Content ] end -->

	<script src="{{asset('themes/admin/assets/js/vendor-all.min.js')}}"></script>
	<script src="{{asset('themes/admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('themes/admin/assets/js/pcoded.min.js')}}"></script>
</body>
</html>