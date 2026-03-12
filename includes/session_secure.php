<?php

$secure = true;

session_set_cookie_params(
    0,
    '/; samesite=Strict',
    '',
    $secure,
    true
);

session_start();

?>