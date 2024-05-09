<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Imprimir los datos en HTML
    echo "<div class='contact-info'>";
    echo "<p class='contact-name'>$name <span class='contact-email'>($email)</span></p>";
    echo "<p class='contact-message'>$message</p>";
    echo "</div>";
}
