<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diplwmatiki";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlLesson = "SELECT lessonId FROM test_data";
$resultLesson = $conn->query($sqlLesson);

if ($resultLesson->num_rows > 0) {
    while ($row = $resultLesson->fetch_assoc()) {
        echo "lessonId: " . $row["lessonId"];
    }
} else {
    echo "1 result error";
}
$conn->close();
