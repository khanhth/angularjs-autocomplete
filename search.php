<?php
require_once 'config_db.php';

$name = isset($_POST['name']) ? $_POST['name'] : '';

$data = [];

// Search users by name limit 10 records
$sql = "SELECT * FROM users WHERE name LIKE '%" . $name . "%' LIMIT 10";
$result = mysqli_query($con, $sql);


while($row = mysqli_fetch_array($result)) {
	$data[] = ["name" => $row['name']];
}

echo json_encode($data);
