<?php
include 'db.php';

$dept_name = $_POST['dept_name'];

$sql = "INSERT INTO departments (dept_name) VALUES ('$dept_name')";

if ($conn->query($sql) === TRUE) {
    echo "Department added successfully. <a href='index.html'>Go back</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>