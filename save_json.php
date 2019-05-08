<?php

$var1 = $_POST['name'];
$var2 = $_POST['email'];

$fileHandle = fopen("capturedUserData.json", 'a');
fwrite($fileHandle, "{"."\"name\": ".$var1.", \n");
fwrite($fileHandle, "\"email\": " . $var2 . "}, \n");
fclose($fileHandle);

header("Location:https://sunniva.co/");
?>