<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diplwmatiki";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";

$sql = "SELECT first_name,last_name FROM insert_lesson";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "First Name: " . $row["first_name"] . " - Last Name: " . $row["last_name"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
