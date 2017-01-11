<?php

return array(
    "driver" => "smtp",
    "host" => "mailtrap.io",
    "port" => 2525,
    "from" => array(
        "address" => "from@example.com",
        "name" => "Example"
    ),
    "username" => "6e19feda294ecb",
    "password" => "defab4f8c23def",
    "sendmail" => "/usr/sbin/sendmail -bs",
    "pretend" => false
);