<?php
set_include_path(__DIR__);
require_once 'vendor/autoload.php';

//complete from Spotify Developer Console

$clientID = "";
$clientSecret ="";
$redirect_uri = "http://localhost:80/SpotHistory/includes/auth/callback.php";

$session = new SpotifyWebAPI\Session(
    $clientID,
    $clientSecret,
    $redirect_uri
);

session_start();