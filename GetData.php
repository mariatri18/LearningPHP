<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diplwmatiki";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT Id,value FROM test_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Id: " . $row["Id"] . " - Value: " . $row["value"];
    }
} else {
    echo "0 results";
}
$conn->close();
