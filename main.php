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
        .selectFilesArea{
            border-style: dotted;
            border-radius: 10px;
            position: relative;
            height: 60vh;
            width: 70%;
            left: 50%;
            transform: translate(-50%);
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
?>
<h1>Merge PDFs</h1>

<div class = "selectFilesArea">
    <div id="fireEmoji">
        <img src = "images\fire_1f525.png" alt = "Epic fire emoji">
    </div>
    <button id = "selectFilesButton">
        Select Files
    </button>
</div>

<button id = "mergeButton" style = >MERGE</button>

</body>
</html>

