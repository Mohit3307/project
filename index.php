<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Doubt Solving Portal</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Welcome to the Doubt Solving Portal</h1>
  <?php if (!isset($_SESSION['user_id'])): ?>
    <a href="login.php">Login</a> |
    <a href="register.php">Sign Up</a>
  <?php else: ?>
    <a href="dashboard.php">Go to Dashboard</a> |
    <a href="logout.php">Logout</a>
  <?php endif; ?>
</body>
</html>
