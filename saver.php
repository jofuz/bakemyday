<?php
print_r($_POST);
$a = fopen("save.txt", "a");
fwrite($a,"Location: $_POST[lat],$_POST[lng]\n*******************\n");
fclose($a);
?>