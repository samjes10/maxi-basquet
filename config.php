<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["ec2-44-207-253-50.compute-1.amazonaws.com"];
$username = $url["wlegllgkonwreq"];
$password = $url["9aa04b445e9f2fc1ef632ac242cad2683c45b439e936914e4edc954d5b43787e"];
$db = substr($url["d77ac7v76aafrj"], 1);

$conn = new mysqli($server, $username, $password, $db);
?>
