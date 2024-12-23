<?php
// Set the content type to an image (PNG)
header("Content-Type: image/png");

// Create an image canvas with a width of 500px and a height of 200px
$image = imagecreate(500, 200);

// Define colors
$yellow = imagecolorallocate($image, 255, 255, 0);  // Yellow color (background)
$black = imagecolorallocate($image, 0, 0, 0);        // Black color (text)

// Add the text to the image
imagestring($image, 5, 120, 70, "100 Items Sold", $black);

// Output the image as PNG
imagepng($image);

// Free up memory
imagedestroy($image);
?>
