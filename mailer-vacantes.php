<?php
/**
 * PHPMailer multiple files upload and send
 */

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "./PHPMailer/PHPMailer.php";
require "./PHPMailer/SMTP.php";
require "./PHPMailer/Exception.php";

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";

//Server settings
$mail->isSMTP(); //Send using SMTP
$mail->Host = "smtp.hostinger.com"; //Set the SMTP server to send through
$mail->SMTPAuth = true; //Enable SMTP authentication
$mail->Username = "noreply@apiceac.com"; //SMTP username
$mail->Password = 'LXEo$jVKh9cQ'; //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port = 587;
// $mail->SMTPDebug = 1;

if (isset($_FILES["userfile-vacantes"]["tmp_name"])) {
    $name = strip_tags(trim($_POST["nombre"]));
    $name = str_replace(["\r", "\n"], [" ", " "], $name);
    $email = filter_var(trim($_POST["correo"]), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["telefono"]);
    $position = trim($_POST["puesto"]);
    $message = trim($_POST["comentarios"]);

    try {
        //Recipients
        $mail->setFrom("noreply@apiceac.com", "Ápice");
        $mail->addAddress("capitalhumano@apiceac.com"); //Add a recipient
        // $mail->addAddress('');     //Add extra recipient
        $mail->addReplyTo(
            $email,
            "Hola, me interesa formar parte de su equipo de trabajo."
        );

        //Attachments
        //Attach multiple files one by one
        if (isset($_FILES["userfile-vacantes"]["tmp_name"])) {
            foreach ($_FILES["userfile-vacantes"]["name"] as $k => $v) {
                $mail->AddAttachment(
                    $_FILES["userfile-vacantes"]["tmp_name"][$k],
                    $_FILES["userfile-vacantes"]["name"][$k]
                );
            }
        }

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = "Nuevo mensaje de Vacantes";
        $mail->Body =
            "Nombre: " .
            $name .
            "<br>Correo electrónico: " .
            $email .
            "<br>Teléfono: " .
            $phone .
            "<br>Puesto deseado: " .
            $position .
            "<br><br>Comentarios:<br>" .
            $message .
            "<br><br>Este mensaje fue enviado a través del formulario de Vacantes del sitio web de Ápice.";

        $mail->send();
        echo "Gracias por contactarnos, nos comunicaremos contigo a la brevedad.";
    } catch (Exception $e) {
        echo "Lo sentimos, algo salió mal. Por favor, inténtalo de nuevo. Mailer Error: " .
            $mail->ErrorInfo;
    }
}
?>
