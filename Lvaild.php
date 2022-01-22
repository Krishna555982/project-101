<?php
$mysqli = new mysqli("localhost" , "root" , "123456" , "project101");
if($mysqli == false) {

    die("ERROR: could not connect. " . $mysqli->connect_error);
}
$user=$_POST["user"];
$pass=$_POST["pass"];
$sql = "SELECT *FROM registrations where name='$user' and password='$pass'";
if($result = $mysqli->query($sql)) {
    if($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>name</th>";
        echo "<th>password</th>";
        echo "<th>email</th>";
        echo "<th>mobile number</th>";
        echo "<th>gener</th>";
        echo "<th>adress</th>";
        echo "</tr>";
        while($row = $result->fetch_array(0)) {
            echo "<tr>";
            echo "<td>"
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['mobile number'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['adress'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        $result->free();
    } else{
        echo "Invalid creditionals";
    }
} else{
    echo "ERROR:" . $mysqli->error;
}
$mysqli->close();
?>