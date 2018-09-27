<?php
$data="datachat.txt";

$handle = fopen($data, "r");
$isi = fread($handle, filesize($data));
fclose($handle);

print("$isi");
?>