<?php
	session_start();

	header("Content-type: image/png");

	$listOfFonts = glob("fonts/*ttf");

	$image = imagecreate(200, 100);

	
	$back = imagecolorallocate($image, rand(0,100), rand(0,100), rand(0,100));
	


	$char = "abcdefghijklmnopqrstuvwxyz";
	$char = str_shuffle($char);

	$captcha = substr($char, 0, rand(5,7));
	$_SESSION["captcha"] = $captcha;

	$x = rand(10, 20);

	for($i=0; $i<strlen($captcha); $i++){

		$color = imagecolorallocate($image, rand(150,250), rand(150,250), rand(150,250));

		imagettftext(
		$image, 
		rand(30,40), 
		rand(-10, 10), 
		$x, rand(40, 60), 
		$color, 
		$listOfFonts[ array_rand($listOfFonts) ], 
		$captcha[$i]);

		$x+=rand(20, 30);

	}

	



	imagepng($image);