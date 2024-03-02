<?php
session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'yogapriyashanmugam1@gmail.com';                     //SMTP username
        $mail->Password = 'ywpvuqfslojhsrkq';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           //Enable implicit TLS encryption
        $mail->Port = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->SMTPDebug = 2;
        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('yogapriyashanmugam1@gmail.com', 'Yogapriya Shanmugam');     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        // Set a success message
        $_SESSION['message'] = "Message sent successfully!";
        $_SESSION['type'] = "success";
    } catch (Exception $e) {
        // Set an error message
        $_SESSION['message'] = "Message not sent.";
        $_SESSION['type'] = "error";
    }

    // Redirect back to the form with the response message
    header('location: index.php#contact');
    exit();
}
?>