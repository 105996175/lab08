<?php
session_start();

if (!isset($_SESSION['user'])){
    header('Location: login.php');
    exit;
}

$username = htmlspecialchars($_SESSION['user']);

include 'header.inc';
?>

<h2>Welcome Page</h2>
<p>Welcome, **<?php echo $username; ?>**! You have successfully accessed the secure area.</p>
<p>This page confirms your session is active.</p>

<?php
  include 'footer.inc';
?>
