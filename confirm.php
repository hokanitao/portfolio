<?php ini_set('display_errors', 1);
echo "Hello";

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
  <title>Contact Form Confirmation</title>
</head>

<body>
  <h1>Contact Form Confirmation</h1>
  <p></p>
  <table>
    <tr>
      <td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></td>
    </tr>
    <tr>
      <td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?></td>
    </tr>
    <tr>
      <td><?php echo htmlspecialchars($subject, ENT_QUOTES, 'UTF-8') ?></td>
    </tr>
    <tr>
      <td><?php echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?></td>
    </tr>
  </table>

  <form method="post" action="send.php">
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="hidden" name="subject" value="<?php echo $subject; ?>">
    <input type="hidden" name="msg" value="<?php echo $msg; ?>">
    <input type="submit" value="Submit">
  </form>
</body>

</html>