<?php
require_once 'vendor/autoload.php';
$clientID = "";
$clientSecret ="";
$redirect_uri = "http://localhost:80/SpotHistory/callback.php";

$session = new SpotifyWebAPI\Session(
    $clientID,
    $clientSecret,
    $redirect_uri
);

session_start();