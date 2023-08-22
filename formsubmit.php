<?php


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

echo $name, " ======== ", $email, " ======== ", $subject, " ======== ", $message;

$to = "toro.rahul@gmail.com";
$to2 = "info@laxmisolar.com";

$message = "Name: " . $name . "\n" . "Email: " . $email . "\n" . "Subject: " . $subject . "\n" . "Message: " . $message;

$headers = "From: " . $email;


try {
    mail($to, $subject, $message, $headers);
    echo "<h1>Sent Successfully! Thank you" . " " . $name . ", We will contact you shortly!</h1>";
} catch (Exception $e) {
    echo "<h1>Something went wrong! Please try again later.</h1>";
}
try {
    mail($to2, $subject, $message, $headers);
    echo "<h1>Sent Successfully! Thank you" . " " . $name . ", We will contact you shortly!</h1>";
} catch (Exception $e) {
    echo "<h1>Something went wrong! Please try again later.</h1>";
}


?>

<script>
    setTimeout(function() {
        window.location.href = "index.php";
    }, 3000);
</script>