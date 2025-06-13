<?php

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer.php";
require_once "helpers/helpers.php";


$fields = [
    $_POST["name"],
    $_POST["email"],
    $_POST["subject"],
    $_POST["message"]
];

foreach($fields as $field) {
    if(!$field) {
        return 0;
    }
}

require_once "SMTP.php";

$replacements = [
    "{{name}}" => $_POST["name"],
    "{{email}}" => $_POST["email"],
    "{{subject}}" => $_POST["subject"],
    "{{message}}" => $_POST["message"]
];
$template = replace_placeholders($replacements);

// Create a new PHPMailer instance
$mail = new PHPMailer(true); // Passing true enables exceptions

$status = sendMail($mail, "habbas2121@outlook.com", "habbas21219@gmail.com", $template, $_POST["subject"]);
echo $status;

