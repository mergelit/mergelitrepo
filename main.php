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

        #uploadFiles{
            position: relative;
            top: 25%;
        }

        #merge{
            border-color: red;
            position: relative;
            top: 20px;
        }

    </style>

    <script data-main="../scripts/main" src="scripts/lib/require.js"></script>
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

        <form action="upload.php" method="post" enctype="multipart/form-data" id = "uploadFiles">
            Select two PDFs to upload:
            <br>
            <input type="file" name="file-input1" id="file-1">
            <br>
            <input type="file" name="file-input1" id="file-2">
            <br>
        </form>
    </div>

    <br>
    <button type=button id="merge">MERGE</button>
    <script type="module">
        import { merge } from './scripts/helper/merge.js'


        document.querySelector('#merge').addEventListener('click', merge);
    </script>



    <!--

     <button type=button id="test">test</button>
    <script type="module" src="./app.js"></script>
    <button type="button" id="hello">Click Me</button>
    <script type="module" src="./app.js"></script> -->
</div>


</body>
</html>

