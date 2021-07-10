<?php
    include_once "dbConnection.php";

    $allEmployees = "SELECT * FROM employees";
    $result = $connection->query($allEmployees);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["id"]. "</td>";
            echo "<td>". $row["names"]. "</td>";
            echo "<td>". $row["surname"]. "</td>";
            echo "<td>". $row["dateOfBirth"]. "</td>";
            echo "<td>". $row["email"]. "</td>";
            echo "<td>". $row["phoneNumber"]. "</td>";
            echo "<td>". $row["department"]. "</td>";
        }
    } else {
        die("Dane nie istnieją" . $connection->connect_error);
    }
    
    $result ->close();
    $connection->close();
?>