<?php
    #$name = $_POST['name'];
    $vistor_email = $_POST['email'];
    #$message = $_POST['message'];

    $email_from = 'zachbianucci@gmail.com';
    $email_subject = "I want to stay in touch!";
    $email_body = "Hey Hope's Haven! My email is $vistor_email and I would like for you to reach out to me!";
    $email_body = wordwrap($message, 70, "\r\n");
    $to = "zachbianucci@gmail.com";

    $headers = 'From: zachbianucci@gmail.com' . "\r\n".
        'Reply-To: '$vistor_email."\r\n".
        'X-Mailer: PHP'.phpversion();

    mail($to, $email_subject, $email_body, $headers);
    header("Location: index.html");
?>