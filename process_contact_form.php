<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

header('Content-Type: application/json');

$response = [
    'success' => false,
    'message' => ''
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstname = ucfirst(trim($_POST["firstname"]));
    $lastname = ucfirst(trim($_POST["lastname"]));
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if (empty($firstname)) {
        $response['message'] .= "First name is required.\n";
    }
    if (empty($lastname)) {
        $response['message'] .= "Last name is required.\n";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['message'] .= "Valid email is required.\n";
    }
    if (empty($message)) {
        $response['message'] .= "Please type a message.\n";
    }
    if (empty($response['message'])) {
        $response['success'] = true;
        $response['message'] = "Form data is valid. Name: $firstname $lastname, Email: $email";

        $subject = 'New Inquiry from ' . $firstname . ' ' . $lastname;

        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'mail.socialempowermenthub.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'info@socialempowermenthub.com';
            $mail->Password = '&oO^#3pLL)])';
            $mail->Port = 465;
            $mail->SMTPSecure = 'ssl';
            $mail->setFrom('info@socialempowermenthub.com', 'Social Empowerment Hub');
            $mail->addAddress('info@socialempowermenthub.com');
            $mail->Subject = "$subject - $email";
            $mail->Body = $message;
            $mail->send();

            $response['success'] = true;
            $response['message'] = "Message sent! We'll get in touch!";
        } catch (Exception $e) {
            $response['message'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}

// Output JSON response
echo json_encode($response);
?>
