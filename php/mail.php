<?php
ob_start();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];

    echo $name;
    echo $email;
    echo $telephone;
    echo $message;

    $content = nl2br("Nowa wiadomość od ".$name.". \r\n 
    Adres email do kontaktu: ".$email.", a numer telefonu: ".$telephone."\r\n
    Wiadomość przesłana brzmi: \r\n".$message);

    $theme = "Nowa wiadomośćze strony marfloor.pl od ".$name;

    $email_adress = "marfloor@o2.pl";

    mail($email_adress, $theme, $content);

    header("Location: ../index.html");
?>