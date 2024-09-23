<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?></h2>
    <p>Your email: <?php echo $_SESSION['email']; ?></p>
    <form action="logout.php" method="POST">
        <button type="submit">Logout</button>
    </form>
</body>
</html>
