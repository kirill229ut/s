<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "ivanovskijkirill1@gmail.com";  
    $subject = "Новий відгук від " . $name;
    $body = "Ім'я: $name\nEmail: $email\nПовідомлення:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Лист відправлено успішно!";
    } else {
        echo "На жаль, сталася помилка при відправці листа.";
    }
} else {
    echo "Невірний метод запиту.";
}
?>
