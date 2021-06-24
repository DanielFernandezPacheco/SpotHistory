# SpotHistory <img src="././images/SpotHistory.svg" height="40px">

SpotHistory es una aplicación web que permite al usuario ver las últimas canciones que ha reproducido en Spotify.


## Configuración.
1. Registrar la aplicación en la [Spotify Developer Dashboard](https://developer.spotify.com/dashboard/).
2. Actualizar en el fichero [config.php](./includes/config.php) los parámetros <b>clientID</b> y <b>clientSecret</b> proporcionados por Sportify.
3. En el fichero [config.php](./includes/config.php) establecer la URI del fichero [callback.php](./includes/auth/callback.php)  y registrarla exactamente igual en la lista blanca de URI's de redirección en la [Spotify Developer Dashboard](https://developer.spotify.com/dashboard/).
