<html>
    <head>
        <meta charset="UTF-8">
        <title>Log out</title>
    </head>
    <body>
        <?php
        // Initialize the session
        session_start();

        // Unset all session variables
        $_SESSION = array();

        // Destroy the session.
        session_destroy();

        // Redirect to login page
        header("location: login.php");
        exit;
        ?>
    </body>
</html>