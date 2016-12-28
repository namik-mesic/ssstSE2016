
<html>
    <head>
        <meta charset="UTF-8">
        <title>MailBird | Email creator</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="{{ asset ('/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{ asset('/bower_components/AdminLTE/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link href="{{ asset('/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{ asset ("/bower_components/AdminLTE/plugins/ckeditor/ckeditor.js") }}" type="text/javascript"></script>

<link rel="shortcut icon" href="{{{ asset('/bower_components/AdminLTE/dist/img/favicon.ico') }}}">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
<body class="skin-blue">
<div class="wrapper">

    <!-- Header -->
    @include('header')

    <!-- Sidebar -->
    @include('sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $page_title or "Email Editor" }}
                <small>{{ $page_description or null }}</small>
            </h1>
            <!-- You can dynamically generate breadcrumbs here -->
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="col-md-6"><form role="form">
                <!-- text input -->
                <div class="form-group">
                  <label>Email name</label>
                  <input type="text" class="form-control" placeholder="Email name">
                </div>

                  <div class="form-group">
                  <label>Subject</label>
                  <input type="text" class="form-control" placeholder="Subject">
                </div> 
                <div class="col-md-6">
                <div class="form-group">
                <select class="form-control">
                <option> Kampanja 1</option>
                <option> Kampanja 2</option>
                </select>
                </div>
                </div>
                </form>     

                </div>
                <div class="col-md-12">
                <form>                                    
                <!-- THIS RIGHT HERE IS THE EDITOR -->
              <textarea name="editor1" id="editor1" rows="10" cols="80">
                Click to start editing.
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
        </form>
        <div class="col-md-3">
   <button type="button" class="btn btn-block btn-info btn-lg"><i class="fa fa-save"></i> SAVE</button>
        </div>
</div>
        <!DOCTYPE html>

            <!-- Your Page Content Here -->
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('footer')

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->


        <script src="{{ asset ("//code.jquery.com/jquery-2.2.4.min.js") }}"></script> <!-- switched to using CDN -->
    <!--<script src="{{ asset ("//bower_components/AdminLTE/plugins/jQuery/jQuery-2.1.3.min.js") }}"></script>-->
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset ("/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
</body>
</html>