<?php

$nama=$_GET['nama'];
$teks=$_GET['teks'];
$data="datachat.txt";
$out = fopen($data, "a");

if (!$out) {
    print("Could not append to file");
    exit;
}


fputs($out,$nama." : ".$teks."<br>");

fclose($out);


$handle = fopen($data, "r");
$isi = fread($handle, filesize($data));
fclose($handle);

print("$isi");
?>