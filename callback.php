<?php
require_once 'config.php';
if (isset($_GET['code'])) {
    $state = $_GET['state'];

    // Fetch the stored state value from somewhere. A session for example

    if ($state !== $storedState) {
        // The state returned isn't the same as the one we've stored, we shouldn't continue
        die('State mismatch');
    }

    $session->requestAccessToken($_GET['code']);

    $_SESSION['accessToken'] = $session->getAccessToken();
    $_SESSION['refreshToken'] = $session->getRefreshToken();

    header('Location: spotHistory.php');
    die();
}else{
    header('Location: index.html');
    die();
}