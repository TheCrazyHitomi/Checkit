<?php

session_set_cookie_params([
    'lifetime' => 100000,
    'path' => '/',
    'domain' => '.checkit.local',
    'httponly' => true
]);

session_start();

function isUserConnected():bool
{
    return isset($_SESSION['user']);
}