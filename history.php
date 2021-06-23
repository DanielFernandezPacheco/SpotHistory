<?php
require_once 'includes/config.php';
if (isset($_POST['numSongs'])) {
    $url = "https://api.spotify.com/v1/me/player/recently-played?limit=" . $_POST['numSongs'];

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array("Authorization: Bearer " . $_SESSION['accessToken']);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($curl);

    curl_close($curl);
    $result = json_decode($result, true);
    if (isset($result['error'])) {
        echo 'ERROR ' . $result['error']['status'] . ': ' . $result['error']['message'];
        die();
    }
}else{
    header('Location: index.html');
    die();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="images/SpotHistory.svg">
    <title>SpotHistory - Historial</title>
</head>

<body>
    <?php
    echo '<h1>Últimas ' . $_POST['numSongs'] . ' canciones</h1>';
    echo '<div class="container">';

    foreach ($result['items'] as $song) {
        echo '<div class="song">
                    <img src="' . $song['track']['album']['images'][2]['url'] . '">
                    <div class="songInfo">
                        <span class="songArtists">';

        $numArtists = count($song['track']['artists']);
        $i = 0;
        foreach ($song['track']['artists'] as $artist) {
            echo '<a href="' . $artist['external_urls']['spotify'] . '">' . $artist['name'];
            if (++$i != $numArtists && $numArtists != 0)
                echo ', ';
            echo '</a> ';
        }

        echo '</span>
                        <span class="songName">
                            <a href="' . $song['track']['external_urls']['spotify'] . '">' . $song['track']['name'] . '</a>
                        </span>
                    </div>';
        echo '</div><hr><br>';
    }

    echo '</div>';
    ?>
</body>

</html>