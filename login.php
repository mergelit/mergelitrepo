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

    if($logged_in){
        header('Location: accountDetails.php');
        exit;
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user_email = $_POST['email'];
        $user_password = $_POST['password'];

        $statement=$conn->query("select email, password, ssnum, admin from accounts where email='$user_email';");
        $member=$statement->fetch();

        if($user_email == $member[0] and $user_password == $member[1]){
            login($member[2],$member[3]);
            header('Location: accountDetails.php');
            exit;
        }
    }
?>
<h1>Log In Here:</h1>
<div class="container">
    <div class="input">
        <form method="POST" action="login.php">
        <input placeholder="Email" type="email" name="email"><br><br>
        <input placeholder="Password" type="password" name="password"><br><br>
        <input type="submit" value="Log In">
        </form>
        <a href="register.php" id="registerPageLink">Register Here</a>
    </div>
</div>

</body>
</html>