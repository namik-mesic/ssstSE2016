<!DOCTYPE html>
<!-- Damir Čengić and Dino Kodro -->

<html>

<head>

	<meta charset="UTF-8">
	<title>MailBird | Mailing lists</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<!-- Bootstrap 3.3.2 -->
	<link href="{{ asset ('/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- Font Awesome Icons -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!-- Ionicons -->
	<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme style -->
	<link href="{{ asset('/bower_components/AdminLTE/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
	
	<link href="{{ asset('/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css')}}" rel="stylesheet" type="text/css" />

	<link rel="shortcut icon" href="{{{ asset('/bower_components/AdminLTE/dist/img/favicon.ico') }}}">

</head>

<body class="skin-blue">

<div class="wrapper">
    <!-- Header -->
    @include('layouts.header')

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $page_title or "MailBird" }}
                <small>{{ $page_description or null }}</small>
            </h1>
            
            
        </section>

        <!-- Main content -->
		<section class="content body">
			@yield ('content')
			@show
        </section><!-- /.content -->
         @include('layouts.footer')
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
   

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->


<script src="{{ asset ("//code.jquery.com/jquery-2.2.4.min.js") }}"></script> <!-- switched to using CDN -->
<!--<script src="{{ asset ("//bower_components/AdminLTE/plugins/jQuery/jQuery-2.1.3.min.js") }}"></script>-->
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>

</body>
</html>