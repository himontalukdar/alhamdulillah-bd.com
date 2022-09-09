<?php
if (isset($_GET['cv'])) {
    $pdfname = basename($_GET['cv']);
    $pdfdir = '../files/cv/';
    $pdfpath = '../files/cv/' . $pdfname;
    if (file_exists($pdfpath )) {
        header('Cache-Control: public');
        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename='.$pdfname );
        header('Content-Type: applicaton/pdf');
        header('content-transfer-encoding:binary');
        // header('Content-Length: ' . $r['snptSize'] . '');
        readfile($pdfpath);
        exit;
    }  
}