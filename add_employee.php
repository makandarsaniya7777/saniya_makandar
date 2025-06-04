<?php
include 'db.php';

$emp_name = $_POST['emp_name'];
$emp_email = $_POST['emp_email'];
$salary = $_POST['salary'];
$role = $_POST['role'];
$dept_id = $_POST['dept_id'];

$sql = "INSERT INTO employees (emp_name, emp_email, salary, role, dept_id)
        VALUES ('$emp_name', '$emp_email', '$salary', '$role', '$dept_id')";

if ($conn->query($sql) === TRUE) {
    echo "Employee added successfully. <a href='index.html'>Go back</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
