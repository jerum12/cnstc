<?php

$zip = new ZipArchive();
$filename = "archive/Dental_Catalog.zip";

if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
        exit("cannot open <$filename>\n");
}

$dir = 'files/Dental/';

// Create zip
if (is_dir($dir)){

    if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false){
                
            // If file
            if (is_file($dir.$file)) {
                if($file != '' && $file != '.' && $file != '..'){
                        
                    $zip->addFile($dir.$file);
                }
            }
                    
        }
        closedir($dh);
    }
}

$zip->close();

// header('Content-Type: application/zip');
// header('Content-disposition: attachment; filename=filename.zip');
// header('Content-Length: ' . filesize($filename));
// readfile($filename);
// unlink($filename);

echo $filename;
// exit;