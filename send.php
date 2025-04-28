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
    $message = "Your request was sent!";
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
  <title>Submittion Complete</title>
</head>

<body>
  <h1>Thank you for reaching out!</h1>
  <p><?php echo $message; ?></p>
  <a href="index.html">Back to Home</a>
</body>

</html>