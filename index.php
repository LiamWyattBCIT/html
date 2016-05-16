<!DOCTYPE html>
<html>
<head>
<style>

body {
    font-size:2em;
    font-family: sans-serif;
    padding:0px;
    margin:0px;
}
.header {
    color:white;
    padding:5% 0% 2% 2%;
    background-color:rgb(59, 120, 231);
}
.content{
    padding: 2% 0% 3% 1%;
} 
</style>
</head>
<body>
    <div class="header">
    <h1>Team Brioche INITIAL Demonstration Page</h1>
    </div>
    <div class="content">
    <h2>This is the inital landing page for a fresh install</h2>
    <?php
    echo "<div>Backend Server: " . gethostname() . " "  . $_SERVER['SERVER_ADDR'] .  " </div>";
    echo "<div>Load Balancer IP: " . $_SERVER['REMOTE_ADDR'] . "</div>";
    echo "<div>Your IP: " . $_SERVER['HTTP_X_FORWARDED_FOR'] . "</div>";
    ?>
    </div>
</body>
</html>

