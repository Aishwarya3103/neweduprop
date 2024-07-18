<?php

include('../config.php');

$sql = "Select * from listing";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $records[] = $row;
  }
} else {
  $records = [];
}
$conn->close();

echo json_encode($records);

?>