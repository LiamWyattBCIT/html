<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color:red;
    color:white;
}
</style>
</head>

<body>
<?php
header('Content-type: text/html');
echo "Backend Server IP: " . $_SERVER['SERVER_ADDR'];
echo "<br/>Load Balancer IP: " . $_SERVER['REMOTE_ADDR'];
echo "<br/>Your IP: " . $_SERVER['HTTP_X_FORWARDED_FOR'];
echo "<br/>Version: 10:00AM 5/9/2016"
?>
</body>
</html>
