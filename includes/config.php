<?php
set_include_path(__DIR__);
require_once 'vendor/autoload.php';

//complete from Spotify Developer Dashboard, specific for each app
$clientID = "2ce58ab3145b4aee99deec1cea21baa0";
$clientSecret ="a555d8d38f484b51b2e0e7954b885dc9";

//replace with the base uri of the project without
$base_uri = "http://localhost/SpotHistory";

$base_uri = trim($base_uri, "/");
$redirect_uri = $base_uri."/includes/auth/callback.php";
$session = new SpotifyWebAPI\Session(
    $clientID,
    $clientSecret,
    $redirect_uri
);

session_start();