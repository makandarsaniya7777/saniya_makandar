<?php
include 'db.php';

$sql = "SELECT * FROM departments";
$result = $conn->query($sql);

echo "<h2>Department List</h2>";
echo "<table border='1'>
<tr><th>ID</th><th>Name</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row['dept_id']}</td>
    <td>{$row['dept_name']}</td>
    </tr>";
}

echo "</table>";
$conn->close();
?>