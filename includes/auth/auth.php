<?php
require_once '../config.php';

$state = $session->generateState();
$options = [
    'scope' => [
        'user-read-recently-played',
    ],
];

header('Location: ' . $session->getAuthorizeUrl($options));
die();


