<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "joitamitra@yahoo.com";
    $subject = "Mail From website";
    $headers = "From: ".$mailFrom;
    $txt = "You have a message from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);

    header("Location:thankyou.html");
}
?>