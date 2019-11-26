<?php
if(isset($_POST['submit'])) {
    $name= $_POST['Naam'];
    $subject = $_POST['onderwerp'];
    $mailFrom = $_POST['mail'];
    $message = $POST['bericht'];

    $mailTo = "jelle.dr@hotmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "Je hebt een e-mail van ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: begin.php?mailsend");
}