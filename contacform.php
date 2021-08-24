<?php

if (isset($_POST['submit'])){
    $name = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $comentario = $_POST['comentarios'];

    $mailTo = "rrodrigo2@live.com";
    $headers = "From: ".email;
    $txt = "You have received an e-mail from".$name.".\n\n".$comentario;

    mail($email, comentario, txt, $headers);

    header("Location: index.php?mailsend");
}
?>
