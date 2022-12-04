<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>MergeLit Main Page</title>
    <link rel="stylesheet" href="theStyles.css"/>
    <script> //can't get this working now
        function openExplorer() {
            var thePath = 'C:\\Windows';
            window.open('file://' + thePath, 'explorer');
        }
    </script>

    <style>
        html, body {
            margin: 0;
            height: 100%;
            width: 100%;
            background-color: #0e0e0e;
        }

        .bawlsinyojaws {
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

if(!$_SESSION['admin']){
    header('Location: main.php');
    exit;
}
?>
<h1>Admin Page</h1>
<p> All the cool Admin Features</p>

<h2>Error Log</h2>
<?php
$logs = fopen(ini_get('error_log'), "r") or die("Unable to open logs!");

while(!feof($logs)){
    echo fgets($logs)."<br>";
}
fclose($logs);
?>
</body>
</html>
