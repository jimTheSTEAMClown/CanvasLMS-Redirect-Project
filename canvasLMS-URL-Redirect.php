//Published version on:
// https://www.steamclown.org/canvas/canvasClassURLRedirect.php
<?php

// Check if the 'text' parameter is present in the URL
if(isset($_GET['text'])) {
    // Get the value of the 'text' parameter
    $text = $_GET['text'];
    
    // Replace <class_code> with 1234 in the text string
    $modifiedText = str_replace('<class_code>', '1243', $text);
    
    // Redirect to the modified URL
    header("Location: $modifiedText");
    exit; // Ensure that no further code is executed after the redirect
} else {
    // If 'text' parameter is not present, print an error message
    echo "Error: 'text' parameter is missing in the URL.";
}

?>
