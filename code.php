<?php
session_start();
if (isset($_POST['save_excel_data'])) {
    $fileName = $_FILES['import_file']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $inputFileNamePath = $_FILES['import_file']['tmp_name'];

    // if (isset($_POST['save_excel_data'])) {
    // $fileName = $_FILES['import_file']['name'];
    // $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
    //$file_ext = "file.221115102214851";


    $file_contents = file($inputFileNamePath);
    // foreach ($file_contents as &$line) {
    //     $line = trim($line);
    $ZZ = substr_replace($file_contents, 'MAD', 11, 14);
    $string = implode("\n", $ZZ);
    // for($i=0;$i< count($ZZ);$i++){

    // }

    header('Content-Type: text/plain charset=utf-8');
    header('Content-Disposition: attachment; filename="' . basename('$Afb120.txt') . '"');
    print_r($string);
    // }
    //$file_handle = fopen($file_ext, "r");
    // $line = fgets($file_handle);
    //$ex = explode('/n', $file_handle);
    // header('Content-Type: text/plain charset=utf-8');
    // header('Content-Disposition: attachment; filename="' . basename('$Afb120.txt') . '"');
    // error_reporting(E_ERROR | E_PARSE);
    //echo $ex;
    // }
}
