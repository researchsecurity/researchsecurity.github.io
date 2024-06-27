
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $captcha = htmlspecialchars($_POST['captcha']);
    
    // Simple CAPTCHA validation
    if ($captcha == '7') {
        // CAPTCHA is correct
        // Process the form data
        // You can send an email or save the data to a database here
        
        echo "Thank you, $name. Your message has been received.";
    } else {
        // CAPTCHA is incorrect
        echo "CAPTCHA is incorrect. Please go back and try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
