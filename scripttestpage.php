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
            <button onclick="document.getElementById('file-input').click();">Open</button>
            <input id="file-input" type="file" name="name" style="display: none;" />

        </form>

    </div>

    <br>
    <script>
        function test() {
            alert("asdf")
        }
    </script>
    <button id="mergeButton" onclick=test() style= >MERGE</button>
</div>




<script type="module" src='https://cdn.jsdelivr.net/npm/pdf-lib/dist/pdf-lib.js'>

    import { PDFDocument, PDFPage } from "pdf-lib";

    export async function mergePdfs(pdfsToMerge: ArrayBuffer[]): Promise<ArrayBufferLike> {
        const mergedPdf: PDFDocument = await PDFDocument.create();

        const createInnerPromise = async (arrayBuffer: ArrayBuffer): Promise<PDFPage[]> => {
            const pdf: PDFDocument = await PDFDocument.load(arrayBuffer);
            return await mergedPdf.copyPages(pdf, pdf.getPageIndices());
        };

        const outerPromise: Promise<PDFPage[]>[] = pdfsToMerge.map((arrayBuffer) => {
            const innerPromise: Promise<PDFPage[]> = createInnerPromise(arrayBuffer);
            return innerPromise;
        });

        const resultOuterPromise: PDFPage[][] = await Promise.all(outerPromise);

        resultOuterPromise.forEach((pageArray: PDFPage[]) => {
            pageArray.forEach((page: PDFPage) => {
                mergedPdf.addPage(page);
            });
        });

        return (await mergedPdf.save()).buffer;
    }

</script>
</body>
</html>

