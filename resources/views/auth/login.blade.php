<!--Damir Cengic-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MailBird | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/bower_components/AdminLTE/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/bower_components/AdminLTE/plugins/iCheck/square/blue.css">

<link rel="shortcut icon" href="{{{ asset('/bower_components/AdminLTE/dist/img/favicon.ico') }}}">

</head>
<style type="text/css">.login-page{background-image:url('/bower_components/AdminLTE/dist/img/loginback.jpeg');background-attachment: fixed;background-position: center;} .login-box-body {background: rgba(255, 255, 255, 0.9);}</style>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html" style="color: white;"><b style="color: white;">Mail</b>Bird</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
  <h1 class="login-box-msg">Log In</h1>
    <p class="login-box-msg">Sign in to start reaching out!</p>

    

      
            

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            

                            <div class="col-md-12">

                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                              </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           

                            <div class="col-md-12">

                                      <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required >
              </div>
                                

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">
                                    Log In
                                </button>
</div>
                                </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                               
                            </div>
                             <div class="col-md-6">
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                                </div>
                        </div>


                                

                    </form>
              
              
                

           




    

    <!-- /.social-auth-links -->

    <a class="btn btn-link" href="{{ url('/password/reset') }}">I forgot my password</a><br>
    <a href="/register" class="text-center">Register</a>
    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="{{ asset ("//code.jquery.com/jquery-2.2.4.min.js") }}"></script> <!-- switched to using CDN -->
    <!--<script src="{{ asset ("//bower_components/AdminLTE/plugins/jQuery/jQuery-2.1.3.min.js") }}"></script>-->
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<!-- iCheck -->
<script src="{{ asset ("https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.js") }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
