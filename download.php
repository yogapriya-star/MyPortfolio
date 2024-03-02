<?php
// Set the file path
$file = "assets/YogapriyaShanmugamResume.pdf";

// Check if the file exists
if (file_exists($file)) {
    // Set headers for force download
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=' . basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));

    // Read the file and output it to the browser
    readfile($file);

    // Exit the script to prevent any additional output
    exit;
} else {
    // If the file doesn't exist, display an error message
    echo 'File not found.';
}
?>