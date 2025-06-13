<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "PHPMailer.php";

function sendMail(PHPMailer $mail, $from, $to, $template, $subject) {
    try {
        // Server settings
        $mail->isSMTP(); 
        $mail->Host       = 'smtp-mail.outlook.com'; // Put SMPT Host here
        $mail->SMTPAuth   = true; 
        $mail->Username   = "letbizz@outlook.com"; // put SMTP username here
        $mail->Password   = '17121980.test'; // put SMTP password here
        $mail->SMTPSecure = 'tls'; 
        $mail->Port       = 587;
    
        // Recipients
        $mail->setFrom('letbizz@outlook.com', 'Letbizz Sender'); // Sender's email and name
        $mail->addAddress('contact@letbizz.com', 'Letbizz Reciever'); // Add a recipient
    
        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = $_POST["subject"];
        $mail->Body    = $template;
    
        // Send email
        $mail->send();
        return 1;    
    } catch (Exception $e) {
        // Handle exceptions
        return 0;
    }
}
function replace_placeholders($replacements) {
    $template = file_get_contents("template.php");
    foreach($replacements as $key => $replacement) {
        $template =  str_replace("$key", $replacement, $template);
    }
    return $template;
}