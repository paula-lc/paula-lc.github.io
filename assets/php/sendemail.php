<?php

if (isset($_POST['name'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['msg'])) {
        $name = $S_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];
        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = mail($name, $email,$msg);
        if ($mail) {
            echo "<h4>¡Mail enviado exitosamente!</h4>"
        }
    }
}