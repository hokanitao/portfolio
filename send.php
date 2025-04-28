<?php ini_set('display_errors', 1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $msg = $_POST["msg"];
  $to = "kahoo2839@gmail.com";
  $sub = "You've got an inquiry.";
  $headers = "From: kahoo2839@gmail.com";
  $body = "Name: $name \n Email: $email \n Subject: $subject \n Message: $msg";

  if (mail($to, $subject, $body, $headers)) {
    $message = "Your message was sent!";
  } else {
    $code = $e->getCode();
    $error = $e->getMessage();
    $message = "Something went wrong. Please try again. \n Code: [$code] $error";
  }
} else {
  header("Location: index.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./contact.css">
  <link href="https://fonts.googleapis.com/css2?family=Give+You+Glory&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>Submittion Complete</title>
</head>

<body>
  <h1>Thank you for reaching out!</h1>
  <p><?php echo $message; ?></p>
  <a href="index.html" class="button">Back to Home</a>
</body>

</html>