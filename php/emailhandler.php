<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

if(isset($_POST['sendmail']))
{
    require '..\phpmailer\PHPMailerAutoload.php';
    require 'credential.php';

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through(set the domain,for multiple,seprate using commas)
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = EMAIL;                     // SMTP username
        $mail->Password   = PASS;                               // SMTP password
        $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom(EMAIL,'Vaishali Chauhan');
        $mail->addAddress($_POST['email']);     // Add a recipient
        
        $mail->addReplyTo(EMAIL, 'Information');


        // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $_POST['subject'];
       // $mail->Body    = '<div style="border:red 2px solid red;">This is the HTML message body <b>in bold!</b></div>';
        $mail->Body = $_POST['message'];

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }


}
?>