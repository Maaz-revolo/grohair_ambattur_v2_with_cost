<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/phpmailer/src/Exception.php';
require 'vendor/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/src/SMTP.php';
include 'constant.php';

header('Content-Type: application/json');

$response = array();
$response['success'] = false;
$response['message'] = "Invalid request.";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email_type = $_POST["email_type"] ?? '';
    $subject = '';
    $body = '';

    if ($email_type == '') {
        $response['success'] = false;
        $response['message'] = "Email Type can not be blank";
        echo json_encode($response);
        return;
    }

    if ($email_type != QUICK_APPOINTMENT && $email_type != FOOTER_APPOINTMENT &&  $email_type != MODAL_POPUP_APPOINTMENT && $email_type != FINAL_WA_FORM && $email_type != FINAL_CALL_FORM) {
        $response['success'] = false;
        $response['message'] = "Invalid Email Type.";
        echo json_encode($response);
        return;
    }

    if ($email_type == QUICK_APPOINTMENT) {
        $name = $_POST["name"] ?? '';
        $mobile = $_POST["mobile"] ?? '';
        $age = $_POST["age"] ?? '';
        $city = $_POST["city"] ?? '';
        $subject = 'Appointment';
        $body = "
        Name: $name <br> 
        Mobile: $mobile <br>
        Age: $age <br>
        City: $city <br>
        ";
    }

    if ($email_type == FOOTER_APPOINTMENT) {
        $firstName = $_POST["firstName"] ?? '';
        $lastName = $_POST["lastName"] ?? '';
        $email = $_POST["email"] ?? '';
        $mobile = $_POST["mobile"] ?? '';
        $city = $_POST["city"] ?? '';
        $treatment = $_POST["treatment"] ?? '';
        $message = $_POST["message"] ?? '';
        $subject = 'Appointment';
        $body = "First Name: $firstName <br> 
                Last Name: $lastName <br>
                Email: $email <br>
                Mobile: $mobile <br>
                City: $city <br>
                Treatment: $treatment <br>
                Comment: $message";
    }

    if ($email_type == MODAL_POPUP_APPOINTMENT) {
        $fullName = $_POST["fullName"] ?? '';
        $mobile = $_POST["mobile"] ?? '';
        $city = $_POST["city"] ?? '';
        $treatment = $_POST["treatment"] ?? '';
        $message = $_POST["message"] ?? '';
        $baldGrade = $_POST["baldGrade"] ?? '';
        $subject = 'Appointment';
        $body = "Full  Name: $fullName <br> 
        Mobile: $mobile <br>
        City: $city <br>
        Treatment: $treatment <br>
        Detail Requirements: $message <br>
        Grade of baldness : $baldGrade <br>
        ";
    }

    if ($email_type == FINAL_WA_FORM || $email_type == FINAL_CALL_FORM) {
        $mobile = $_POST["mobile"] ?? '';
        $emailSubject = "WhatsApp Lead";
        if ($email_type == FINAL_CALL_FORM) {
            $emailSubject = "Call Lead";
        }

        $subject = $emailSubject;
        $body = "
        Mobile: $mobile <br>
        ";
    }


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
        $mail->isSMTP();
        $mail->Host       = 'smtp.zoho.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'noreply@revolotech.com';
        $mail->Password   = 'Rev@l@2017';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('noreply@revolotech.com', 'Lead Enquiry ' . PROJECT_NAME);
        $mail->addAddress('nitin@revolotech.com');
        $mail->addAddress('shiv@revolotech.com');
        $mail->addAddress('ravikumarvintech@gmail.com');
        // $mail->addAddress('maaz.revolo@gmail.com');
        // $mail->addAddress('adit.revolo@gmail.com');

        //Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->send();
        $response['success'] = true;
        $response['message'] = "Form submitted successfully!";
        if ($email_type != FINAL_WA_FORM && $email_type != FINAL_CALL_FORM) {
            setcookie('enquiry_submitted', true);
        }
    } catch (Exception $e) {
        $response['success'] = false;
        $response['message'] = "Error sending email: {$mail->ErrorInfo}";
    }
    echo json_encode($response);
}
