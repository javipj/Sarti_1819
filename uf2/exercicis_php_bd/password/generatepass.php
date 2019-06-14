<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 4; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

/*


agafar email de l'usuari
generar password
guardar nova password
enviar email amb nova password
informar a l'usuari

*/

//agafar email de l'usuari

$email=$_GET["email"];

//generar password

$newpassword = randomPassword();


//guardar nova password

$sql = " update usuarios set password='$newpassword'  where email='$email' ";


// dades de configuració
$ip = 'localhost';
$usuari = 'demoweb';
$pass = 'LeH6TAoqCiQEGY1h';
$db_name = 'demoweb';

    // connectem amb la db
    $con = mysqli_connect($ip,$usuari,$pass,$db_name);
    if (!$con)  {
        echo "Ha fallat la connexió a MySQL: " . mysqli_connect_errno();
            echo "Ha fallat la connexió a MySQL: " . mysqli_connect_error();
    }

    $resultat = mysqli_query($con,$sql) or die('Consulta fallida: ' . mysqli_error($con));
    mysqli_close($con);


//enviar email amb nova password




// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'javipj@gmail.com';                     // SMTP username
    $mail->Password   = 'kuiqkmeyvxpnhjni';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('info@dawjavi.insjoaquimmir.cat', 'info');
    $mail->addAddress($email, 'Nando');     // Add a recipient




    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Nou password ';
    $mail->Body    = "El nou password es: <b>$newpassword</b>";
    $mail->AltBody = '';

    $mail->send();
    echo 'El password se ha enviado a el email proporcionado.';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




?>