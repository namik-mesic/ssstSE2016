<html>
<head>
    <title> Verification </title>
</head>
<body>
<h1> Thank you for signing up!</h1>

<p> Dear user, please click to <a href='{{url("/register/verify/{$user -> email_token}")}}'> this link </a> in order to
    confirm your email address!</p>


</body>

</html>