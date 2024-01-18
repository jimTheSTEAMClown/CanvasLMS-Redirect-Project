// ChatGPT example when asked:
// https://chat.openai.com/share/d86af358-0d67-45e8-94b0-d5e99c2f6446

<?php

// Check if the 'text1' and 'text2' parameters are present in the URL
if(isset($_GET['text1']) && isset($_GET['text2'])) {
    // Get the values of the 'text1' and 'text2' parameters
    $text1 = $_GET['text1'];
    $text2 = $_GET['text2'];
    
    // Replace <class_code> with 1234 in the text1 string
    $modifiedText1 = str_replace('<class_code>', '1243', $text1);
    
    // Replace <class_code> with 5678 in the text2 string
    $modifiedText2 = str_replace('<class_code>', '5678', $text2);

    // Redirect to the modified URL with both modified text parameters
    header("Location: example.php?modifiedText1=$modifiedText1&modifiedText2=$modifiedText2");
    exit; // Ensure that no further code is executed after the redirect
} else {
    // If 'text1' or 'text2' parameters are not present, print an error message
    echo "Error: 'text1' and 'text2' parameters are missing in the URL.";
}

?>
