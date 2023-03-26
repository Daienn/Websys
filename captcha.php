<?php
session_start();

$width = 120;
$height = 40;

$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charLength = strlen($characters);

$image = imagecreatetruecolor($width, $height);

$bgColor = imagecolorallocate($image, 255, 255, 255);
imagefilledrectangle($image, 0, 0, $width, $height, $bgColor);

$textColor = imagecolorallocate($image, 0, 0, 0);
$captcha = '';

for ($i = 0; $i < 6; $i++) {
    $char = $characters[rand(0, $charLength - 1)];
    $captcha .= $char;
    $x = ($i * ($width / 6)) + rand(5, 10);
    $y = rand(5, 10);
    imagechar($image, 5, $x, $y, $char, $textColor);
}

$_SESSION['captcha'] = $captcha;

header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>