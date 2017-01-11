<!--Damir Cengic-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MailBird | Reset Password</title>
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
<style type="text/css">.login-page{background-image:url('/bower_components/AdminLTE/dist/img/loginback.jpeg');background-attachment: fixed;background-position: center;}</style>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html" style="color: white;"><b style="color: white;">Mail</b>Bird</a>
  </div>
  <!-- /.reset-logo -->
  <div class="login-box-body">
<h1 class="login-box-msg">Reset Password</h1>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-8 col-md-offset-4-left control-label"><h3>E-Mail Address</h3></label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-warning">
                                    Send Password Reset Link
                                </button>
                                 </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
