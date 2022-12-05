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
    </style>
</head>
<body>
<?php
include 'navBar.php';
if(!$_SESSION['admin']){
    header('Location: main.php');
    exit;
}
?>
<h1>Admin Page</h1>
<p> All the cool Admin Features</p>

<h2>Error Log</h2>
<?php
$logs = fopen(ini_get('error_log'), "r") or die("Without errors there is no error log, errors will show here if they happen.");
while(!feof($logs)){
    echo fgets($logs)."<br>";
}
fclose($logs);
?>
</body>
</html>
