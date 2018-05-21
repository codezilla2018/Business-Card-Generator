<?php

$name = $_GET['name'];
$message = "Welcome to Kist, $name";

$length = strlen($message) * 9.3;

$image = imagecreate($length,20);
$back = imagecolorallocate($image, 0,0,0);
$for = imagecolorallocate($image, 255,255,255);

imagestring($image,5,5,1,$message,$for);

header("Content-Type: image/jpeg");
imagejpeg($image);

?>