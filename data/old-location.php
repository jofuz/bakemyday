<?php
print_r($_POST);
$a = fopen("visitors.txt", "a");
fwrite($a,"Location: $_POST[lat],$_POST[lng]\n*******************\n");
fclose($a);
?>