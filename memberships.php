<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>MergeLit Membership Page</title>
    <link rel="stylesheet" href="theStyles.css"/>
    <style>
        h2 {
            color: orange;
            font-family: arial;
            font-size: 200%;
        }
        p {
            color: black;
            font-family: verdana;
            font-size: 150%;
        }
        .container {
            border-radius: 25px;
            width: 1815px;
            height: 800px;
            postion: relative;
            margin: 20px;
            background: gray;
            
        }
        .rect1 {
            border-radius: 25px;
            height: 600px;
            width: 400px;
            background: white;
            color: black;
            position: relative;
            left: 400px;
            top: 100px;

        }
        .rect2 {
            border-radius: 25px;
            height: 600px;
            width: 400px;
            background: white;
            color: black;
            position: relative;
            left: 1000px;
            bottom: 527px;

        }
    </style>
</head>
<body>
<?php
include 'navBar.php';
?>
<h1>Memberships</h1>
<div class="container">
    <div class="rect1">
        <h2> MegaLit Package </h2>
        <h2> US$49.99/mo </h2>
        <p> - Higher chance your personal <br> information won't get stolen. </p>
        <p> - Merging speeds will be less throttled. </p>
    </div>
    <div class="rect2">
        <h2> SortaLit Package </h2>
        <h2> US$19.99/mo </h2>
        <p> - Low chance your personal <br> information won't get stolen. </p>
    </div>
</div>
</body>
</html>
