<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function conecta($con){
    // dades de configuració
    $ip = 'localhost';
    $usuari = 'alumne';
    $pass = 'alumne';
    $db_name = 'empresa';
    
    // connectem amb la db
    $con = mysqli_connect($ip,$usuari,$pass,$db_name);
    if (!$con)  {
        echo "Ha fallat la connexió a MySQL: " . mysqli_connect_errno();
        echo "Ha fallat la connexió a MySQL: " . mysqli_connect_error();

    }
    return $con;
}

function consulta(){
    $conexion="";
    $conexion=conecta($conexion);
    if ($conexion)  {
        $sql = 'SELECT * FROM CLIENTS';
        $resultat = mysqli_query($conexion,$sql) or die('Consulta fallida: ' . mysqli_error($conexion));
    //    $nfilas = $resultat->num_rows;
    //    echo $nfilas;
       mysqli_close($conexion);
        return $resultat;

    }
}

function busca($nom){
    $conexion="";
    $conexion=conecta($conexion);
    if ($conexion)  {
        $sql = "SELECT nom, numcomanda, data, import_total FROM CLIENTS, COMANDA WHERE clie=numclie and nom='$nom';";
        $resultat = mysqli_query($conexion,$sql) or die('Consulta fallida: ' . mysqli_error($conexion));
    //    $nfilas = $resultat->num_rows;
    //    echo $nfilas;
       mysqli_close($conexion);
        return $resultat;

    }
}

function enviaMail($documento){

    $mail = new PHPMailer(true);

    try {
        //Server settings
        // 0 = off (for production use, No debug messages)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'toniruizc@gmail.com';                     // SMTP username
        $mail->Password   = 'xxxxxx';                               // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('toniruizc@gmail.com', 'info');
        $mail->addAddress('toniruizc@gmail.com', 'Toni');     // Add a recipient
        $mail->addAttachment($documento);         // Add attachments



        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'test';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}
?>