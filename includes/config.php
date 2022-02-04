<?php
set_include_path(__DIR__);
require_once 'vendor/autoload.php';

//complete from Spotify Developer Dashboard, specific for each app
$clientID = "";
$clientSecret ="";

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
