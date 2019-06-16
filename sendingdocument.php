<?php
if( isset($_FILES["document"]) ) {
if (!empty($_FILES["document"]["name"]))
{   
    $file_name=$_FILES["document"]["name"];
    $temp_name=$_FILES["document"]["tmp_name"];
    $imgtype=$_FILES["document"]["type"];
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $documentname=date("d-m-Y")."-".time().$ext;
    $target_path = "aresume\\".$documentname;
   move_uploaded_file($temp_name, $target_path);
}
?>