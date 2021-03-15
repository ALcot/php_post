<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$ad = $_POST["ad"];
$youbou = $_POST["youbou"];
$age = $_POST["age"];

echo $name."<br>";
echo $mail."<br>";
echo $ad."<br>";
echo $youbou."<br>";
echo $age."<br>";

?>


<html>
<head>
<meta charset="utf-8">
</head>
<body>
<p><?=$name?></p>
<p><?=$mail?></p>
</body>
</html>