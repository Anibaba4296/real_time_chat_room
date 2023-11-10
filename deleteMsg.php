<?php
    session_start();
    include "db.php";
    $q = "DELETE FROM `msg`"; // Corrected the SQL query
    if(mysqli_query($db, $q)) {
        echo "<h3>Chats are cleared</h3>";
    } else {
        echo "Error: " . mysqli_error($db);
    }
?>