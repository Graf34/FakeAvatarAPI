<?php

$hair_id=rand ( 0,6 );
$eyes_id=rand ( 0,3 );
$eyebrows_id=rand ( 0,2 );
$body_id=rand ( 0,2 );
$bg_id=rand ( 0,2 );
$mouth_id=rand ( 0,2 );

$src = imagecreatefrompng('./img/body/'.$body_id.'.png');


$main_img = imagecreatefrompng('./img/background/'.$bg_id.'.png');//Основное изображение 
 
$w_src = imagesx($src);
$h_src = imagesy($src);
$w_dest = imagesx($main_img);
$h_dest = imagesy($main_img);
 
$transfer_x = 0;
$transfer_y = 0;
 
imagecopyresampled($main_img, $src, $transfer_x, $transfer_y, 0, 0, $w_src, $h_src, $w_src, $h_src);


$src = imagecreatefrompng('./img/mouth/'.$mouth_id.'.png');
imagecopyresampled($main_img, $src, $transfer_x, $transfer_y, 0, 0, $w_src, $h_src, $w_src, $h_src);


$src = imagecreatefrompng('./img/eyebrows/'.$eyebrows_id.'.png');
imagecopyresampled($main_img, $src, $transfer_x, $transfer_y, 0, 0, $w_src, $h_src, $w_src, $h_src);


$src = imagecreatefrompng('./img/eyes/'.$eyes_id.'.png');
imagecopyresampled($main_img, $src, $transfer_x, $transfer_y, 0, 0, $w_src, $h_src, $w_src, $h_src);

$src = imagecreatefrompng('./img/hair/'.$hair_id.'.png');

imagecopyresampled($main_img, $src, $transfer_x, $transfer_y, 0, 0, $w_src, $h_src, $w_src, $h_src);


header('Content-Type: image/jpeg');
imagejpeg($main_img);
imagedestroy($main_img);
imagedestroy($src);
?>