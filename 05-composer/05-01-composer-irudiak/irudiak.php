<?php

// include composer autoload
//require __DIR__ . '/vendor/autoload.php';
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

// configure with favored image driver (gd by default)
Image::configure(array('driver' => 'imagick'));

// and you are ready to go ...
$image = Image::make('eibar.jpg')->resize(300, 200);

// finally we save the image as a new file
$image->save('eibar2.jpg');
//
echo "<img src=eibar.jpg>";
echo "<img src=eibar2.jpg>";

/*
// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

// create an image manager instance with favored driver
$manager = new ImageManager(array('driver' => 'imagick'));

// to finally create image instances
$image = $manager->make('eibar.jpg')->resize(300, 200);
*/