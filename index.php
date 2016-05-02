<?php
header('Content-type: text/plain');
echo "Server IP: " . $_SERVER['SERVER_ADDR'];
echo "\nCLient IP: " . $_SERVER['REMOTE_ADDR'];
echo "\nX-Forwarded-for: " . $_SERVER['HTTP_X_FORWARDED_FOR'];
?>

