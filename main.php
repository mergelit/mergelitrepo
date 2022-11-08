<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>MergeLit Main Page</title>
    <link rel="stylesheet" href="theStyles.css"/>
    <script>
        function openExplorer() {
		    var thePath = 'C:\\Windows';
		    window.open('file://' + thePath, 'explorer');
	    }
    </script>
</head>
<body>
<?php
    include 'navBar.php';
?>
<h1>Merge PDFs</h1>

<div class="placeholder">
    <div id="fireEmoji">
        <img src = "images\fire_1f525.png" alt = "Epic fire emoji">
    </div>
    <button type = "button">Select Files</button>
</div>

<div id = "mergeButton">
    <button type = "button">MERGE</button>
</div>


</body>
</html>

