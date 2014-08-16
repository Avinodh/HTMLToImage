<?php

// Setting fontproperties
$width = $_POST['width'];
$height = $_POST['height']; 
$font ='arialbd.ttf';
$font_size = 10;
$font_color =  0x000000;
$image = imagecreatetruecolor($width,$height);
$white = imagecolorallocate($image, 255, 255, 255); 
imagefill($image, 0, 0, $white);
 
// Fetching required text
$te = file_get_contents('Book/ch01s02.xhtml');   // HTML and XHTML files both work alike
$text=strip_tags($te);							 // Stripping tags
$linenumber = 25;

$maxlines = ceil($height/$linenumber);  
$linewords = $width/10+20;
$lines = explode('|', wordwrap($text, $linewords, '|'));

// Starting y-coordinate of the first line
$y = 0;
$count = 0; 
	foreach ($lines as $line)
	{
		if($count<=$maxlines)
		{
            $y += 40;
    		imagettftext($image, $font_size, 0, 20, $y, $font_color, $font, $line);
    		$y += 20;
    		$count++; 
    	}
	}

header("Content-type: image/png");
imagepng($image,'new.png');			//Image keeps getting over-written to this file
imagedestroy($image);
?>   
       


 
