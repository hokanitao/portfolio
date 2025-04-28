<?php ini_set('display_errors', 1);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $msg = $_POST["msg"];
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
  <title>Contact Form Confirmation</title>
</head>

<body>
  <h1>Contact Form Confirmation</h1>
  <p></p>
  <table>
    <tr>
      <td class="title">Name</td>
      <td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></td>
    </tr>
    <tr>
      <td class="title">Email</td>
      <td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?></td>
    </tr>
    <tr>
      <td class="title">Subject</td>
      <td><?php echo htmlspecialchars($subject, ENT_QUOTES, 'UTF-8') ?></td>
    </tr>
    <tr">
      <td class="title">Message</td>
      <td><?php echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?></td>
      </tr>
  </table>

  <form method="post" action="send.php">
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="hidden" name="subject" value="<?php echo $subject; ?>">
    <input type="hidden" name="msg" value="<?php echo $msg; ?>">
    <button type="button" onclick="history.back()" class="button">Back</button>
    <input type="submit" value="Submit" class="button">
  </form>
</body>

</html>