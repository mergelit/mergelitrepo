
export async function merge() {
    alert ("Now merging your LIT files together! (not really, but you can check console to see we actually get the files)")
    const file1 = document.getElementById('file-1').value
    console.log(file1)
    const file2 = document.getElementById('file-2').value
    console.log(file2)

    /*const newPdf = new PDFAssembler(file1);

    const mergedPdf = await PDFDocument.create()

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

