# CanvasLMS-Redirect-Project

This project is a "shiny" thing I want to do to make it easy to add links into a Canvas LMS assignment or Quiz, and have it work from year to year.  An example of what I'm trying to do is put a link to a cisco Networking class, whick will have a diffrent class code from year to year, but is found in the URL.  I want to have a system where it's easy to link to say, a PHP script, that would take a URL with a text parameter, and switch to a hardcodes one from a data file, and redirect to the new actual URL.  
Examples to follow:

#License: 
- I tend to use the GNU GPL v3 licnese, just because it has more of a creative conmmons/opensources/returen youor improvemtnes to the opensource community... but connect with me if you need a BSD or MIT licnese.

This is the first example:
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

# Things I want to learn how to do and/or have help with:
- add some minimume level of cybersecurity to the passing of the URL, who can access, side file that could be assigned as a link to red to get more redirect information like diffrent teachers, diffrent classes, and other stuff to help organize the redirect.
- maybe some GUI click method to let a user select diffrent options.  something like a flow where the canvas (or really any URL link, has a text string to indicate the classID code and maybe a select option where they can pick 1-4 paths, depending on who they are... more on this later as I think it out.
- It's 4:32 in the AM, and I could not sleep, so I started this Git Repo. :-)
- 
