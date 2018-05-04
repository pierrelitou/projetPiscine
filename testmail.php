<?php

require ('C:\wamp64\www\projetPiscine\PHPMailer\src\PHPMailer.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\src\SMTP.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\src\Exception.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\src\OAuth.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\src\POP3.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\.phan\config.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-am.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-ar.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-az.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-ba.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-be.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-bg.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-ca.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-ch.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-cs.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-da.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-de.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-el.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-eo.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-es.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-et.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-fa.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-fi.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-fo.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-fr.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-gl.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-he.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-hr.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-hu.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-id.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-it.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-ja.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-ka.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-ko.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-lt.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-lv.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-ms.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-nb.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-nl.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-pl.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-pt.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-pt_br.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-ro.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-rs.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-ru.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-sk.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-sl.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-sv.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-tr.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-uk.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-vi.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-zh.php');
require ('C:\wamp64\www\projetPiscine\PHPMailer\language\phpmailer.lang-zh_cn.php');




    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); 

    $mail->CharSet="UTF-8";
    $mail->Host = "ssl://smtp.gmail.com";
    $mail->SMTPDebug = 1; 
    $mail->Port = 465 ; //465 or 587

     $mail->SMTPSecure = 'ssl';  
    $mail->SMTPAuth = true; 
    $mail->IsHTML(true);

    //Authentication
    $mail->Username = "benjamin.fornaciari@gmail.com";
    $mail->Password = "benji8255email";

    //Set Params
    $mail->SetFrom("benjamin.fornaciari@gmail.com");
    $mail->AddAddress("benjamin.fornaciari@gmail.com");
    $mail->Subject = "Test";
    $mail->Body = "hello";


     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }

?>

