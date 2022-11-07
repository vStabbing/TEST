<!DOCTYPE html>
<html>
<!-- Toggled was here :)  -->
<head>
<?php
 
 // Function to get the client IP address
 function get_client_ip() {
     $ipaddress = '';
     if (isset($_SERVER['HTTP_CLIENT_IP']))
         $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
     else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
         $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
     else if(isset($_SERVER['HTTP_X_FORWARDED']))
         $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
     else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
         $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
     else if(isset($_SERVER['HTTP_FORWARDED']))
         $ipaddress = $_SERVER['HTTP_FORWARDED'];
     else if(isset($_SERVER['REMOTE_ADDR']))
         $ipaddress = $_SERVER['REMOTE_ADDR'];
     else
         $ipaddress = 'UNKNOWN';
     return $ipaddress;
 }
  
  
 echo "Your IP address is: " . get_client_ip();
    <title></title>
    <meta charset="UTF-8">
    <script src="assets/me.js"></script>
    <meta property="og:description" content="stab#0003">
    <meta property="og:url" content="stability.gq">
    <meta property="og:image" content="assets/others/favicon.ico">
    <meta itemprop="name" content="Toggled">
    <meta itemprop="description" content="toggled's gay website">
    <meta itemprop="image" content="assets/others/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="shortcut icon" href="assets/others/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.html.htm">
</head>

<body>
    <script type="text/javascript" src="assets/javascript/app.js"></script>

      <div id="main">
        <table class="box">
        <tbody>
            <tr><td><span id="line1" style="white-space:pre;"></span></td></tr>
            <tr><td><span id="line2" style="white-space:pre;"></span></td></tr>
            <tr><td><span id="line3 space" style="white-space:pre;"> </span></td></tr>
            <tr><td><span id="line4" style="white-space:pre;"></span></td></tr>
        </tbody>    
        </table>
    </div>

    <div class="container" style="display: none;">
        <h1 class="brand-header">
            <a hrf="" target="_BLANK">stabiliy.gq</a>
        </h1>

        <p><span id="brand"></span></p>
    </div>

    <div class="marquee-container" style="visibility: hidden;">
        <pre>|<div id="marquee"></div>|</pre>
    </div>

    <div class="background" style="display: none;">
        <div id="pattern"></div>

        <audio id="audio" loop="">
            <source src="assets/others/mobb.mp4" type="audio/mp4">
            <script>
                var audio = document.getElementById("audio");

                app.audioElement = audio;
                app.audioElement.volume = 0;
            </script>
        </audio>

        <video id="background" loop="">
            <source src="assets/others/mobb.mp4" type="video/mp4">
            <script>
                var video = document.getElementById("background");

                app.videoElement = video;
                app.videoElement.volume = 0;
            </script>
        </video>
    </div>

    <div class="top-right">
        <i><a class="skip">skip</a></i>
    </div>


    <script type="text/javascript" src="assets/javascript/lib/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="assets/javascript/lib/jquery.marquee.min.js"></script>
    <script type="text/javascript" src="assets/javascript/lib/jquery.cookie.min.js"></script>
    <script type="text/javascript" src="assets/javascript/lib/typed.min.js"></script>
    <script type="text/javascript" src="assets/javascript/portfolio.js"></script>
    <script type="text/javascript" src="assets/javascript/analytics.html.htm"></script>
</body>
</html>
