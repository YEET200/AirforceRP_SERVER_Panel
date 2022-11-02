<?php  // Always Include/Require This File For Connect Database
    require_once "DB_Info.php";  // this is connect.php file
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPAuth = true; // There was a syntax error here (SMPTAuth)
    $mail->SMTPSecure = $_POST['SMTP_Auth'];
    $mail->Host = $_POST['SMTP_Host'];
    $mail->Mailer = "smtp";
    $mail->Port = $_POST['SMTP_port'];
    $mail->Username = $_POST['SMTP_username'];
    $mail->Password = $_POST['SMTP_password'];
    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'TEST';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
       
    @mysqli_connect(
        $HOST_name,
        $DB_username,
        $DB_password
    ) or die(
        "<h2>Database Error, Contact With Admin </h2>"
    );

    @mysqli_select_db(
        $DB_name
    ) or die(
        "<h2>Database Error, Contact With Admin</h2>"
    );

    
?>
