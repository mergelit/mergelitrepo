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

        .selectFilesElements {
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

        #uploadFiles{
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
<div class = "selectFilesElements">

    <div class = "selectFilesArea">
        <div id="fireEmoji">
            <img src = "images\fire_1f525.png" alt = "Epic fire emoji">
        </div>

        <form action="upload.php" method="post" enctype="multipart/form-data" id = "uploadFiles">
            Select two PDFs to upload:
            <br>
            <input type="file" name="file-input1" id="file-1">
            <br>
            <input type="file" name="file-input1" id="file-2">
            <br>
        </form>

    </div>

    <br>
    <script>
        function test() {
            const file1 = document.getElementById('file-1').value;
            const file2 = document.getElementById('file-2').value;
            console.log(pdfsToMerge);
        }
    </script>
    <button id="mergeButton" style= >MERGE</button>
</div>




<script type="module" src='https://cdn.jsdelivr.net/npm/pdf-lib/dist/pdf-lib.js'>

    document.getElementById("mergeButton").onclick=async ()=>{

    const file1 = document.getElementById('file-1').value;
    const file2 = document.getElementById('file-2').value;

    const mergedPdf = await PDFDocument.create();

    const pdfA = await PDFDocument.load(fs.readFileSync(file1));
    const pdfB = await PDFDocument.load(fs.readFileSync(file2));

    const copiedPagesA = await mergedPdf.copyPages(pdfA, pdfA.getPageIndices());
    copiedPagesA.forEach((page) => mergedPdf.addPage(page));

    const copiedPagesB = await mergedPdf.copyPages(pdfB, pdfB.getPageIndices());
    copiedPagesB.forEach((page) => mergedPdf.addPage(page));

    const mergedPdfFile = await mergedPdf.save();

    console.log(mergedPdfFile);

    };
</script>
</body>
</html>

