<?php
// $zipFile = 'files\Neurology_Catalog.zip';
// echo  $zipFile
    $dataID = $_POST['id']; 
    $zipFile = 'files';

    switch ($dataID) {
        case "dental_catalog":
            $zipFile = $zipFile.'\Dental_Catalog.zip';
            break;
        case "neurology_catalog":
            $zipFile = $zipFile.'\Neurology_Catalog.zip';
            break;
        case "crutches_catalog":
            $zipFile = $zipFile.'\Crutches_Catalog.zip';
            break;
        case "cardiology_catalog":
            $zipFile = $zipFile.'\Cardiology_Catalog.zip';
            break;
        case "pulmonary_catalog":
            $zipFile = $zipFile.'\Pulmonary_Catalog.zip';
            break;
        case "xray_catalog":
            $zipFile = $zipFile.'\Xray_Catalog.zip';
            break;
        default:
            $zipFile = $zipFile.'\All_Catalog.zip';
    }

    echo  $zipFile

?>