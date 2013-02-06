<?php

require 'classes/ascii.class.php';

$ascii = new Ascii();

if (isset($_GET['filename']) && !empty($_GET['filename'])) {
    $filename = 'images/' . $_GET['filename'] . '.png';

} else {   
    $filename = 'images/Lenna.png';
}

$image = imagecreatefrompng($filename);
echo $ascii->render($image);
