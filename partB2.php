<?php
// Set the content type to an image (PNG)
header("Content-Type: image/png");

// Create an image canvas with a width of 400px and a height of 400px
$image = imagecreate(400, 400);

// Define colors
$green = imagecolorallocate($image, 0, 128, 0);          // Green color
$purple = imagecolorallocate($image, 160, 32, 240);       // Purple color
$white = imagecolorallocate($image, 255, 255, 255);       // White color

// Fill the background with white color
imagefill($image, 0, 0, $white);

// Circle parameters
$circle_center_x = 200;  // Center of the circle (x-coordinate)
$circle_center_y = 200;  // Center of the circle (y-coordinate)
$circle_radius = 100;    // Radius of the circle

// Draw a green circle
imageellipse($image, $circle_center_x, $circle_center_y, $circle_radius * 2, $circle_radius * 2, $green);

// Line parameters
$line_start_x = 50;  // Starting point of the line (x-coordinate)
$line_start_y = 200; // Starting point of the line (y-coordinate)
$line_end_x = 350;   // Ending point of the line (x-coordinate)
$line_end_y = 200;   // Ending point of the line (y-coordinate)

// Draw a purple line
imageline($image, $line_start_x, $line_start_y, $line_end_x, $line_end_y, $purple);

// Output the image as PNG
imagepng($image);

// Free up memory
imagedestroy($image);
?>
