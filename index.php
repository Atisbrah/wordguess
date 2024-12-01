<?php
    require_once 'php/getArrays.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Guess</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <div id="top">
        <div id="topLeft">
            <h3>Length of the word</h3>
            <div class="sliderContainer">
                <input type="range" min="4" max="11" value="4" class="slider" id="myRange" default="4">
                <p>Current Value: <span id="sliderValue">4</span></p>
            </div>
        </div>
        <div id="topMiddle">
            <h1>Guess the word</h1>
        </div>
        <div id="topRight">
            <button id="randomWordBtn">Another Word</button>
        </div>
    </div>

    <h2 id="randomWord"></h2>

    <div id="rowContainer"></div>

    <?php include_once('keyboard.php'); ?>

    <script src="js/javascript.js"></script>
</body>
</html>