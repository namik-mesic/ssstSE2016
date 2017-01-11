<?php

return array(
  "driver" => "smtp",
  "host" => "mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "from@example.com",
      "name" => "Example"
  ),
  "username" => "dd6472dbb7ef47",
  "password" => "bcb1720e0b11f6",
  "sendmail" => "/usr/sbin/sendmail -bs",
  "pretend" => false
);