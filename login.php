<?php
$error_message = '';
if (isset($_GET['error']) && $_GET['error'] === 'invalid') {
    $error_message = '<p style="color:red; font-weight: bold;">Invalid username or password. Please try again.</p>';
}
   include 'header.inc';
?>
    <h2>User Login</h2>
    <?php echo $error_message; ?>

    <form method="post" action="process.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        
        <input type="hidden" name="token" value="abc123">
        <input type="submit" value="Login">
    </form>

<?php
    include 'footer.inc';
?>
