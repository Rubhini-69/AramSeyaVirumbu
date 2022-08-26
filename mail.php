<?php
include_once 'includes/dbh.inc.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['resubmit'])) {
    // $fromEmail = "invictusihf026@gmail.com"; // from the website, default
    // $mailto = "roru1408@gmail.com"; //Orphanage email address
    //getting customer data
    $rename = $_POST['rename'];
    $recontact = $_POST['recontact'];
    $reage = $_POST['reage'];
    $recategory = $_POST['recategory'];
    $renum = $_POST['renum'];
    $reneed = $_POST['reneed'];
    $readdress = $_POST['readdress'];
    $relocation = $_POST['relocation'];
    $message = "Client Name: " . $rename . "\n"
    . "Phone Number: " . $recontact . "\n\n"
    . "Needy Person's Details - Age: " . $reage . "\n"
    . "Category: " . $recategory . "\n"
    . "Number of Persons: " . $renum . "\n"
    . "Need: " . $reneed . "\n"
    . "Address: " . $readdress . "\n"
    . "Location: " . $relocation . "\n";





$mail = new PHPMailer(true);

try {
 
                  
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'invictusihf026@gmail.com';                    
    $mail->Password   = 'aaoyizofletgdkgk';                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

  
    $mail->setFrom('invictusihf026@gmail.com', 'Aram Seya Virumbu');
    // $sql = "SELECT email from OrgDetails WHERE Need = $reneed AND PlaceLocation = $relocation;";
    // mysqli_query($conn, $sql);
    if($reneed=="Orphanage"){

    $mail->addAddress('roru1408@gmail.com');   
    }  
    else if($reneed=="Old-age Home")
    {
        $mail->addAddress('mjsrisuryaprakash@gmail.com');
    }
    else if($reneed=="Middle age")
    {
        $mail->addAddress('dhyaneshkct@gmail.com');
    }
    else if($reneed=="Physically challenged")
    {
        $mail->addAddress('maamimidhila7@gmail.com');
    }


    $mail->isHTML(true);                                 
    $mail->Subject = 'REQUESTING HELP';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}