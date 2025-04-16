<?php include "db.php";
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}
?>
<h2>Welcome, <?= $_SESSION['username'] ?>!</h2>
<a href="ask_question.php">Ask a Doubt</a> |
<a href="answer_question.php">Answer a Doubt</a> |
<a href="logout.php">Logout</a>
