<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<h3>Medlemsdatabasen Register</h3>

<div>
  <form action="inc/register.inc.php" method="post">

    <label>Email Address (*)</label>
    <input type="text" name="email" placeholder="mail@pmc.dk" autofocus>

     <label>Name (*)</label>
    <input type="text" name="name">

	<label>Birthdate</label>
    <input type="text" name="birthdate"">

    <label>Address</label>
    <input type="text" name="address">

    <label>Zip Code</label>
    <input type="text" name="zipcode">

    <label>Password (*)</label>
    <input type="password" name="password" placeholder="Password">
 
    <label>Repeat Password (*)</label>
    <input type="password" name="password_repeat" placeholder="Repeat Password">
 
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
