<?php  // Always Include/Require This File For Connect Database
    require_once "DB_Info.php";  // this is connect.php file
    // PHP MAILER IS NEEDED FOR THIS PART OR YOU CAN TURN OFF EMAIL IN SETTINGS
    use PHPMailer/PHPMailer/PHPMailer;
    use PHPMailer/PHPMailer/Exception;
    require("vendor\autoload.php");
        $mail->SMTPAuth = true; // There was a syntax error here (SMPTAuth)
        $mail->SMTPSecure = $_POST['SMTP_Auth'];
        $mail->Host = $_POST['SMTP_Host'];
        $mail->Mailer = "smtp";
        $mail->Port = $_POST['SMTP_port'];
        $mail->Username = $_POST['SMTP_username'];
        $mail->Password = $_POST['SMTP_password'];
       
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
