<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $bowc = $-POST ['bowc'];
    $datev = $_POST['datev'];
    $message = $_POST['message'];
    $from = 'From: GotChairCover.com'; 
    $to = 'info@gotchaircovers.com'; 


    $subject = 'Contact Form Inquiry';

//    $body = "From: $name\n E-Mail: $email";
$body = "From: $name\n E-Mail: $email\n Phone: $phone\n Bow Color: $bowc\n Date/Location: $datev\n Message: $message";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Thank you for your email. We will get back with you shortly.</p>';
    } else { 
        echo '<p>Oops! An error occurred. Try sending your message again.</p>'; 
    }
}
?>