<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {

    header("location : login.php");
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>


<body class="bds">
    <div>
        <nav>
            <ul>
                <a>
                    <li class="brand"><img class="hello" src="logo.png" alt="Spotify">Spotify</li>
                    <div class="buttons">
                        <a href="index.php"><button class="home">Home</button></a>
                        <a href="about.html"><button class="home">About</button></a>
                    </div>
                    <div class="logbutton">


                        <?php
                        echo "<p class='mycss'> Welcome " . $_SESSION['username'] . "!</p>";
                        ?>

                        <a href="logout.php"><button class="loginbutt">Log Out</button></a>
                    </div>
            </ul>
        </nav>

    </div>


    <style>
        .logbutton{
            margin-top: 1%;
        }
        .mycss {
            color: white;
            border: 1px solid #000;
            padding: 10px;
        }
    </style>


    <div class="container">
        
        <div class="songlist">
            <h2>Zayn - Icarus Falls</h2>
            <div class="sic">
                <div class="songitem">
                    <img id="coverimg" src="cover.jpg" alt="1">
                    <span class="songName" id="songname">Let me</span>
                    <span class="songplay"><span class="timestamp">03:05<i id="1" onclick="playspec(this.id)" class="fa-solid fa fa-play-circle"></i></span>
                </div>
                <div class="songitem">
                    <img id="coverimg" src="cover.jpg" alt="1">
                    <span class="songName" id="songname">Let me</span>
                    <span class="songplay"><span class="timestamp">03:28<i id="2" onclick="playspec(this.id)" class="fa-solid fa fa-play-circle"></i></span>
                </div>
                <div class="songitem">
                    <img id="coverimg" src="cover.jpg" alt="1">
                    <span class="songName" id="songname">Let me</span>
                    <span class="songplay"><span class="timestamp">03:41<i id="3" onclick="playspec(this.id)" class="fa-solid fa fa-play-circle"></i></span>
                </div>
                <div class="songitem">
                    <img id="coverimg" src="cover.jpg" alt="1">
                    <span class="songName" id="songname">Let me</span>
                    <span class="songplay"><span class="timestamp">02:51<i id="4" onclick="playspec(this.id)" class="fa-solid fa fa-play-circle"></i></span>
                </div>
            </div>

        </div>

        <div class="songbanner"></div>
    </div>
    <div class="bottom">
        <input type="range" name="range" id="progbar" min="0" max="100">
        <div class="icons">
            <i class="fa-solid fa-2x fa-step-backward" id="previoussong"></i>
            <i class="fa-solid fa-2x fa-play-circle" id="masterplay"></i>
            <i class="fa-solid fa-2x fa-step-forward" id="nextsong"></i>
        </div>
        <div class="songinfo">
            <img class="gif" src="./playing.gif" width="50px" alt="" id="gif">
            <div id="detoo">Let me</div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/4d9150139d.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>