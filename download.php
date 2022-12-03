<?php
/*Code taken from
https://stackoverflow.com/questions/17310453/button-to-download-txt-file-php-html*/

$file = "C:/Syllabus.pdf";

if(!file_exists($file)) die("I'm sorry, the file doesn't seem to exist.");

$type = filetype($file);
header("Content-type: $type");

header("Content-Disposition: attachment;filename=Syllabus.pdf");
header("Content-Transfer-Encoding: binary");
header('Pragma: no-cache');
header('Expires: 0');
// Send the file contents.
set_time_limit(0);
ob_clean();
flush();
readfile($file);

//** If you are going to try and force download a file by opening a new tab via javascipt
//** (In this code you would replace the onClick() event handler in the html
//** button with onclick="window.open('www.someurl.com', '_blank');"
//** - where 'www.someurl.com' is the url to the php page - I keep the file
//** creation and download handling in the same file, and $_GET the file name
// - bad practice? Probably, but I never claimed to be an expert),
//** be sure to include exit(); in this part of the php...
//** otherwise leave exit(); out of the code.
//** If you don't, it will likely break the code, based on my experience.

//exit();
