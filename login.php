<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Log Into MergeLit</title>
    <link rel="stylesheet" href="theStyles.css"/>
    <style>
        html, body {
            margin: 0;
            height: 100%;
            width: 100%;
            background-color: #0e0e0e;
        }
        .container {
            margin: auto;
            border-radius: 25px;
            width: 25%;
            height: 30%;
            postion: relative;
            background: cyan;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
<?php
    include 'navBar.php';

    //Need to create a database still
    //If the connection is opened here does it stay open while on the website or close if you switch pages?
    /*
    //Opening DB connection, variables to be replaced
    $servername = "localhost";
    $username = "username";
    $password = "password";

    //Create connection
    $conn = new mysqli($servername, $username, $password);

    //Check connection
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    echo "Connected successfully";
    */
?>
<h1>Log In Here:</h1>
<div class="container">
    <div class="input">
        <input placeholder="SSN"></input><br><br>
        <input placeholder="Password"></input><br><br>
        <button>Log In</button>
    </div>
</div>

</body>
</html>