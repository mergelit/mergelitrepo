define(merge (require) )
{
    const PDFAssembly = require('pdfassembly');

    console.log("ahhahahaha")
    const file1 = document.getElementById('file-1').value
    const file2 = document.getElementById('file-2').value

    const newPdf = new PDFAssembler(file1);

    console.log(file1)
    console.log(newPdf.assemblePdf)


    /*const mergedPdf = await PDFDocument.create()

   console.log("mergePDFs")

   const pdfA = await PDFDocument.load()
   const pdfB = await PDFDocument.load(fs.readFileSync(file2))

   const copiedPagesA = await mergedPdf.copyPages(pdfA, pdfA.getPageIndices())
   copiedPagesA.forEach((page) => mergedPdf.addPage(page))
   const copiedPagesB = await mergedPdf.copyPages(pdfB, pdfB.getPageIndices())
   copiedPagesB.forEach((page) => mergedPdf.addPage(page))

   const mergedPdfFile = await mergedPdf.save()

   console.log(mergedPdfFile)*/
;

/*export async function merge() {

    console.log("ahhahahaha")
    const file1 = document.getElementById('file-1').value
    const file2 = document.getElementById('file-2').value

    const newPdf = new PDFAssembler(file1);

    console.log(file1)
    console.log(newPdf.assemblePdf)


    /*const mergedPdf = await PDFDocument.create()

   console.log("mergePDFs")

   const pdfA = await PDFDocument.load()
   const pdfB = await PDFDocument.load(fs.readFileSync(file2))

   const copiedPagesA = await mergedPdf.copyPages(pdfA, pdfA.getPageIndices())
   copiedPagesA.forEach((page) => mergedPdf.addPage(page))
   const copiedPagesB = await mergedPdf.copyPages(pdfB, pdfB.getPageIndices())
   copiedPagesB.forEach((page) => mergedPdf.addPage(page))

   const mergedPdfFile = await mergedPdf.save()

   console.log(mergedPdfFile)*/
}

