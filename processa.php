<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        $ContactForm1_contact-form-name = $_POST['ContactForm1_contact-form-name']
        $ContactForm1_contact-form-email = $_POST['ContactForm1_contact-form-email']
        $ContactForm1_contact-form-email-message = $_POST['ContactForm1_contact-form-email-message']

        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "admkr1@hotmail.com");
        $subject = " Menssagem de contat Alpha Design";
        $to = new SendGrid\Email(null, "contatoalphadesign@outlook.com");
        $content = new SendGrid\Content("text/html", "Olá Alpha Design, <br><br>Nova menssagem de contato<br><br>Nome: $ContactForm1_contact-form-name<br>Email:$ContactForm1_contact-form-email<br> Menssagem:$ContactForm1_contact-form-email-message");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo "Menssagem enviada com sucesso!";
        
        ?>
    </body>
</html>