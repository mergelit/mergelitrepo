<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>MergeLit Main Page</title>
    <link rel="stylesheet" href="theStyles.css"/>

    <style>
        html, body {
            margin: 0;
            height: 100%;
            width: 100%;
            background-color: #0e0e0e;
        }

        .selectFilesElements {
            margin: auto;
            border-radius: 25px;
            width: 80%;
            height: 70%;
            postion: relative;
            background: firebrick;
            display: flex;
            align-items: center;
            justify-content: center;
            border-style: solid;
            border-width: 15px;
            border-color: papayawhip;
        }
        .selectFilesArea{
            border-style: dotted;
            border-color: papayawhip;
            border-radius: 25px;
            position: center;
            height: 60%;
            width: 60%;
            
        }

        #fireEmoji{
            position: relative;
            top: 25%;
        }

        #selectFilesButton{
            position: relative;
            top: 25%;
        }

        #mergeButton{
            border-color: red;
            position: relative;
            top: 20px;
        }

    </style>
</head>
<body>
<?php
    include 'navBar.php';
?>
<h1>Merge PDFs</h1>
<div class = "selectFilesElements">

    <div class = "selectFilesArea">
        <div id="fireEmoji">
            <img src = "images\fire_1f525.png" alt = "Epic fire emoji">
        </div>
        <button id = "selectFilesButton">
            Select Files
        </button>
    </div>
</div>

<button id = "mergeButton" style = >MERGE</button>

</body>
</html>

