<?php  
	$url = 'https://media.geeksforgeeks.org/wp-content/uploads/geeksforgeeks-9.png';
	$im = imagecreatefrompng( $url ); 
	
	$sizeX = imagesx($im); // ширина
	$sizeY = imagesy($im); // высота
	
	$background = imagecreatetruecolor($sizeX, $sizeY);
	
	$midX = intdiv($sizeX, 2);
	
	$im2 = imagecrop($im, ['x' => 0, 'y' => 0, 'width' => $midX, 'height' => $sizeY]); 

	
	imagecopymerge($background, $im2, 0, 0, 0, 0, $sizeX, $sizeY, 100);
	imagecopymerge($background, $im2, $midX, 0, 0, 0, $sizeX, $sizeY, 100);
	
	imagepng($background, 'foto.png');
	
	imagedestroy($im); 
	imagedestroy($im2); 
	
?> 