<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>MergeLit Account Details Page</title>
    <link rel="stylesheet" href="theStyles.css"/>

    <style>
        html, body {
            margin: 0;
            height: 100%;
            width: 100%;
            background-color: #0e0e0e;
        }

        .accountDetailList {
            border-radius: 10px;
            height: 290px;
            width: 30%;
            background: #FFFFFF;
            color: #000000;
            position: absolute;
            left: 50%;
            transform: translate(-50%);
        }


    </style>
</head>
<body>
<?php
    include 'navBar.php';
    $name = "name name";
    $email = "email";
    $password = "password";
    $ssn = "social security number";
    if(!$logged_in){
        header('Location: login.php');
        exit;
    }
    $ssn=$_SESSION['ssn'];
    $statement = $conn->query("select * from accounts where ssnum='$ssn'");
    $member = $statement->fetch();

    $fname=$member['fname'];
    $lname=$member['lname'];
    $email=$member['email'];
    $password=$member['password'];
    $admin=$member['admin'];
    $plan=$member['subtype'];
?>
<h1>Account Details</h1>
    <div class = "accountDetailList">
        <p>Account Name: <?= $fname ?> <?= $lname ?><br>
            <svg width=90% height="15">
                <rect width=100% height="15" style="fill:rgb(80,80,80);" left: 25px/>
            </svg>
        <p>Email:<?= $email ?><br>
            <svg width=90% height="15">
                <rect width=100% height="15" style="fill:rgb(80,80,80);" />
            </svg>    
        </p>
        <p>Password: <?= $password ?><br>
            <svg width=90% height="15">
                <rect width=100% height="15" style="fill:rgb(80,80,80);" />
            </svg>
        </p>
        <p>Social Security Number: <?= $ssn ?><br>
            <svg width=90% height="15">
                <rect width=100% height="15" style="fill:rgb(80,80,80);" />
            </svg>
        </p>
        <p>Membership Plan: <?= $plan ?><br>
            <svg width=90% height="15">
                <rect width=100% height="15" style="fill:rgb(80,80,80);" />
            </svg>
        </p>
        <p>
            <?= $admin ? '
        <a id="adminPageLink" href="admin.php">
            Admin Page
        </a>
        ':'' ?>
        </p>
    </div>
</body>
</html>