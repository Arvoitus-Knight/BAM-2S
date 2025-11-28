<?php
$title = "Contact";
include "partials/header.php";
include "partials/navbar.php";
?>
<h1>Contact Us</h1>
<form method="POST" action="submit.php">
    <label>Name:</label><br>
    <input type="text" name="name"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Message:</label><br>
    <textarea name="message"></textarea><br><br>

    <button type="submit">Send</button>
</form>
<?php include "partials/footer.php"; ?>
