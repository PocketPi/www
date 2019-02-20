<?php

require 'db_handler.php';

$sql = "SELECT * FROM board_members";
if ($result=mysqli_query($conn,$sql)) {
    while($row = mysqli_fetch_assoc($result)){
        $sql = "SELECT name FROM members WHERE id=".$row["member"];
        $members=mysqli_query($conn,$sql);
        $name = mysqli_fetch_assoc($members);
        echo "<tr>";
        echo "<td>".$row["type"]."</td>";
        echo "<td>".$name["name"]."</td>";
        echo "<td><a href=mailto:".$row["email"].">".$row["email"]."</a></td>";
        echo "</tr>";
    }
}
?>
