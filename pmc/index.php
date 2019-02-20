<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<h2>Medlemsdatabasen</h2>

<h3>Bestyrelsen: <a href="mailto:best@pmc.dk">best@pmc.dk</a></h3>

<table id="board_members">
  <tr>
    <th>Position</th>
    <th>Navn</th>
    <th>Email</th>
  </tr>
<?php require 'inc/show_board_members.inc.php'; ?>
</table>

</b>
<h2>Medlemmer</h2>


<table id="members">
  <tr>
    <th>Medlems Nummer</th>
    <th>Navn</th>
    <th>Motorcycle</th>
  </tr>
<?php require 'inc/show_members.inc.php'; ?>
</table>

<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
    echo "Hello " . $_SESSION["name"] . "</br>";
    echo "<a href=\"inc/logout.inc.php\">logout</a> </br>";

} else {
    echo "<a href=\"login.php\">Login</a> </br>";
    echo "<a href=\"register.php\">Register</a>";
}
?>

</body>
</html>
