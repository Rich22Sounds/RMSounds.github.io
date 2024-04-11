<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "rich.22@seznam.cz";
    $subject = "Nová zpráva z kontaktního formuláře";
    $body = "Jméno: $name\nE-mail: $email\nZpráva:\n$message";

    if (mail($to, $subject, $body)) {
        echo json_encode(["message" => "Zpráva úspěšně odeslána"]);
    } else {
        echo json_encode(["message" => "Nastala chyba při odesílání zprávy"]);
    }
} else {
    echo json_encode(["message" => "Přístup nepovolen"]);
}
?>