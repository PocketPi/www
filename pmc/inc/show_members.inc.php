<?php

require 'inc/functions.inc.php';
require 'db_handler.php';

$sql = "SELECT * FROM members WHERE active_member = 1 ORDER BY id";
if ($result=mysqli_query($conn,$sql)) {
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".get_motorcycle($row["id"])."</td>";
        echo "</tr>";
    }
}
?>
