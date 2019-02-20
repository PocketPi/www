<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<h3>Medlemsdatabasen</h3>

<div>

    <?php
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
        echo "Hello " . $_SESSION["name"] . "</br>";
        echo "<a href=\"inc/logout.inc.php\">logout</a> </br>";

    } else {
        echo "<a href=\"login.php\">Login</a> </br>";
        echo "<a href=\"register.php\">Register</a>";
    }
    ?>
</div>

</body>
</html>
