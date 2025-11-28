<?php
$title = "Submitted";
include "partials/header.php";
include "partials/navbar.php";

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

?>
<h1>Form Submitted</h1>
<p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
<p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
<p><strong>Message:</strong> <?php echo nl2br(htmlspecialchars($message)); ?></p>
<?php include "partials/footer.php"; ?>
