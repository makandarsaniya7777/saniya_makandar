<?php
include 'db.php';

$sql = "SELECT employees.*, departments.dept_name 
        FROM employees 
        LEFT JOIN departments ON employees.dept_id = departments.dept_id";

$result = $conn->query($sql);

echo "<h2>Employee List</h2>";
echo "<table border='1'>
<tr>
  <th>ID</th><th>Name</th><th>Email</th><th>Salary</th><th>Role</th><th>Department</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row['emp_id']}</td>
    <td>{$row['emp_name']}</td>
    <td>{$row['emp_email']}</td>
    <td>{$row['salary']}</td>
    <td>{$row['role']}</td>
    <td>{$row['dept_name']}</td>
    </tr>";
}

echo "</table>";
$conn->close();
?>