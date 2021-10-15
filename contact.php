<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "joita.mitra10@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have a message ".$name".\n\n".$message;

    mail($mailTo, $name, $txt, $headers);

    header("Location: index.html?MessageSent");
}
?>