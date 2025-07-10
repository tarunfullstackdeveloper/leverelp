<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $contact = htmlspecialchars($_POST["contact"]);
    $email = htmlspecialchars($_POST["email"]);
    $treatment = htmlspecialchars($_POST["treatment"]); // 🔥 yeh correct hai

    $to = "trunsharma97@gmail.com";
    $subject = "New Form Submission";

    // Email Body
    $message = "
    <html>
    <head><title>Form Submission</title></head>
    <body>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Contact Number:</strong> $contact</p>
        <p><strong>Email ID:</strong> $email</p>
        <p><strong>Treatment:</strong> $treatment</p>
    </body>
    </html>
    ";

    // Email Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: MANA <no-reply@aumana.in>\r\n";  
    $headers .= "Reply-To: $email\r\n";  
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        header("Location: thanks.html");
        exit();
    } else {
        header("Location: error.html");
        exit(); // ⬅️ Important to avoid running extra PHP after redirect
    }
}
?>
