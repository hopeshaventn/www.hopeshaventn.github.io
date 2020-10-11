<?php
    $name = $_POST['name'];
    $vistor_email = $_POST['email'];
    $message = $_POST

    $email_from = 'zachbianucci@gmail.com';
    $email_subject = "I want to stay in touch!";
    $email_body = "Hey Hope's Haven! My email is $vistor_email and I would like for you to reach out to me!";

    $to = "zachbianucci@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);
    header("Location: index.html");
?>