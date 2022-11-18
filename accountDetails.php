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
?>
<h1>Account Details</h1>
<p>Here is where we'll put the account details once we get the database working
    <div class = "accountDetailList">
        <p>Account Name: <br>
            <svg width=90% height="15">
                <rect width=100% height="15" style="fill:rgb(80,80,80);" left: 25px/>
            </svg>
        </p>
        <p>Email: <br>
            <svg width=90% height="15">
                <rect width=100% height="15" style="fill:rgb(80,80,80);" />
            </svg>    
        </p>
        <p>Password: <br>
            <svg width=90% height="15">
                <rect width=100% height="15" style="fill:rgb(80,80,80);" />
            </svg>
        </p>
        <p>Social Security Number: <br>
            <svg width=90% height="15">
                <rect width=100% height="15" style="fill:rgb(80,80,80);" />
            </svg>
        </p>
        <p>Account Identifier: <br>
            <svg width=90% height="15">
                <rect width=100% height="15" style="fill:rgb(80,80,80);" />
            </svg>
        </p>
    </div>
</body>
</html>