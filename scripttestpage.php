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

        #merge{
            border-color: red;
            position: relative;
            top: 20px;
        }

    </style>

    <script src="scripts/require.js"></script>
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
    <button type=button id="merge">MERGE</button>
    <script type="module">


        //PDFAssembler = require('pdfassembler').PDFAssembler;

        async function merge() {

            console.log("ahhahahaha")

            const file1 = document.getElementById('file-1').value
            const file2 = document.getElementById('file-2').value


            /*const mergedPdf = await PDFDocument.create()

           console.log("mergePDFs")

           const pdfA = await PDFDocument.load(fs.readFileSync(file1))
           const pdfB = await PDFDocument.load(fs.readFileSync(file2))

           const copiedPagesA = await mergedPdf.copyPages(pdfA, pdfA.getPageIndices())
           copiedPagesA.forEach((page) => mergedPdf.addPage(page))
           const copiedPagesB = await mergedPdf.copyPages(pdfB, pdfB.getPageIndices())
           copiedPagesB.forEach((page) => mergedPdf.addPage(page))

           const mergedPdfFile = await mergedPdf.save()

           console.log(mergedPdfFile)*/
        }

        document.querySelector('#merge').addEventListener('click', merge);
    </script>



    <!--

     <button type=button id="test">test</button>
    <script type="module" src="./app.js"></script>
    <button type="button" id="hello">Click Me</button>
    <script type="module" src="./app.js"></script> -->
</div>


</body>
</html>

