<?php
// Set the content type to an image (PNG)
header("Content-Type: image/png");

// Create an image canvas with a width of 300px and a height of 150px
$image = imagecreate(300, 150);

// Define colors
$white = imagecolorallocate($image, 255, 255, 255);  // White color
$red = imagecolorallocate($image, 255, 0, 0);        // Red color
$black = imagecolorallocate($image, 0, 0, 0);        // Black color

// Draw a red filled rectangle
imagefilledrectangle($image, 50, 50, 250, 100, $red);

// Add the "Sale!" label to the rectangle
imagestring($image, 5, 120, 70, "Sale!", $black);

// Output the image as PNG
imagepng($image);

// Free up memory
imagedestroy($image);
?>




