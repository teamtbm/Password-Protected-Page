<?php
session_start();
if (!isset($_SESSION["authed"]) || $_SESSION["authed"] === false) {
    header("location:/protected-page/auth");
    exit(307);
}
?>
<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <title> Protected Page - TBM Productions </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Concert+One|Boogaloo">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <!-- Viedo Background -->
        <video autoplay muted loop id="bgvideo">
            <source src="/library/site/assets/videos/lines.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <!-- Form with full screen fallback & opacity -->
        <div class="background">
            <div class="holder">
                <div class="labels">
                    <h1> Welcome </h1>
                    <h3 style="font-family: arial;"> Welcome to the password protected page. You can access this page until you click logout or the browser session ends.  </h3>
                </div>
                <div class="input-group">
                    <button onclick="window.location.replace('/protected-page/logout')"> Logout </button>
                </div>
            </div>
        </div>
    </body>
</html>
