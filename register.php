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


?>
<h1>Sign Up Here:</h1>
<div class="container">
    <div class="input">
        <form method="post" action="login.php">
            <input placeholder="SSN" type="text" name="ssn"><br><br>
            <input placeholder="First Name" name="fname" type="text"><br><br>
            <input placeholder="Last Name" name="lname" type="text"><br><br>
            <input placeholder="Email" type="email" name="email"><br><br>
            <input placeholder="Password" type="password" name="password"><br><br>
            <input type="submit" value="Register">
        </form>
        <a href="login.php" id="registerPageLink">Log In Here</a>
    </div>
</div>

</body>
</html>