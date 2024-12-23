<?php
// Set the content type to an image (PNG)
header("Content-Type: image/png");

// Create an image canvas with a width of 400px and a height of 400px
$image = imagecreate(400, 400);

// Define colors
$black = imagecolorallocate($image, 0, 0, 0);        // Black color
$gray = imagecolorallocate($image, 211, 211, 211);    // Gray color

// Fill the background with gray color
imagefill($image, 0, 0, $gray);

// Set the user name
$userName = "Syahira";
$text = "Hello, $userName";

// Font path (Make sure the font file exists in the specified directory)
$font = "Pangolin/Pangolin-Regular.ttf"; // Ensure this path is correct

// Add text to the image using TrueType font
imagettftext($image, 24, 0, 100, 200, $black, $font, $text);

// Output the image as PNG
imagepng($image);

// Free up memory
imagedestroy($image);
?>


