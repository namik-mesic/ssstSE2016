<html>
<head>
    <title>Confirm</title>
</head>
<body>
<h1>
    Thanks for signing up!
</h1>
<p>
    <a href='{{url("register/confirm/{$user -> email_token}")}}'> Confirm </a> your email address!
</p>
</body>
</html>
