<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
include ("../DB/server.php");

$klientas = $_POST['Vardas'];
$klientoEmail = $_POST['Email'];
$klientoKlausimas = $_POST['zinute'];
$klientoTema = $_POST['Tema'];



//Load composer's autoloader
require '../libs/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {

    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );
    $mail->Host = 'tls://smtp.gmail.com:587';

    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    // $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'riesutas.odinis@gmail.com';      //mano el pastas tikr
    $mail->Password = 'OdinisRiesutas123';                           //slapt el pasto tikras
    // $mail->SMTPSecure = 'tls';                           // Enable TLS encryption, `ssl` also accepted
    $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
    // $mail->Port = 587;                                   // TCP port to connect to
    $mail->Port = 465;                                      // TCP port to connect to

    //Recipients
    $mail->setFrom($klientoEmail, 'Odinis riesutas');
    $mail->addAddress('riesutas.odinis@gmail.com', '');
    // $mail->addAddress('ellen@example.com');                    // Name is optional
    $mail->addReplyTo($klientoEmail, $klientas);    // ~

    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Odinis riesutas';
    $mail->Body    = $klientoKlausimas;
    $mail->AltBody = $klientoKlausimas;


    $arPavykoIssiusti =  $mail->send();

$sql = "INSERT INTO email (name, emailas, question, tema)
VALUES ('$klientas', '$klientoEmail', '$klientoKlausimas', '$klientoTema');";
mysqli_query($connnection, $sql);
Header("Location: success.php");



}
catch (Exception $e) {
    echo 'Klaida.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}







?>
