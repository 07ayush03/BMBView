<?php
// Return employees by department (dummy example)
header('Content-Type: application/json');
echo json_encode([
  ['id' => 1, 'name' => 'John Doe'],
  ['id' => 2, 'name' => 'Jane Smith']
]);
?>