<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['text'])){
    $to = "lordghick@gmail.com"; //
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Contacto a través del portafolio";
    $message = $name . " " . "te mandó este mensaje:" . "\n\n" . $_POST['text'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    print "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    }else{
        print "error perro";
    }
?>
