<?php
require 'vendor/autoload.php';

use thiagoalessio\TesseractOCR\TesseractOCR;

if(!isset($_POST['base64']) || $_POST['base64']=='') {
    echo '{"status":"fail","message":"Image base64 code is not found."}';
    exit;
}

$base64 = $_POST['base64'];
// Your Base64 string, the part after comma is the data
$base64_string = "data:image/png;base64,".$base64;

// Obtain the image data part of the base64 code, removing the initial part about data type
$image_parts = explode(";base64,", $base64_string);
$image_base64 = base64_decode($image_parts[1]);

// Define the image file name and path
$file = 'upload/'.uniqid() . '_' . time().'.png';

// Save the image in the defined path
file_put_contents($file, $image_base64);


// Function to perform OCR on an image and return the recognized text
function imageToText($imagePath, $languages)
{
    // Create a new instance of TesseractOCR
    $tesseract = new TesseractOCR($imagePath);

    // Set the languages to be used for OCR
    $tesseract->lang($languages);


  // Specify the location of the tessdata directory containing the language data file
    $tessdataDir = 'C:\xampp\htdocs\OSR\vendor\thiagoalessio\tesseract_ocr\src\tessdata'; // Replace with the actual path to your tessdata directory
    $tesseract->tessdataDir($tessdataDir);
    // Perform OCR and get the recognized text
    $text = $tesseract->run();

    return $text;
}

// Usage example:
$languages = "rus+eng"; // English and Russian languages
$ocrText = imageToText($file, $languages);
$resp = array('status'=>'success','data'=>$ocrText);
$json = json_encode($resp);
print_r($json);

?>
