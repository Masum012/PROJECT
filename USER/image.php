
<?php
header('Content-Type: image/jpeg');
	$image="../upload/11421874364mgm.JPG";
	$image_size=getimagesize($image);
	$image_width=$image_size[0];
	$image_height=$image_size[1];
	$new_width=200;
	$new_height=200;
	$new_image = imagecreatetruecolor($new_width,$new_height);
	$old_image = imagecreatefromjpeg($image);
	imagecopyresized($new_image,$old_image,0,0,0,0,$new_width,$new_height,$image_width,$image_height);
	imagejpeg($new_image);

?>