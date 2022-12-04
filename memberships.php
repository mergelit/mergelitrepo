<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>MergeLit Membership Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Codystar&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="theStyles.css"/>
    <script>
        function megaAlert() {
            alert ("MegaLit Plan Selected!");
        }

        function sortaAlert() {
            alert ("SortaLit Plan Selected!");
        }

        function notlitAlert() {
            alert ("NotLitAtAll Plan Selected >:(");
        }
    </script>
    <style>
        html, body {
            margin: 0;
            height: 100%;
            width: 100%;
            background-color: #0e0e0e;
        }
        ul {
            list-style-type: "🔥";
        }
        .container {
            margin: auto;
            border-radius: 25px;
            width: 95%;
            height: 70%;
            postion: relative;
            background: wheat;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .rect {
            margin: 3%;
            border-radius: 25px;
            height: 80%;
            width: 25%;
            background: white;
            color: black;
            position: relative; 
            box-shadow: -15px 15px 25px;
        }
        .rect h2 {
            color: red;
            font-family: 'Secular One', sans-serif;
            font-size: 200%;
        }
        .rect p {
            color: black;
            font-weight: 900;
            font-family: 'Codystar', cursive;
            font-size: 150%;
            text-align: left;
            width: 85%;
        }
        .rect ul {
            padding-left: 15%;
        }
       
    </style>
</head>
<body>
<?php
    include 'navBar.php';

    if(isset($_POST['notlit'])){

        $ssn = $_SESSION['ssn'];
        $statement=$conn->query("update ourdatabase.accounts set subtype=1 where ssnum='$ssn'");
        $statement->execute();
        $_SESSION['subtype']=1;
    }
    if(isset($_POST['sortalit'])){

        $ssn = $_SESSION['ssn'];
        $statement=$conn->query("UPDATE ourdatabase.accounts SET subtype=2 WHERE ssnum='$ssn'");
        $statement->execute();
        $_SESSION['subtype']=2;
    }
    if(isset($_POST['megalit'])){

        $ssn = $_SESSION['ssn'];
        $statement=$conn->query("update ourdatabase.accounts set subtype=3 where ssnum='$ssn'");
        $statement->execute();
        $_SESSION['subtype']=3;
    }
?>
<h1>Memberships</h1>

<div class="container">
    <div class="rect">
        <h2> MegaLit Package <br>US$49.99/mo </h2>
        <ul>
            <li>
                <p>Higher chance your personal information won't get stolen. </p>
            </li>
            <li>
                <p>Merging speeds will be less throttled. </p>
            </li>
            <li>
                <p>Highest merging speeds we offer.
            </li>
        </ul>
        <form method="post" action="memberships.php">
            <?= $logged_in ? ( $_SESSION['subtype']== 3 ? 'Current Plan' :
                '
        <button onclick = "megaAlert()" type="submit" name="megalit"> Select Plan </button>
        ' ): 'Log In to select a plan'
            ?>
        </form>
    </div>
    <div class="rect">
        <h2> SortaLit Package <br>US$19.99/mo</h2>
        <ul>
            <li>
                <p>Low chance your personal information won't get stolen. </p>
            </li>
            <li>
                <p>Middle speed merging.
            </li>
        </ul>
        <form method="post" action="memberships.php">
            <?= $logged_in ? ( $_SESSION['subtype']== 2 ? 'Current Plan' :
                '
        <button onclick = "sortaAlert()" type="submit" name="sortalit"> Select Plan </button>
        ' ): 'Log In to select a plan'
            ?>
        </form>
    </div>
    <div class="rect">
        <h2> NotLitAtAll Package <br>FREE</h2>
        <ul>
            <li>
                <p>Your information is ours, you have been warned. </p>
            </li>
            <li>
                <p>Slow merging speeds.
            </li>
        </ul>
        <form method="post" action="memberships.php">
        <?= $logged_in ? ( $_SESSION['subtype']== 1 ? 'Current Plan' :
        '
        <button onclick = "notlitAlert()" type="submit" name="notlit"> Select Plan </button>
        ' ): 'Log In to select a plan'
        ?>
        </form>
    </div>
</div>
</body>
</html>
