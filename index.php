<?php

$dir = dir(__DIR__);

while (false !== ($filename = $dir->read())) {
    if (strpos($filename,'.zip') != false)
    {echo "<a href=" . $filename . ">" . $filename . "</a>";}
}





//if (strpos($filename,'.zip') !== false) {
//    echo 'true';
//}
//else {echo 'false';}


//
//sort($files);
//
//print_r($files);
//
//rsort($files);
//
//
//




//$filename = 'Readme.md';
//header('Pragma: public');
//header('Expires: 0');
//header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
//header('Cache-Control: private', false); // required for certain browsers
//header('Content-Type: application/pdf');

//header('Content-Disposition: attachment; filename="'. basename($filename) . '";');
//header('Content-Transfer-Encoding: binary');
//header('Content-Length: ' . filesize($filename));

//readfile($filename);
// here list all the files in the current folder and provide links to download those files.
?>
