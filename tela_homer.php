<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        
        $to = "all.day2024@gmail.com";
        $subject = "Mensagem do formulário de contato da ALL DAY";
        $body = "Nome: $name\nEmail: $email\nMensagem: $message";

    
        if (mail($to, $subject, $body)) {
            echo "<p>Obrigado por entrar em contato conosco! Entraremos em contato em breve.</p>";
        } else {
            echo "<p>Desculpe, algo deu errado. Por favor, tente novamente mais tarde.</p>";
        }
    }
    ?>