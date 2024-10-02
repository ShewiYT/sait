<?php
	session_start();
	$string = "";
	$ranf = 5;
	for ($i = 0; $i < $ranf; $i++){
	$capt[1] = rand(97, 122);	
	$capt[2] = rand(97, 122);
    $capt[3] = rand(97, 122);
    $capt[4] = rand(97, 122);	
	$string .= chr($capt[rand(1,4)]);
	}
	$_SESSION['captcha'] = $string;

	$dir = "assets/Helvetica.ttf";

	$image = imagecreatetruecolor(120, 40);
	$black = imagecolorallocate($image, 0, 0, 0);
	$color = imagecolorallocate($image, 255,  97,  97);
	$white = imagecolorallocate($image, 255, 255, 255);

	imagefilledrectangle($image,0,0,399,99,$white);
	imagettftext($image, 24, 0, 10, 30, $color, $dir, $_SESSION['captcha']);

	header("Content-type: image/png");
	imagepng($image);

?>